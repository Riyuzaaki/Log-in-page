<?php
if(isset($_POST['submit']))
{
    include_once 'dbh.php';
    
    $first = mysqli_real_escape_string($conn,$_POST['first']);
    $last = mysqli_real_escape_string($conn,$_POST['last']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $uid = mysqli_real_escape_string($conn,$_POST['uid']);
    $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
    
    //error handling
    if(empty($first)||empty($last)||empty($email)||empty($uid)||empty($pwd))
    {
       header("Location: signup.php?signup=empty");
        exit();  
    }
    else //formvalidation
    { if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last))
        {
          header("Location: signup.php?signup=invalid");
        exit(); 
        }
     else {
         $sql = "SELECT * FROM users WHERE username='$uid'";
         $result = mysqli_query($conn,$sql);
         $resultcheck = mysqli_num_rows($result);
          if($resultcheck>0)
          {header("Location: signup.php?signupo=usertaken");
              exit();
          }
          else
          {
             //hashing the password
              $hashpwd = password_hash($pwd, PASSWORD_DEFAULT);
            //INTO DATA BASE
              $sql= "INSERT INTO users( userfirst, userlast, useremail, username, userpwd) VALUES ('$first', '$last', '$email', '$uid', '$hashpwd');";
            $result = mysqli_query($conn,$sql);
             header("Location: signup.php?signup=sucess");
          }
              
     }
    }
    
        
}

else
{
    header("Location: signup.php");
    exit();
}
?>