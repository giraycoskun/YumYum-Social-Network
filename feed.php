<?php 
$title = 'Yum-Yum Home';
require_once 'components/header.php'; 
$mail = $_GET['mail'];
?>

<?php require_once 'components/tabs.php'; ?>

<p>Welcome to Your Feed <?php echo $mail?></p>

<?php require_once 'components/footer.php'; ?>