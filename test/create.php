<!DOCTYPE html>
<?php

include 'connection.php';
$id=$POST['inputId'];
$name = $POST['inputName'];
$email_id = $POST['inputEmail'];
$date = $POST['inputDate'];
$intime=$POST['inputTime'];
$outtime=$POST['inputOdate'];

if($_REQUEST['submit'])
{
    
     
    mysql_query("INSERT INTO office(id,name,email_id,date,in-time,out-time) VALUES ('$id','$name','$email_id','$date','$intime','$outtime')") or die(mysql_error());
           echo 'User has been added';
           header('Location:index.php');
}
        else

        {
           
           echo 'please fill out the form';
           header('Location: index.php');
        }
        
        mysql_query("SELECT * FROM office");       
?>
