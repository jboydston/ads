<!--
<head>
<link rel="stylesheet" type="text/css"
href="main.css" />
</head>
-->

<div id="todays_ads_top_bar"
style="background-color:blue;
left:100px;
top:100px;
width:190px;
height:20px;
display: block;
clear: both;
color: white;
text-align:center;">
Today's Advertisers
</div>
<?php
$define[random_ad] = array('"1.png"', '"2.png"', '"3.png"', '"4.png"');
$random_pick = rand(0, count($define[random_ad]) -1);
$randomad_id = $define[random_ad][$random_pick];
$link = "<a href=$randomad_id target=_blank><img src=$randomad_id width=190/></a>";
echo $link;
?>
<br>
<div id="todays_ads_bottom_bar"
style="background-color:red;
left:100px;
top:100px;
width:190px;
height:20px;
display: block;
clear: both;
color: white;
text-align:right;">
Click for more...
</div>
