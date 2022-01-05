<!DOCTYPE html>
<html lang="ko">
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
                      <a href="index.php" class="nav-link contact">홈으로</a>
                  </li>
                  <li class="nav-item">
                      <a href="signup.php" class="nav-link contact">회원가입</a>
                  </li>
                </ul>
            </div>
        </div>
    </nav>
     <!-- CONTACT -->
     <section class="contact section-padding">
          <div class="container">
               <div class="row">
                    <div class="col-lg-6 mx-auto col-md-7 col-12 py-1 mt-1 text-center" data-aos="fade-up">
                      <h1 class="mb-4">환자 로그인</h1>
                    </div>
                    <div class="col-lg-8 mx-auto col-md-10 col-12">
                    <form method="POST" action="ploginProcess.php">
                      <div class="w-50 ml-auto mr-auto mt-5">
                        <div class="mb-3 ">
                          <label for="exampleFormControlInput1" class="form-label">아이디</label>
                          <input name="id" type="id" class="form-control" id="exampleFormControlInput1" placeholder="id">
                        </div>
                        <div class="mb-3 ">
                          <label for="exampleFormControlInput1" class="form-label">비밀번호</label>
                          <input name="password" type="password" class="form-control" id="exampleFormControlInput1" placeholder="password">
                        </div>
                        <button type="submit" class="btn btn-primary mb-3">로그인</button>
                      </div>
                    </form>
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