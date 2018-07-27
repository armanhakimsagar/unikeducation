
<?php
    header("Content-Type: application/vnd.msword");
    header("Expires: 0");//no-cache
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");//no-cache
    header("content-disposition: attachment;filename=sampleword.doc");      
    echo "<html>";
    echo "<h1 style='text-align:center'>Government of the People`s Republic of Bangladesh</h1>";
    echo "<h3 style='text-align:center'>National Board of Revenue<br>Income Tax Department</h3>";
    echo "<p style='text-align:center;text-decoration:underline'> Annual Income Certificate </p>";
    echo "<p> Name Mr/Mrs/M/s: $sponsor_name</p>";
    $total = $annual_income_year_1+$annual_income_year_2+$annual_income_year_3;
    echo "<p> Father`s Name: $sponsor_father</p>";
    echo "<p> Mother's Name	: $sponsor_mother</p>";
    echo "<p> Present Address: $sponsor_tin_present_address</p>";
    echo "<p> Permanent Address	: $sponsor_tin_permanent_address</p>";
    echo "<p> Status: Individual </p>";
    echo "<p> Tax Payer's Identification: E-TIN:: $sponsor_tin_number </p>";
	echo "<p> Her Annual Income of the year 2014-2015, 2015-2016, 2016-2017 has
given below: </p>";
	echo "<table width='100%'>
			<tr>
				<td>SL. No</td>
				<td>Income Source</td>
				<td>Amount</td>
			</tr>
			<tr>
				<td>1</td>
				<td>$sponsor_profession (2014-2015) </td>
				<td>$annual_income_year_1</td>
			</tr>
			<tr>
				<td>2</td>
				<td>$sponsor_profession (2015-2016)</td>
				<td>$annual_income_year_2</td>
			</tr>
			<tr>
				<td>3</td>
				<td>$sponsor_profession (2016-2017)</td>
				<td>$annual_income_year_3</td>
			</tr>
			<tr>
				<td></td>
				<td>Total Amount</td>
				<td>$total</td>
			</tr>
		  </table>";
echo "</html>";      
?> 