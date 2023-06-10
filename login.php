<html lang="en">
<head>
    <link rel="stylesheet" href="login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="Login" align="center">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <h1 class="baslık">Login</h1>
            <input type="text" name="fname" class="input1" placeholder="Kullanıcı adı" required><br>
            <input type="password" name="fpass" class="input2" placeholder="Şifre" required><br>
            <button type="sumbit" class="button">Login</button>
        </form>
    </div>
    <div class="madeby" align="center">
        Made By MeMo
    </div>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['fname'];
            $pass = $_POST['fpass'];
        
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "loginpagephp";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM phplogin WHERE ad = '$name' AND sifre = '$pass'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                header("Location: yönetim.php");
            } else {
                print("");
            }
            $conn->close();
        }
        ?>
</body>
</html>
