<?php
function getVolumeOfCuboid($length, $width, $height) {
    $volume = $length * $width * $height;
    echo "直方体の体積は".$volume."だよ。";
}
getVolumeOfCuboid(10, 5, 8);
?>
