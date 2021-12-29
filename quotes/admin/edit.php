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
if (isset($_POST["submit"])) {
    extract($_POST);
    if($quote == ""){
        $error[] = "Please Write Some text";
    }
    if(!isset($error)){
        try{
            $stmt = $conn->prepare("UPDATE `quote` SET `quote` = :quote WHERE `id` = :id");
            $stmt->execute(array(
                ":quote"=>$quote,
                ":id"=>$id,
            ));
            header('Location: index.php?message=quoteupdated');
         } catch (PDOException $e) {
            echo $e->getMessage();
        }
       
    }

}


?>



<?php include "head.php";?>
<title>Edit your Quote</title>
<?php include "header.php";?>


<div class="container">

<h1 class="text-center my-5">
    Edit Your Quote
</h1>
<form method="Post" action="">
<div class="mb-3">
  <label for="quote" class="form-label">Update Your quote</label>
  <?php
    
    $sql = $conn->prepare("SELECT * FROM `quote` WHERE id = :id");

    $sql->execute(array(
      ":id"=>$id,
    ));
    $row = $sql->fetch();

    echo '<textarea class="form-control" id="quote" rows="5" name="quote">'.$row["quote"].'</textarea>';
?>
  
</div>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>

</div>











<?php include "footer.php";?>