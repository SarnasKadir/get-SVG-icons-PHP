<style>
.mysvg_atmallbig{
	background-color:pink;
	width:40px;
	height:50px;
	}

</style>

<?php


include "icons_data.php";
function svg_icon($iconName = " ", $iconColor = " ", $iconSize = "48"){
$get_svg_icon = $iconName; 
global ${$get_svg_icon};
$get_svg_icon =  ${$get_svg_icon}; 
$iconData = "<svg fill='".$iconColor."' viewBox='0 0 50 50' width='". $iconSize . "px' height='".$iconSize ."px'>". $get_svg_icon ."</svg>";
return $iconData; 
}

echo svg_icon("menu", " blue", "400" );
echo svg_icon("close", " blue", "400" );

?>
 
 