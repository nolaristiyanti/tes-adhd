<?php 

// pdf reporting
require_once __DIR__ . '/vendor/autoload.php';

// panggil fungsi functions.php
require 'functions.php';

// query join tabel child dan report
$child = query("SELECT child_fullname, child_age, child_sex FROM child t1 JOIN report t2 ON t1.child_id=t2.child_id");

// query join tabel result dan report
$result = query("SELECT result_en, result_date FROM result t1 JOIN report t2 ON t1.child_id=t2.child_id");

// query join tabel user, child, dan report
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

// buat variabel array untuk attention
for($i = 0; $i < $countAttentioAnswer; $i++) {
	$answer1[] = query("SELECT attention_A1, attention_A2, attention_A3, attention_A4, attention_A5, attention_A6, attention_A7, attention_A8, attention_A9 FROM attention_answer t1 JOIN answer t2 ON t1.attention_answer_id=t2.attention_answer_id JOIN report t3 ON t2.child_id=t3.child_id")[$i];
}

// buat variabel array untuk activity
for($i = 0; $i < $countActivityAnswer; $i++) {
	$answer2[] = query("SELECT activity_A1, activity_A2, activity_A3, activity_A4, activity_A5, activity_A6, activity_A7, activity_A8, activity_A9 FROM activity_answer t1 JOIN answer t2 ON t1.activity_answer_id=t2.activity_answer_id JOIN report t3 ON t2.child_id=t3.child_id")[$i];
}

// pdf reporting
$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
<html>
<head>
	<title>Report</title>
	<link rel="stylesheet" href="print.css">
</head>
<body>';

$j = 0;
$no = 1;
foreach ($child as $a) :
	$html .= '<div style="page-break-after:always">';
	$u = $user[$j];
	$r = $result[$j];
	$date = $result[$j]["result_date"];
	$d = date("d F Y", strtotime($date));
	$scoreI = $score1[$j];
	$scoreHI = $score2[$j];

	$html .= '
		<table border="1" cellpadding="5" cellspacing="0" width="100%" align="center">
			<tr>
				<th>No.</th>
				<th>Name</th>
				<th>Age</th>
				<th>Sex</th>
				<th>Parents Name</th>
				<th>Result</th>
				<th>Test Date</th>
			</tr>
			<tr>
				<td><b>'. $no++ .'<b></td> 
				<td>'. ucwords($a["child_fullname"]) .'</td>
				<td>'. $a["child_age"] .'</td>
				<td>'. $a["child_sex"] .'</td>
				<td>'. $u["user_fullname"] .'</td>
				<td>'. $r["result_en"] .'</td>
				<td>'. $d .'</td>
			</tr>
		</table>
		<br>';
	$html .= '
		<b>Inattentive : <b>'. $scoreI["attention_score_sum"] .'
		<br>
		<table border="1" cellpadding="5" cellspacing="0" width="100%" align="center">
			<tr>
				<th>No.</th>
				<th>Question</th>
				<th>Answer</th>
			</tr>';
		$i = 0;
		$no2 = 1;
		$x = $answer1[$i];
		foreach ($question1 as $b) :
	$html.='<tr>
				<td>'. $no2++ .'</td>
				<td>'. $b["attention_question_en"] .'</td>';
switch ($i) {
	case 0:
		$html.='<td>'.$x["attention_A1"] .'</td>';
		break;
	case 1:
		$html .='<td>'.$x["attention_A2"] .'</td>';
		break;
	case 2:
		$html .='<td>'.$x["attention_A3"] .'</td>';
		break;
	case 3:
		$html .='<td>'.$x["attention_A4"] .'</td>';
		break;
	case 4:
		$html .='<td>'.$x["attention_A5"] .'</td>';
		break;
	case 5:
		$html .='<td>'.$x["attention_A6"] .'</td>';
		break;
	case 6:
		$html .='<td>'.$x["attention_A7"] .'</td>';
		break;
	case 7:
		$html .='<td>'.$x["attention_A8"] .'</td>';
		break;
	case 8:
		$html .='<td>'.$x["attention_A9"] .'</td>';
		break;
}

	$html.='</tr>';
		$i++;
		endforeach;
$html.='</table>';

		$k = 0;
		$no3 = 1;
		$y = $answer2[$k];
$html.='<br>
		<b>Hyperactive-Impulsive (Score) : </b>'.$scoreHI["activity_score_sum"].'
		<table border="1" cellpadding="5" cellspacing="0" width="100%" align="center">
			<tr>
				<th>No.</th>
				<th>Question</th>
				<th>Answer</th>
			</tr>';
		foreach ($question2 as $c) :
	$html.='<tr>
 				<td>'. $no3++ .'</td>
				<td>'. $c["activity_question_en"] .'</td>';
switch ($k) {
	case 0:
		$html.='<td>'.$y["activity_A1"] .'</td>';
		break;
	case 1:
		$html .='<td>'.$y["activity_A2"] .'</td>';
		break;
	case 2:
		$html .='<td>'.$y["activity_A3"] .'</td>';
		break;
	case 3:
		$html .='<td>'.$y["activity_A4"] .'</td>';
		break;
	case 4:
		$html .='<td>'.$y["activity_A5"] .'</td>';
		break;
	case 5:
		$html .='<td>'.$y["activity_A6"] .'</td>';
		break;
	case 6:
		$html .='<td>'.$y["activity_A7"] .'</td>';
		break;
	case 7:
		$html .='<td>'.$y["activity_A8"] .'</td>';
		break;
	case 8:
		$html .='<td>'.$y["activity_A9"] .'</td>';
		break;
}
 	$html.='</tr>';
 		$k++;
 		endforeach;
$html.='</table>';
$html.='<br>';
	$j++;
$html.='</div>';
endforeach;

$html .= "
</body>
</html>
";

$mpdf->WriteHTML($html);
$mpdf->Output('report.pdf', 'I');

 ?>