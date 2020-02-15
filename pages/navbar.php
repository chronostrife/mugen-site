<div id="navbar">
<div style="position: absolute; width:100%; z-index:1;"><img src="images/background/bg-navbar-cobalt1.png" width="100%" height="33px" margin: 0; padding: 0; /></div> 
<div id="nav-buttons" align="center" style="position: relative; z-index:10;">
<?php 
if($page="news")
{
	echo '<img src="images/buttons/nav-news1.png" width="90px" height="27px" hspace="1px"/>';
}
else
{
	echo '<a href="index.php?page=news"><img src="images/buttons/nav-news1.png" width="90px" height="27px" hspace="1px"/></a>';
} 

if($page="chars")
{
	echo '<img src="images/buttons/nav-chars1.png" width="90px" height="27px" hspace="1px"/>';
}
else
{
	echo '<a href="index.php?page=chars"><img src="images/buttons/nav-chars1.png" width="90px" height="27px" hspace="1px"></a>';
} 

if($page="stages")
{
	echo '<img src="images/buttons/nav-stages1.png" width="90px" height="27px" hspace="1px"/>';
}
else
{
	echo '<a href="index.php?page=stages"><img src="images/buttons/nav-stages1.png" width="90px" height="27px" hspace="1px" /></a>';
} 
?><img src="images/buttons/nav-add-ons1.png" width="90px" height="27px" hspace="1px" /><img src="images/buttons/nav-wip1.png" width="90px" height="27px" hspace="1px" /><img src="images/buttons/nav-misc1.png" width="90px" height="27px" hspace="1px" /><img src="images/buttons/nav-blank1.png" width="90px" height="27px" hspace="1px" /><img src="images/buttons/nav-contact1.png" width="90px" height="27px" hspace="1px" /></div>
</div><!-- end #navbar -->