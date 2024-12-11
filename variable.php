<?php

  $radius = 19.3;
  $heights = array(10, 15, 17);

  foreach ($heights as $height) {
    $surface_area = 2 * M_PI * $radius * ($radius + $height);
    $volume = M_PI * $radius * $radius * $height;

    echo "Height: $height, Surface area: " . round($surface_area, 2) . ", Volume: " . round($volume, 2) . "\n";

}
?>