<?php
session_start(); 
require 'function.php';
//cek cookie
if( isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $conn = koneksi();
    
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];


    // ambil username berdasarkan id
    $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if( $key === hash('sha256', $row['username'])) {
        $_SESSION['login'] = true;
    }
}



if ( isset($_SESSION["login"])) {
    header("Location: ../index.php");
    exit;
}


if( isset($_POST["login"])) {

    $conn = koneksi();

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    //cek username
    if( mysqli_num_rows($result) === 1) {
        //cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])) {
            //set session
            $_SESSION["login"] = true;

            // cek remember me
            if ( isset($_POST["remember"])) {
                //buat cookie

                setcookie('id',$row['id'], time() + 300);
                setcookie('key', hash('sha256', $row['username']), time() + 300);
            }

            header("Location: ../index.php");
            exit;
        }
    }

    $error = true;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Css Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- mhy css -->
    <link rel="stylesheet" href="../css/style2.css" />

    <link rel="icon" href="../img/2.jpg">

    <title>Halaman Login</title>
</head>
<body>

    <!-- Navbar -->

<form action="" method="POST">
    <div class="login-box">
  <h1>Login</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" name="username" id="username" placeholder="Username" autocomplete="off">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" name="password" id="password" placeholder="Password">
  </div>

    <input type="checkbox" name="remember" id="remember">
    <label for="remember">Remember Me</label>

    <br>

    <!-- <a href="registrasi.php"><i class="fas fa-user" style="color:white ;"> Registrasi</i></a> -->



  <button type="submit" name="login" class="btn" value="Sign in">Login</button>
  <div class="card-footer bg-transparent border-transparent" style="height: 4rem;">
        <div class="row">
          <a href="registrasi.php" class="text-center col text-info btn badge bg-transparent"><span style="color: white; font-size:15px;">Silahkan Registrasi</span></a>
        </div>
      </div>
  
  
</div>
<?php if( isset($error)) : ?>
    <p style="color: red; font-style:italic;">Username / Password Salah</p>
    <?php endif; ?>
</form>


    <!-- Akhir -->


    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>