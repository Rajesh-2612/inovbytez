<?php


$servername = 'localhost';
$username = "knowe717_abc";
$password = "MKUMCAinov";
$dbname = "madcap";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//$sql = mysqli_query($conn,"INSERT INTO sample VALUES ('" . $name . "' , '" . $age . "')") or die(mysql_error());
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = mysqli_query($conn,"INSERT INTO cap VALUES ('$_POST[i_code]','$_POST[name]','$_POST[email]','$_POST[d_name]','$_POST[course]','$_POST[year]','$_POST[in_name]','$_POST[city_name]','$_POST[cd_dropdown]','$_POST[cd_dropdown1]','$_POST[m_num]')")or die(mysql_error());

//mysqli_query($conn, $sql);
if ($sql) {
     header("Location: http://inovbytez.com/success/success.html");
       
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($sql);
}
// (`name`, `age`)

mysqli_close($conn);


    $to      = $_REQUEST['email'];
    $subject	= "Registration Completed Succesfully";
     $from = "Inovbytez@inovbytez.com";
        $headers = "From:" . $from . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = '<html><body>';
$message .= '<h1>Thank You For Your Registration</h1>';
$message .= '</body></html>';

   
    if (mail($to, $subject, $message, $headers)){
     
    }

  
?>