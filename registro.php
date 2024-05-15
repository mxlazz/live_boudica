<?php include_once('template-parts/functions.php'); ?>
<?php $meta = meta(); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"  content="<?php echo $meta["description"]; ?>" />
    <meta name="keywords"  content="corazon de puebla, corazon de luces,puebla edificio de corazon, Angel贸polis ilumina un coraz贸n, Boudica Angel贸polis ilumina un coraz贸n" />
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
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WLXK4QJ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


<section class="bg-buenfin">
   <div class="row">
      <div class="col-md-6">
        <img src="<?php echo url(); ?>assets/img/title-boudica.png" class=" mb-5 img-fluid" width="85%">
        <h4 class="text-uppercase text-white">regístrate y recibe una promoción única</h4>
        
        <form action="<?php echo url(); ?>template-parts/form-contact-buenfin.php" method="POST">
                
          <div class="form-group">
            <label for="name" class="text-white">Nombre completo*:</label>
            <input name="name" type="text" class="form-control form-bf" id="name" placeholder="" required>
          </div>

          <div class="form-group">
            <label for="name" class="text-white">Número Telefónico*:</label>
            <input name="tel" type="number" class="form-control form-bf" id="tel" placeholder="" maxlength="20" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" required>
          </div>

          <div class="form-group">
            <label for="email" class="text-white">Correo electrónico*:</label>
            <input name="email" type="email" class="form-control form-bf" id="email" placeholder="" required>
          </div>
          
          <input type="hidden" name="google-response-token" id="google-response-token">
          
          <div class="text-center">
            <button type="submit" class="button-3 button-3bf" id="FormHome">Enviar</button>
          </div>
          
        </form>
        
        <!-- Response -->
        <div id="loader" class="mt-4 text-center" style="display:none">
            <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px"
                viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve">
                <path opacity="0.2" fill="#000"
                    d="M20.201,5.169c-8.254,0-14.946,6.692-14.946,14.946c0,8.255,6.692,14.946,14.946,14.946
        s14.946-6.691,14.946-14.946C35.146,11.861,28.455,5.169,20.201,5.169z M20.201,31.749c-6.425,0-11.634-5.208-11.634-11.634
        c0-6.425,5.209-11.634,11.634-11.634c6.425,0,11.633,5.209,11.633,11.634C31.834,26.541,26.626,31.749,20.201,31.749z"></path>
                <path fill="#000" d="M26.013,10.047l1.654-2.866c-2.198-1.272-4.743-2.012-7.466-2.012h0v3.312h0
        C22.32,8.481,24.301,9.057,26.013,10.047z">
                    <animateTransform attributeType="xml" attributeName="transform" type="rotate" from="0 20 20"
                        to="360 20 20" dur="0.5s" repeatCount="indefinite"></animateTransform>
                </path>
            </svg>
        </div>
        <div id="response" class="mt-4 text-center"></div>
        <!-- End Response -->
      </div>

      <div class="col-md-6">
        <div class="row">
          <div class="col-md-6">
            
          </div>
          <div class="col-md-6">
            <img src="<?php echo url(); ?>assets/img/corazon-boudica.png" class=" mb-5 img-fluid desk" width="70%">
          </div>
        </div>
      </div>
    </div>
</section>

<script src="<?php echo url(); ?>assets/js/extends.js"></script>
    <script src="<?php echo url(); ?>assets/js/splitting.js"></script>
    <!--<script src="<?php echo url(); ?>assets/js/main.js?v=1.0.1"></script>-->

<!-- php Mensaje de envio de formulario -->
    <?php 
      if(isset($_GET['enviado'])){
        if($_GET['enviado'] == 1){
            echo "<script>
            $(window).on('load', function() {
                $('#myModalConfirm').modal('show');
                $('#buttonClose').click(function(){
                   window.location.href='https://liveboudica.com/';
                })
            });
            </script>";
        }
      }
    ?>
  <!-- ****************este es modal de boudica******************** -->
    <script type='text/javascript'>
      grecaptcha.ready(function() {
    	  grecaptcha.execute('6LcbJPAZAAAAALzEj9d-rNQKzRXJv_sS-OrhN3sc', {action: 'homepage'})
    	  .then(function(token) {
    	    $('#google-response-token').val(token);
    	  });
    	});
    </script>
    <!-- Facebook Pixel Code --
    <script type='text/javascript'>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
    document,'script','https://connect.facebook.net/en_US/fbevents.js');
    </script>
    <!-- End Facebook Pixel Code --
    <script type='text/javascript'>
    fbq('init', '2845917232177218', {
        "em": "ldgfelipecarrera@gmail.com",
        "fn": "admin",
        "ln": "admin"
    }, {
        "agent": "wordpress-5.2.9-2.0.2"
    });
    </script><script type='text/javascript'>
    fbq('track', 'PageView', []);
    </script>
    <!-- Facebook Pixel Code --
    <noscript>
    <img height="1" width="1" style="display:none" alt="fbpx"
    src="https://www.facebook.com/tr?id=2845917232177218&ev=PageView&noscript=1" />
    </noscript>
    <!-- End Facebook Pixel Code -->
    
    
    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '154358800153255');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=154358800153255&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->


    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '2704344963023992');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=2704344963023992&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->
    
    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '900763967134178');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=900763967134178&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code —>
    
    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '2845917232177218');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=2845917232177218&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->

    <!-- Global site tag (gtag.js) - Google Ads: 808560625 -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-808560625"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'AW-808560625');
	</script>
	<?php
    	if(get_active_url() === "mapa-interactivo") {
    	    echo"
    	    <script>
              fbq('track', 'ViewContent_MapaInteractivo');
            </script>
            ";
    	}
    	if(get_active_url() === "recorrido") {
    	    echo"
    	    <script>
              fbq('track', 'ViewContent_Recorrido');
            </script>
            ";
    	}
    	if(get_active_url() === "e-book") {
    	    echo"
    	    <script>
              fbq('track', 'ViewContent_Ebook');
            </script>
            ";
    	}
    	if(get_active_url() === "contacto") {
    	    echo"
    	    <script>
              fbq('track', 'Contact');
            </script>
            ";
    	}
    	
	?>

</body>
</html>