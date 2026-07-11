<?php

session_start();

if (isset($_POST['username'])) {
    $username = $_POST['username']; //request('username')
    $password = $_POST['password'];
    // ini biasanya dilakukan pengecekan ke database
    //  == apakah nilainya sama
    // === apakah nilainya sama dan tipe data nya sama
    // && dan - harus benar keduanya
    // || atau - salah satunya saja yang benar
    if ($username == 'admin' && $password == 'admin123') {
        $_SESSION['is_login'] = true;
    } else {
        $_SESSION['is_login'] = false;
    }
}

?>

<form method="POST">
    <?php 
        if (isset($_SESSION['is_login'])) {
            if ($_SESSION['is_login'] == true) {
                echo "<h1>Halaman Admin</h1>";
            } else {
                echo "<h1>Halaman Login</h1>";
            }
        } else {
            echo "<h1>Halaman Login sebelum session</h1>";
        }
    ?>
    
    <input type="text" name="username" placeholder="Masukkan username">
    <input type="password" name="password" placeholder="Masukkan password">
    <button type="submit">Simpan</button>
</form>