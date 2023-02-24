<?php 
function image_size($image)
{
	$data = getimagesize($image);
$width = $data[0];
$height = $data[1]; 
$size=$width.'X'.$height; 
return $size; 
}
function resizeImage($resourceType,$image_width,$image_height,$desiredWidth,$desiredHeight) {
    $imageLayer = imagecreatetruecolor($desiredWidth,$desiredHeight);

    imagealphablending($imageLayer, false);
    imagesavealpha($imageLayer,true);
    $transparent = imagecolorallocatealpha($imageLayer, 255, 255, 255,127);
    

imagecopyresampled($imageLayer,$resourceType,0,0,0,0,$desiredWidth,$desiredHeight, $image_width,$image_height);

return $imageLayer;
}
?> 