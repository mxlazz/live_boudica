<?php include_once('template-parts/functions.php'); ?>
<?php $meta = meta(); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Live Boudica - Departamentos en Puebla</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"  content="<?php echo $meta["description"]; ?>" />
    <meta name="keywords"  content="corazon de puebla, corazon de luces,puebla edificio de corazon, Angelópolis ilumina un corazón, Boudica Angelópolis ilumina un corazón" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $meta["title"]; ?>" />
    <meta property="og:description" content="<?php echo $meta["description"]; ?>" />
    <meta property="og:site_name" content="liveboudica" />
    <meta property="og:image" content="<?php echo url(); ?>assets/img/banner-mapa.jpg" />
    <meta property="og:image:secure_url" content="<?php echo url(); ?>assets/img/banner-mapa.jpg" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="<?php echo $meta["title"]; ?>" />
    <meta name="twitter:description" content="<?php echo $meta["description"]; ?>" />
    <meta name="twitter:image" content="<?php echo url(); ?>assets/img/banner-mapa.jpg" />
    <title><?php echo $meta["title"]; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&family=Open+Sans:wght@400;600;700&family=Raleway:wght@200;300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo url(); ?>assets/css/extends.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo url(); ?>assets/css/style.css?v=1.0.3">
    <link rel="stylesheet" href="<?php echo url(); ?>assets/css/main.css">
    <link rel="icon" href="<?php echo url(); ?>assets/img/favicon.png" sizes="32x32" />
    <link rel="icon" href="<?php echo url(); ?>assets/img/favicon.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="<?php echo url(); ?>assets/img/favicon.png" />

    <script src="https://www.google.com/recaptcha/api.js?render=6LcbJPAZAAAAALzEj9d-rNQKzRXJv_sS-OrhN3sc"></script>
    
    <!-- Google Analytics -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-130767763-1', 'auto');
    ga('send', 'pageview');
    </script>
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WLXK4QJ');</script>
    <!-- End Google Tag Manager -->
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WM3P474');</script>
    <!-- End Google Tag Manager -->
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-NM0HQYM3EW"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-NM0HQYM3EW');
    </script>
    
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WLXK4QJ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WM3P474"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    <header>
        <nav class="navbar navbar-expand-xl justify-content-center align-items-star align-items-">

            <div class="nav-icon collapsed navbar-toggler mr-auto" data-target="#navbar" data-toggle="collapse"
                aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <!-- notice position-absolute on the brand which allows it to center-->
            <a href="<?php echo url(); ?>" class="position-absolute logo"><img src="<?php echo url(); ?>assets/img/logo.png"></a>
            <div class="navbar-collapse collapse justify-content-xl-center" id="navbar">
                <ul class="navbar-nav justify-content-center">
                    <?php generate_menu(); ?>
                </ul>
            </div>
        </nav>
    </header>