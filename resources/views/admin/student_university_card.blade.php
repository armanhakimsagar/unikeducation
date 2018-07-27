<?php
header("Content-Type: application/vnd.msword");
header("Expires: 0");//no-cache
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");//no-cache
header("content-disposition: attachment;filename=sampleword.doc"); 
echo "<html>";
echo "Logo here";
echo "<p>Name : $student_name</p><p>Father's Name : $student_father</p>
<p>Mother's Name  : $student_mother</p>
<p>Honours   Final   : $student_subject_name</p>
<p>Roll : $roll_number</p>       
<p>Session : $season_year</p>        
<p>Duration : $bachelor_course_duration</p>";
echo "</html>";
?>