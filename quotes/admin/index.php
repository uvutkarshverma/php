<?php require_once "../include/conn.php";
session_start();
if(!isset($_SESSION["username"])){
  header('Location: login.php?message=loginFailed');
  exit;
}

?>
<?php include "head.php";?>
<title>Get your Best quote Today</title>
<?php include "header.php";?>
<?php
if(isset($_GET["message"])){
    if($_GET["message"] == "loginsuccess"){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>You are SuccessFully Logged In.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    if($_GET["message"] == "quoteadded"){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>New Quote Has Been added Successfully .
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    if($_GET["message"] == "quoteupdated"){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Your Quote Has Been Updated Successfully .
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    if($_GET["message"] == "quoteDeleted"){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Your Quote Has Been Deleted Successfully .
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
}?>
<div class="container">
<h1 class="text-center my-5">All Quotes</h1>
<a href="add.php" class="btn btn-success text-center">Add New</a>
<?php
    
    $sql = $conn->prepare("SELECT * FROM `quote` WHERE username = :username");

    $sql->execute(array(
      ":username"=>$_SESSION["username"],
    ));


    foreach ($sql->fetchAll() as $row) {


        echo '<div class="card text-center my-3">
        <div class="card-body">
          <h5 class="card-title">' . $row["quote"] . '</h5>
          
          <a href="edit.php?id=' . $row["id"] . '" class="btn btn-primary">Edit</a>
          <a href="delete.php?id=' . $row["id"] . '" class="btn btn-danger" name="delete">Delete</a>
        </div>
      
      </div>';
    }



    ?>










</div>




<?php include "footer.php";?>