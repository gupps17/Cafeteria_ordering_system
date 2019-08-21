<?php
   
   session_start();
  
if(isset($_POST['submit'])){ 
include_once 'dbh.inc.php';
$_SESSION['reg']= $_POST['reg'];
$reg = mysqli_real_escape_string($conn,$_POST['reg']);
   $pass = mysqli_real_escape_string($conn,$_POST['pass']);
   if(empty($reg)||empty($pass))
   {
	   header("Location: index.php?login=empty"); exit();
   }
   else{
	   $sql="select * from login where reg='$reg' or pass='$pass'";
     $result=mysqli_query($conn,$sql);
     $resultCheck=mysqli_num_rows($result);
       if($resultCheck <1)
       {
         header("Location: index.php?login=error"); exit();
       }
       else{
        echo "hello";
       }
}
}
else
  {
	  header("Location: index.php?login=error"); exit();
  }