<!DOCTYPE <html>
</html>
<head>
    <title>Aplikasi Voting SMK 1 SAYUNG</title>
</head>
    <link rel="stylesheet" href ="style.css">

<body>
    <center>
    <div class="login">
    <br>
    <ing src="gambar/logosmk.png" alt="logo SMKN 1 Sayung">
    <h2>APLIKASI VOTING SMKN 1 SAYUNG</h2>
    </br>
    <!--cek pesan notifikasi -->
    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan']== "gagal"){
            echo "login gagal! username dan password salah!";
        }else if($_GET['pesan']== "logout"){
            echo "Anda telah berhasil logout";
        }else if($_GET['pesan']== "belum_login"){
            echo "Anda harus login untuk mengakses halaman admin";
        }
    }
    ?>
    <br/>
    <br/>
    <form method="post" action="cek_login.php">
        <table>
            <tr>
                <td>username</td>
                <td>:</td>
                <td><input type="text" name="username" placeholder="Masukkan username"></td>
            </tr>
            <tr>
                <td>password</td>
                <td>:</td>
                <td><input type="password" name="password" placeholder="Masukkan passord"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="LOGIN"></td>
            </tr>    
         </table>
    </form>
</center>
</body>
</html>
