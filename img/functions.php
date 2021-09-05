<?php 

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "b");

$score = [];

function query($query) {
	global $conn;

	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function registrasi($data) {
	global $conn;

	$user_fullname = stripcslashes($data["user_fullname"]);
	$user_phone = (stripcslashes($data["user_phone"]));
	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	// cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
	if (mysqli_fetch_assoc($result)) {
		echo 
			"
			<script>
				alert('username sudah terdaftar');
			</script>
			";
		return false;
	}

	// cek konfirmasi passoword
	if ($password !== $password2) {
		echo 
			"
			<script>
				alert('konfirmasi password tidak sesuai');
			</script>
			";
		return false;
	}

	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);
	// $password = md5($password);

	// tambahkan userbaru ke database
	mysqli_query($conn, "INSERT INTO user VALUES('', '$user_fullname', '$user_phone', '$username', '$password')");

	return mysqli_affected_rows($conn);

}

function registrasiTes($data) {
	global $conn;

	//var_dump($data);

	$child_fullname = strtolower(stripcslashes($data["child_fullname"]));
	$child_sex = (stripcslashes($data["child_sex"]));
	$child_age = (int)$data["child_age"];

	if($data["register"] == "user") {
		// melalui user
		$user_id = (int)$data["user_id"];

	} else {
		// melalui admin
		$user_id = (int)$data["user_fullname"];
	}

	$cek = mysqli_query($conn, "SELECT child_fullname FROM child WHERE user_id = $user_id AND child_fullname = '$child_fullname'");
	$ketemu = mysqli_fetch_assoc($cek);
	//var_dump($ketemu); die;

	if($ketemu) {
		// anak sudah terdaftar
		return false;

	} else {
		mysqli_query($conn, "INSERT INTO child VALUES('', '$child_fullname', $child_age, '$child_sex', $user_id)");

		$_SESSION["child_id"] = query("SELECT child_id FROM child WHERE child_fullname = '$child_fullname'");
		return true;
	}
}

function ubahUser($data) {
	global $conn;

	$user_id = $data["user_id"];
	$user_fullname = stripcslashes($data["user_fullname"]);
	$user_phone = (stripcslashes($data["user_phone"]));
	$username = strtolower(stripcslashes($data["username"]));

	if (!isset($data["password"])) { 
	
		$result = mysqli_query($conn, "SELECT username FROM user WHERE user_id = $user_id");
		$row = mysqli_fetch_assoc($result);
		$usernameDB = $row["username"];

		// cek username jika diubah
		if ($username !== $usernameDB) {

			$cekUsername = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
			$cek = mysqli_fetch_assoc($cekUsername);

			if($cek) {
				echo 
					"
					<script>
						alert('username sudah ada');
					</script>
					";
				return false;

			} else {
				//username belum ada, lakukan update

				$query = "UPDATE user SET 
					user_fullname = '$user_fullname',
					user_phone = '$user_phone',
					username = '$username'
					WHERE user_id = $user_id
				";
				mysqli_query($conn, $query);
				return true;
			}

		} else {
			// jika username masih sama, tetap lakukan update
			
			$query = "UPDATE user SET 
					user_fullname = '$user_fullname',
					user_phone = '$user_phone',
					username = '$username'
					WHERE user_id = $user_id
				";
			mysqli_query($conn, $query);
			return true;
		}

	} else {
		$password = mysqli_real_escape_string($conn, $data["password"]);
		$password = password_hash($password, PASSWORD_DEFAULT);

		$result = mysqli_query($conn, "SELECT username FROM user WHERE user_id = $user_id");
		$row = mysqli_fetch_assoc($result);
		$usernameDB = $row["username"];

		// cek username jika diubah
		if ($username !== $usernameDB) {

			$cekUsername = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
			$cek = mysqli_fetch_assoc($cekUsername);

			if($cek) {
				echo 
					"
					<script>
						alert('username sudah ada');
					</script>
					";
				return false;

			} else {
				//username belum ada, lakukan update

				$query = "UPDATE user SET 
					user_fullname = '$user_fullname',
					user_phone = '$user_phone',
					username = '$username',
					password = '$password'
					WHERE user_id = $user_id
				";
				mysqli_query($conn, $query);
				return true;
			}

		} else {
			// jika username masih sama, tetap lakukan update
			
			$query = "UPDATE user SET 
					user_fullname = '$user_fullname',
					user_phone = '$user_phone',
					username = '$username',
					password = '$password'
					WHERE user_id = $user_id
				";
			mysqli_query($conn, $query);
			return true;
		}
	}
}

function ubahChild($data) {
	global $conn;

	$child_id = $data["child_id"];
	$child_fullname = strtolower(stripcslashes($data["child_fullname"]));
	$child_sex = $data["child_sex"];
	$child_age = (int)$data["child_age"];
	$user_fullname = $data["user_fullname"];
	
	$result = mysqli_query($conn, "SELECT child_fullname, user_id FROM child WHERE child_id = '$child_id'");
	$row = mysqli_fetch_assoc($result);
	$child_fullnameDB = $row["child_fullname"];

	$result1 = mysqli_query($conn, "SELECT user_id FROM user WHERE user_fullname = '$user_fullname'");
	$row1 = mysqli_fetch_assoc($result1);
	$user_id = $row1["user_id"];


	// cek jika nama anak jika diubah
	if ($child_fullname !== $child_fullnameDB) {
		$cek = mysqli_query($conn, "SELECT child_fullname FROM child WHERE user_id = '$user_id' AND child_fullname = '$child_fullname'");
		$ketemu = mysqli_fetch_assoc($cek);

		if($ketemu) {
			echo 
				"
				<script>
					alert('nama anak sudah ada');
				</script>
				";
			return false;

		} else {

			$query = "UPDATE child SET 
					child_fullname = '$child_fullname',
					child_age = '$child_age',
					child_sex = '$child_sex',
					user_id = '$user_id'
					WHERE child_id= $child_id
				";
			mysqli_query($conn, $query);
			return true;
		}

	} else {
		// jika username masih sama
		if ($data["who"] == "user") {
			$query = "UPDATE child SET 
					child_fullname = '$child_fullname',
					child_age = '$child_age',
					child_sex = '$child_sex',
					user_id = '$user_id'
					WHERE child_id= $child_id
					";
			mysqli_query($conn, $query);
			return true;


		} else {
			$cek = mysqli_query($conn, "SELECT child_fullname FROM child WHERE user_id = '$user_id' AND child_fullname = '$child_fullname'");
		$ketemu = mysqli_fetch_assoc($cek);

		if($ketemu) {
			echo 
				"
				<script>
					alert('nama anak sudah ada');
				</script>
				";
			return false;

		} else {

			$query = "UPDATE child SET 
					child_fullname = '$child_fullname',
					child_age = '$child_age',
					child_sex = '$child_sex',
					user_id = '$user_id'
					WHERE child_id= $child_id
					";
			mysqli_query($conn, $query);
			return true;
		}
		}
	}
}

function settings($data) {
	global $conn;

	$user_id = $data["user_id"];
	$user_fullname = stripcslashes($data["user_fullname"]);
	$user_phone = (stripcslashes($data["user_phone"]));
	$username = strtolower(stripcslashes($data["username"]));

	if (!isset($data["password"])) { 
	
		$result = mysqli_query($conn, "SELECT username FROM user WHERE user_id = $user_id");
		$row = mysqli_fetch_assoc($result);
		$usernameDB = $row["username"];

		// cek username jika diubah
		if ($username !== $usernameDB) {

			$cekUsername = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
			$cek = mysqli_fetch_assoc($cekUsername);

			if($cek) {
				echo 
					"
					<script>
						alert('username sudah ada');
					</script>
					";
				return false;

			} else {
				//username belum ada, lakukan update

				$query = "UPDATE user SET 
					user_fullname = '$user_fullname',
					user_phone = '$user_phone',
					username = '$username'
					WHERE user_id = $user_id
				";
				mysqli_query($conn, $query);
				return true;
			}

		} else {
			// jika username masih sama, tetap lakukan update
			
			$query = "UPDATE user SET 
					user_fullname = '$user_fullname',
					user_phone = '$user_phone',
					username = '$username'
					WHERE user_id = $user_id
				";
			mysqli_query($conn, $query);
			return true;
		}

	} else {
		$password = mysqli_real_escape_string($conn, $data["password"]);
		$password = password_hash($password, PASSWORD_DEFAULT);

		$result = mysqli_query($conn, "SELECT username FROM user WHERE user_id = $user_id");
		$row = mysqli_fetch_assoc($result);
		$usernameDB = $row["username"];

		// cek username jika diubah
		if ($username !== $usernameDB) {

			$cekUsername = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
			$cek = mysqli_fetch_assoc($cekUsername);

			if($cek) {
				echo 
					"
					<script>
						alert('username sudah ada');
					</script>
					";
				return false;

			} else {
				//username belum ada, lakukan update

				$query = "UPDATE user SET 
					user_fullname = '$user_fullname',
					user_phone = '$user_phone',
					username = '$username',
					password = '$password'
					WHERE user_id = $user_id
				";
				mysqli_query($conn, $query);
				return true;
			}

		} else {
			// jika username masih sama, tetap lakukan update
			
			$query = "UPDATE user SET 
					user_fullname = '$user_fullname',
					user_phone = '$user_phone',
					username = '$username',
					password = '$password'
					WHERE user_id = $user_id
				";
			mysqli_query($conn, $query);
			return true;
		}
	}
}

function hapusUser($user_id) {
	global $conn;

	$query = "DELETE FROM user WHERE user_id = $user_id";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapusChild($child_id) {
	global $conn;

	$query = "DELETE FROM child WHERE child_id = $child_id";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hitungScoreActivity($data) {
	//var_dump($data); die;

	global $conn;
	global $activity_answer_id;
	global $activity_score_id;
	$scoreActivity = 0;

	$answer1 = $data["answerAc1"];
	$answer2 = $data["answerAc2"];
	$answer3 = $data["answerAc3"];
	$answer4 = $data["answerAc4"];
	$answer5 = $data["answerAc5"];
	$answer6 = $data["answerAc6"];
	$answer7 = $data["answerAc7"];
	$answer8 = $data["answerAc8"];
	$answer9 = $data["answerAc9"];
	$child_id = $data["child_id"];
	$status = $data["status"];

	foreach ($data as $value) {

		if ($value == "Often") {
			$scoreActivity = $scoreActivity + 1;

		} else if ($value == "Sometimes") {
			$scoreActivity = $scoreActivity + 0.3;

		} else if ($value == "Rarely") {
			$scoreActivity = $scoreActivity + 0.15;

		} else if ($value == "Never") {
			$scoreActivity = $scoreActivity + 0;
		}
	}	

	//var_dump($status);

	if ($status == "new") {
		$query1 = "INSERT INTO activity_answer VALUES ('', '$answer1', '$answer2', '$answer3', '$answer4', '$answer5', '$answer6', '$answer7', '$answer8', '$answer9')";
		mysqli_query($conn, $query1);
		//$activity_answer_id = mysqli_insert_id($conn);

		$query2 = "INSERT INTO activity_score VALUES ('', $scoreActivity)";
		mysqli_query($conn, $query2);

	} elseif ($status == "update") {
		// $cekResult = mysqli_query($conn, "SELECT child_id FROM result WHERE child_id = '$child_id'");
	 // 	$cek1 = mysqli_fetch_assoc($cekResult);
	 // 	$cekAnswer = mysqli_query($conn, "SELECT child_id FROM answer WHERE child_id = '$child_id'");
	 // 	$cek2 = mysqli_fetch_assoc($cekAnswer);
	 // 	$cekScore = mysqli_query($conn, "SELECT child_id FROM score WHERE child_id = '$child_id'");
	 // 	$cek3 = mysqli_fetch_assoc($cekScore);

	 	// var_dump($cek1);
	 	// var_dump($cek2);
	 	// var_dump($cek3);
	 	// die;

	 	// if ($cek1 && $cek2 && $cek3) {
	 		// tes lagi
	 		// echo    "<script>
    //                 alert('tes lagi');
    //             </script>
    //             ";

        $result1 = mysqli_query($conn, "SELECT activity_answer_id FROM answer WHERE child_id = '$child_id'");
	 	$activity_answer = mysqli_fetch_assoc($result1);
	 	$activity_answer_id = $activity_answer["activity_answer_id"];

	 		// var_dump($activity_answer_id);
	 		// echo "$answer1 $answer2 $answer3 $answer4 $answer5 $answer6 $answer7 $answer8 $answer9";
	 		//die;

           $query1 = "UPDATE activity_answer SET 
	 				activity_A1= '$answer1',
	 				activity_A2= '$answer2',
	 				activity_A3= '$answer3',
	 				activity_A4= '$answer4',
	 				activity_A5= '$answer5',
	 				activity_A6= '$answer6',
	 				activity_A7= '$answer7',
	 				activity_A8= '$answer8',
	 				activity_A9= '$answer9'
	 				WHERE activity_answer_id = '$activity_answer_id'
	 			";
	 	mysqli_query($conn, $query1);

	 	$result2 = mysqli_query($conn, "SELECT activity_score_id FROM score WHERE child_id = '$child_id'");
	 	$activity_score = mysqli_fetch_assoc($result2);
	 	$activity_score_id = $activity_score["activity_score_id"];


	 	$query2 = "UPDATE activity_score SET 
	 				activity_score_sum = $scoreActivity
	 				WHERE activity_score_id = $activity_score_id
	 			";
	 	mysqli_query($conn, $query2);

	} else if ($status == "update_new") {
	 	$query1 = "INSERT INTO activity_answer VALUES ('', '$answer1', '$answer2', '$answer3', '$answer4', '$answer5', '$answer6', '$answer7', '$answer8', '$answer9')";
		mysqli_query($conn, $query1);
		//$activity_answer_id = mysqli_insert_id($conn);

		$query2 = "INSERT INTO activity_score VALUES ('', $scoreActivity)";
		mysqli_query($conn, $query2);
	 }
		//$activity_score_id = mysqli_insert_id($conn);

		// var_dump($activity_score_id);
		// var_dump($activity_answer_id);
		// die;
		

		// $x1 = query("SELECT * FROM activity_answer");
// 	$y1 = query("SELECT * FROM attention_answer");
// 	$x2 = query("SELECT * FROM activity_score");
// 	$y2 = query("SELECT * FROM attention_score");

// 	$activityAnswer = end($x1);
// 	$activityAnswer_id = $activityAnswer["activity_answer_id"];


	// } else if ($status == "update") {
	// 	$cekResult = mysqli_query($conn, "SELECT child_id FROM result WHERE child_id = '$child_id'");
	// 	$cek = mysqli_fetch_assoc($cekResult);

	// 	//var_dump($cek); die;

	// 	if($cek) {
	// 		echo 
	// 		"
	// 		<script>
	// 			alert('tes ulang');
	// 		</script>
	// 		";
	// 		// tes ulang
	// 		//var_dump($child_id); die;
	// 		$answer = query("SELECT answer_id FROM answer WHERE child_id = '$child_id'");
	// 		var_dump($answer); die;
	// 		//$answer_id = (int)$answer[0]["answer_id"];

	// 		$activity_answer = query("SELECT activity_answer_id FROM answer WHERE answer_id = '$answer_id'");
	// 		$activity_answer_id = (int)$activity_answer[0]["activity_answer_id"];

	// 		$query1 = "UPDATE activity_answer SET 
	// 					activity_A1= '$answer1',
	// 					activity_A2= '$answer2',
	// 					activity_A3= '$answer3',
	// 					activity_A4= '$answer4',
	// 					activity_A5= '$answer5',
	// 					activity_A6= '$answer6',
	// 					activity_A7= '$answer7',
	// 					activity_A8= '$answer8',
	// 					activity_A9= '$answer9'
	// 					WHERE activity_answer_id = $activity_answer_id
	// 				";
	// 		mysqli_query($conn, $query1);

	// 		// score
	// 		$score = query("SELECT score_id FROM score WHERE child_id = '$child_id'");
	// 		$score_id = (int)$score[0]["score_id"];

	// 		$activity_score = query("SELECT activity_score_id FROM score WHERE score_id = '$score_id'");
	// 		$activity_score_id = (int)$activity_score[0]["activity_score_id"];

	// 		$query2 = "UPDATE activity_score SET 
	// 					activity_score_sum = $scoreActivity
	// 					WHERE activity_score_id = $activity_score_id
	// 				";
	// 		mysqli_query($conn, $query2);

	// 	} else {

	// 		// echo 
	// 		// "
	// 		// <script>
	// 		// 	alert('sudah terdaftar tapi belum tes');
	// 		// </script>
	// 		// ";
	// 		// sudah terdaftar tapi belum tes
	// 		//var_dump($scoreActivity); die;
			
	// 		$query1 = "INSERT INTO activity_answer VALUES ('', '$answer1', '$answer2', '$answer3', '$answer4', '$answer5', '$answer6', '$answer7', '$answer8', '$answer9')";
	// 		mysqli_query($conn, $query1);
	// 		echo mysqli_affected_rows($conn);
	// 		die;
	// 		$query2 = "INSERT INTO activity_score VALUES ('', $scoreActivity)";
	// 		mysqli_query($conn, $query2);
	// 	}
	// }
	//echo mysqli_error($conn);
	return mysqli_affected_rows($conn);
}

function hitungScoreAttention($data) {

	
	global $activity_answer_id;
	global $activity_score_id;

	global $conn;
	$scoreAttention = 0;
	$answer1 = $data["answerAt1"];
	$answer2 = $data["answerAt2"];
	$answer3 = $data["answerAt3"];
	$answer4 = $data["answerAt4"];
	$answer5 = $data["answerAt5"];
	$answer6 = $data["answerAt6"];
	$answer7 = $data["answerAt7"];
	$answer8 = $data["answerAt8"];
	$answer9 = $data["answerAt9"];
	$child_id = $data["child_id"];
	$status = $data["status"];

	foreach ($data as $value) {
		if ($value == "Often") {
			$scoreAttention = $scoreAttention + 1;

		} else if ($value == "Sometimes") {
			$scoreAttention = $scoreAttention + 0.3;

		} else if ($value == "Rarely") {
			$scoreAttention = $scoreAttention + 0.15;

		} else if ($value == "Never") {
			$scoreAttention = $scoreAttention + 0;
		}
	}

	 if ($status == "new") {
		$query1 = "INSERT INTO attention_answer VALUES ('', '$answer1', '$answer2', '$answer3', '$answer4', '$answer5', '$answer6', '$answer7', '$answer8', '$answer9')";
		mysqli_query($conn, $query1);

		$query2 = "INSERT INTO attention_score VALUES ('', $scoreAttention)";
		mysqli_query($conn, $query2);

		insertToParent($child_id);

	} elseif ($status == "update") {
		// $cekResult = mysqli_query($conn, "SELECT child_id FROM result WHERE child_id = '$child_id'");
	 // 	$cek1 = mysqli_fetch_assoc($cekResult);
	 // 	$cekAnswer = mysqli_query($conn, "SELECT child_id FROM answer WHERE child_id = '$child_id'");
	 // 	$cek2 = mysqli_fetch_assoc($cekAnswer);
	 // 	$cekScore = mysqli_query($conn, "SELECT child_id FROM score WHERE child_id = '$child_id'");
	 // 	$cek3 = mysqli_fetch_assoc($cekScore);

	 	// var_dump($cek1);
	 	// var_dump($cek2);
	 	// var_dump($cek3);
	 	// die;

	 	// if ($cek1 && $cek2 && $cek3) {
	 		// tes lagi
	 		// echo    "<script>
    //                 alert('tes lagi');
    //             </script>
    //             ";

        $result1 = mysqli_query($conn, "SELECT attention_answer_id FROM answer WHERE child_id = '$child_id'");
	 	$attention_answer = mysqli_fetch_assoc($result1);
	 	$attention_answer_id = $attention_answer["attention_answer_id"];

	 		// var_dump($attention_answer_id);
	 		// echo "$answer1 $answer2 $answer3 $answer4 $answer5 $answer6 $answer7 $answer8 $answer9";
	 		// die;

        $query1 = "UPDATE attention_answer SET 
	 				attention_A1= '$answer1',
	 				attention_A2= '$answer2',
	 				attention_A3= '$answer3',
	 				attention_A4= '$answer4',
	 				attention_A5= '$answer5',
	 				attention_A6= '$answer6',
	 				attention_A7= '$answer7',
	 				attention_A8= '$answer8',
	 				attention_A9= '$answer9'
	 				WHERE attention_answer_id = '$attention_answer_id'
	 			";
	 	mysqli_query($conn, $query1);

	 	$result2 = mysqli_query($conn, "SELECT attention_score_id FROM score WHERE child_id = '$child_id'");
	 	$attention_score = mysqli_fetch_assoc($result2);
	 	$attention_score_id = $attention_score["attention_score_id"];

	 		// var_dump($attention_score_id);
	 		// var_dump($scoreAttention);
	 		// die;

	 	$query2 = "UPDATE attention_score SET 
	 				attention_score_sum = $scoreAttention
	 				WHERE attention_score_id = $attention_score_id
	 			";
	 	mysqli_query($conn, $query2);

	 } else if ($status == "update_new") {
	 	$query1 = "INSERT INTO attention_answer VALUES ('', '$answer1', '$answer2', '$answer3', '$answer4', '$answer5', '$answer6', '$answer7', '$answer8', '$answer9')";
		mysqli_query($conn, $query1);

		$query2 = "INSERT INTO attention_score VALUES ('', $scoreAttention)";
		mysqli_query($conn, $query2);

		insertToParent($child_id);
	 }
	//else if ($status == "update") {
	// 	$cekResult = mysqli_query($conn, "SELECT child_id FROM result WHERE child_id = '$child_id'");
	// 	$cek = mysqli_fetch_assoc($cekResult);

	// 	if ($cek) {

	// 		echo 
	// 		"
	// 		<script>
	// 			alert('tes ulang');
	// 		</script>
	// 		";
	// 		// tes ulang
	// 		$answer = query("SELECT answer_id FROM answer WHERE child_id = '$child_id'");
	// 		$answer_id = (int)$answer[0]["answer_id"];

	// 		$attention_answer = query("SELECT attention_answer_id FROM answer WHERE answer_id = '$answer_id'");
	// 		$attention_answer_id = (int)$attention_answer[0]["attention_answer_id"];

	// 		$query1 = "UPDATE attention_answer SET 
	// 					attention_A1= '$answer1',
	// 					attention_A2= '$answer2',
	// 					attention_A3= '$answer3',
	// 					attention_A4= '$answer4',
	// 					attention_A5= '$answer5',
	// 					attention_A6= '$answer6',
	// 					attention_A7= '$answer7',
	// 					attention_A8= '$answer8',
	// 					attention_A9= '$answer9'
	// 					WHERE attention_answer_id = $attention_answer_id
	// 				";
	// 		mysqli_query($conn, $query1);

	// 		// score
	// 		$score = query("SELECT score_id FROM score WHERE child_id = '$child_id'");
	// 		$score_id = (int)$score[0]["score_id"];

	// 		$attention_score = query("SELECT attention_score_id FROM score WHERE score_id = '$score_id'");
	// 		$attention_score_id = (int)$attention_score[0]["attention_score_id"];

	// 		$query2 = "UPDATE attention_score SET 
	// 					attention_score_sum = $scoreAttention
	// 					WHERE attention_score_id = $attention_score_id
	// 				";
	// 		mysqli_query($conn, $query2);

	// 	} else {

	// 		echo 
	// 		"
	// 		<script>
	// 			alert('sudah terdaftar tapi belum tes');
	// 		</script>
	// 		";
	// 		// sudah terdaftar tapi belum tes
			
	// 		$query1 = "INSERT INTO attention_answer VALUES ('', '$answer1', '$answer2', '$answer3', '$answer4', '$answer5', '$answer6', '$answer7', '$answer8', '$answer9')";
	// 		mysqli_query($conn, $query1);

	// 		$query2 = "INSERT INTO attention_score VALUES ('', $scoreAttention)";
	// 		mysqli_query($conn, $query2);

	// 	}
	// }

	return mysqli_affected_rows($conn);
}

 function insertToParent($child_id) {

 	global $conn;
// 	$child_id = $data["child_id"];

	$x1 = query("SELECT * FROM activity_answer");
	$y1 = query("SELECT * FROM attention_answer");
	$x2 = query("SELECT * FROM activity_score");
	$y2 = query("SELECT * FROM attention_score");

	$activity_answer = end($x1);
	$activity_answer_id = $activity_answer["activity_answer_id"];

	$attention_answer = end($y1);
	$attention_answer_id = $attention_answer["attention_answer_id"];
		
	$activity_score = end($x2);
	$activity_score_id = $activity_score["activity_score_id"];

	$attention_score = end($y2);
	$attention_score_id = $attention_score["attention_score_id"];

	$query1 = "INSERT INTO answer VALUES ('', $activity_answer_id, $attention_answer_id, '$child_id')";
	mysqli_query($conn, $query1);

	$query2 = "INSERT INTO score VALUES ('', $activity_score_id, $attention_score_id, '$child_id')";
	mysqli_query($conn, $query2);

	return mysqli_affected_rows($conn);

}

//function insertToParent($child_id) {

	// var_dump($data); die;

	//global $conn;
	// $child_id = $data["child_id"];

	// $x1 = query("SELECT activity_score_id FROM score WHERE child_id = '$child_id'");
	// $activity_score_id = $x1[0]["activity_score_id"];

	// $y1 = query("SELECT attention_score_id FROM score WHERE child_id = '$child_id'");
	// $attention_score_id = $y1[0]["attention_score_id"];

	// $x2 = query("SELECT activity_answer_id FROM answer WHERE child_id = '$child_id'");
	// $activity_answer_id = $x2[0]["activity_answer_id"];

	// $y2 = query("SELECT attention_answer_id FROM answer WHERE child_id = '$child_id'");
	// $attention_answer_id = $y2[0]["attention_answer_id"];

	// echo "$activity_score_id $attention_score_id<br>";
	// echo "$activity_answer_id $attention_answer_id";
	// die;

	// $x2 = query("SELECT activity_score_sum FROM activity_score WHERE activity_score_id = '$activity_score_id'");
	// $activity_score_sum = $x2[0]["activity_score_sum"];

	// $y2 = query("SELECT attention_score_sum FROM attention_score WHERE attention_score_id = '$attention_score_id'");
	// $attention_score_sum = $y2[0]["attention_score_sum"];



	 //var_dump($activity_score_sum);
	// var_dump($attention_score_sum);
	// die;
	// $x= query("SELECT * FROM activity_score");
	// $y = query("SELECT * FROM attention_score");

	// $activity = end($x);
	// $activity_id = $activity["activity_score_id"];
	// $activity_score = $activity["activity_score_sum"];
	
	// $attention = end($y);
	// $attention_id = $attention["attention_score_id"];
	// $attention_score = $attention["attention_score_sum"];

	//$id = [$activity_id, $attention_id];
	//$score = [$activity_score_sum, $attention_score_sum];

	// var_dump($id);
	// var_dump($score); die;
	
// 	$query1 = "INSERT INTO score VALUES ('', '$activity_score_id', '$attention_score_id', '$child_id')";
// 	mysqli_query($conn, $query1);

// 	$query2 = "INSERT INTO answer VALUES ('', $activity_answer_id, $attention_answer_id, '$child_id')";
// 	mysqli_query($conn, $query2);

// 	return mysqli_affected_rows($conn);
// }

function fuzzy() {
	//input();
	// hitungActivity();
	//hitungAttention();
	inferensi();
	defuzzifikasi();
}

function hitungActivity($child_id){

	global $nilaiActivityNone, $linguistikActivityNone;
	global $nilaiActivitySuspected, $linguistikActivitySuspected; 
	global $nilaiActivityConfirmed, $linguistikActivityConfirmed;

	global $conn;

	$id = query("SELECT activity_score_id FROM score WHERE child_id = '$child_id'");
	$activity_score_id = $id[0]["activity_score_id"];

	$score = query("SELECT activity_score_sum FROM activity_score WHERE activity_score_id = '$activity_score_id'");
	$x = (float)$score[0]["activity_score_sum"];

	//$activity_score= query("SELECT * FROM activity_score");

	// $activity = end($activity_score);
	// $x = $activity["activity_score_sum"];

	// ACTIVITY NONE
	if ($x > 3 && $x < 4) {
		$nilaiActivityNone = (4 - $x);
		$linguistikActivityNone = "None";

	} else if ($x <= 3) {
		$nilaiActivityNone = 1;
		$linguistikActivityNone = "None";

	} else{
		$nilaiActivityNone = 0;
		$linguistikActivityNone = "None";
	}

	// ACTIBITY SUSPECTED
	if ($x > 3 && $x < 4.5) {
		$nilaiActivitySuspected = ($x - 3) / 1.5;
		$linguistikActivitySuspected = "Suspected";

	} else if ($x > 4.5 && $x < 6) {
		$nilaiActivitySuspected = (6 - $x) / 1.5;
		$linguistikActivitySuspected = "Suspected";

	} else if ($x == 4.5) {
		$nilaiActivitySuspected = 1;
		$linguistikActivitySuspected = "Suspected";

	} else{
		$nilaiActivitySuspected = 0;
		$linguistikActivitySuspected = "Suspected";
	}

	// ACTIVITY CONFIRMED
	if ($x > 5 && $x < 6){
		$nilaiActivityConfirmed = ($x - 5);
		$linguistikActivityConfirmed = "Confirmed";

	} else if ($x >= 6){
		$nilaiActivityConfirmed = 1;
		$linguistikActivityConfirmed = "Confirmed";

	} else{
		$nilaiActivityConfirmed = 0;
		$linguistikActivityConfirmed = "Confirmed";
	}
	return $x;
}

function hitungAttention($child_id){
	global $nilaiAttentionNone, $linguistikAttentionNone;
	global $nilaiAttentionSuspected, $linguistikAttentionSuspected; 
	global $nilaiAttentionConfirmed, $linguistikAttentionConfirmed;

	global $conn;

	$id = query("SELECT attention_score_id FROM score WHERE child_id = '$child_id'");
	$attention_score_id = $id[0]["attention_score_id"];

	$score = query("SELECT attention_score_sum FROM attention_score WHERE attention_score_id = '$attention_score_id'");
	$x = (float)$score[0]["attention_score_sum"];

	// $attention_score= query("SELECT * FROM attention_score");

	// $attention = end($attention_score);
	// $x = $attention["attention_score_sum"];

	// ACTIVITY NONE
	if ($x > 3 && $x < 4) {
		$nilaiAttentionNone = (4 - $x);
		$linguistikAttentionNone = "None";

	} else if ($x <= 3) {
		$nilaiAttentionNone = 1;
		$linguistikAttentionNone = "None";

	} else {
		$nilaiAttentionNone = 0;
		$linguistikAttentionNone = "None";
	}

	// ACTIBITY SUSPECTED
	if ($x > 3 && $x < 4.5) {
		$nilaiAttentionSuspected = ($x - 3) / 1.5;
		$linguistikAttentionSuspected = "Suspected";

	} else if ($x > 4.5 && $x < 6) {
		$nilaiAttentionSuspected = (6 - $x) / 1.5;
		$linguistikAttentionSuspected = "Suspected";

	} else if ($x == 4.5) {
		$nilaiAttentionSuspected = 1;
		$linguistikAttentionSuspected = "Suspected";

	} else{
		$nilaiAttentionSuspected = 0;
		$linguistikAttentionSuspected = "Suspected";
	}

	// ACTIVITY CONFIRMED
	if ($x > 5 && $x < 6){
		$nilaiAttentionConfirmed = ($x - 5);
		$linguistikAttentionConfirmed = "Confirmed";

	} else if ($x >= 6){
		$nilaiAttentionConfirmed = 1;
		$linguistikAttentionConfirmed = "Confirmed";

	} else{
		$nilaiAttentionConfirmed = 0;
		$linguistikAttentionConfirmed = "Confirmed";

	}
	return $x;
}

function inferensi(){
	global $nilaiActivityNone, $nilaiActivitySuspected, $nilaiActivityConfirmed;
	global $linguistikActivityNone, $linguistikActivitySuspected, $linguistikAttentionConfirmed;
	global $nilaiAttentionNone, $nilaiAttentionSuspected, $nilaiAttentionConfirmed;
	global $linguistikAttentionNone, $linguistikAttentionSuspected, $linguistikAttentionConfirmed;
	
	global $dInattentive, $dHyperImpuls, $dCombined;
	global $z;

	global $rules;
	$a = 0;
	$maxNI = 0; $maxPI = 0; $maxNHI = 0; $maxPHI = 0; $maxNC = 0; $maxPC = 0;

	$nilaiActivity = [$nilaiActivityNone, $nilaiActivitySuspected, $nilaiActivityConfirmed];
	$linguistikAcitity = [$linguistikActivityNone, $linguistikActivitySuspected, $linguistikAttentionConfirmed];
	$nilaiAttention = [$nilaiAttentionNone, $nilaiAttentionSuspected, $nilaiAttentionConfirmed];
	$linguistikAttention = [$linguistikAttentionNone, $linguistikAttentionSuspected, $linguistikAttentionConfirmed];

	for ($i = 0; $i < 3; $i++) {
		for ($j = 0; $j < 3; $j++) {
			if ($nilaiActivity[$i] > 0 && $nilaiAttention[$j] > 0) {

				// Nilai Min
				$nilaiMin[] = min($nilaiActivity[$i], $nilaiAttention[$j]);
				$min = min($nilaiActivity[$i], $nilaiAttention[$j]);

				if ($linguistikAcitity[$i] == "None") {
					if ($linguistikAttention[$j] == "None") {
						$linguistikInattentive[] = "Negative";
						$linguistikHyperImpuls[] = "Negative";
						$linguistikCombined[] = "Negative";

						$inattentive[] = ["negative", $min];
						$hyperImpuls[] = ["negative", $min];
						$combined[] = ["negative", $min];

					} elseif ($linguistikAttention[$j] == "Suspected") {
						$linguistikInattentive[] = "Negative";
						$linguistikHyperImpuls[] = "Negative";
						$linguistikCombined[] = "Negative";

						$inattentive[] = ["negative", $min];
						$hyperImpuls[] = ["negative", $min];
						$combined[] = ["negative", $min];

					} elseif ($linguistikAttention[$j] == "Confirmed") {
						$linguistikInattentive[] = "Positive";
						$linguistikHyperImpuls[] = "Negative";
						$linguistikCombined[] = "Negative";

						$inattentive[] = ["positive", $min];
						$hyperImpuls[] = ["negative", $min];
						$combined[] = ["negative", $min];

					}

				}
				elseif ($linguistikAcitity[$i] == "Suspected") {
					if ($linguistikAttention[$j] == "None") {
						$linguistikInattentive[] = "Negative";
						$linguistikHyperImpuls[] = "Negative";
						$linguistikCombined[] = "Negative";

						$inattentive[] = ["negative", $min];
						$hyperImpuls[] = ["negative", $min];
						$combined[] = ["negative", $min];

					} elseif ($linguistikAttention[$j] == "Suspected") {
						$linguistikInattentive[] = "Negative";
						$linguistikHyperImpuls[] = "Negative";
						$linguistikCombined[] = "Negative";

						$inattentive[] = ["negative", $min];
						$hyperImpuls[] = ["negative", $min];
						$combined[] = ["negative", $min];

					} elseif ($linguistikAttention[$j] == "Confirmed") {
						$linguistikInattentive[] = "Positive";
						$linguistikHyperImpuls[] = "Negative";
						$linguistikCombined[] = "Negative";

						$inattentive[] = ["positive", $min];
						$hyperImpuls[] = ["negative", $min];
						$combined[] = ["negative", $min];
						
					}

				} elseif ($linguistikAcitity[$i] == "Confirmed") {
					if ($linguistikAttention[$j] == "None") {
						$linguistikInattentive[] = "Negative";
						$linguistikHyperImpuls[] = "Positive";
						$linguistikCombined[] = "Negative";

						$inattentive[] = ["negative", $min];
						$hyperImpuls[] = ["positive", $min];
						$combined[] = ["negative", $min];

					} elseif ($linguistikAttention[$j] == "Suspected") {
						$linguistikInattentive[] = "Negative";
						$linguistikHyperImpuls[] = "Positive";
						$linguistikCombined[] = "Negative";

						$inattentive[] = ["negative", $min];
						$hyperImpuls[] = ["positive", $min];
						$combined[] = ["negative", $min];

					} elseif ($linguistikAttention[$j] == "Confirmed") {
						$linguistikInattentive[] = "Positive";
						$linguistikHyperImpuls[] = "Positive";
						$linguistikCombined[] = "Positive";

						$inattentive[] = ["positive", $min];
						$hyperImpuls[] = ["positive", $min];
						$combined[] = ["positive", $min];
						
					}
				}

				if (strcmp($inattentive[$a][0],"negative") == 0) {
		           	if ($inattentive[$a][1] > $maxNI) {
		               	$maxNI = $inattentive[$a][1];	
		            }
				} 
				if (strcmp($inattentive[$a][0],"positive") == 0) {
		           	if ($inattentive[$a][1] > $maxPI) {
		               	$maxPI = $inattentive[$a][1];	
		            }
				}
				if (strcmp($hyperImpuls[$a][0],"negative") == 0) {
		           	if ($hyperImpuls[$a][1] > $maxNHI) {
		               	$maxNHI = $hyperImpuls[$a][1];	
		            }
		        }
				if (strcmp($hyperImpuls[$a][0],"positive") == 0) {
		           	if ($hyperImpuls[$a][1] > $maxPHI) {
		               	$maxPHI = $hyperImpuls[$a][1];	
		            }
				}
				if (strcmp($combined[$a][0],"negative") == 0) {
		           	if ($combined[$a][1] > $maxNC) {
		               	$maxNC = $combined[$a][1];
		            }
		        }
		          
				if (strcmp($combined[$a][0],"positive") == 0) {
		           	if ($combined[$a][1] > $maxPC) {
		               	$maxPC = $combined[$a][1];	
		            }
				}

				// Rules
				$rules[] =
					[	"linguistikActivity" => $linguistikAcitity[$i],
						"nilaiActivity" => $nilaiActivity[$i],
						"linguistikAttention" => $linguistikAttention[$j],
						"nilaiAttention" => $nilaiAttention[$j],
						"linguistikInattentive" => $linguistikInattentive[$a],
						"linguistikHyperImpuls" => $linguistikHyperImpuls[$a],
						"linguistikCombined" => $linguistikCombined[$a],
						"nilaiMin" => $nilaiMin[$a]
					];
				$a++;
			}
		}
	}

	$dInattentive = ["negative" => $maxNI, "positive" => $maxPI];
	$dHyperImpuls = ["negative" => $maxNHI, "positive" => $maxPHI];
	$dCombined = ["negative" => $maxNC, "positive" => $maxPC];

	//echo $dInattentive["negative"];
}

function defuzzifikasi() {
	global $dInattentive, $dHyperImpuls, $dCombined;
	global $z;

	// INATTENTIVE
	if ($dInattentive["negative"] > 0 && $dInattentive["positive"] == 0) {
		$x = $dInattentive["negative"];
		$b = 0;

		// cari batas atas dan bawah integral
		for ($i = 0; $i < 2; $i++) {
			if( $i == 0){
				$a = 0;
				if ($x <= 0.5) {
					$b += 5 + $x;
				} else if ($x > 0.5 && $x <= 1) {
					$b += 6 - $x;
				}

				// rumus integral M1 dan A1
				$M1 = ($x * pow($b, 2) / 2) - ($x * pow($a, 2) / 2);
				$A1 = ($x * $b) - ($x * $a);

				// echo "$a $b<br>";
				// echo "M1 = $M1 <br>";
				// echo "A1 = $A1 <br><br>";
			} else if ($i == 1) {
				$a = $b;
				$b = 6;

				// rumus integral M2 dan A2
				$M2 = (3 * pow($b, 2) - (pow($b, 3) / 3)) - (3 * pow($a, 2) - (pow($a, 3) / 3));
				$A2 = ((6 * $b) - (pow($b, 2) / 2))- ((6 * $a) - (pow($a, 2) / 2));

				// echo "$a $b<br>";
				// echo "M2 = $M2 <br>";
				// echo "A2 = $A2 <br>";
			}
		}

		$zi = ($M1 + $M2) / ($A1 + $A2);
		//echo "<br>Inattentive (Negative) = $z <br>";

	} 

	if ($dInattentive["negative"] == 0 && $dInattentive["positive"] > 0)  {
		$x = $dInattentive["positive"];
		$b = 0;

		// cari batas atas dan bawah integral
		for ($i = 0; $i < 2; $i++) {
			if( $i == 0){
				$a = 5;
				if ($x <= 0.5) {
					$b += 6 - $x;
				} else if ($x > 0.5 && $x <= 1) {
					$b += 5 + $x;
				}

				// rumus integral M1 dan A1
				$M1 = ((pow($b, 3) / 3) - (5 * pow($b, 2) / 2)) - ((pow($a, 3) / 3) - (5 * pow($a, 2) / 2));
				$A1 = ((pow($b, 2) / 2) - (5 * $b)) - ((pow($a, 2) / 2) - (5 * $a));
				

				// echo "<br>$a $b<br>";
				// echo "M1 = $M1 <br>";
				// echo "A1 = $A1 <br><br>";
			} else if ($i == 1) {
				$a = $b;
				$b = 9;

				// rumus integral M2 dan A2
				$M2 = ($x * pow($b, 2) / 2) - ($x * pow($a, 2) / 2);
				$A2 = ($x * $b) - ($x * $a);

				// echo "$a $b<br>";
				// echo "M2 = $M2 <br>";
				// echo "A2 = $A2 <br>";
			}
		}
		$zi = ($M1 + $M2) / ($A1 + $A2);
		//echo "<br>Inattentive (Positive) = $z <br>";
	}

	if ($dInattentive["negative"] > 0 && $dInattentive["positive"] > 0) {
		$x1 = $dInattentive["negative"];
		$x2 = $dInattentive["positive"];

		if ($x1 < 0.5) {
			if ($x1 < $x2) {
				$a = 0;
				$b = 5 + $x1;
				$c = 5 + $x2;
				$d = 9;

				$M1 = ($x1 * pow($b, 2) / 2) - ($x1 * pow($a, 2) / 2);
				$M2 = ((pow($c, 3) / 3) - (5* pow($c, 2) / 2)) - ((pow($b, 3) / 3) - (5* pow($b, 2) / 2));
				$M3 = ($x2 * pow($d, 2) / 2) - ($x2 * pow($c, 2) / 2);

				$A1 = ($x1 * $b) - ($x1 * $a);
				$A2 = ((pow($c, 2) / 2) - (5 * $c)) - ((pow($b, 2) / 2) - (5 * $b));
				$A3 = ($x2 * $d) - ($x2 * $c);

				$zi = ($M1 + $M2 + $M3) / ($A1 + $A2 + $A3);
		
				// echo "$a $b $c $d<br>";
				// echo "M1 = $M1, M2 = $M2, M3 = $M3<br>";
				// echo "A1 = $A1, A2 = $A2, A3 = $A3<br>";
				//echo "<br>Inattentive (Negative, Positive) = $z <br>";

			} else {
				$a = 0;
				$b = 6 - $x1;
				$c = 6 - $x2;
				$d = 9;
				
				$M1 = ($x1 * pow($b, 2) / 2) - ($x1 * pow($a, 2) / 2);
				$M2 = ((3 * pow($c, 2)) - (pow($c, 3) / 3)) - ((3 * pow($b, 2)) - (pow($b, 3) / 3));
				$M3 = ($x2 * pow($d, 2) / 2) - ($x2 * pow($c, 2) / 2);

				$A1 = ($x1 * $b) - ($x1 * $a);
				$A2 = ((6 * $c) - (pow($c, 2) / 2)) - ((6 * $b) - (pow($b, 2) / 2));
				$A3 = ($x2 * $d) - ($x2 * $c);

				$zi = ($M1 + $M2 + $M3) / ($A1 + $A2 + $A3);
		
				// echo "$a $b $c $d<br>";
				// echo "M1 = $M1, M2 = $M2, M3 = $M3<br>";
				// echo "A1 = $A1, A2 = $A2, A3 = $A3<br>";
				//echo "<br>Inattentive (Negative, Positive) = $z <br>";
			}

		} else if ($x1 > 0.5) {
			if ($x2 < 0.5) {
				$a = 0;
				$b = 6 - $x1;
				$c = 6 - $x2;			
				$d = 9;
				
				$M1 = ($x1 * pow($b, 2) / 2) - ($x1 * pow($a, 2) / 2);
				$M2 = ((3 * pow($c, 2)) - (pow($c, 3) / 3)) - ((3 * pow($b, 2)) - (pow($b, 3) / 3));
				$M3 = ($x2 * pow($d, 2) / 2) - ($x2 * pow($c, 2) / 2);

				$A1 = ($x1 * $b) - ($x1 * $a);
				$A2 = ((6 * $c) - (pow($c, 2) / 2)) - ((6 * $b) - (pow($b, 2) / 2));
				$A3 = ($x2 * $d) - ($x2 * $c);
				
				$zi = ($M1 + $M2 + $M3) / ($A1 + $A2 + $A3);
		
				// echo "$a $b $c $d<br>";
				// echo "M1 = $M1, M2 = $M2, M3 = $M3<br>";
				// echo "A1 = $A1, A2 = $A2, A3 = $A3<br>";
				// echo "<br>Z = $z <br>";
				// echo "<br>Inattentive (Negative, Positive) = $z <br>";

			} else if ($x2 == 0.5) {
				$a = 0;
				$b = 6 - $x1;
				$c = 5 + $x2;			
				$d = 9;
				
				$M1 = ($x1 * pow($b, 2) / 2) - ($x1 * pow($a, 2) / 2);
				$M2 = ((3 * pow($c, 2)) - (pow($c, 3) / 3)) - ((3 * pow($b, 2)) - (pow($b, 3) / 3));
				$M3 = ($x2 * pow($d, 2) / 2) - ($x2 * pow($c, 2) / 2);

				$A1 = ($x1 * $b) - ($x1 * $a);
				$A2 = ((6 * $c) - (pow($c, 2) / 2)) - ((6 * $b) - (pow($b, 2) / 2));
				$A3 = ($x2 * $d) - ($x2 * $c);
				
				$zi = ($M1 + $M2 + $M3) / ($A1 + $A2 + $A3);
		
				// echo "$a $b $c $d<br>";
				// echo "M1 = $M1, M2 = $M2, M3 = $M3<br>";
				// echo "A1 = $A1, A2 = $A2, A3 = $A3<br>";
				//echo "<br>Inattentive (Negative, Positive) = $z <br>";

			} else if ($x2 > 0.5) {
				if ($x1 < $x2) {
					$a = 0;
					$b = 5 + $x1;
					$c = 5 + $x2;			
					$d = 9;
					
					$M1 = ($x1 * pow($b, 2) / 2) - ($x1 * pow($a, 2) / 2);
					$M2 = ((pow($c, 3) / 3) - (5* pow($c, 2) / 2)) - ((pow($b, 3) / 3) - (5* pow($b, 2) / 2));
					$M3 = ($x2 * pow($d, 2) / 2) - ($x2 * pow($c, 2) / 2);

					$A1 = ($x1 * $b) - ($x1 * $a);
					$A2 = ((pow($c, 2) / 2) - (5 * $c)) - ((pow($b, 2) / 2) - (5 * $b));
					$A3 = ($x2 * $d) - ($x2 * $c);
					
					$zi = ($M1 + $M2 + $M3) / ($A1 + $A2 + $A3);
		
					// echo "$a $b $c $d<br>";
					// echo "M1 = $M1, M2 = $M2, M3 = $M3<br>";
					// echo "A1 = $A1, A2 = $A2, A3 = $A3<br>";
					//echo "<br>Inattentive (Negative, Positive) = $z <br>";

				} else {
					$a = 0;
					$b = 6 - $x1;
					$c = 6 - $x2;			
					$d = 9;
					
					$M1 = ($x1 * pow($b, 2) / 2) - ($x1 * pow($a, 2) / 2);
					$M2 = ((3 * pow($c, 2)) - (pow($c, 3) / 3)) - ((3 * pow($b, 2)) - (pow($b, 3) / 3));
					$M3 = ($x2 * pow($d, 2) / 2) - ($x2 * pow($c, 2) / 2);
					$A1 = ($x1 * $b) - ($x1 * $a);
					$A2 = ((6 * $c) - (pow($c, 2) / 2)) - ((6 * $b) - (pow($b, 2) / 2));
					$A3 = ($x2 * $d) - ($x2 * $c);
					
					$zi = ($M1 + $M2 + $M3) / ($A1 + $A2 + $A3);
		
					// echo "$a $b $c $d<br>";
					// echo "M1 = $M1, M2 = $M2, M3 = $M3<br>";
					// echo "A1 = $A1, A2 = $A2, A3 = $A3<br>";
					//echo "<br>Inattentive (Negative, Positive) = $z <br>";
				}
			}

		} else if ($x1 == 0.5) {
			if ($x2 < 0.5) {
				$a = 0;
				$b = 6 - $x1;
				$c = 6 - $x2;			
				$d = 9;
				
				$M1 = ($x1 * pow($b, 2) / 2) - ($x1 * pow($a, 2) / 2);
				$M2 = ((3 * pow($c, 2)) - (pow($c, 3) / 3)) - ((3 * pow($b, 2)) - (pow($b, 3) / 3));
				$M3 = ($x2 * pow($d, 2) / 2) - ($x2 * pow($c, 2) / 2);
				$A1 = ($x1 * $b) - ($x1 * $a);
				$A2 = ((6 * $c) - (pow($c, 2) / 2)) - ((6 * $b) - (pow($b, 2) / 2));
				$A3 = ($x2 * $d) - ($x2 * $c);
				
				$zi = ($M1 + $M2 + $M3) / ($A1 + $A2 + $A3);
		
				// echo "$a $b $c $d<br>";
				// echo "M1 = $M1, M2 = $M2, M3 = $M3<br>";
				// echo "A1 = $A1, A2 = $A2, A3 = $A3<br>";
				//echo "<br>Inattentive (Negative, Positive) = $z <br>";

			} else if ($x2 > 0.5) {
				$a = 0;
				$b = 6 - $x1;
				$c = 5 + $x2;			
				$d = 9;
				
				$M1 = ($x1 * pow($b, 2) / 2) - ($x1 * pow($a, 2) / 2);
				$M2 = ((pow($c, 3) / 3) - (5* pow($c, 2) / 2)) - ((pow($b, 3) / 3) - (5* pow($b, 2) / 2));
				$M3 = ($x2 * pow($d, 2) / 2) - ($x2 * pow($c, 2) / 2);

				$A1 = ($x1 * $b) - ($x1 * $a);
				$A2 = ((pow($c, 2) / 2) - (5 * $c)) - ((pow($b, 2) / 2) - (5 * $b));
				$A3 = ($x2 * $d) - ($x2 * $c);
				
				$zi = ($M1 + $M2 + $M3) / ($A1 + $A2 + $A3);
		
				// echo "$a $b $c $d<br>";
				// echo "M1 = $M1, M2 = $M2, M3 = $M3<br>";
				// echo "A1 = $A1, A2 = $A2, A3 = $A3<br>";
				//echo "<br>Inattentive (Negative, Positive) = $z <br>";
			}
		}
	}

	// HYPERACTIVE - IMPULSIVE
	if ($dHyperImpuls["negative"] > 0 && $dHyperImpuls["positive"] == 0)  {
		$x = $dHyperImpuls["negative"];
		$b = 0;

		// cari batas atas dan bawah integral
		for ($i = 0; $i < 2; $i++) {
			if( $i == 0){
				$a = 0;
				if ($x <= 0.5) {
					$b += 5 + $x;
				} else if ($x > 0.5 && $x <= 1) {
					$b += 6 - $x;
				}

				// rumus integral M1 dan A1
				$M1 = ($x * pow($b, 2) / 2) - ($x * pow($a, 2) / 2);
				$A1 = ($x * $b) - ($x * $a);

				// echo "$a $b<br>";
				// echo "M1 = $M1 <br>";
				// echo "A1 = $A1 <br><br>";
			} else if ($i == 1) {
				$a = $b;
				$b = 6;

				// rumus integral M2 dan A2
				$M2 = (3 * pow($b, 2) - (pow($b, 3) / 3)) - (3 * pow($a, 2) - (pow($a, 3) / 3));
				$A2 = ((6 * $b) - (pow($b, 2) / 2))- ((6 * $a) - (pow($a, 2) / 2));

				// echo "$a $b<br>";
				// echo "M2 = $M2 <br>";
				// echo "A2 = $A2 <br>";
			}
			
		}

		$zhi = ($M1 + $M2) / ($A1 + $A2);
		// echo "<br>Z = $z <br>";
	}

	if ($dHyperImpuls["negative"] == 0 && $dHyperImpuls["positive"] > 0)  {
		$x = $dHyperImpuls["positive"];
		$b = 0;

		// cari batas atas dan bawah integral
		for ($i = 0; $i < 2; $i++) {
			if( $i == 0){
				$a = 5;
				if ($x <= 0.5) {
					$b += 6 - $x;
				} else if ($x > 0.5 && $x <= 1) {
					$b += 5 + $x;
				}

				// rumus integral M1 dan A1
				$M1 = ((pow($b, 3) / 3) - (5 * pow($b, 2) / 2)) - ((pow($a, 3) / 3) - (5 * pow($a, 2) / 2));
				$A1 = ((pow($b, 2) / 2) - (5 * $b)) - ((pow($a, 2) / 2) - (5 * $a));
				

				// echo "<br>$a $b<br>";
				// echo "M1 = $M1 <br>";
				// echo "A1 = $A1 <br><br>";
			} else if ($i == 1) {
				$a = $b;
				$b = 9;

				// rumus integral M2 dan A2
				$M2 = ($x * pow($b, 2) / 2) - ($x * pow($a, 2) / 2);
				$A2 = ($x * $b) - ($x * $a);

				// echo "$a $b<br>";
				// echo "M2 = $M2 <br>";
				// echo "A2 = $A2 <br>";
			}
		}
		$zhi = ($M1 + $M2) / ($A1 + $A2);
		//echo "<br>Z = $z <br>";
	}

	if ($dHyperImpuls["negative"] > 0 && $dHyperImpuls["positive"] > 0) {
		$x1 = $dHyperImpuls["negative"];
		$x2 = $dHyperImpuls["positive"];

		if ($x1 < 0.5) {
			if ($x1 < $x2) {
				$a = 0;
				$b = 5 + $x1;
				$c = 5 + $x2;
				$d = 9;

				$M1 = ($x1 * pow($b, 2) / 2) - ($x1 * pow($a, 2) / 2);
				$M2 = ((pow($c, 3) / 3) - (5* pow($c, 2) / 2)) - ((pow($b, 3) / 3) - (5* pow($b, 2) / 2));
				$M3 = ($x2 * pow($d, 2) / 2) - ($x2 * pow($c, 2) / 2);

				$A1 = ($x1 * $b) - ($x1 * $a);
				$A2 = ((pow($c, 2) / 2) - (5 * $c)) - ((pow($b, 2) / 2) - (5 * $b));
				$A3 = ($x2 * $d) - ($x2 * $c);

				$zhi = ($M1 + $M2 + $M3) / ($A1 + $A2 + $A3);
		
				// echo "$a $b $c $d<br>";
				// echo "M1 = $M1, M2 = $M2, M3 = $M3<br>";
				// echo "A1 = $A1, A2 = $A2, A3 = $A3<br>";
				// echo "<br>Z = $z <br>";

			} else {
				$a = 0;
				$b = 6 - $x1;
				$c = 6 - $x2;
				$d = 9;
				
				$M1 = ($x1 * pow($b, 2) / 2) - ($x1 * pow($a, 2) / 2);
				$M2 = ((3 * pow($c, 2)) - (pow($c, 3) / 3)) - ((3 * pow($b, 2)) - (pow($b, 3) / 3));
				$M3 = ($x2 * pow($d, 2) / 2) - ($x2 * pow($c, 2) / 2);

				$A1 = ($x1 * $b) - ($x1 * $a);
				$A2 = ((6 * $c) - (pow($c, 2) / 2)) - ((6 * $b) - (pow($b, 2) / 2));
				$A3 = ($x2 * $d) - ($x2 * $c);

				$zhi = ($M1 + $M2 + $M3) / ($A1 + $A2 + $A3);
		
				// echo "$a $b $c $d<br>";
				// echo "M1 = $M1, M2 = $M2, M3 = $M3<br>";
				// echo "A1 = $A1, A2 = $A2, A3 = $A3<br>";
				// echo "<br>Z = $z <br>";
			}

		} else if ($x1 > 0.5) {
			if ($x2 < 0.5) {
				$a = 0;
				$b = 6 - $x1;
				$c = 6 - $x2;			
				$d = 9;
				
				$M1 = ($x1 * pow($b, 2) / 2) - ($x1 * pow($a, 2) / 2);
				$M2 = ((3 * pow($c, 2)) - (pow($c, 3) / 3)) - ((3 * pow($b, 2)) - (pow($b, 3) / 3));
				$M3 = ($x2 * pow($d, 2) / 2) - ($x2 * pow($c, 2) / 2);

				$A1 = ($x1 * $b) - ($x1 * $a);
				$A2 = ((6 * $c) - (pow($c, 2) / 2)) - ((6 * $b) - (pow($b, 2) / 2));
				$A3 = ($x2 * $d) - ($x2 * $c);
				
				$zhi = ($M1 + $M2 + $M3) / ($A1 + $A2 + $A3);
		
				// echo "$a $b $c $d<br>";
				// echo "M1 = $M1, M2 = $M2, M3 = $M3<br>";
				// echo "A1 = $A1, A2 = $A2, A3 = $A3<br>";
				// echo "<br>Z = $z <br>";

			} else if ($x2 == 0.5) {
				$a = 0;
				$b = 6 - $x1;
				$c = 5 + $x2;			
				$d = 9;
				
				$M1 = ($x1 * pow($b, 2) / 2) - ($x1 * pow($a, 2) / 2);
				$M2 = ((3 * pow($c, 2)) - (pow($c, 3) / 3)) - ((3 * pow($b, 2)) - (pow($b, 3) / 3));
				$M3 = ($x2 * pow($d, 2) / 2) - ($x2 * pow($c, 2) / 2);

				$A1 = ($x1 * $b) - ($x1 * $a);
				$A2 = ((6 * $c) - (pow($c, 2) / 2)) - ((6 * $b) - (pow($b, 2) / 2));
				$A3 = ($x2 * $d) - ($x2 * $c);
				
				$zhi = ($M1 + $M2 + $M3) / ($A1 + $A2 + $A3);
		
				// echo "$a $b $c $d<br>";
				// echo "M1 = $M1, M2 = $M2, M3 = $M3<br>";
				// echo "A1 = $A1, A2 = $A2, A3 = $A3<br>";
				// echo "<br>Z = $z <br>";

			} else if ($x2 > 0.5) {
				if ($x1 < $x2) {
					$a = 0;
					$b = 5 + $x1;
					$c = 5 + $x2;			
					$d = 9;
					
					$M1 = ($x1 * pow($b, 2) / 2) - ($x1 * pow($a, 2) / 2);
					$M2 = ((pow($c, 3) / 3) - (5* pow($c, 2) / 2)) - ((pow($b, 3) / 3) - (5* pow($b, 2) / 2));
					$M3 = ($x2 * pow($d, 2) / 2) - ($x2 * pow($c, 2) / 2);

					$A1 = ($x1 * $b) - ($x1 * $a);
					$A2 = ((pow($c, 2) / 2) - (5 * $c)) - ((pow($b, 2) / 2) - (5 * $b));
					$A3 = ($x2 * $d) - ($x2 * $c);
					
					$zhi = ($M1 + $M2 + $M3) / ($A1 + $A2 + $A3);
		
					// echo "$a $b $c $d<br>";
					// echo "M1 = $M1, M2 = $M2, M3 = $M3<br>";
					// echo "A1 = $A1, A2 = $A2, A3 = $A3<br>";
					// echo "<br>Z = $z <br>";

				} else {
					$a = 0;
					$b = 6 - $x1;
					$c = 6 - $x2;			
					$d = 9;
					
					$M1 = ($x1 * pow($b, 2) / 2) - ($x1 * pow($a, 2) / 2);
					$M2 = ((3 * pow($c, 2)) - (pow($c, 3) / 3)) - ((3 * pow($b, 2)) - (pow($b, 3) / 3));
					$M3 = ($x2 * pow($d, 2) / 2) - ($x2 * pow($c, 2) / 2);
					$A1 = ($x1 * $b) - ($x1 * $a);
					$A2 = ((6 * $c) - (pow($c, 2) / 2)) - ((6 * $b) - (pow($b, 2) / 2));
					$A3 = ($x2 * $d) - ($x2 * $c);
					
					$zhi = ($M1 + $M2 + $M3) / ($A1 + $A2 + $A3);
		
					// echo "$a $b $c $d<br>";
					// echo "M1 = $M1, M2 = $M2, M3 = $M3<br>";
					// echo "A1 = $A1, A2 = $A2, A3 = $A3<br>";
					// echo "<br>Z = $z <br>";
				}
			}

		} else if ($x1 == 0.5) {
			if ($x2 < 0.5) {
				$a = 0;
				$b = 6 - $x1;
				$c = 6 - $x2;			
				$d = 9;
				
				$M1 = ($x1 * pow($b, 2) / 2) - ($x1 * pow($a, 2) / 2);
				$M2 = ((3 * pow($c, 2)) - (pow($c, 3) / 3)) - ((3 * pow($b, 2)) - (pow($b, 3) / 3));
				$M3 = ($x2 * pow($d, 2) / 2) - ($x2 * pow($c, 2) / 2);
				$A1 = ($x1 * $b) - ($x1 * $a);
				$A2 = ((6 * $c) - (pow($c, 2) / 2)) - ((6 * $b) - (pow($b, 2) / 2));
				$A3 = ($x2 * $d) - ($x2 * $c);
				
				$zhi = ($M1 + $M2 + $M3) / ($A1 + $A2 + $A3);
		
				// echo "$a $b $c $d<br>";
				// echo "M1 = $M1, M2 = $M2, M3 = $M3<br>";
				// echo "A1 = $A1, A2 = $A2, A3 = $A3<br>";
				// echo "<br>Z = $z <br>";

			} else if ($x2 > 0.5) {
				$a = 0;
				$b = 6 - $x1;
				$c = 5 + $x2;			
				$d = 9;
				
				$M1 = ($x1 * pow($b, 2) / 2) - ($x1 * pow($a, 2) / 2);
				$M2 = ((pow($c, 3) / 3) - (5* pow($c, 2) / 2)) - ((pow($b, 3) / 3) - (5* pow($b, 2) / 2));
				$M3 = ($x2 * pow($d, 2) / 2) - ($x2 * pow($c, 2) / 2);

				$A1 = ($x1 * $b) - ($x1 * $a);
				$A2 = ((pow($c, 2) / 2) - (5 * $c)) - ((pow($b, 2) / 2) - (5 * $b));
				$A3 = ($x2 * $d) - ($x2 * $c);
				
				$zhi = ($M1 + $M2 + $M3) / ($A1 + $A2 + $A3);
		
				// echo "$a $b $c $d<br>";
				// echo "M1 = $M1, M2 = $M2, M3 = $M3<br>";
				// echo "A1 = $A1, A2 = $A2, A3 = $A3<br>";
				// echo "<br>Z = $z <br>";
			}
		}
	}

	//COMBINED
	if ($dCombined["negative"] != 0 && $dCombined["positive"] == 0) {
		$x = $dCombined["negative"];
		$a = 0;
		// batas b
		$b = (-$x * 0.5) + 6;
		$c = 6;

		$M1 = ($x * pow($b, 2) / 2) - ($x * pow($a, 2) / 2);
		$A1 = ($x * $b) - ($x * $a);

		$M2 = (1 / 0.5 * (3 * pow($c, 2) - pow($c, 3) / 3)) - (1 / 0.5 * (3 * pow($b, 2) - pow($b, 3) / 3));
		$A2 = (1 / 0.5 * (6 * $c - pow($c, 2) / 2)) - (1 / 0.5 * (6 * $b - pow($b, 2) / 2));
 		
 		$zc = ($M1 + $M2) / ($A1 + $A2);
		
		// echo "$a $b $c<br>";
		// echo "M1 = $M1, M2 = $M2<br>";
		// echo "A1 = $A1, A2 = $A2<br>";
		// echo "<br>Z = $zc <br>";
	}

	if ($dCombined["negative"] == 0 && $dCombined["positive"] != 0) {
		$x = $dCombined["positive"];

		$a = 5.5;
		$b = ($x * 0.5) + 5.5;
		$c = 9;

		$M1 = (1 / 0.5 * (pow($b, 3) / 3 - 5.5 * pow($b, 2) / 2)) - (1 / 0.5 * (pow($a, 3) / 3 - 5.5 * pow($a, 2) / 2));
		$A1 = (1 / 0.5 * (pow($b, 2) / 2 - 5.5 * $b)) - (1 / 0.5 * (pow($a, 2) / 2 - 5.5 * $a));

		$M2 = ($x * pow($c, 2) / 2) - ($x * pow($b, 2) / 2);
		$A2 = ($x * $c) - ($x * $b);
 		
 		$zc = ($M1 + $M2) / ($A1 + $A2);
		
		// echo "$a $b $c<br>";
		// echo "M1 = $M1, M2 = $M2<br>";
		// echo "A1 = $A1, A2 = $A2<br>";
		// echo "<br>Z = $zc <br>";
	}

	if ($dCombined["negative"] != 0 && $dCombined["positive"] != 0) {
		$x1 = $dCombined["negative"];
		$x2 = $dCombined["positive"];

		if ($x1 > 0.5) {
			if ($x2 > 0.5) {
				$a = 0;
				$b = (-$x1 * 0.5) + 6;
				$c = 5.75;
				$d = ($x2 * 0.5) + 5.5;
				$e = 9;

				$M1 = ($x1 * pow($b, 2) / 2) - ($x1 * pow($a, 2) / 2);
				$A1 = ($x1 * $b) - ($x1 * $a);

				$M2 = (1 / 0.5 * (3 * pow($c, 2) - pow($c, 3) / 3)) - (1 / 0.5 * (3 * pow($b, 2) - pow($b, 3) / 3));
				$A2 = (1 / 0.5 * (6 * $c - pow($c, 2) / 2)) - (1 / 0.5 * (6 * $b - pow($b, 2) / 2));

				$M3 = (1 / 0.5 * (pow($d, 3) / 3 - 5.5 * pow($d, 2) / 2)) - (1 / 0.5 * (pow($c, 3) / 3 - 5.5 * pow($c, 2) / 2));
				$A3 = (1 / 0.5 * (pow($d, 2) / 2 - 5.5 * $d)) - (1 / 0.5 * (pow($c, 2) / 2 - 5.5 * $c));

				$M4 = ($x2 * pow($e, 2) / 2) - ($x2 * pow($d, 2) / 2);
				$A4 = ($x2 * $e) - ($x2 * $d);

				$zc = ($M1 + $M2 + $M3 + $M4) / ($A1 + $A2 + $A3 + $A4);

				// echo "$a $b $c $d $e<br>";
				// echo "M1 = $M1, M2 = $M2, M3 = $M3, M4 = $M4<br>";
				// echo "A1 = $A1, A2 = $A2, A3 = $A3, A4 = $A4<br>";
				// echo "<br>Z = $zc <br>";

			} elseif ($x2 <= 0.5) {
				$a = 0;
				$b = (-$x1 * 0.5) + 6;
				$c = (-$x2 * 0.5) + 6;
				$d = 9;

				$M1 = ($x1 * pow($b, 2) / 2) - ($x1 * pow($a, 2) / 2);
				$A1 = ($x1 * $b) - ($x1 * $a);

				$M2 = (1 / 0.5 * (3 * pow($c, 2) - pow($c, 3) / 3)) - (1 / 0.5 * (3 * pow($b, 2) - pow($b, 3) / 3));
				$A2 = (1 / 0.5 * (6 * $c - pow($c, 2) / 2)) - (1 / 0.5 * (6 * $b - pow($b, 2) / 2));

				$M3 = ($x2 * pow($d, 2) / 2) - ($x2 * pow($c, 2) / 2);
				$A3 = ($x2 * $d) - ($x2 * $c);

				$zc = ($M1 + $M2 + $M3) / ($A1 + $A2 + $A3);

				// echo "$a $b $c $d<br>";
				// echo "M1 = $M1, M2 = $M2, M3 = $M3<br>";
				// echo "A1 = $A1, A2 = $A2, A3 = $A3<br>";
				// echo "<br>Z = $zc <br>";
			}

		} elseif ($x1 == 0.5) {
			if ($x2 > 0.5) {
				$a = 0;
				$b = 5.75;
				$c = ($x2 * 0.5) + 5.5;
				$d = 9;

				$M1 = ($x1 * pow($b, 2) / 2) - ($x1 * pow($a, 2) / 2);
				$A1 = ($x1 * $b) - ($x1 * $a);

				$M2 = (1 / 0.5 * (pow($c, 3) / 3 - 5.5 * pow($c, 2) / 2)) - (1 / 0.5 * (pow($b, 3) / 3 - 5.5 * pow($b, 2) / 2));
				$A2 = (1 / 0.5 * (pow($c, 2) / 2 - 5.5 * $c)) - (1 / 0.5 * (pow($b, 2) / 2 - 5.5 * $b));

				$M3 = ($x2 * pow($d, 2) / 2) - ($x2 * pow($c, 2) / 2);
				$A3 = ($x2 * $d) - ($x2 * $c);

				$zc = ($M1 + $M2 + $M3) / ($A1 + $A2 + $A3);

				// echo "$a $b $c $d<br>";
				// echo "M1 = $M1, M2 = $M2, M3 = $M3<br>";
				// echo "A1 = $A1, A2 = $A2, A3 = $A3<br>";
				// echo "<br>Z = $zc <br>";

			} elseif ($x2 == 0.5) {
				$a = 0;
				$b = 9;

				$M1 = ($x1 * pow($b, 2) / 2) - ($x1 * pow($a, 2) / 2);
				$A1 = ($x1 * $b) - ($x1 * $a);

				$zc = ($M1) / ($A1);

				// echo "$a<br>";
				// echo "M1 = $M1<br>";
				// echo "A1 = $A1";
				// echo "<br>Z = $zc <br>";

			} elseif ($x2 < 0.5) {
				$a = 0;
				$b = 5.75;
				$c = (-$x2 * 0.5) + 6;
				$d = 9;

				$M1 = ($x1 * pow($b, 2) / 2) - ($x1 * pow($a, 2) / 2);
				$A1 = ($x1 * $b) - ($x1 * $a);

				$M2 = (1 / 0.5 * (3 * pow($c, 2) - pow($c, 3) / 3)) - (1 / 0.5 * (3 * pow($b, 2) - pow($b, 3) / 3));
				$A2 = (1 / 0.5 * (6 * $c - pow($c, 2) / 2)) - (1 / 0.5 * (6 * $b - pow($b, 2) / 2));

				$M3 = ($x2 * pow($d, 2) / 2) - ($x2 * pow($c, 2) / 2);
				$A3 = ($x2 * $d) - ($x2 * $c);

				$zc = ($M1 + $M2 + $M3) / ($A1 + $A2 + $A3);

				// echo "$a $b $c $d<br>";
				// echo "M1 = $M1, M2 = $M2, M3 = $M3<br>";
				// echo "A1 = $A1, A2 = $A2, A3 = $A3<br>";
				// echo "<br>Z = $zc <br>";
			}
		} elseif ($x1 < 0.5) {
			if ($x1 > $x2) {
				$a = 0;
				$b = ($x1 * 0.5) + 5.5;
				$c = ($x2 * 0.5) + 5.5;
				$d = 9;

				$M1 = ($x1 * pow($b, 2) / 2) - ($x1 * pow($a, 2) / 2);
				$A1 = ($x1 * $b) - ($x1 * $a);

				$M2 = (1 / 0.5 * (pow($c, 3) / 3 - 5.5 * pow($c, 2) / 2)) - (1 / 0.5 * (pow($b, 3) / 3 - 5.5 * pow($b, 2) / 2));
				$A2 = (1 / 0.5 * (pow($c, 2) / 2 - 5.5 * $c)) - (1 / 0.5 * (pow($b, 2) / 2 - 5.5 * $b));

				$M3 = ($x2 * pow($d, 2) / 2) - ($x2 * pow($c, 2) / 2);
				$A3 = ($x2 * $d) - ($x2 * $c);

				$zc = ($M1 + $M2 + $M3) / ($A1 + $A2 + $A3);

				// echo "$a $b $c $d<br>";
				// echo "M1 = $M1, M2 = $M2, M3 = $M3<br>";
				// echo "A1 = $A1, A2 = $A2, A3 = $A3<br>";
				// echo "<br>Z = $zc <br>";

			} elseif ($x1 == $x2) {
				$a = 0;
				$b = 9;

				$M1 = ($x1 * pow($b, 2) / 2) - ($x1 * pow($a, 2) / 2);
				$A1 = ($x1 * $b) - ($x1 * $a);

				$zc = ($M1) / ($A1);

				// echo "$a<br>";
				// echo "M1 = $M1<br>";
				// echo "A1 = $A1";
				// echo "<br>Z = $zc <br>";

			} elseif ($x1 < $x2) {
				$a = 0;
				$b = ($x1 * 0.5) + 5.5;
				$c = ($x2 * 0.5) + 5.5;
				$d = 9;

				$M1 = ($x1 * pow($b, 2) / 2) - ($x1 * pow($a, 2) / 2);
				$A1 = ($x1 * $b) - ($x1 * $a);

				$M2 = (1 / 0.5 * (3 * pow($c, 2) - pow($c, 3) / 3)) - (1 / 0.5 * (3 * pow($b, 2) - pow($b, 3) / 3));
				$A2 = (1 / 0.5 * (6 * $c - pow($c, 2) / 2)) - (1 / 0.5 * (6 * $b - pow($b, 2) / 2));

				$M3 = ($x2 * pow($d, 2) / 2) - ($x2 * pow($c, 2) / 2);
				$A3 = ($x2 * $d) - ($x2 * $c);

				$zc = ($M1 + $M2 + $M3) / ($A1 + $A2 + $A3);

				// echo "$a $b $c $d<br>";
				// echo "M1 = $M1, M2 = $M2, M3 = $M3<br>";
				// echo "A1 = $A1, A2 = $A2, A3 = $A3<br>";
				// echo "<br>Z = $zc <br>";
			}
		}
	}

	$z = [$zi, $zhi, $zc];
	
}

function output($child_id, $status) {
	global $conn;
	global $z;
	global $final;
	global $final1;

	$activity = query("SELECT activity_score_id FROM score WHERE child_id = '$child_id'");
	$activity_score_id = $activity[0]["activity_score_id"];

	$activityScore = query("SELECT activity_score_sum FROM activity_score WHERE activity_score_id = '$activity_score_id'");
	$x = (float)$activityScore[0]["activity_score_sum"];

	$attention = query("SELECT attention_score_id FROM score WHERE child_id = '$child_id'");
	$attention_score_id = $attention[0]["attention_score_id"];

	$attentionScore = query("SELECT attention_score_sum FROM attention_score WHERE attention_score_id = '$attention_score_id'");
	$y = (float)$attentionScore[0]["attention_score_sum"];

	if ($x < 6 && $y < 6) {
		$final = "tidak teridentifikasi menderita ADHD";
		$final1 = "The child has no ADHD";
	} else if ($z[0] > $z[1] && $z[0] > $z[2]) {
		$final = "teridentifikasi menderita ADHD tipe dominan Inattentive";
		$final1 = "Predominantly Inattentive Presentation";

	} else if ($z[1] > $z[0] && $z[1] > $z[2]) {
		$final = "teridentifikasi menderita ADHD tipe dominan Hyperactive-Impulsive";
		$final1 = "Predominantly Hyperactive-Impulsive Presentation";

	} else if ($z[2] > $z[0] && $z[2] > $z[1]) {
		$final = "teridentifikasi menderita ADHD tipe dominan Combined";
		$final1 = "Predominantly Combined Presentation";
	}

	if ($status == "new") {
		// echo "
  //               <script>
  //                   alert('new');
  //               </script>
  //            ";
         //die;
		$query = "INSERT INTO result VALUES ('', '$final', '$final1', CURRENT_TIMESTAMP(), $child_id)";
		mysqli_query($conn, $query);

	} else {
		$cekResult = mysqli_query($conn, "SELECT child_id FROM result WHERE child_id = '$child_id'");
		$cek = mysqli_fetch_assoc($cekResult);

		if ($cek) {
			// sudah melakukan tes
			$query = "UPDATE result SET 
					result_in = '$final',
					result_en = '$final1',
					result_date = CURRENT_TIMESTAMP()
					WHERE child_id = $child_id
				";
			mysqli_query($conn, $query);

		} else {
			// belum melakukan tes
			$query = "INSERT INTO result VALUES ('', '$final', '$final1', CURRENT_TIMESTAMP(), $child_id)";
			mysqli_query($conn, $query);
		}

	}

	return mysqli_affected_rows($conn);
}

function report($child_id){
	global $conn;

	$x = query("SELECT score_id FROM score WHERE $child_id = $child_id");
	$score = end($x);
	$score_id = (int)$score["score_id"];

	$y = query("SELECT result_id FROM result WHERE $child_id = $child_id");
	$result = end($y);
	$result_id = (int)$result["result_id"];

	$z = query("SELECT answer_id FROM answer WHERE $child_id = $child_id");
	$answer = end($z);
	$answer_id = (int)$answer["answer_id"];

	$query = "INSERT INTO report VALUES ('' , $child_id, $score_id, $result_id, $answer_id)";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
	 
	
}

 ?>