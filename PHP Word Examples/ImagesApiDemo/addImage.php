<?php

use Spire\Cloud\Word\Sdk\Client\Api\ImagesApi;
use Spire\Cloud\Word\Sdk\Client\Configuration;

$appId = "your id";
$appKey = "your key";
$baseUrl="https://api.e-iceblue.cn";
$configuration = new Configuration($appId, $appKey,$baseUrl);
$apiInstance = new ImagesApi($configuration);

$name = "Image.docx";
$image_path = "Images/image.png";
$paragraph_path = "Section/0/Body/0/Paragraph/0";
$folder = "input";
$storage = null;
$index_in_paragraph = 0;
$password = null;
$dest_file_path = "output/AddImage.docx";
$apiInstance->addImage(
    $name,
    $image_path,
    $paragraph_path,
    $dest_file_path,
    $folder,
    $storage,
    $password,
    $index_in_paragraph
);