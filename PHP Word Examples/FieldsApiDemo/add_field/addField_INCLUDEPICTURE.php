<?php

use Spire\Cloud\Word\Sdk\Client\Api\FieldsApi;
use Spire\Cloud\Word\Sdk\Client\Configuration;

$appId = "your id";
$appKey = "your key";
$baseUrl="https://api.e-iceblue.cn";
$configuration = new Configuration($appId, $appKey,$baseUrl);
$apiInstance = new FieldsApi($configuration);

$name = "AddField.docx";
$inputImg = "Logo.png";
$folder = "input";
$field_code = "INCLUDEPICTURE\"". "/" . $image_path . "/" ."\"\\d \\*MERGEFORMAT";
$index_in_paragraph = 0;
$paragraph_path = "Section/0/Body/0/Paragraph/0";
$storage = null;
$password = null;
$dest_file_path = "output/AddIFField_INCLUDEPICTURE.docx";
$apiInstance->addField($name, $paragraph_path, $field_code, $dest_file_path, $folder, $storage, $password, $index_in_paragraph );