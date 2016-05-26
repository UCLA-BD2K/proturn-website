<?php
//Get the data from POST
$licensee = $_REQUEST['licensee'];
$name = $_REQUEST['name'];
$title = $_REQUEST['title'];
$address1 = $_REQUEST['address1'];
$address2 = $_REQUEST['address2'];
$address3 = $_REQUEST['address3'];
$email = $_REQUEST['email'];
$telephone = $_REQUEST['telephone'];
$signature = $_REQUEST['signature'];
$date = $_REQUEST['date'];
$file_data = "new submission\nlicensee: " . $licensee . "\nname: " . $name . "\ntitle: " . $title . "\naddress: " . $address1 . "\n" . $address2 . "\n" . $address3 . "\nemail: " . $email . "\ntelephone: " . $telephone . "\nsignature: " . $signature . "\ndate: " . $date . "\n";
$file = fopen("/proturn_signups/_" . $email . ".txt","a+");
fwrite($file,$file_data);
print_r(error_get_last());

//redirect
header("Location: http://proturn.heartproteome.org/download/archive");
?>
