<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<nav class="navbar navbar-light bg-light d-flex flex-column ">
  <div class="container-fluid hedd">
    <span class="navbar-brand mb-0 h1 text-center">Admin Panel For Quotes</span>
  </div>
  <?php if(isset($_SESSION["username"])){
    echo '<div class="my-3"><a href="logout.php" class="btn btn-danger ">Log Out</a><a target="_blank" href="../index.php" class="btn btn-success mx-3">View Website</a><a  href="index.php" class="btn btn-success">DashBoard</a></div>';
    }?>
 
</nav>