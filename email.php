<?php

if(isset($_POST['qsubmit']) and !empty($_POST['qsubmit'])){
    $qname=$_POST['qname'];
    $qphone=$_POST['qphone'];
    $qemail=$_POST['qemail'];

    $mail1_subject="Keyhole Heart Surgery Enquiry from Google Ads, " . $qname;
    $mail1_txt="Name :" . $qname . "<br>" . "Mobile :" . $qphone . "<br>" . "E-Mail :" . $qemail . "<br>";


// More headers
$headers .= 'From: <info@keyholeheartsurgery.in>' . "\r\n";

$to = "drrajesh_mr@yahoo.com, viralmafiacs2@gmail.com, cyril.viralmafia@gmail.com, suneshkrishnan@gmail.com";
$url = 'http://viralmafia.com/demo/jsonmailerkeyhole.php';
$ch = curl_init($url);
$data = array(
    'to' => $to,
    'subject' => $mail1_subject,
    'messagenew' => $mail1_txt,
    'headers' => $headers,
);
$payload = json_encode($data);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$complete = curl_exec($ch);
curl_close($ch);

    if($complete){
        header("location:sucess/index.html");
    }
}


if(isset($_POST['esubmit']) and !empty($_POST['esubmit'])){
    $qname=$_POST['ename'];
    $qphone=$_POST['ephone'];
    $qemail=$_POST['eemail'];
    $qmessage=$_POST['emessage'];

    $mail1_subject="Keyhole Heart Surgery Enquiry from Google Ads, " . $qname;
    $mail1_txt="Name :" . $qname . "<br>" . "Mobile :" . $qphone . "<br>" . "E-Mail :" . $qemail . "<br>" . "Message :" . $qmessage . "<br>";


// More headers
$headers .= 'From: <info@keyholeheartsurgery.in>' . "\r\n";

$to = "drrajesh_mr@yahoo.com, viralmafiacs2@gmail.com, cyril.viralmafia@gmail.com, suneshkrishnan@gmail.com";
$url = 'http://viralmafia.com/demo/jsonmailerkeyhole.php';
$ch = curl_init($url);
$data = array(
    'to' => $to,
    'subject' => $mail1_subject,
    'messagenew' => $mail1_txt,
    'headers' => $headers,
);
$payload = json_encode($data);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$complete = curl_exec($ch);
curl_close($ch);

    if($complete){
        header("location:sucess/index.html");
    }
}


if(isset($_POST['bsubmit']) and !empty($_POST['bsubmit'])){
    $qname=$_POST['bname'];
    $qphone=$_POST['bphone'];
    $qemail=$_POST['bemail'];

    $mail1_subject="Keyhole Heart Surgery Enquiry from Google Ads, " . $qname;
    $mail1_txt="Name :" . $qname . "<br>" . "Mobile :" . $qphone . "<br>" . "E-Mail :" . $qemail . "<br>" . "Message :" . $qmessage . "<br>";


// More headers
$headers .= 'From: <info@keyholeheartsurgery.in>' . "\r\n";

$to = "drrajesh_mr@yahoo.com, viralmafiacs2@gmail.com, cyril.viralmafia@gmail.com, suneshkrishnan@gmail.com";
$url = 'http://viralmafia.com/demo/jsonmailerkeyhole.php';
$ch = curl_init($url);
$data = array(
    'to' => $to,
    'subject' => $mail1_subject,
    'messagenew' => $mail1_txt,
    'headers' => $headers,
);
$payload = json_encode($data);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$complete = curl_exec($ch);
curl_close($ch);

    if($complete){
        header("location:sucess/index.html");
    }
}


if(isset($_POST['rsubmit']) and !empty($_POST['rsubmit'])){
    $qname=$_POST['rname'];
    $qphone=$_POST['rphone'];
    $qemail=$_POST['remail'];

    $mail1_subject="Keyhole Heart Surgery Enquiry from Google Ads, " . $qname;
    $mail1_txt="Name :" . $qname . "<br>" . "Mobile :" . $qphone . "<br>" . "E-Mail :" . $qemail . "<br>" . "Message :" . $qmessage . "<br>";


// More headers
$headers .= 'From: <info@keyholeheartsurgery.in>' . "\r\n";

$to = "drrajesh_mr@yahoo.com, viralmafiacs2@gmail.com, cyril.viralmafia@gmail.com, suneshkrishnan@gmail.com";
$url = 'http://viralmafia.com/demo/jsonmailerkeyhole.php';
$ch = curl_init($url);
$data = array(
    'to' => $to,
    'subject' => $mail1_subject,
    'messagenew' => $mail1_txt,
    'headers' => $headers,
);
$payload = json_encode($data);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$complete = curl_exec($ch);
curl_close($ch);

    if($complete){
        header("location:sucess/index.html");
    }
}


if(isset($_POST['nsubmit']) and !empty($_POST['nsubmit'])){
    $qname=$_POST['nname'];
    $qphone=$_POST['nphone'];
    $qemail=$_POST['nemail'];

    $mail1_subject="Keyhole Heart Surgery Enquiry from Google Ads, " . $qname;
    $mail1_txt="Name :" . $qname . "<br>" . "Mobile :" . $qphone . "<br>" . "E-Mail :" . $qemail . "<br>" . "Message :" . $qmessage . "<br>";


// More headers
$headers .= 'From: <info@keyholeheartsurgery.in>' . "\r\n";

$to = "drrajesh_mr@yahoo.com, viralmafiacs2@gmail.com, cyril.viralmafia@gmail.com, suneshkrishnan@gmail.com";
$url = 'http://viralmafia.com/demo/jsonmailerkeyhole.php';
$ch = curl_init($url);
$data = array(
    'to' => $to,
    'subject' => $mail1_subject,
    'messagenew' => $mail1_txt,
    'headers' => $headers,
);
$payload = json_encode($data);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$complete = curl_exec($ch);
curl_close($ch);

    if($complete){
        header("location:sucess/index.html");
    }
}


?>