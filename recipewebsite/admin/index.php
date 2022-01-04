<?php require_once "../include/conn.php"; session_start(); ?>

<?php

if(!$_SESSION["username"]){
    
  header('Location: ../login.php?message=loginreq');
              exit;
}
?>
<?php include "head.php"; ?>
<title>Admin panel - Recipe App By Utkarsh</title>
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

if($_GET["message"] == "addedrecipe"){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Your Recipe Has been added succesfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
if($_GET["message"] == "recipedeleted"){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Your Recipe Has been Deleted succesfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
if($_GET["message"] == "recipeupdated"){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Your Recipe Has been Updated succesfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
if($_GET["message"] == "loginsuccess"){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>You are Now Logged In.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
}
?>
<h1 class="text-center my-3">All Recipe By You</h1>

<div class="container">
    <a href="add.php" class="btn btn-success">Add New Recipe</a>

    <?php
   
    try{
        $stmt = $conn->prepare("SELECT id, title FROM recipe WHERE username = :user");
        $stmt->execute(array(
            ":user"=>$_SESSION["username"],
        ));
        while ($row = $stmt->fetch()) {
             
             
                    echo '  <div class="navbar navbar-light bg-light my-2">
                    <div class="container-fluid">
                        <a>'.$row["title"].'</a>
                       <div class="my-3">
                           <a class="navbar-brand btn btn-success text-white" href="../recipe.php?id='.$row["id"].'">View</a>
                           <a class="navbar-brand btn btn-success text-white" href="edit.php?id='.$row["id"].'">Edit</a>
                           <button class="navbar-brand btn btn-warning" onclick="del('.$row['id'].')">Delete</button>
            
                       </div>
                    </div>
                </div>';
       

        }

    }catch (PDOException $e){
        $error[] = $e->getMessage();
    }
    
    ?>
  



</div>



<script>
    function del(id){
        check = confirm("Are you sure want to delete?");
        
        if(check){
            window.location.href = "delete.php?id=" + id;
            
        }
    }
</script>


<?php include "footer.php"; ?>