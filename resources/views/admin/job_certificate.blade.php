<?php
header("Content-Type: application/vnd.msword");
header("Expires: 0");//no-cache
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");//no-cache
header("content-disposition: attachment;filename=sampleword.doc");      
echo "<html>";
echo "<h2 align='center'>TO WHOM IT MAY CONCERN</h2> <br><br>";
$total = $sponsor_yearly_basic_salary+$sponsor_travel_allowance+$sponsor_insurance+$sponsor_housing_allowance+$sponsor_yearly_bonus+$sponsor_others;

echo "<p>This is to certify that  $sponsor_name  is the son of $sponsor_father. He is working as a  $sponsor_job_designation  at Company starting from  $student_job_starting_date  to  $student_job_to_till_date .<br>His annual salary details are as below: </p>";
echo "<table width='100%'><tr><td> Sl No</td><td>Details</td><td> </td></tr><tr><td> 01 </td><td>Yearly Basic Salary </td><td>  $sponsor_yearly_basic_salary  </td></tr><tr><td> 02 </td><td>Yearly Bonus </td><td>  $sponsor_yearly_bonus  </td></tr><tr><td> 03 </td><td>Travel allowance</td><td>  $sponsor_travel_allowance  </td></tr><tr><td> 04 </td><td>Insurance</td><td>  $sponsor_insurance  </td></tr><tr><td> 05 </td><td>Housing  allowance</td><td>  $sponsor_housing_allowance  </td></tr><tr><td> 06 </td><td>Others</td><td>  $sponsor_others  </td></tr><tr><td></td><td>Total annual income</td><td> $total </td></tr></table>";
echo "<p>He is serving in our company as a $sponsor_job_designation with sincere efforts & excellent performance. His interpersonal skills are outstanding. He has been very helpful and highly appraised by his manners.<br>I wish him every success in life.</p>";
echo "</html>";