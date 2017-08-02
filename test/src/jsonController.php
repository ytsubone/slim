<?php
namespace Slim\src;

class jsonController{
    function index($request, $response, $args){
      $url = "/Users/yuji/Desktop/slim/slim/test/src/data.json";
      $json = file_get_contents($url);
      $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
      echo $json;
  }
}
?>
