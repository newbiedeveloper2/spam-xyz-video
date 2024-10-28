<?php
include 'ekle/tib.php';
$neresi='anasayfa';
include 'ekle/sistem.php';
$sef=linkle($neresi);
include 'ekle/ust.php';
include 'tema/listeust.php';


video('order by id desc limit 32');
include 'tema/listealt.php';
include('ekle/alt.php');
?>