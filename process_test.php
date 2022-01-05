<!DOCTYPE html>
<html>

<head>
  <!-- Required meta tags -->
  <link rel="stylesheet" href="css\style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
  <link href="https://fonts.googleapis.com/css?family=Jua&display=swap" rel="stylesheet">
  
  <!-- MAIN CSS -->
  <link rel="stylesheet" href="css/templatemo-digital-trend.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>검사 페이지</title>


</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light nav-distance">
    <a class="text-white" target="_blank">망막 테스트 ㅣ</a>
    <!-- "navbar-brand" -->
    <br>
    <a class="text-white" href="blog.php">&nbsp;마이페이지</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
  <section class="section">
    <p></p>
    <h1 class="title" style="text-align:center;">&nbsp;&nbsp;망막병증 테스트</h1>
    <h2 class="subtitle" style="text-align:center;">&nbsp; Retinopathy Test</h2>
  </section>
  <div style="text-align:center;">&nbsp;&nbsp;(Teachable Machine Image Model)</div>
  <p></p>
  <div style="text-align:center;">
    &nbsp;&nbsp;<button type="button" style="background-color:Gainsboro" onclick="init()">Start</button>
    &nbsp;<button type="button" style="background-color:Gainsboro" onclick="predict()">검사하기</button>
    <p></p>
    <div style="text-align:center;">
      <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
      <div class="container file-upload">
        <div class="image-upload-wrap">
          <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
          <div class="drag-text">
            <img src="img/upload.svg" class="mt-5 pt-5 upload">
            <h3 class="mb-5 pb-5 pt-4  upload-text">사진을 업로드해주세요</h3>
          </div>
        </div>
        <div class="file-upload-content">
          <img class="file-upload-image" id="face-image" src="#" alt="your image" />
          <div class="image-title-wrap">
            <button type="button" onclick="removeUpload()" class="remove-image">Remove
              <span class="image-title">Uploaded Image</span>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div id="webcam-container"></div>
    <div id="label-container"></div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@1.3.1/dist/tf.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@teachablemachine/image@0.8/dist/teachablemachine-image.min.js"></script>
    <script>
      function readURL(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function(e) {
            $('.image-upload-wrap').hide();
            $('.file-upload-image').attr('src', e.target.result);
            $('.file-upload-content').show();
            $('.image-title').html(input.files[0].name);
          };
          reader.readAsDataURL(input.files[0]);
        } else {
          removeUpload();
        }
      }

      function removeUpload() {
        $('.file-upload-input').replaceWith($('.file-upload-input').clone());
        $('.file-upload-content').hide();
        $('.image-upload-wrap').show();
      }
      $('.image-upload-wrap').bind('dragover', function() {
        $('.image-upload-wrap').addClass('image-dropping');
      });
      $('.image-upload-wrap').bind('dragleave', function() {
        $('.image-upload-wrap').removeClass('image-dropping');
      });
    </script>
    <script type="text/javascript">
      const URL = "https://teachablemachine.withgoogle.com/models/KXNxCkXXN/";
      let model, webcam, labelContainer, maxPredictions;
      async function init() {
        const modelURL = URL + "model.json";
        const metadataURL = URL + "metadata.json";
        model = await tmImage.load(modelURL, metadataURL);
        maxPredictions = model.getTotalClasses();
        labelContainer = document.getElementById("label-container");
        for (let i = 0; i < maxPredictions; i++) { // and class labels
          labelContainer.appendChild(document.createElement("div"));
        }
      }
      // run the webcam image through the image model
      async function predict() {
        // predict can take in an image, video or canvas html element
        //데이터 베이스에 연결해서 해당 아이디의 환자를 찾은후
        var image = document.getElementById("face-image")
        const prediction = await model.predict(image, false);
        for (let i = 0; i < maxPredictions; i++) {
          const classPrediction =
            prediction[i].className + ": " + prediction[i].probability.toFixed(2) * 100 + "%";
          labelContainer.childNodes[i].innerHTML = classPrediction;
          //데이터 베이스에 연결해서 해당 아이디의 환자의 맞춰 4개의 변수값을 저장
        }
      }
    </script>



<div style="text-align:center;">
    &nbsp;&nbsp;<button type="button" style="background-color:Gainsboro" onclick="init()">Start</button>
    &nbsp;<button type="button" style="background-color:Gainsboro" onclick="predict()">검사하기</button>
    <p></p>
<div style="text-align:center;">
      <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
      <div class="container file-upload">
        <div class="image-upload-wrap">
          <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
          <div class="drag-text">
            <img src="img/upload.svg" class="mt-5 pt-5 upload">
            <h3 class="mb-5 pb-5 pt-4  upload-text">사진을 업로드해주세요</h3>
          </div>
        </div>
        <div class="file-upload-content">
          <img class="file-upload-image" id="face-image" src="#" alt="your image" />
          <div class="image-title-wrap">
            <button type="button" onclick="removeUpload()" class="remove-image">Remove
              <span class="image-title">Uploaded Image</span>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div id="webcam-container"></div>
    <div id="label-container"></div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@1.3.1/dist/tf.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@teachablemachine/image@0.8/dist/teachablemachine-image.min.js"></script>
    <script>
      function readURL(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function(e) {
            $('.image-upload-wrap').hide();
            $('.file-upload-image').attr('src', e.target.result);
            $('.file-upload-content').show();
            $('.image-title').html(input.files[0].name);
          };
          reader.readAsDataURL(input.files[0]);
        } else {
          removeUpload();
        }
      }

      function removeUpload() {
        $('.file-upload-input').replaceWith($('.file-upload-input').clone());
        $('.file-upload-content').hide();
        $('.image-upload-wrap').show();
      }
      $('.image-upload-wrap').bind('dragover', function() {
        $('.image-upload-wrap').addClass('image-dropping');
      });
      $('.image-upload-wrap').bind('dragleave', function() {
        $('.image-upload-wrap').removeClass('image-dropping');
      });
    </script>
    <script type="text/javascript">
      const URL = "https://teachablemachine.withgoogle.com/models/KXNxCkXXN/";
      let model, webcam, labelContainer, maxPredictions;
      async function init() {
        const modelURL = URL + "model.json";
        const metadataURL = URL + "metadata.json";
        model = await tmImage.load(modelURL, metadataURL);
        maxPredictions = model.getTotalClasses();
        labelContainer = document.getElementById("label-container");
        for (let i = 0; i < maxPredictions; i++) { // and class labels
          labelContainer.appendChild(document.createElement("div"));
        }
      }
      // run the webcam image through the image model
      async function predict() {
        // predict can take in an image, video or canvas html element
        //데이터 베이스에 연결해서 해당 아이디의 환자를 찾은후
        var image = document.getElementById("face-image")
        const prediction = await model.predict(image, false);
        for (let i = 0; i < maxPredictions; i++) {
          const classPrediction =
            prediction[i].className + ": " + prediction[i].probability.toFixed(2) * 100 + "%";
          labelContainer.childNodes[i].innerHTML = classPrediction;
          //데이터 베이스에 연결해서 해당 아이디의 환자의 맞춰 4개의 변수값을 저장
        }
      }
    </script>

  </div>
</body>
</html>
