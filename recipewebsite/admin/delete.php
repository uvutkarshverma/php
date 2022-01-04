<?php require_once "../include/conn.php" ?>
<?php
session_start(); ?>

<?php
if(!$_SESSION["username"]){
    
    header('Location: ../login.php?message=loginreq');
                exit;
}
 if ($_GET["id"]) {



    $sql = $conn->prepare("DELETE FROM `recipe` WHERE id = " . $_GET['id'] . "");
    $sql->execute();
    if ($sql) {
        header('Location: index.php?message=recipedeleted');
        exit;
    }
}


?>