<?php require_once "include/conn.php"; ?>
<?php include "head.php"; ?>
<title>Recipe App By Utkarsh</title>
<?php include "header.php"; ?>
<?php
if(isset($error)){
    foreach($error as $errors){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>'.$errors.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
}
if(isset($_GET["message"])){

if($_GET["message"] == "loginsuccess"){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>You are Now Logged In.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
if($_GET["message"] == "queryreq"){
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Please Type Some Keyword to Search.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
}
?>
<div class="container" style="min-height: 300px;">
<h1 class="text-center my-5">
    Search Your Recipe
</h1>
<form class="flex-column justify-content-center my-5" method="GET" action="search.php">
 
  <div class="mb-3">
    
    <input  type="text" class="form-control" id="" placeholder="Search Your Recipe" name="query">
  </div>
  
  <div  style="text-align:center;"><button  type="submit" class=" mx-4 btn btn-primary text-center">Search Now</button></div>
</form>


</div>


<?php include "footer.php"; ?>