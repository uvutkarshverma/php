<?php include "head.php";?>
<?php require_once "include/conn.php";
session_start();
?>
<title>Get your Best quote Today</title>
<?php include "header.php";?>
<div class="container-fluid main">
    <div class="headin">
        <h1>Quotes of the day</h1>
        <p>Daily quotes by Utkarsh</p>
    </div>
    <?php
    
    $sql = $conn->prepare("SELECT * FROM `quote`");

    $sql->execute();
    if($sql->rowCount()>0){
        
        $row = $sql->fetchAll();
        $key = array_rand($row);
    
       
    
            echo '<div class="quote my-4">
            <p>' . $row[$key]["quote"] . '</p>
        </div>';
    }else{
        echo '<div class="quote my-4">
            <p>No Quote is Available Yet. Stay Tuned</p>
        </div>';
    }
    
    ?>
    
</div>










<?php include "footer.php";?>