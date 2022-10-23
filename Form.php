<!DOCTYPE html>
<head>
    <meta charset = "UTF-8">
    <title>Emrullah AKTAŞ</title>
</head>
<body>
    <form>
        İsminiz: <input type = "text" name = "Name"><br>
        Soy İsminiz: <input type = "text" name = "Surname"><br><br>
        <input type = "submit" value = "Giriş Yap"><br><br>
    </form>

    <?php
        if($_REQUEST)
        {
            if($_REQUEST["Name"] == "Emrullah" && $_REQUEST["Surname"] == "AKTAŞ")
            {
                echo "Başarılı Bir Şekilde Giriş Yaptınız." . "<br>" . "Hoşgeldin " . $_REQUEST["Name"] . ".";
            }
            else
            {
                echo "Girdiğiniz Bilgiler Geçersiz.";
            }
        }
    ?>
</body>
</html>