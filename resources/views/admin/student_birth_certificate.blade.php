<?php
header("Content-Type: application/vnd.msword");
header("Expires: 0");//no-cache
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");//no-cache
header("content-disposition: attachment;filename=sampleword.doc");      
echo "<html>";
echo "<h2 align='center'>People Republic of Bangladesh</h2>
<h3 align='center'>Office of the Register of Birth and Death</h3>
<h3 align='center'>Zone - 3, Dhaka North City Corporation</h3>
<h3 align='center'>Dhaka, Bangladesh.</h3> <br><br>";
echo "<h1 style='text-align:center'>Birth Certificate</h1>
<p style='text-decoration:underline;text-align:center'>[rule-9 of Birth and Death Registration (Municipalty) Rules, 2006]
(Extract from Birth Register)</p>";
echo "<p>Register No:<p><p>Ward No:</p><p>Date of Registration:</p>";
echo "<span style='float:left'>Birth Registration No : $birth_certificate_number</span>";
echo "<br><p>Name				: $student_name </p>
<p>Date of Birth		: $date_of_birth </p>			
<p>Sex: $sex</p>
<p>Place of Birth		: $place_of_birth</p>
<p>Father's Name		: $student_father</p>
<p>Father's Nationality	: Bangladeshi</p>
<p>Mother's Name		: $student_mother</p>
<p>Mother's Nationality	: Bangladeshi</p>
<p>Permanent Address	: $student_permanent_address </p>
<p>Present Address		: $student_present_address </p>";
echo "</html>";