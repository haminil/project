<?php
$conn = mysqli_connect("localhost", "root", "161711", "patients");
$id = $_POST['id'];
$password = $_POST['password'];
// DB 정보 가져오기 
$sql = "SELECT * FROM user1 WHERE id ='{$id}'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$row['id'];
$row['password'];
foreach($row as $key => $r){
    echo "{$key} : {$r} <br>";
}

if ($password == $row['password']) {
    // 로그인 성공
    // 세션에 id 저장
    session_start();
    $_SESSION['user1Id'] = $row['id'];
    print_r($_SESSION);
    echo $_SESSION['user1Id'];
?>
    <script>
        alert("환자 로그인에 성공하였습니다.")
        location.href = "patients.php";
    </script>
<?php
} else {
    // 로그인 실패 
?>
    <script>
        alert("환자 로그인에 실패하였습니다")
        location.href = "pcontact.php"
    </script>
<?php
}
?>