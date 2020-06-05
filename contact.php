<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['Emailid'];
    $number=$_POST['phonenumber'];
    $message=$_POST['message'];

    $mailto="chandanrevuri@outlook.com";
    $headers="from: ".$email;
    $txt="you have received email from ".$name.".\n\n".$message;
    
    if(empty($name) || empty($email) ||empty($number) || empty($message))
    {
        echo "please fill the fields";
    }
    else
    {
        mail($mailto,"Website Mail",$txt,$headers);
        header("Location: Index.html?mailsend");
        
    }
}
?>
