<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<title><?php echo $title ?></title>

<link href="/MuseUI/css/reset.css" rel="stylesheet" type="text/css" />
<link href="/MuseUI/css/icons.css" rel="stylesheet" type="text/css" />
<link href="/MuseUI/css/stylesheet.css" rel="stylesheet" type="text/css" />
<script type='text/javascript' src='/MuseUI/js/jquery.min.js'></script>
<script type='text/javascript' src='/MuseUI/js/actions.js'></script>
<!--[if lte IE 6]>
<script src="/MuseUI/js/ie6png.js" type="text/javascript"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('img, .icon,.isw-archive,.isw-chat,.isw-graph,.isw-grid,.isw-list,.isw-text_document,.isw-zoom,.text');
    </script>
<![endif]--> 

</head>
<body>
<!----------头部--------------->
<div class="header">
    <a class="logo" href="">
        <img src="/MuseUI/img/logo.png" alt="" />
    </a>
</div>
<div class="middle">
<!----------左侧菜单--------------->
<?php require VIEW_PATH.'/layouts/left.php';?>
<!----------右侧内容区域--------------->
    <div class="content">
        <div class="breadLine">