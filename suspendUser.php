<?php 

$title = 'Suspending User';
require_once 'components/header.php';
require_once 'components/auth_check.php'; 
require_once 'db/conn.php'
//echo "hi";
if(!isset($_GET['id'])){
    echo "bir sıkıntı var";
    
} else{
    $id = $_GET['id'];

?>

<div class="container">
<h1>HElloo</h1>

</div>

<?php require_once 'components/footer.php'; ?> 