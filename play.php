<?php
$id=($_GET['id']%1000);	
?>
<html>
<head>
<title>cdn</title>
<meta charset="utf-8"/><meta name="robots" content="noindex">
<meta name="googlebot" content="noindex">
<style type="text/css">#mediaplayer{position:relative;width:100%!important;height:100%!important}html,body{margin:0px;padding:0px;height:100%!important} iframe,embed{position:absolute;top:0px;left:0px;}body{margin:0px;padding:0px;top:0px;left:0px}</style>
</head>
<body>
<?php
$cachedosyasi='video/motherless2/'.$id.'.txt';
?>
<div id="mediaplayer">Yukleniyor...</div>
	<script src="/jwplayer8/jwplayer.js"></script>
<script >jwplayer.key="SCrPfBUKEhjdLtATu2EbPA6GlYeAlGF+g4vpXf3/St0=";</script>
		<script>
		jwplayer("mediaplayer").setup({
			file: "<?php echo file_get_contents($cachedosyasi).'?text='.rand(100000,999999);
#rand fonksiyonunun amacı video mp4 urlsini google gözünde özgün kılmak.
			?>",
			screencolor: "000000",
			width: "100%",
			height: "100%",
			stretching: "uniform",
			provider: "https",
			wmode: "opaque",
			autostart: true,
			playbackRateControls: [0.25, 0.5, 0.75, 1, 1.25, 1.5, 2],
			primary: "html5",
			repeat: "true",
			});
		</script>

</body></html>