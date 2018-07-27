<?php
header("Content-Type: application/vnd.msword");
header("Expires: 0");//no-cache
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");//no-cache
header("content-disposition: attachment;filename=sampleword.doc");      
echo "<html>";
echo "<h1 align='center'>To Whom It May Concern</h1>";
echo "<p>This is to certify that $student_name is the son of $student_father & $student_mother. He is studying in $student_subject_name in our institute, Session $season_year and his bearing Roll No. is $roll_number. He is a regular student and bears a good moral character.
The duration of this program is $bachelor_course_duration and the medium of instruction is in English.</p>";
echo "<p>I wish every success in his life.</p>";
echo "</html>";
?>