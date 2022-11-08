<?php
include 'database1.php';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $gender=$_POST['gender'];
    $rank=$_POST['rank'];
    $year=$_POST['year'];
    $address=$_POST['address'];
   
    $sql="insert into data(name,email,number,gender,rank,year,address) values('$name','$email','$number','$gender','$rank','$year','$address')";
    if(mysqli_query($con,$sql))
    {
        echo "<script>alert('new record inserted')</script>";
    }
    else{
        echo "error:".mysqli_error($con);
    }
    mysqli_close($con);

}   