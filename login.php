<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="font/fontawesome/css/all.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link
            rel="preconnect"
            href="https://fonts.gstatic.com"
            crossorigin="crossorigin">
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Poppins&display=swap"
            rel="stylesheet">
        <title>Login</title>
    </head>

    <body>

        <h3>Login</h3>

        <div class="container">
            <form action="ceklogin.php" method="post" role="form">

                <h4>Username</h4>

                <input type="text" name="username" placeholder="Username">
                <label for="username">
                    <i class="username"></i>
                </label>

                <h4>Password</h4>
                <input type="password" name="password" placeholder="Password">
                <label for="password">
                    <i class="pw"></i>
                </label>

                <br>

                <p>
                <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}

	?>
                </p>

                <button type="submit" value="login">
                    Login
                </button>
            </form>

        </div>
    </body>

</html>