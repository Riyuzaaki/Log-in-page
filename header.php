<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>login system</title>
</head>
<body>
<header>
<nav>
<div class="main-wrapper">
      
    <div class="nav-login">
        <?php
        if (isset($_SESSION['u_id']))
        {
            echo '<form action="logout.php" method="post">
            <button type="submit" name="submit">Logout</button>
            </form>';
        }
        else
        { echo '<form action="login.php" method="post">
            <input type="text" name="uid" placeholder="username/email">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="submit">Log in</button>
        </form>
        <a href="signup.php">Sign Up</a>';}
        ?>       
        
    </div>
    </div>    
</nav>
</header>