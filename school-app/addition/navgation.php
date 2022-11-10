<?php
if(isset($_SESSION["loggedin"])){
 $loggedin = true;
}
else{
 $loggedin = false;
}
if(isset($_SESSION['role'])=="student"){
  $role = true;
}
else{
  $role = false;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
  
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="/school-app/index.php"> Home </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <?php
          if(!$loggedin){
            echo '<li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/school-app/login.php">LOGIN</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/school-app/registration.php">Register</a>
            </li>';
          }
          
          ?>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/school-app/student_view.php">Student</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/school-app/teacher_view.php">Techer</a>
          </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Action</a>
              <?php
              if($loggedin){
                echo '<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/school-app/view.php">Veiw inserted records</a></li>
                  <li><a class="dropdown-item" href="/school-app/insert.php">Insert new record</a></li>';
                  
                  if(!$role){
                  echo '<li><a class="dropdown-item" href="/school-app/student_create.php">Insert new record for students</a></li>
                  <li><a class="dropdown-item" href="/school-app/student_view.php">View students record</a></li>';
                  }
                  if($role){
                  echo '<li><a class="dropdown-item" href="/school-app/teacher_create.php">Insert new record for teacher</a></li>
                  <li><a class="dropdown-item" href="/school-app/teacher_view.php">View teacher record</a></li>';
                  }
                }
                ?>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/school-app/logout.php">LOGOUT</a></li>
                </ul>
              </li>
              </ul>         
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
</body>
</html>