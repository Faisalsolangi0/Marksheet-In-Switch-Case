<?php
echo "Marksheet Assignment in Switch Statement <br/><br/>";


// Here are subjects
//Showing Subjects With Obtain Marks.
$subject1 = 90;
$subject2 = 60;
$subject3 = 60;
$subject4 = 60;
$subject5 = 39;


echo "Total Subjects: <br>";

echo "Subject 1: $subject1 <br>";
echo "Subject 2: $subject2 <br>";
echo "Subject 3: $subject3 <br>";
echo "Subject 4: $subject4 <br>";
echo "Subject 5: $subject5 <br><br>";

// Total Marks Of Five Subjects.
$totalMarks = 500;
echo "Total Marks: $totalMarks <br>";

//Total Obtain Marks.
$obtainMarks = $subject1 + $subject2 + $subject3 + $subject4 + $subject5;
echo "Obtain Marks: $obtainMarks <br>";


$percentage = ($obtainMarks / $totalMarks) * 100;
echo "Percentage: $percentage% <br> ";



switch (true) {

	case ($subject1 < 40 || $subject2 < 40 || $subject3 < 40 || $subject4 < 40 || $subject5 < 40):
		echo "Grade Fail";
		break;

	case ($percentage >= 90 && $percentage <= 100):
		echo "Grade A+";
		break;

	case ($percentage >= 70 && $percentage <= 80):
		echo "Grade A";
		break;

	case ($percentage >= 60 && $percentage <= 70):
		echo "Grade B";
		break;

	case ($percentage >= 50 && $percentage <= 60):
		echo "Grade C";
		break;

	case ($percentage >= 40 && $percentage <= 50):
		echo "Grade D";
		break;

	case ($percentage >= 0 && $percentage <= 40):
		echo " Failed";
		break;

}


?>