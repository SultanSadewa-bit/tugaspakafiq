<?php
include "koneksi.php";
if(isset($_POST['submit'])){
    $username =$_POST['username'];
    $email =$_POST['email'];
    $password =$_POST['password'];

    $query = "INSERT INTO tb_users (username,email,password) VALUES ('$username','$email','$password')";
    $eksekusi =mysqli_query($koneksi,$query);


}
?>

<form action="daftar.php" method="POST">
    <label for="">username</label>
    <input type="text" name="username"><br><br>
    <label for="">email<label>
    <input type="email" name="email"><br><br>
    <label for="">password</label>
    <input type="password" name="password"><br><br>
    <button type="submit" name="submit">daftar</button>
</form>


