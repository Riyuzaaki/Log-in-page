<?php
  if(isset($_POST['submit']))
    {  echo "firoz";
        session_start();
        session_unset();
        session_destroy();
        header("Location: index.php");
        exit();
    }
?>