<?php
include_once 'header.php';
?>
<section class="main-container">
<div class="main-wrapper">
<h2>Signup</h2>
<form class="signup-form" action="signupdata.php" method="post">
    <input type="text" name="first" placeholder="Fisrtname">
     <input type="text" name="last" placeholder="lastname">
     <input type="email" name="email" placeholder="Email">
     <input type="text" name="uid" placeholder="Username">
     <input type="password" name="pwd" placeholder="Password">
     <button type="submit" name="submit">Sign Up</button>
    </form>
    
</div>
</section>
<?php
include_once 'footer.php';
?>
