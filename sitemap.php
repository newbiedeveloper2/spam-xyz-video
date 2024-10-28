<?php
header("Content-type: text/xml");
function seflink($baslik)
 {
  $baslik = str_replace(array("&quot;","&#39;"), NULL, $baslik);
  $bul = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '-');
  $yap = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', ' ');
  $baslik=strtolower($baslik);
  $perma = str_replace($bul, $yap, $baslik);
  $perma = preg_replace("@[^A-Za-z0-9\-_]@i", ' ', $perma);
  $perma = trim(preg_replace('/\s+/',' ', $perma));
  $perma = str_replace(' ', '-', $perma);
  return $perma;
 }
include 'ekle/baglan.php';
$tab=0;

@$page = intval($db->real_escape_string($_GET['sayfa']));
if(! isset($page)) $sayfa='index'; else $sayfa=$page;
$date = date("20y-m-d");
$isay=$db->query("SELECT COUNT(id) AS toplam FROM etiketler");
$index_sa=$isay->fetch_object();
$index_say=$index_sa->toplam;
$index_sayi=ceil($index_say / 50000); 
if(($sayfa=="index") && ($index_say>50000)): 
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<sitemapindex xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/siteindex.xsd\" xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";
for($i=0; $i<$index_sayi; $i++){  
echo "	<sitemap>
		<loc>$url/sitemap.xml?sayfa=".($i+1)."</loc>
		<lastmod>$date</lastmod>
	</sitemap>\n";  
} 

echo "</sitemapindex>";

else:  

if($sayfa=='index'){

$sayfa=1;

}

$fileout = 0; 
$out = "<?xml version=\"1.0\" encoding=\"UTF-8\"?> 
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" 
 xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">";
$cek = $db->query("SELECT * FROM etiketler ORDER BY id ASC LIMIT ".(($sayfa-1)*50000).",50000");

		while ($rows=$cek->fetch_assoc() ) { 
		$link = seflink($rows['baslik']); 
        $etiketid = $rows['id'];	
		$out .= "<url> 
		<loc>$url/video/".$etiketid."/".$link."/</loc>
		<priority>1.0</priority>
		</url>"; 
		} 
		$out .= "</urlset>";
		echo $out;
	endif;
$db->close();
?>