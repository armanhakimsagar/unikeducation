
<?php
    header("Content-Type: application/vnd.msword");
    header("Expires: 0");//no-cache
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");//no-cache
    header("content-disposition: attachment;filename=sampleword.doc");      
    echo "<html>";
    echo "<h2>GUARANTOR RELATIONSHIP CERTIFICATE</h2><h3>To Whom It May Concern</h3> <br><br>";
    echo "<p>This is to certify that $std_name (Applicant) is the son of $student_father (Father) & $student_mother (Mother) respectively. His present address $student_present_address.<br><br>$sponsor_name (Financial Supporter) permanent address is $sponsor_tin_permanent_address  </p>";
    echo "Please refer below that states their relationship.<br><br>";
    echo "Applicant’s Name	: $std_name <br>";
    echo "Nationality   :   Bangladeshi <br>";
    echo "Date of Birth	: $date_of_birth <br>";
    echo "Gender: $sex<br>";
    echo "Present Address:  $student_present_address<br>";
    echo "Permanent Address	:   $student_permanent_address <br>";
    echo "Phone Number	:   $phone_number <br>";
   
    echo "Applicant Father’s Name	: $student_father <br>";
    echo "Applicant Mother’s Name	:   $student_mother <br><br>";
     echo "Financial Supporter Name: $sponsor_name <br>";
    echo "Nationality: Bangladeshi<br>";
    echo "Present Address: $sponsor_tin_present_address <br>";
    echo "Permanent Address	: $sponsor_tin_permanent_address<br>";
    echo "Phone Number : $sponsor_bank_phone_number <br>";
    echo "<p>Relationship with applicant:  Relation between $sponsor_name (Financial Supporter)";
    echo "& $std_name (Applicant) is Paternal $relation_with_sponsor."; 

    echo "</html>";      
?> 