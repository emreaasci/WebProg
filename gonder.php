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