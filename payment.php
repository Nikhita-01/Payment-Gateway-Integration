<?php

//variable setting
$name = $_REQUEST['NAME'];
$email = $_REQUEST['EMAIL'];
$mbo = $_REQUEST['MOBILE NO'];
$state = $_REQUEST['STATE'];


//check input fields
if(empty($name) || empty($email) || empty($mbo) || empty($state) ))
{
    echo "Dear Donor, please fill all the fields";
}
else
{
    mail($email, "Transaction Succesfull!", "Dear Sir/Madam, Thank you for your kind donation of INR $amount to The Sparks Foundation. This can be treated as confirmation to your donation.");
}

?>