<?php
include 'ekle/tib.php';
$id=$_GET['id'];
$neresi='yeni';
include 'ekle/sistem.php';
$sef=linkle($neresi,$id);
$meta=metaduzenle($meta);
include 'ekle/ust.php';
include 'tema/listeust.php';

$say=$db->query("SELECT COUNT(id) AS toplam FROM etiketler");
$sayi=$say->fetch_object(); $say->free();
$satir_sayisi=$sayi->toplam;

$kacar=32;
$sayfa_sayisi=ceil($satir_sayisi/$kacar);
$ilk= ($id*$kacar)-$kacar;
video("order by id desc limit $ilk, $kacar");
include 'tema/listealt.php';
include('ekle/alt.php');
?>
