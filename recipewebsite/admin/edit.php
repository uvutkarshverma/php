<?php require_once "../include/conn.php" ?>
<?php
session_start(); ?>
<?php
if(!$_SESSION["username"]){
    
    header('Location: ../login.php?message=loginreq');
                exit;
}

$stmt = $conn->prepare("SELECT * FROM recipe WHERE id = :id");
$stmt->execute(array(
    ":id" => $_GET["id"],
));
$row = $stmt->fetch();

?>

<?php //fetured image  
 if(isset($_POST['submit1'])){
     extract($_POST);


            $root = $_SERVER["DOCUMENT_ROOT"];
            $filename = $row['mainimg'];
            $delimg= $root.'/recipeWebsite/assets/images'."/".$filename;
            unlink("$delimg");

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
                    exit;
                }
            }else{
                print_r($error);
                die();
            }
            
            if(!isset($error)){
        try {
     //insert into database
        $stmt = $conn->prepare('UPDATE recipe SET mainimg = :postimg WHERE id = :articleId') ;
        $stmt->execute(array(
        ':postimg' => $file_name,
        ':articleId' => $_GET['id'],
        ));
        
     //redirect to index page
     header('Location: index.php?message=recipeupdated');
     exit;
    } catch(PDOException $e) {
                    echo $e->getMessage();
                }
    
            }//if isset !error
    
        }//if isset post submit 1

 ?>
 
<?php
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



        $sql = $conn->prepare("UPDATE `recipe` SET title = :title, description= :description, ingredients= :ingredients, steps= :steps WHERE id = " . $_GET['id'] . "");
        $sql->execute(array(

            ":title" => $title,
            ":description" => $description,
            ":ingredients" => $ingre,
            ":steps" => $steps,
           

        ));
        if ($sql) {
            header('Location: index.php?message=recipeupdated');
            exit;
        }
    }
}


?>




<?php include "head.php"; ?>
<title>Edit Recipe Admin panel - Recipe App By Utkarsh</title>
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

<h1 class="text-center my-3">Edit YOur Recipe</h1>




<div class="container">
    <form method="POST" action="">
        <div class="mb-3">

            <h4>Recipe Title</h4>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" value="<?php echo $row["title"]; ?>">
        </div>

        <div class="form-floating my-3">
            <h4>Description</h4>
            <textarea style="height:100px;" class="form-control py-3" placeholder="desc" id="desc" name="description"><?php echo $row["description"]; ?></textarea>
        </div>
        <div class="form-floating my-3">
            <h4>Ingredients</h4>
            <textarea style="height:100px;" class="form-control py-3" placeholder="desc" id="desc" name="ingre"><?php echo $row["ingredients"]; ?></textarea>
        </div>
        <div class="form-floating my-3">
            <h4>Steps </h4>
            <textarea style="height:100px;" class="form-control py-3" placeholder="desc" id="desc" name="steps"><?php echo $row["steps"]; ?></textarea>
        </div>
  
        <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </form>

</div>

<div class="container">


<form method="POST" action="" enctype="multipart/form-data">
<div class="form-floating my-3">

<h4>Featured Image </h4>
<p>Current image is : <?php echo $row["mainimg"]; ?> </p>
<input type="file" name="image">
</div>
   

    <button type="submit1" class="btn btn-primary" name="submit1">Update</button>
</form>
</div>




<?php include "footer.php"; ?>