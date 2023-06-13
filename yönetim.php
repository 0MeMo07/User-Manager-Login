<html lang="en">
<head>
    <link rel="stylesheet" href="yönetim.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yönetim</title>
</head>
<body>
    <h1>Kullanıcı Yönetimi</h1>

    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "loginpagephp";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Bağlantı hatası: " . $conn->connect_error);
        }

        if (isset($_POST['sil'])) {
            $sil_ad = $_POST['sil_ad'];
            $sil_sifre = $_POST['sil_sifre'];
        
            $sql = "DELETE FROM phplogin WHERE ad='$sil_ad' AND sifre='$sil_sifre'";
        
            if ($conn->query($sql) === TRUE) {
                header("Location: yönetim.php");
                exit();
            } else {
                echo "<div class='message'>Kullanıcı silinirken hata oluştu: " . $conn->error . "</div>";
            }
        }

        $sql = "SELECT * FROM phplogin";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>Ad</th><th>Şifre</th><th></th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["ad"] . "</td><td>" . $row["sifre"] . "</td><td><form method='post' style='display: inline;'><input type='hidden' name='sil_ad' value='" . $row["ad"] . "'><input type='hidden' name='sil_sifre' value='" . $row["sifre"] . "'><button type='submit' name='sil'>Sil</button></form></td></tr>";
            }
            echo "</table>";
        } else {
            echo "<div class='message'>Veritabanında kayıtlı kullanıcı yok.</div>";
        }
        
        if (isset($_POST['ekle'])) {
            $ad = $_POST['ad'];
            $sifre = $_POST['sifre'];

            $sql = "INSERT INTO phplogin (ad, sifre) VALUES ('$ad', '$sifre')";

            if ($conn->query($sql) === TRUE) {
                header("Location: yönetim.php");
                exit();
            } else {
                echo "<div class='message'>Kullanıcı eklenirken hata oluştu: " . $conn->error . "</div>";
            }
        }

        $conn->close();
    ?>

    <form method="post">
        <input type="text" name="ad" placeholder="Ad" required>
        <input type="password" name="sifre" placeholder="Şifre" required>
        <button type="submit" name="ekle">Ekle</button>
        <button class="logout-button" onclick="location.href='login.php'">Çıkış Yap</button>
    </form>
    <div class="madeby" align="center">
        <a href="https://mehmetttw7.tk">Made By MeMo</a>
    </div>
</body>
</html>
