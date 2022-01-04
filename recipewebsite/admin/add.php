
<?php require_once "../include/conn.php"?>
<?php
    session_start();
if(!$_SESSION["username"]){
    
    header('Location: ../login.php?message=loginreq');
                exit;
}
if (isset($_POST["submit"])) {
    extract($_POST);


    if ($title == "") {
        $error[] = "Please Enter title";
    }

    if ($description == "") {
        $error[] = "Please enter description";
    }
    if ($ingre == "") {
        $error[] = "Please enter Ingredients";
    }
    if ($steps == "") {
        $error[] = "Please enter Steps";
    }
 
  
    
    if (!isset($error)) {
        if($_FILES['image']){
               $file_name = $_FILES['image']['name'];
               $file_size = $_FILES['image']['size'];
               $file_tmp = $_FILES['image']['tmp_name'];
               $file_type = $_FILES['image']['type'];
               $text = explode('.',$file_name);
               $file_ext = strtolower(end($text));
               $extension = array("jpeg","jpg","png","svg");
               $filename=$text[0];
   
               if(in_array($file_ext,$extension) === false){
                   $error[] = "please upload a valid image type error";
               }
               if(empty($error) == true){
                   $root = $_SERVER["DOCUMENT_ROOT"];
                   $dir = $root . '/recipeWebsite/assets/images';
                  
                   $dir .= "/".$file_name;
                   if(!move_uploaded_file($file_tmp,$dir)){
                       echo "failed";
                   }

                  
               }else{
                   print_r($error);
                   die();
               }
               
           }


 
            $sql = $conn->prepare("INSERT INTO `recipe` (`username`,`title`, `description`,`ingredients`,`steps`,`mainimg`) VALUES (:username,:title,:description,:ingredients,:steps,:mainimg)");
            $sql->execute(array(
                ":username" => $_SESSION["username"],
                ":title" => $title,
                ":description"=> $description,
                ":ingredients"=>$ingre,
                ":steps"=>$steps,
                ":mainimg"=>$file_name,
  
            ));
            if($sql){
                header('Location: index.php?message=addedrecipe');
                exit;
            }
        }
    
    }


?>




<?php include "head.php"; ?>
<title>Add New Recipe Admin panel - Recipe App By Utkarsh</title>
<?php include "header.php"; ?>
<?php
if(isset($error)){
    foreach($error as $errors){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>'.$errors.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
}?>

<h1 class="text-center my-3">Add new Recipe</h1>

<div class="container">
 <form method="POST" action="" enctype="multipart/form-data">
  <div class="mb-3">
    
    <h4>Recipe Title</h4>
    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
  </div>

  <div class="form-floating my-3">
      <h4>Description</h4>
  <textarea style="height:100px;" class="form-control py-3" placeholder="desc" id="desc" name="description"></textarea>
</div>
  <div class="form-floating my-3">
      <h4>Ingredients</h4>
  <textarea style="height:100px;" class="form-control py-3" placeholder="desc" id="desc" name="ingre"></textarea>
</div>
  <div class="form-floating my-3">
      <h4>Steps </h4>
  <textarea style="height:100px;" class="form-control py-3" placeholder="desc" id="desc" name="steps"></textarea>
</div>
  <div class="form-floating my-3">
      <h4>Featured Image </h4>
      <input type="file" name="image">
</div>

  <button type="submit" class="btn btn-primary" name="submit">Add</button>
</form>


</div>





<?php include "footer.php"; ?>