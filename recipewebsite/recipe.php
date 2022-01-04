<?php require_once "include/conn.php"; ?>
<?php
if($_GET["id"] == ""){
  header('Location: index.php');
  exit;
}else{
  $stmt= $conn->prepare("SELECT * FROM recipe WHERE id = :id");
  $stmt->execute(array(
    ":id"=>$_GET["id"],
  ));
  if(!$result = $stmt->fetch()){
    header('Location: index.php');
  exit;
  }


}
?>



<?php include "head.php"; ?>
<title>Recipe of <?php echo $result["title"];?></title>
<?php include "header.php"; ?>



<div class="card mb-3 container-fluid mx-0">
  <img src="assets/images/<?php echo $result["mainimg"];?>" class="card-img-top" alt="..." style="height: 400px; object-fit:cover;">
  <div class="card-body container">
    <h2 class="card-title"><?php echo $result["title"];?></h2>
    <p class="card-text"><?php echo $result["description"];?></p>
    <h5 class="card-title">Ingredients Used</h5>
    <p class="card-text"><?php echo $result["ingredients"];?></p>
    <h5 class="card-title">Steps to Follow </h5>
    <p class="card-text"><?php echo $result["steps"];?></p>
  
  </div>
</div>

</div>




<?php include "footer.php"; ?>