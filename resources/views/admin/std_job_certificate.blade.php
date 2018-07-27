<?php
header("Content-Type: application/vnd.msword");
header("Expires: 0");//no-cache
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");//no-cache
header("content-disposition: attachment;filename=sampleword.doc");  
echo "<html>";
echo "<h1 align='center'>To Whom It May Concern</h1>";
echo "<p>This is to certify that $student_name is the son of $student_father. He is working as an $student_job_designation in our company from $student_job_starting_date to $student_job_to_till_date. 
He performs his duties diligently and he is proactive in his approach to work. He is an energetic young man of amiable manner and bears a good moral character.</p>
<p>I wish every success in his life.</p>";
echo "</html>";
?>