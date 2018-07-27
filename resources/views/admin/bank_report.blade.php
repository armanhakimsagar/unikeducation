<?php
header("Content-Type: application/vnd.msword");
header("Expires: 0");//no-cache
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");//no-cache
header("content-disposition: attachment;filename=sampleword.doc");      
echo "<html>";
echo "<h2 align='center'>TO WHOM IT MAY CONCERN</h1><p>Date: <br><br>
This is to ceftify that $sponsor_name, son of $sponsor_father, his present address 
$sponsor_tin_present_address, has been maintaining a Savings 
Account bearing No. $sponsor_bank_account_number with our Branch.
The balance of his account is BDT $sponsor_bank_account_balance (Taka $sponsor_bank_account_balance_in_word)<br>To the best of our knowledge he is financially sound and solvent.
We wish him every success in life,<br><br>
Authorized Signatory<br>
Md. Rashidul Hassan<br>
Manager in Charge<br>
Dutch-Bangla Bank Limited<br>
Sirajganj Branch, Sirajganj
</p>";
