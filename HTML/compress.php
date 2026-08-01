<?php

function compressImage($source,$destination,$quality=70){

$info=getimagesize($source);

if($info['mime']=="image/jpeg"){

$image=imagecreatefromjpeg($source);

imagejpeg($image,$destination,$quality);

}

elseif($info['mime']=="image/png"){

$image=imagecreatefrompng($source);

imagepng($image,$destination,9);

}

elseif($info['mime']=="image/webp"){

$image=imagecreatefromwebp($source);

imagewebp($image,$destination,$quality);

}

return $destination;

}

?>

<link rel="icon" href="favicon.ico" type="image/x-icon">