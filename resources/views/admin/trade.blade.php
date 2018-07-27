<?php
header("Content-Type: application/vnd.msword");
header("Expires: 0");//no-cache
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");//no-cache
header("content-disposition: attachment;filename=sampleword.doc");  
echo "<html>";
echo "<h1 align='center'>Dhaka South City Corporation</h1>";
echo "<h3 align='center'>Revenue Division (Zone-04)</h3>";
echo "<h3 align='center'>Nagar Bhaban, (8th Floor), Dhaka</h3>";

echo "<h2 align='center'>Trade License</h3>"; 
echo "<p>Name of Owner/Taxpayer 	: $sponsor_name </p>";
echo "<p>Name of Father	: $student_father </p>";
echo "<p>Name of Mother 	: $student_mother </p>";
echo "<p>Address of Owner/Taxpayer : $sponsor_tin_present_address</p>";
echo "<p>Present Address of Residence :	$sponsor_tin_present_address</p>";		 
echo "<p>Permanent/Registered Address : $sponsor_tin_permanent_address</p>";
echo "<p>Paid Up Capital (For the ltd Companies ) :Taka </p>";
echo "<p>Business Firm phone & Email : 38/2 P K Rai Road, Banglabazar, Dhaka. </p>";
echo "<p>Serial Number 10 Ideal Tax Schedule, 2016: 57 (Kha) </p>";
echo "<p>Trade License/Renewal Fee		 : Taka (In Figure) 1000/- </p>";
echo "<p>Signboard Tax (Annual)		: Taka (In Figure ) </p>";
echo "<p>Invoice Issued 			: Book No. 0481209 </p>";
echo "</html>";