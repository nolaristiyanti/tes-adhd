<?php 

// panggil file functions
include_once 'functions.php';

// query tabel child
$child = query("SELECT child_fullname, child_age, child_sex FROM child t1 JOIN report t2 ON t1.child_id=t2.child_id");

// query tabel result
$result = query("SELECT result_en, result_date FROM result t1 JOIN report t2 ON t1.child_id=t2.child_id");

//query tabel user
$user = query("SELECT user_fullname FROM user t1 JOIN child t2 ON t1.user_id=t2.user_id JOIN report t3 ON t2.child_id=t3.child_id");

// query soal attention dan activity
$question1 = query("SELECT attention_question_en FROM attention_question");
$question2 = query("SELECT activity_question_en FROM activity_question t1");

// query skor attention
$score1 = query("SELECT attention_score_sum FROM attention_score t1 JOIN score t2 ON t1.attention_score_id=t2.attention_score_id JOIN report t3 ON t2.score_id=t3.score_id");

// query skor activity
$score2 = query("SELECT activity_score_sum FROM activity_score t1 JOIN score t2 ON t1.activity_score_id=t2.activity_score_id JOIN report t3 ON t2.score_id=t3.score_id");

// hitung jumlah jawaban attention dan activity
$countAttentioAnswer = count(query("SELECT attention_A1, attention_A2, attention_A3, attention_A4, attention_A5, attention_A6, attention_A7, attention_A8, attention_A9 FROM attention_answer t1 JOIN answer t2 ON t1.attention_answer_id=t2.attention_answer_id JOIN report t3 ON t2.child_id=t3.child_id"));
$countActivityAnswer = count(query("SELECT activity_A1, activity_A2, activity_A3, activity_A4, activity_A5, activity_A6, activity_A7, activity_A8, activity_A9 FROM activity_answer t1 JOIN answer t2 ON t1.activity_answer_id=t2.activity_answer_id JOIN report t3 ON t2.child_id=t3.child_id"));

// query jawaban attention
$answer1 = query("SELECT attention_A1, attention_A2, attention_A3, attention_A4, attention_A5, attention_A6, attention_A7, attention_A8, attention_A9 FROM attention_answer t1 JOIN answer t2 ON t1.attention_answer_id=t2.attention_answer_id JOIN report t3 ON t2.child_id=t3.child_id");

// query jawaban activity
$answer2 = query("SELECT activity_A1, activity_A2, activity_A3, activity_A4, activity_A5, activity_A6, activity_A7, activity_A8, activity_A9 FROM activity_answer t1 JOIN answer t2 ON t1.activity_answer_id=t2.activity_answer_id JOIN report t3 ON t2.child_id=t3.child_id");

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Report</title>
	<head>
<style type='text/css'>
	#wrapper {
	    
	    width:950px;
	     height:auto;
	     padding: 13px;
	     margin-right:auto;
	     margin-left:auto;
	     background-color:#fff;
	    
	}
	#wrapper1 {
	    
	    width:900px;
	     height:auto;
	     padding: 13px;
	     margin-right:auto;
	     margin-left:auto;
	     background-color:#fff;
	    
	}
</style>
</head>
<body bgcolor='#e1e1e1'>

<a href="logout.php" class="logout">Logout</a> | <a href="admin.php">Home</a>



<div>
<h1>Report</h1>

<a href="cetak.php" target="_blank">Cetak Report</a>

<?php $j = 0; ?>
<?php foreach ($child as $a) :
    $child_fullname = $a["child_fullname"];
    $cek = mysqli_query($conn, "SELECT child_id FROM child WHERE child_fullname = '$child_fullname'");
    $ketemu = mysqli_fetch_assoc($cek);
    $child_id = $ketemu["child_id"];
    $user_fullname = query("SELECT user_fullname FROM user t1 JOIN child t2 ON t1.user_id=t2.user_id JOIN report t3 ON t2.child_id=t3.child_id WHERE t3.child_id = '$child_id'");
    
    ?>
    
	<div id="wrapper1">
		<table border="1" cellpadding="10" cellspacing="0" width="100%" align="center">
			<tr>
				<th>No.</th>
				<th>Name</th>
				<th>Age</th>
				<th>Sex</th>
				<th>Parent's Name</th>
				<th>Result</th>
				<th>Test Date</th>
			</tr>
			<tr>
				<th><?= $j+1; ?></th>
				<td>
					<?= ucwords($a["child_fullname"]); ?>
				</td>
				<td>
					<?= $a["child_age"]; ?> years old
				</td>
				<td>
					<?= $a["child_sex"]; ?>
				</td>
				<td>
					<?php $u = ($user[$j]); ?>
					<?= $user_fullname[0]["user_fullname"]; ?>
				</td>
				<td>
					<?php $r = ($result[$j]); ?>
					<?= $r["result_en"]; ?>
				</td>
				<td>
					<?php $date = $result[$j]["result_date"]; ?>
					<?php $d = date("d F Y", strtotime($date)); ?>
					<?= $d; ?>
				</td>
			</tr>
		</table>
		<br>
		<?php $scoreI = $score1[$j]; ?>
		<b>Inattentive (Score) : </b> <?= $scoreI["attention_score_sum"]; ?>
		<table border="1" cellpadding="10" cellspacing="0" width="100%" align="center">
			<tr>
				<th>No.</th>
				<th>Question</th>
				<th>Answer</th>
			</tr>
			<?php $i = 0; ?>
			<?php $x = $answer1[$i];?>
			<?php foreach ($question1 as $b) : ?>
				<tr>
					<td><?= $i+1; ?></td>
					<td><?= $b["attention_question_en"]; ?></td>
					<td>
						<?php
							switch ($i) {
							  case 0:
							    echo $answer1[$j]["attention_A1"];
							    break;
							  case 1:
							    echo $answer1[$j]["attention_A2"];
							    break;
							  case 2:
							    echo $answer1[$j]["attention_A3"];
							    break;
							  case 3:
							    echo $answer1[$j]["attention_A4"];
							    break;
							  case 4:
							    echo $answer1[$j]["attention_A5"];
							    break;
							  case 5:
							    echo $answer1[$j]["attention_A6"];
							    break;
							  case 6:
							    echo $answer1[$j]["attention_A7"];
							    break;
							  case 7:
							    echo $answer1[$j]["attention_A8"];
							    break;
							  case 8:
							    echo $answer1[$j]["attention_A9"];
							    break;
							}
						?>
					</td>
				</tr>
				<?php $i++; ?>
			<?php endforeach; ?>

		</table>
		<br>
		<br>
		<?php $scoreHI = ($score2[$j]); ?>
		<b>Hyperactive-Impulsive (Score) : </b> <?= $scoreHI["activity_score_sum"]; ?>
		<table border="1" cellpadding="10" cellspacing="0" width="100%" align="center">
			<tr>
				<th>No.</th>
				<th>Question</th>
				<th>Answer</th>
			</tr>
			<?php $i = 0; ?>
			<?php $x = $answer2[$i];?>
			<?php foreach ($question2 as $b) : ?>
				<tr>
					<td><?= $i+1; ?></td>
					<td><?= $b["activity_question_en"]; ?></td>
					<td>
						<?php
							switch ($i) {
							  case 0:
							    echo $answer2[$j]["activity_A1"];
							    break;
							  case 1:
							    echo $answer2[$j]["activity_A2"];
							    break;
							  case 2:
							    echo $answer2[$j]["activity_A3"];
							    break;
							  case 3:
							    echo $answer2[$j]["activity_A4"];
							    break;
							  case 4:
							    echo $answer2[$j]["activity_A5"];
							    break;
							  case 5:
							    echo $answer2[$j]["activity_A6"];
							    break;
							  case 6:
							    echo $answer2[$j]["activity_A7"];
							    break;
							  case 7:
							    echo $answer2[$j]["activity_A8"];
							    break;
							  case 8:
							    echo $answer2[$j]["activity_A9"];
							    break;
							}
						?>
					</td>
				</tr>
				<?php $i++; ?>
			<?php endforeach; ?>
		</table>
		<br>
	</div>
	<br>
	<br>
	<?php $j++; ?>
<?php endforeach; ?>
</body>
</html>