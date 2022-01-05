<?php
$conn = mysqli_connect("localhost", "root", "161711", "patients");
$sql = "
    INSERT INTO user1
    (name, phone, id, password, created)
    VALUES('{$_POST['name']}','{$_POST['phone']}','{$_POST['id']}', '{$_POST['password']}', NOW()
    )";
echo $sql;
$result = mysqli_query($conn, $sql);

if ($result === false) {
    echo "저장에 문제가 생겼습니다. 관리자에게 문의해주세요.";
    echo mysqli_error($conn);
} else {
?>
    <script>
        alert("회원가입이 완료되었습니다");
        location.href = "contact.php";
    </script>
<?php
}
?>