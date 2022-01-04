<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">    
<link rel="stylesheet" href="assets/style.css">
</head>

<body>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Recipe App </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
  
        
       
      </ul>
      <?php 
      session_start();
        if(isset($_SESSION["username"])){
          echo '<form class="d-flex">
        
        <p class="mx-2">Hello '.$_SESSION["username"].'</p>
        <a class="btn btn-outline-success mx-2" href="admin/">DashBoard</a>
        <a class="btn btn-outline-success mx-2" href="logout.php">Log Out</a>
      </form>';
        }else{
          echo '<form class="d-flex"> <a class="btn btn-outline-success" href="login.php">Log In</a>
        <a class="btn btn-outline-success mx-2" href="signup.php">Sign Up</a>
      </form>';
        }
        ?>
       
    </div>
  </div>
</nav>