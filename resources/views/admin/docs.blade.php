
<?php
    header("Content-Type: application/vnd.msword");
    header("Expires: 0");//no-cache
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");//no-cache
    header("content-disposition: attachment;filename=sampleword.doc");      
    echo "<html>";

    echo "<h2>FAMILY RELATIONSHIP CERTIFICATE</h2>
		  <h3>To Whom It May Concern</h3>
		  <p>
		  	This is to certify that  $std_name  (Applicant) is the son of 
		  	 $student_father  (Father) &  $student_mother  (Mother) respectively. 
		  	Personally, I know him and his family members. Please refer to the 
		  	below table that states the family members name, address and their 
		  	relationship.
		  	<br><br>
		  	<table width='100%'>
		  		<tr> 
		  			<th> Relationship </th>
		  			<th> Name </th>
		  			<th> Date of Birth </th>
		  			<th> Occupation </th>
		  			<th> Permanent Address & Present Address </th>
		  		</tr>
		  		<tr> 
		  			<th>  Father </th>
		  			<td>  $student_father  </td>
		  			<td>  $student_father_dateof_birth  </td>
		  			<td>  $student_father_occupation  </td>
		  			<td>  $student_father_permanent_address  <br>  $student_father_present_address  </td>
		  		</tr>
		  		<tr> 
		  			<th>  Mother </th>
		  			<td>  $student_mother  </td>
		  			<td>  $student_mother_dateof_birth  </td>
		  			<td>  $student_mother_occupation  </td>
		  			<td>  $student_mother_permanent_address  <br>  $student_mother_present_address  </td>
		  		</tr>
		  		<tr> 
		  			<th>  Brother </th>
		  			<td>  $student_brother  </td>
		  			<td>  $student_brother_dateof_birth  </td>
		  			<td>  $student_brother_occupation  </td>
		  			<td>  $student_brother_permanent_address  <br>  $student_brother_present_address  </td>
		  		</tr>
		  		<tr> 
		  			<th>  Sister </th>
		  			<td>  $student_sister  </td>
		  			<td>  $student_sister_dateof_birth  </td>
		  			<td>  $student_sister_occupation  </td>
		  			<td>  $student_sister_permanent_address  <br>  $student_sister_present_address  </td>
		  		</tr>
		  	</table>
		  </p>";

    echo "</html>";      
?> 