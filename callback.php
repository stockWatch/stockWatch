<?php
require_once("API/qqConnectAPI.php");
$qc = new QC();
$callback= $qc->qq_callback();
$openid= $qc->get_openid();

session_start();
$_SESSION['openid']=$openid;


?>
<!DOCTYPE html>
<html lang="cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>StockWatch Toolkit</title>
  </head>

  <body>
<script type="text/javascript"
src="http://qzonestyle.gtimg.cn/qzone/openapi/qc_loader.js" charset="utf-8" data-callback="true"></script>

  </body>
</html>