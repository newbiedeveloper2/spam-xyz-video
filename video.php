<?php
include 'ekle/tib.php';
$id=(int)$_GET['id'];
$baslik=str_replace('-',' ',$_GET['baslik']);
$neresi='video';
include 'ekle/sistem.php';

$sef=linkle($neresi,$id);
$meta=metaduzenle($meta);

include 'ekle/ust.php';
include 'tema/videoust.php';
echo '
	<iframe src="'.$url.'/play.php?id='.$id.'&info='.str_replace(' ','-',$baslik).'" width="100%" height="700" frameborder="0" scrolling="no" allowfullscreen></iframe>
	
	
	
	 </div>
</div>

<div class="post-'.$id.' post type-post status-publish format-standard has-post-thumbnail hentry" id="post-'.$id.'">
<div id="details" class="section-box">
<p class="entry-meta">
<span class="author">Editör: <a href="#" title="porno tarafından yazılan yazılar" rel="author">porno</a></span>
</p>
<div class="entry-content rich-content">
<p>'.$meta['aciklama'].'</p>
</div>
</div>
</div>

<div class="section-box related-posts">
<div class="section-header"><h3 class="section-title">'.yapi('benzervideobaslik').'</h3></div>
<div class="section-content grid-mini"><div class="nag cf">
';
$kacar=12;
$eksi=24;

$k=$id%3;
if($k==0){$z=4;}
if($k==1){$z=5;}
if($k==2){$z=3;}
$ilk= substr(preg_replace('/\D/', '', md5($id)),0,$z);



$ilk=$ilk-$eksi;
echo etiket("order by id desc limit $ilk, $kacar",$baslik);
$ilk=$ilk+$eksi;
echo etiket("order by id desc limit $ilk, $kacar",$baslik);
include 'tema/videoalt.php';
include('ekle/alt.php');

?>