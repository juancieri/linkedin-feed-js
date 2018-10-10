<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        
        <!-- Metas SEO-->
        <meta name="description" content="<?php echo $pageDescription; ?>"/>
        <meta name="robots" content="index,follow"/>
        <meta name="GOOGLEBOT" content="index,follow"/>
        <meta name="category" content="Web Development"/>
        <meta name="author" content="Juan Cieri"/>
        <meta name="keywords" content="<?php echo $pageKeywords; ?>"/>
        <title>Linkedin Feed Js - <?php echo $titlePage; ?></title>
        <link rel="canonical" href=""/>
        
        <!-- Favicon-->
        <link rel="shortcut icon" type="image/ico" href="img/favicon.png"/>
        <link rel="apple-touch-icon" href="img/apple-touch-icon-57x57.png"/>
        <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png"/>
        <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png"/>
        
        <!-- Custom Style-->
        <link href="css/min/style.min.css" rel="stylesheet"/>
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
        
        <!-- Facebook Open Graph -->
        <meta property="og:title" content="Linkedin Feed Js - <?php echo $titlePage; ?>" />
        <meta property="og:type" content="" />
        <meta property="og:url" content="" />
        <meta property="og:image" content="" />
        <meta property="og:description" content="" />
        <meta property="og:site_name" content="" />
        <meta property="fb:app_id" content="" />
        
        <meta name="twitter:card" property="product">
		<meta name="twitter:site" content="@">
		<meta name="twitter:creator" content="@">
		<meta name="twitter:title" content="">
		<meta name="twitter:description" content="">
		<meta name="twitter:image:src" content="https://twitter.com/">
		<meta name="twitter:data1" content="">
		<meta name="twitter:label1" content="">
		
		<meta name="twitter:domain" content="">
		<meta name="twitter:app:name:iphone" content="">
		<meta name="twitter:app:name:ipad" content="">
		<meta name="twitter:app:name:googleplay" content="">
		<meta name="twitter:app:url:iphone" content="">
		<meta name="twitter:app:url:ipad" content="">
		<meta name="twitter:app:url:googleplay" content="">
		<meta name="twitter:app:id:iphone" content="">
		<meta name="twitter:app:id:ipad" content="">
		<meta name="twitter:app:id:googleplay" content="">	
        
        <script src = "https://platform.linkedin.com/in.js" type = "text/javascript">
            api_key: xxxxxxxxxx
            onLoad: onLinkedInLoad, onLinkedInAuth
            authorize: true
        </script>
        
    </head>