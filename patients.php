<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>병증확인 사이트</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">
     <link rel="stylesheet" href="css/owl.carousel.min.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-digital-trend.css">

     <style>
  body {
    background-image:url("https://images.unsplash.com/photo-1528731708534-816fe59f90cb?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80");
    background-size:cover;
  }
  </style>
</head>
<body>
     <!-- MENU BAR -->
     <nav class="navbar navbar-expand-lg">
      <div class="container">
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                      <a href="process_test.php" class="nav-link">검사결과(미구현)</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link contact" onclick="logout()">로그아웃</a>
                  </li>
              </ul>
              <script>
              function logout() {
                console.log("hello");
                const data = confirm("로그아웃 하시겠습니까?");
                if (data) {
                  location.href = "logoutProcess.php";
                  }
                }
              </script>
          </div>
      </div>
  </nav>
     <!-- BLOG -->
     <section class="hero hero-bg d-flex justify-content-center align-items-center">
               <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                              <div class="hero-text">

                                   <h1 class="text-white" data-aos="fade-up">환자 페이지</h1>
                                   <strong class="d-block py-3 pl-5 text-yellow" data-aos="fade-up" data-aos-delay="400"> </strong>
                              </div>
                        </div>

                        <div class="col-lg-6 col-12">
                          <div class="hero-image" data-aos="fade-up" data-aos-delay="300">

                            <img src="images\project\patients.png" class="img-fluid" alt="working girl">
                          </div>
                        </div>
                    </div>
               </div>
     </section>
     <!-- SCRIPTS -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>
</body>
</html>