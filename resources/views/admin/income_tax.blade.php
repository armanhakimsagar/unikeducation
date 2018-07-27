
<?php
    header("Content-Type: application/vnd.msword");
    header("Expires: 0");//no-cache
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");//no-cache
    header("content-disposition: attachment;filename=sampleword.doc");      
    echo "<html>";
    echo "<h1 style='text-align:center'>Government of the People`s Republic of Bangladesh </h1>";
    echo "<h3 style='text-align:center'>National Board of Revenue<br>Income Tax Department</h3>";
    
    echo "<p style='text-align:center;text-decoration:underline'> INCOME TAX CERTIFICATE </p>";
    echo "<h4>PARTICULARS OF ASSESSEE:</h4>";
    echo "<p> Name Mr/Mrs/M/s: $sponsor_name</p>";
    echo "<p> Father`s Name: $sponsor_father</p>";
    echo "<p> Present Address: $sponsor_tin_present_address</p>";
    echo "<p> Permanent Address	: $sponsor_tin_permanent_address</p>";
    echo "<p> Status: Individual </p>";
    echo "<p> Tax Payer's Identification: TIN:: $sponsor_tin_number </p>";
	echo "<p> THIS IS TO CERTIFY THAT HER ASSESSMENT HAS BEEN COMPLETED FOR THE ASSESSMENT YEAR 2014-2015, 2015-2016, 2016-2017 AND TAXES PAID IN FULL. AS PER HER APPLICATION THE FOLLOWING PARTICULARS ARE GIVEN BELOW. </p>";
	echo "<table width='100%'>
			<tr>
				<td>ASSESSMENT YEAR</td>
				<td>ANNUAL INCOME</td>
				<td>TAX PAYMENT</td>
			</tr>
			<tr>
				<td>2014-2015</td>
				<td>$annual_income_year_1</td>
				<td>$annual_incometax_year_1</td>
			</tr>
			<tr>
				<td>2015-2016</td>
				<td>$annual_income_year_2</td>
				<td>$annual_incometax_year_2</td>
			</tr>
			<tr>
				<td>2016-2017</td>
				<td>$annual_income_year_3</td>
				<td>$annual_incometax_year_3</td>
			</tr>
		  </table>";
echo "</html>";      
?> 