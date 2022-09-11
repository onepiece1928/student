<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login page</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>

<nav class="navbar navbar-expand-1g bg-info navbar-dark">
  <a class="navbar-brand"><h1>eAcademics</h1></a>
  <input type="text" name="search" placeholder="Search here" style="margin-left:60%; border-style:20px;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="nav ml-auto justify-content-end collapse navbar-collapse" id="collapsibleNavbar" >
    <ul class="navbar-nav">
        <?php
            if(isset($_SESSION['student'])){
                $user = $_SESSION['student'];
                echo '
                <li class="nav-item"><a href="" class="nav-link text-white">'.$user.' </a></li>
                <li class="nav-item"><a href="logout.php" class="nav-link text-white"> logout</a></li>';

            }else if(isset($_SESSION['teacher'])){

                $user = $_SESSION['teacher'];

                echo '
                <li class="nav-item"><a href="" class="nav-link text-white">'.$user.' </a></li>
                <li class="nav-item"><a href="logout.php" class="nav-link text-white"> logout</a></li>';

            }else{
                echo '
                <li class="nav-item"><a href="../student/slogin.php" class="nav-link text-white">Student</a></li>
                <li class="nav-item"><a href="../teacher/tlogin.php" class="nav-link text-white">Teacher</a></li>';
            }  
        ?>
    </ul>
  </div>  
</nav>
</body>
</html>


