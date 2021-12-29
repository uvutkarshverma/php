<?php require_once "../include/conn.php"?>
<?php
    
if (isset($_POST["submit"])) {
    extract($_POST);


    if ($username == "") {
        $error[] = "Please Enter Your Username";
    }

    if ($password == "") {
        $error[] = "Please enter password";
    }
    
    if (!isset($error)) {

        try {
            $sql = $conn->prepare('SELECT username FROM `user` WHERE username = :username');
            $sql->execute(array(
                ":username" => $username,
            ));
            $count = $sql->rowCount();
            if($count>0){
                $error[] = "Username Already Exist";
            }else{
            $hash = password_hash($password,PASSWORD_DEFAULT);
            $sql = $conn->prepare("INSERT INTO `user` (`username`, `password`) VALUES ( :username,:password)");
            $sql->execute(array(
                ":username" => $username,
                ":password"=> $hash,
  
            ));
            if($sql){
                header('Location: login.php?message=signupsuccess');
                exit;
            }
        }
        
  
        } catch (PDOException $e) {
            
            $error[] = $e->getMessage();
        }
    
}
}

?>



<?php include "head.php";?>
<title>Get your Best quote Today</title>
<?php include "header.php";?>
<?php
if(isset($error)){
    foreach($error as $errors){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>'.$errors.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
}?>

<style>
    .lll {
        height: 100%;
    }

    .lll {
        display: flex;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
    }

    .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
    }

    .form-signin .checkbox {
        font-weight: 400;
    }

    .form-signin .form-floating:focus-within {
        z-index: 2;
    }

    .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
</style>
<div class="lll text-center">


    <main class="form-signin ">
        <form method="POST" action="">
            <!--<img class="mb-4" src="" alt="" width="72" height="57">-->
            <h1 class="h3 mb-3 fw-normal">Please Sign Up</h1>

            <div class="form-floating my-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                    name="password">
                <label for="floatingPassword">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Sign Up</button>
            <p>Already Have Account <a href="Login.php">Login here</a></p>
            <p class="mt-5 mb-3 text-muted">&copy; 2022 Utkarsh Verma</p>
        </form>
    </main>
</div>




<?php include "footer.php";?>