<?php

  $getCameras = file_get_contents('cameras.json');
  $cameras = json_decode($getCameras);

  foreach ($cameras->cameras as $camera){

    // If a subfolder for the camera doesn't exist make one
    if (!file_exists($camera->name)) {
      mkdir($camera->name, 0777, true);
    }

    file_put_contents($camera->name."/".date('Y-m-d-h-i-s').".jpg", fopen("https://nexusapi.camera.home.nest.com/get_image?uuid=".$camera->uuid."&cachebuster=".rand(10,1000000)."&height=1028", 'r'));

  }


?>
