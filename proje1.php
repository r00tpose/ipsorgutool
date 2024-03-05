<?php
// Ip Logger


# ilk once bizim bir url e ihtiyacimiz var
$link = "http://ip-api.com/json/24.48.0.1";

# simdi ise bizim bu url icerigini yani json icerigini almamiz lazim

$content = file_get_contents($link); # boylece url icerigini almis oldum

# bunu json turunde  tutacagim icin asagidaki kodu belirttim
$jsoncode = json_decode($content,true) ;

# simdi ise bunu goruntuleyelim
print_r($jsoncode);

# icerigimizden belirli parametleride ala biliriz
//echo $json["city "] ; # sehiri gosteriyo
//echo $jsoncode["query"] ;   # ip adresini gosteriyo vs vs 

# geri kalan parametleride IMHATEAM.ORG paylasilacakdir


# Coding By Pose imhateam.org

?>