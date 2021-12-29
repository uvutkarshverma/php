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
          $sql = $conn->prepare('SELECT username,password FROM `user` WHERE username = :username');
          $sql->execute(array(
              ":username" => $username,
          ));
          $count = $sql->rowCount();
          if($count==0){
              $error[] = "Username Does Not Exist";
          }else{
            
            $row= $sql->fetch();
            $hash = $row["password"];
            $hash1 = password_verify($password,$hash);
            
            if($hash1){
              ob_start();
              session_start();
              $_SESSION["username"] = $username;
              header('Location: index.php?message=loginsuccess');
              
            }else{
              $error[] = "Please Enter Password For your Username Not For Someone Else";
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
}
if($_GET["message"]){
  if($_GET["message"] == "signupsuccess"){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Your Account has Been Opened Successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
  if($_GET["message"] == "logout"){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>You are Now Logged Out.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
  if($_GET["message"] == "loginFailed"){
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Please Login to Continue To Dashboard.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
}
?>

<style>
    .lll {
  height: 100%;
}

.lll{
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
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating my-3">
      <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
      <label for="floatingPassword">Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Sign in</button>
    <p>Don`t Have Account <a href="signup.php">Sign Up here</a></p>
    <p class="mt-5 mb-3 text-muted">&copy; 2022 Utkarsh Verma</p>
  </form>
</main>
</div>




<?php include "footer.php";?>