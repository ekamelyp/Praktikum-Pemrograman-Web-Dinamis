<?php

session_start();
include "../praktikum3_pwd/koneksi.php";

$id_user = $_POST['id_user'];
$pass = md5($_POST['password']);

$sql = "SELECT * FROM users WHERE id_user='$id_user' AND password='$pass'";
if ($_POST["captcha_code"] == $_SESSION["captcha_code"]) {

    $login = mysqli_query($conn, $sql);
    $ketemu = mysqli_num_rows($login);
    $r = mysqli_fetch_array($login);

    if ($ketemu > 0) {
        $_SESSION['iduser'] = $r['id_user'];
        $_SESSION['passuser'] = $r['password'];

        echo "USER BERHASIL LOGIN<br>";
        echo "id user =", $_SESSION['iduser'], "<br>";
        echo "password=", $_SESSION['passuser'], "<br>";
        echo "<a href=logout.php><b>LOGOUT</b></a></center>";
    } else {
        echo "<center>Login gagal! username & password tidak benar<br>";
        echo "<a href=form_login.php><b>ULANGILAGI</b></a></center>";
    }
    mysqli_close($conn);
} else {
    echo "<center>Login gagal! Captcha tidak sesuai!<br>";
    echo "<a href=form_login.php><b>ULANGI LAGI</b></a></center>";
}
