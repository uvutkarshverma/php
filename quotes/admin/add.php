<?php require_once "../include/conn.php"?>
<?php
session_start();
if(!isset($_SESSION["username"])){
    header('Location: login.php?message=loginFailed');
    exit;
}
if (isset($_POST["submit"])) {
    extract($_POST);
    if($quote == ""){
        $error[] = "Please Write Some Quote";
    }
    if(!isset($error)){
        try{
            $stmt = $conn->prepare("INSERT INTO `quote` (`quote`, `username`) VALUES (:quote, :username)");
            $stmt->execute(array(
                ":quote"=>$quote,
                ":username"=>$_SESSION["username"],
            ));
            header('Location: index.php?message=quoteadded');
         } catch (PDOException $e) {
            echo $e->getMessage();
        }
       
    }

}


?>





<?php include "head.php";?>
<title>Get your Best quote Today</title>
<?php include "header.php";?>


<div class="container">

<h1 class="text-center my-5">
    Add Your Quote
</h1>
<form method="Post" action="">
<div class="mb-3">
  <label for="quote" class="form-label">Enter Your quote to Add</label>
  <textarea class="form-control" id="quote" name ="quote" rows="5"></textarea>
</div>
  <button type="submit" class="btn btn-primary" name="submit">Add Quote</button>
</form>



</div>











<?php include "footer.php";?>