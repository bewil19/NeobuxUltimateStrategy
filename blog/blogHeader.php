<?php
function popUpWindow($dir) {
    return '
    var seconds = 15; 
    var milliseconds = seconds * 1000; 
setTimeout("javascript:TINY.box.show({url:\''.$dir.'splash/popUp.php\',width:780,height:525,openjs:\'initPopupLogin\',opacity:30});", milliseconds);'; 
}

$url = $_GET['p']; 
$websiteURL = $val['websiteURL']; 
$postLink = $websiteURL.'/'.$url;

//blog options
$popUp = 1;
$imgDir = 'images/blog/';   
$useHTMLFile = true; 
$referralLink = 'http://www.clixsense.com/?3373459&blog'; 
$redirLink = 'http://neobuxultimatestrategy.com/redirect.php?action='; 
$subscrLandingURL = $redirLink.'clixsense';
$confirmLandingURL = $redirLink.'clixsense'; 
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<title><?=$meta['title']?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="<?=$meta['tags']?>">
		<meta name="description" content="<?=$meta['desc']?>">
		<meta property="og:type" content="article" />
		<meta property="og:title" content="<?=$meta['title']?>" />
		
		<link rel="stylesheet" href="include/css/popup.css" type="text/css" />

		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="blog/assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		
		<script type="text/javascript" src="include/js/jquery.js"></script>
		<script type="text/javascript" src="include/js/popup.js"></script>
		<script type="text/javascript">
		function linkTo(url) {
			window.open(url);
		}
		<?
		if($popUp) {
			if($_SESSION['popUp'] < 1)
				echo popUpWindow($dir); 
			$_SESSION['popUp'] = 1;
		}
		?>
		</script>
		<script type="text/javascript">var switchTo5x=true;</script>
		<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
		<script type="text/javascript">stLight.options({publisher:'67a0d44d-0b79-44c1-bb19-7f31f475d6fe'});</script>

		
	</head>
	<body>
		<!-- Wrapper -->
		<div id="wrapper">

			<!-- Header -->
			<header id="header" class="alt">
				<span class="logo"><img src="blog/images/logo.svg" alt="" /></span>
				<h1>Neobux Ultimate Strategy 3.0</h1>
				<p>The ultimate strategy to make money from Neobux and PTC sites<br />
					Contact us at our <a href="mailto:<?=$supportEmail?>">support email address</a>
				</p>
			</header>

			<!-- Nav -->
			<nav id="nav">
				<ul>
					<li><a href="./?action=posts" title="NUS Posts">All Posts</a></li>
					<li><a href="./?p=neobux-tips-make-money-neobux" title="Neobux Tips">Basic Tips</a></li>
					<li><a href="./?p=neobux-direct-referrals" title="Neobux Direct Referrals">Neobux Referrals</a></li>
					<li><a href="./?p=recycling-strategy" title="Neobux Recycling Strategy">Recycling Strategy</a></li>
					<li><a href="./?p=best-paying-ptc-sites" title="Best PTC Sites">PTC Sites</a></li>	
				</ul>
			</nav>

			<!-- Main -->
			<div id="main">

				<!-- Introduction -->
				<section id="intro" class="main">
					<div class="spotlight">
						<div class="content">
						
							<center>
							<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							
							<!-- NUS Blog header banner -->
							<ins class="adsbygoogle"
								 style="display:inline-block;width:728px;height:90px"
								 data-ad-client="ca-pub-9979225970120201"
								 data-ad-slot="9405907618"></ins>
							<script>
							(adsbygoogle = window.adsbygoogle || []).push({});
							</script>
							</center>
						
							<footer class="bothSides">
								<section class="leftContent">