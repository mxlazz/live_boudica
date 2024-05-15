    <footer>
        <div class="container footer-links">
            <div class="row">
                <div class="col-md-5 mb-5 mb-md-0">
                    <img src="<?php echo url(); ?>assets/img/logo-2.png" alt="logo" class="d-inline-block mb-4">
                    <p class="text-justify">Boudica es un proyecto de departamentos únicos en Puebla, ubicado en el
                        nuevo centro de la Ciudad. Vive el lujo y la sofisticación en un solo lugar.</p>
                    <div class="social-bottom">
                        <a href="https://www.facebook.com/LiveBoudica" target="_blank"><i class="fa fa-facebook"
                                aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com/liveboudica" target="_blank"><i class="fa fa-instagram"
                                aria-hidden="true"></i></a>
                        <a href="https://www.linkedin.com/company/metropolitan-desarrollos-premium" target="_blank"><i
                                class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h3>Contacto</h3>

                    <div class="footer-contact mb-4">
                        <img class="footer-img" src="<?php echo url(); ?>assets/img/pin.png" alt="Pin"> Blvd.
                        Atlixcáyotl No. 1499 3-A, Reserva territorial Atlixcáyotl, San Andrés Cholula, Puebla
                    </div>
                    <div class="footer-contact mb-4"><img class="footer-img"
                            src="<?php echo url(); ?>assets/img/phone.png" alt="Pin">
                        <div>Oficina <span class="brown-color">(222) 290 77 77</span><br>
                            Whatsapp <span class="brown-color">(222) 709 00 00</span></div>
                    </div>
                    <div class="footer-contact mb-4"><img class="footer-img"
                            src="<?php echo url(); ?>assets/img/mail.png" alt="Pin">
                        <div><span class="brown-color">ventas@liveboudica.com</span></div>
                    </div>

                </div>
                <div class="col-md-3 mb-5 mb-md-0">
                    <h3>Mapa del Sitio</h3>
                    <div class="sitemap">
                        <a href="<?php echo url(); ?>concepto/">Concepto</a>
                        <a href="<?php echo url(); ?>departamentos/">Departamentos</a>
                        <a href="<?php echo url(); ?>amenidades/">Amenidades</a>
                        <a href="<?php echo url(); ?>e-book/">E-book</a>
                        <a href="<?php echo url(); ?>contacto/">Contacto</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy">
            <div class="container">
                <div>© 2021 Powered by blanck.mx</div>
                <div>Metropólitan Desarrollos Premium</div>
                <div><a href="<?php echo url(); ?>aviso-de-privacidad.php">Aviso de Privacidad</a></div>
            </div>
        </div>
    </footer>

    <!--<a href="#" class="mt-3 my-3" style="position:fixed; left:20px; bottom: 120px; z-index:100;" data-toggle="modal" data-target="#myModalRegister" data-whatever="@mdo">
        <img src="<?php echo url(); ?>assets/img/buenfin-boudica.png" class=" mb-5 img-fluid" width="27%">
    </a>-->

    <a href="<?php echo url(); ?>recorrido/" class="button-2 mt-3 my-3"
        style="position:fixed; left:20px; bottom: 80px; z-index:100;">Recorrido <br> Virtual</a>

    <a href="https://api.whatsapp.com/send?phone=522227090000&amp;text=¡Hola!%20Vi%20su%20página%20web%20de%20Live%20Boudica%20y%20quiero%20más%20información%20sobre%20sus%20departamentos."
        class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>

    <script src="<?php echo url(); ?>assets/js/extends.js"></script>
    <script src="<?php echo url(); ?>assets/js/splitting.js"></script>
    <script src="<?php echo url(); ?>assets/js/main.js?v=1.0.1"></script>
    <script src="<?php echo url(); ?>assets/js/app.js"></script>

    <!-- modal boudica -->
    <!-- *****************este es modal de boudica**************** -->

    <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalRegister" data-whatever="@mdo">Open modal for @mdo</button>-->


    <!--modal boudica-->
    <div class="modal fade bd-example-modal-xl" id="myModalRegister" tabindex="-1" role="dialog"
        aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php echo url(); ?>assets/img/title-boudica.png" class=" mb-5 img-fluid" width="85%">
                        <h4 class="text-uppercase text-white">Regístrate y recibe información sobre nuestros últimos
                            departamentos</h4>
                        <!--<img src="<?php echo url(); ?>assets/img/buenfin-boudica.png" class="img-fluid movil" width="25%">-->

                        <form action="<?php echo url(); ?>template-parts/form-contact-buenfin.php" method="POST"
                            id="FormRegister">

                            <div class="form-group">
                                <label for="name" class="text-white">Nombre completo*:</label>
                                <input name="name" type="text" class="form-control form-bf" id="name" placeholder=""
                                    onkeyup="checkInput(event);" required>
                            </div>

                            <div class="form-group">
                                <label for="name" class="text-white">Número Telefónico*:</label>
                                <input name="tel" type="text" class="form-control form-bf" id="tel1" placeholder=""
                                    maxlength="10" required>
                            </div>

                            <div class="form-group">
                                <label for="name" class="text-white">Comfirmar número telefónico*:</label>
                                <input name="phone" type="text" class="form-control form-bf" id="tel2" placeholder=""
                                    maxlength="10" onblur="validarTelefono(this)" required>
                            </div>

                            <div class="form-group">
                                <label for="email" class="text-white">Correo electrónico*:</label>
                                <input name="email" type="email" class="form-control form-bf" id="email" placeholder=""
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="typeMessage" class="text-white">¿Cuál sería tu preferencia para el método de
                                    contacto que
                                    utilizáramos contigo?*:</label>
                                <select name="typeMessage" class="form-control form-bf" onchange="validarForm()"
                                    id="select">
                                    <option style="color:#000;" value="Whatsapp">Whatsapp</option>
                                    <option style="color:#000;" value="Llamada ">Llamada</option>
                                    <option style="color:#000;" value="Email">Email</option>
                                </select>
                            </div>

                            <div class="phoneClass text-white mb-3"></div>

                            <input type="hidden" name="google-response-token" id="google-response-token">

                            <div class="text-center">
                                <button type="submit" class="button-disabled button-3 button-3bf"
                                    id="BtnEnviar">Enviar</button>
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
                                    <animateTransform attributeType="xml" attributeName="transform" type="rotate"
                                        from="0 20 20" to="360 20 20" dur="0.5s" repeatCount="indefinite">
                                    </animateTransform>
                                </path>
                            </svg>
                        </div>
                        <div id="response" class="mt-4 text-center"></div>
                        <!-- End Response -->
                    </div>

                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <!--<img src="<?php echo url(); ?>assets/img/buenfin-boudica.png" class=" mb-5 img-fluid desk" width="70%">-->
                            </div>
                            <div class="col-md-6">
                                <img src="<?php echo url(); ?>assets/img/corazon-boudica.png"
                                    class=" mb-5 img-fluid desk" width="70%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--modal boudica confirmacion-->


    <!--*************************************-->
    <div class="modal fade bd-example-modal-xl" id="myModalConfirm" tabindex="-1" role="dialog"
        aria-labelledby="myModalConfirm" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content bg-piedra">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="buttonClose">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <img src="<?php echo url(); ?>assets/img/title-boudica.png" class=" mb-5 img-fluid" width="55%">
                        <!--<img src="<?php echo url(); ?>assets/img/buenfin-boudica.png" class="img-fluid" width="15%">-->
                    </div>
                    <div class="row pt-5" style="background:#2d6e8a;">
                        <div class="col-md-8">
                            <h1 class="text-uppercase text-white">!Gracias por tu registro!</h1>
                            <h5 class="text-uppercase text-white">acabas de ganar un monedero electrónico de liverpool o
                                palacio de hierro con un valor de <b>$10,000 pesos*</b> aplicable en la compra de tu
                                departamento.</h5>
                        </div>

                        <div class="col-md-4 pt-4">
                            <img src="<?php echo url(); ?>assets/img/corazon-boudica.png" class=" mb-5 img-fluid desk"
                                width="50%">
                        </div>
                    </div>
                    <h5 class=" text-white">*Consulte términos y condiciones.</h5>
                </div>
            </div>
        </div>
    </div>



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
! function(f, b, e, v, n, t, s) {
    if (f.fbq) return;
    n = f.fbq = function() {
        n.callMethod ?
            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
    };
    if (!f._fbq) f._fbq = n;
    n.push = n;
    n.loaded = !0;
    n.version = '2.0';
    n.queue = [];
    t = b.createElement(e);
    t.async = !0;
    t.src = v;
    s = b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t, s)
}(window, document, 'script',
    'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '154358800153255');
fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=154358800153255&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->


    <!-- Facebook Pixel Code -->
    <script>
! function(f, b, e, v, n, t, s) {
    if (f.fbq) return;
    n = f.fbq = function() {
        n.callMethod ?
            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
    };
    if (!f._fbq) f._fbq = n;
    n.push = n;
    n.loaded = !0;
    n.version = '2.0';
    n.queue = [];
    t = b.createElement(e);
    t.async = !0;
    t.src = v;
    s = b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t, s)
}(window, document, 'script',
    'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '2704344963023992');
fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=2704344963023992&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->

    <!-- Facebook Pixel Code -->
    <script>
! function(f, b, e, v, n, t, s) {
    if (f.fbq) return;
    n = f.fbq = function() {
        n.callMethod ?
            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
    };
    if (!f._fbq) f._fbq = n;
    n.push = n;
    n.loaded = !0;
    n.version = '2.0';
    n.queue = [];
    t = b.createElement(e);
    t.async = !0;
    t.src = v;
    s = b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t, s)
}(window, document, 'script',
    'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '900763967134178');
fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=900763967134178&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code —>
    
    <!-- Facebook Pixel Code -->
    <script>
! function(f, b, e, v, n, t, s) {
    if (f.fbq) return;
    n = f.fbq = function() {
        n.callMethod ?
            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
    };
    if (!f._fbq) f._fbq = n;
    n.push = n;
    n.loaded = !0;
    n.version = '2.0';
    n.queue = [];
    t = b.createElement(e);
    t.async = !0;
    t.src = v;
    s = b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t, s)
}(window, document, 'script',
    'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '2845917232177218');
fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=2845917232177218&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->

    <!-- Global site tag (gtag.js) - Google Ads: 808560625 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-808560625"></script>
    <!--<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'AW-808560625');
	</script>-->
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
    	
    	if(get_active_url() === "gracias") {
    	    echo"
    	    <script>
        	  window.dataLayer = window.dataLayer || [];
        	  function gtag(){dataLayer.push(arguments);}
        	  gtag('js', new Date());
        
        	  gtag('config', 'AW-808560625');
        	</script>
            ";
    	}
    	
	?>

    </body>

    </html>