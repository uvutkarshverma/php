<?php require_once "include/conn.php"; ?>
<?php include "head.php"; ?>
<title>Search Result for <?php $_GET["query"]; ?></title>
<?php include "header.php"; ?>

<div class="container my-4" style="min-height: 300px;">
    <?php
if($_GET["query"] == ""){
    header('Location: index.php?message=queryreq');
    exit;
}else{
    $query = $_GET["query"];
    $stmt=$conn->prepare("SELECT *  FROM `recipe` WHERE `title` LIKE '%" . $query . "%' OR `description` LIKE '%" . $query . "%' || `ingredients` LIKE '%" . $query . "%' ORDER bY id DESC ");
    $stmt->execute(array(
        "query"=>$query,
    ));
    $results = $stmt->rowCount();
    if($results == 0){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>No Matching Recipe Found. Search Again
    
  </div>';
    }else{
        echo '<h3 class="text-center mb-4">Search Result for '.$query.'</h3>';

    }

    while($results = $stmt->fetch()){
        echo '<div class="card mb-3 m-auto" style="max-width: 540px;">
        <div class="row g-0 align-items-center">
          <div class="col-md-4">
            <img src="assets/images/'.$results["mainimg"].'" class="img-fluid rounded-start" alt="image">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title ">'.$results["title"].'</h5>
              <p class="card-text">'.$results["description"].'</p>
              <a class="btn btn-success" href="recipe.php?id='.$results["id"].'">View More</a>
            </div>
          </div>
        </div>
      </div>';
        
    }
}
?>

</div>







<?php include "footer.php"; ?>