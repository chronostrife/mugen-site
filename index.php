<html>
<head>
<title>Chrono_Strife's MUGEN Domain</title>
<LINK rel="SHORTCUT ICON" href="images/site/icon.ico">
<style type="text/css">
body { background: url(images/site/background/bg-cobalt1.png); color:#ececff; background-repeat: repeat-x; background-color: #100032; height: 100%; width: 100%; margin: 0; padding: 0;}
img { border:0 }
img.border1 { border-width: 1px; border-style:solid; border-color:#CCCCDD;}
#nav-buttons {left: 0px; top: 3px; margin: 0; padding: 0;}
#title-border {
border-width: 0px;
border-image: url("images/site/news-border-image.png") 0 stretch;
-moz-border-image: url("images/site/news-border-image.png") 0 stretch;
-webkit-border-image: url("images/site/news-border-image.png") 0 stretch;
-o-border-image: url("images/site/news-border-image.png") 0 stretch;}
td.title { border-width: 1px; border-style: solid; text-indent:10px;}
</style>
</head>
<body>

<!--Put the site together. Get page, if no page load the news page. Otherwise make sure page is in predefined page container, then load page.-->
<?php 
include('pages/header.html');
include('pages/navbar.html');
echo '<div id="main-body" align="center" style="position: relative; width:100%; z-index:1; top:10px">';

$page = $_GET['page'];
$pages = array(
'news', 
'chars', 
'stages',
'addons',
'movelists',
'misc',
'spritesheets',
'chars/char-13',
'chars/char-16',
'chars/char-17',
'chars/char-18',
'chars/char-bojack',
'chars/char-broli',
'chars/char-celljr',
'chars/char-garlicjr',
'chars/char-gohan2mov9',
'chars/char-goku',
'chars/char-icell',
'chars/char-krillin',
'chars/char-nappa',
'chars/char-pcell',
'chars/char-piccolo',
'chars/char-recoome',
'chars/char-strife',
'chars/char-trunkz',
'chars/char-vegeta',
'chars/char-yamcha',
'chars/char-zangya',
'movelists/161',
'movelists/171',
'movelists/181',
'movelists/garlicjr1_5',
'movelists/garlicjr2_0',
'movelists/krillin1',
'movelists/zangya1',
'movelists/trunksMv9-2_0',
'misc/aboutme',
'misc/minecraft',
'misc/svencoop',
'misc/games',
'misc/dbz2k5',
'stages/stages-mugen1_1',
'stages/stages-winmugen',
'404',
); 

if(is_null($page) || empty($_GET['page'])) {
    $page = "news"; 
}

if( in_array($page, $pages) )
{
	include("pages/".$page.".html");
}
else
{
	include("pages/404.html");
} 

echo '</div>';

include('pages/footer.html'); ?>
</body>
</html>

