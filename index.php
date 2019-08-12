<?php
include_once 'header.php';
?>

<?php
if(isset($_SESSION['u_id']))
{
    echo "welcome ". $_SESSION['u_name'];
}
?>
<?php
include_once 'footer.php';
?>
