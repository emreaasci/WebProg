<?php
    $kime = "emreaasci@gmail.com";
    $konu = $_POST["subject"];
    $mesaj = "<h1>".$_POST["message"]."<h1>";
    $baslik .= "From: ".$_POST["name"]."<".$_POST["mail"].">\r\n";
    $baslik .= "Reply-to : emreaasci@gmail.com\r\n";
    $baslik .= "Content-type text/html\r\n";

    if(mail($kime,$konu,$mesaj,$baslik)){
        echo "Mailiniz gönderilmiştir";
    }

    else{
        echo "hata olustu.";
    }
?>


<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta name="author" content="emre aşcı">
        <meta charset="UTF-8">
        <link rel = "stylesheet" href="syle_iletisim.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <script src="javascript.js"></script>
        <title>Hakkımda</title>
    </head>

    <body>
        <div class = "container">
            <div class = "navbar">
                <!--<div class="logo">
                    <a href="#">LOGO</a>
                </div>-->
                <ul>
                    <li><a href="ana.html" class = "active">Ana Sayfa</a></li>
                    <li><a href="hakkımda.html" class = "active">Hakkımda</a></li>
                    <li><a href="beğendikleim.html" class = "active">Beğendiklerim</a></li>
                    <li><a href="iletişim.html" class = "active">İletişim</a></li>
                </ul>
            </div>
        </div>
        
        <div class="contact">
            <div class="container">
               <h2 class = "title">İletişim</h2>
               <form class = "form"  action="gonder.php"  method="POST">
                
                    <label>İsim</label>
                    <input class = "input-area" type="text" name = "name">
    
                    <label>Konu</label>
                    <input class = "input-area" type="text" name = "subject">
    
                    <label>E-mail</label>
                    <input class = "input-area" type="text" name = "mail">
    
                    <label>Mesaj</label>
                    <textarea class = "input-area" type="text" name = "message"></textarea>

                   <input class = "submit-btn" id = "submitBtn" type="submit" name = "Gönder">
                   <input class = "clear-btn" id = "clearBtn"  type="submit" name = "Sil" value="Sil">
               </form>
            </div>
        </div>
    

    </body>
</html>