<?php require_once "../include/conn.php"?>
<?php
session_start();
if(!isset($_SESSION["username"])){
    header('Location: login.php?message=loginFailed');
    exit;
}
if(isset($_GET["id"])){
  $id = $_GET["id"];
}

        try{
            $stmt = $conn->prepare("DELETE FROM `quote` WHERE `id` = :id");
            $stmt->execute(array(
                ":id"=>$id,
            ));
            header('Location: index.php?message=quoteDeleted');
         } catch (PDOException $e) {
            echo $e->getMessage();
        }
       
  


?>