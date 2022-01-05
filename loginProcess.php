<?php
$conn = mysqli_connect("localhost", "root", "161711", "test");
$id = $_POST['id'];
$password = $_POST['password'];
// DB 정보 가져오기 
$sql = "SELECT * FROM user WHERE id ='{$id}'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$hashedPassword = $row['password'];
$row['id'];
foreach($row as $key => $r){
    echo "{$key} : {$r} <br>";
}
$passwordResult = password_verify($password, $hashedPassword);
if ($passwordResult === true) {
    // 로그인 성공
    // 세션에 id 저장
    session_start();
    $_SESSION['userId'] = $row['id'];
    print_r($_SESSION);
    echo $_SESSION['userId'];
?>
    <script>
        alert("의사 로그인에 성공하였습니다.")
        location.href = "blog.php";
    </script>
<?php
} else {
    // 로그인 실패 
?>
    <script>
        alert("의사 로그인에 실패하였습니다")
        location.href = "contact.php"
    </script>
<?php
}
?>