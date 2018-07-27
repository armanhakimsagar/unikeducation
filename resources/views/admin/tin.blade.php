
<?php
header("Content-Type: application/vnd.msword");
header("Expires: 0");//no-cache
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");//no-cache
header("content-disposition: attachment;filename=sampleword.doc");      
echo "<html>";
echo "<h1 style='text-align:center'>Government of the People's Republic of Bangladesh</h1><h3 style='text-align:center'>National Board of Revenue<br>Taxpayer's Identification Number (TIN) Certificate<br>TIN : $sponsor_tin_number</h3>";
echo "<p>This is to Certify that <b> $sponsor_name </b> is a Registered Taxpayer of National Board of Revenue under the jurisdiction of Taxes Circle-053, Taxes Zone 03, Dhaka.</p>";  
echo "<p>Taxpayer's Particulars :</p>";
echo "<p>1) Name : $sponsor_name</p>";
echo "<p>2) Father's Name : $sponsor_father</p>";
echo "<p>3) Mother's Name : $sponsor_mother</p>";
echo "<p>4.a) Current Address : $sponsor_tin_present_address</p>";
echo "<p>4.b) Permanent Address : $sponsor_tin_permanent_address</p>";   
echo "<p>5) Previous TIN : Not Applicable</p>";
echo "<p>6) Status : Individual</p>";
echo "<p>Date : August 10, 2016

	1. A Taxpayer is liable to file the Return of Income
	 under section 75 of the Income Tax Ordinance, 1984.
	2. Failure to file Return of Income under section 75 
	is liable
	to- under section 124;
	N. B: This is a system generated certificate and requires no manual signature.</p>";
	


    echo "</html>";      
?> 