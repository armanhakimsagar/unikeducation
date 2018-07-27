<?php
header("Content-Type: application/vnd.msword");
header("Expires: 0");//no-cache
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");//no-cache
header("content-disposition: attachment;filename=sampleword.doc");      
echo "<html>";
echo "<h2 style='text-align:center'> 事　前　調　査　票 Prior Investigation Form </h2>";
echo "<h4>申請者の履歴票	Resume of Applicant</h4>";
echo "<p>1.氏名Name：　$student_name </p>";        

echo "<p>2.Date of Birth：　$date_of_birth </p>";
echo "<p>3.Place of birth：　$place_of_birth </p>"; 
echo "<p>4.Present Address: $student_present_address </p>";

echo "<p>5.本籍地Permanent Address: $student_permanent_address";
echo "<p>6.学歴 Education records：〔初等教育(小学校)から順次最終学歴まで〕from Elementary to Final education all records are required.</p>";
echo "<table border='1px' width='100%'><tr><th>学校名Name of school & 所在地Address </th><th>入 学 年月日Date of Admission</th><th>卒 業 年月日Date of Graduation</th><th>卒 業 年月日Duration</th></tr>
			<tr><td>$primarys</td><td>$primary_school_course_start_date</td><td>$primary_school_graduation_date</td><td>$primary_school_course_duration</td></tr>
			<tr><td>$ssc</td><td>$SSC_course_start_date</td><td>$SSC_graduation_date</td><td>$SSC_course_duration</td></tr>
			<tr><td>$hsc</td><td>$HSC_course_start_date</td><td>$HSC_graduation_date</td><td>$HSC_course_duration</td></tr>
			<tr><td>$bachelor</td><td>$bachelor_course_start_date</td><td>$bachelor_graduation_date</td><td>$bachelor_course_duration</td></tr>
			<tr><td>$masters</td><td>$masters_course_start_date</td><td>$masters_graduation_date</td><td>$masters_course_duration</td></tr></table>";

echo "<br><p>7.日本語学習歴Record of studying Japanese：□無No・√□有Yes (独学の場合も記入Including of Self-Study)</p>";

echo "<table border='1px' width='100%'><tr><th>学校名Name of school</th><th>所在地Address</th><th>入 学 年月日Date of Admission</th><th>卒 業 年月日Date of Graduation</th><th>就学期間Period (years)</th></tr>
			<tr><td>$japanese_language_school_name</td><td>$japanese_school_address</td><td>$japanese_course_start_date</td><td>$japanese_graduation_date</td><td>$japanese_course_duration</td></tr></table>";
echo "<br><br><br><br><br><br><p>8. 日本語能力試験受験の有無：　√有・無　　  （受験級：　 　　 級　得点：　　　点）</p>
<p>JLPT :                        √Yes/No          Level: N5         level:       Point:  85 </p>
<p>Nat- Test 		     √Yes/No	      Level: N5         level:       Point:  99     </p>";	


echo "9.職歴・兵役Occupation Carrier( including military service )：√□無No・□有Yes";

echo "<br><br><p>10.職歴・兵役Occupation Carrier( including military service )：√□無No・□有Yes</p>";
//echo "<br><br><table border='1px' width='100%'><tr><th>勤務先Name of Company  </th><th>所在地Address</th><th>就職年月日Date of Employment</th><th>退職年月日Date of Retirement</th><th>就学期間Period (years)</th></tr>
//			<tr><td>data </td><td>data </td><td>data </td><td>data </td><td>data </td></tr></table>";	

echo "<br><br>11.出入国歴： Previous Stay in Japan：√□無No・□有Yes";

//echo "<br><br><table border='1px' width='100%'><tr><th>入国年月日Date of Entry </th><th>出国年月日Date of Departure</th><th>在留資格Status</th><th>入国目的Purpose of Entry</th></tr>
//			<tr><td>data </td><td>data </td><td>data </td><td>data </td></tr></table>";	
echo "<br><br><p> 12.修了後の予定 Specific Plan after Graduation </p>
<p>
□ 進学希望 Applicant for school 
進学希望先学校名 Name of the school：           Not Decided                   
     	希 望 科 目(専攻) Major 　　　  ：          Textile Engineering                  
</p>
<p>
□ その他 Other　： </p>";

echo "13. 家族 Family";
echo "<table border='1px' width='100%'><tr><td>氏名 Full Name</td><td>年齢Age</td><td>続柄Relationship</td><td>職業Occupation</td><td>現住所Present Address  & 本籍地Permanent Address</td></tr>
			<tr><td> $student_father </td><td> $student_father_dateof_birth </td><td> Father </td><td> $student_father_occupation </td><td> $student_father_present_address ,$student_father_permanent_address</td></tr>
			<tr><td> $student_mother </td><td> $student_mother_dateof_birth </td><td> Mother </td><td> $student_mother_occupation </td><td> $student_father_present_address , $student_father_permanent_address</td></tr>
			<tr><td> $student_brother </td><td> $student_brother_dateof_birth </td><td> Brother </td><td> $student_brother_occupation </td><td> $student_father_present_address , $student_father_permanent_address</td></tr>
			<tr><td> $student_sister </td><td> $student_sister_dateof_birth </td><td> Sister </td><td> $student_sister_occupation </td><td> $student_father_present_address , $student_father_permanent_address</td></tr>
			<tr><td> $student_other </td><td> $student_other_dateof_birth </td><td> Other </td><td> $student_others_occupation </td><td> $student_father_present_address , $student_father_permanent_address</td></tr></table>";
echo "<br><br><br><p>14. 経費支弁者について下記の質問にお答えください。
Please answer the following questions about guarantor:</p>";
echo "<table border='1px' width='100%'><tr><td>1.</td><td>経費支弁者氏名Guarantor Name</td><td>$sponsor_name</td></tr>
			<tr><td>2.</td><td>経費支弁者の住所Guarantor Address </td><td>$present_address</td></tr>
			<tr><td>3.</td><td> 経費支弁者の職業Guarantor Occupation</td><td>$sponsor_profession</td></tr>
			<tr><td>5.</td><td> 経費支弁者の年収Guarantor Annual Income</td><td>$annual_income_year_3</td></tr>
			<tr><td>6.</td><td>申請人との関係：Relationship </td><td>$relation_with_sponsor</td></tr></table>";
echo "<p> 以上の事はすべて真実であり、私　　$student_name           　　　が直筆したものです。</p>";
echo "<p>I hereby declare above statement is true and correct.        Applicant’s name          I wrote this personal record by myself.";
echo "</html>";      
?> 