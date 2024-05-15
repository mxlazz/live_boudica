<?php include_once('template-parts/header.php'); ?>

<div class="header-page header-contact"></div>

<div class="section-home-1 container-fluid mb-5">
    <h2 class="title-animated text--enter" data-scroll="out" data-splitting="">Contacto</h2>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-7">
            <img src="<?php echo url(); ?>assets/img/contacts-1.jpg" alt="Contacto" class="img-contact">
            <div class="card-contact">

                <div class="footer-contact mb-4">
                    <img class="footer-img" src="<?php echo url(); ?>assets/img/pin.png" alt="Pin">
                    <div>
                        <h3>Dirección</h3>Blvd. Atlixcáyotl No. 1499 3-A, Reserva territorial Atlixcáyotl, San Andrés
                        Cholula, Puebla
                    </div>
                </div>

                <div class="footer-contact mb-4">
                    <img class="footer-img" src="<?php echo url(); ?>assets/img/phone.png" alt="Pin">
                    <div>
                        <h3>Teléfono</h3>Oficina <span class="brown-color">(222) 290 77 77</span><br>
                        Whatsapp <span class="brown-color">(222) 709 00 00</span>
                    </div>
                </div>
                <div class="footer-contact mb-4">
                    <img class="footer-img" src="<?php echo url(); ?>assets/img/mail.png" alt="Pin">
                    <div>
                        <h3>Email</h3><span class="brown-color">ventas@liveboudica.com</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <h3 class="text-left mt-4 mb-4 mt-lg-0">Envíanos <span class="brown-color">tus datos</span></h3>
            <p>Te estamos esperando para conocer la experiencia de una vida magnífica.</p>
            <p>Permítenos conocer tus ideas y comentarios o agenda tu cita.</p>
            <form id="contact" name="contactoForm" class="needs-validation mt-4" novalidate>
                <input type="hidden" name="token" id="token">
                <input type="hidden" name="action" value="formulario">
                <div class="form-group row">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="nombre" name="nombre" required=""
                            placeholder="Nombre*">
                        <div class="invalid-feedback">Completa tu nombre </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-12 col-md-6  mb-3 mb-0">
                        <input type="email" class="form-control" id="correo" name="correo" required=""
                            placeholder="Email*">
                        <div class="invalid-feedback">Ingresa tu correo electrónico </div>
                    </div>
                    <div class="col-sm-12 col-md-6 mb-3 mb-0">
                        <input type="text" class="form-control" id="telefono" name="telefono" mask="9999999999"
                            placeholder="Teléfono">
                    </div>
                </div>

                <!--<div class="form-group row">
                    <div class="col-sm-12">
                        <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Quiero informes de Live Boudica" value="Quiero informes de Live Boudica" rows="4"
                            ></textarea>
                        <div class="invalid-feedback">No has escrito tu mensaje</div>
                    </div>
                </div>-->

                <div class="form-group row text-center mt-5">
                    <div class="col-sm-12 col-md-6 text-left mb-5 mb-md-0">
                        <div style="font-size: 11px;">Un asesor te contactará para resolver todas tus dudas.</div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <!--<button class="button-3" id="FormHome" onClick=" fbq('track', 'Leadt');">Enviar</button>-->
                        <button class="button-3" id="FormHome" onClick="fbq('track', 'Lead');">Enviar</button>
                    </div>
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
    </div>
</div>

<div class="map mt-5">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.8041005838095!2d-98.23898538509958!3d19.028352087115298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfc7bd7cd821fd%3A0xbccb1c457276a209!2sBoudica!5e0!3m2!1ses!2smx!4v1572893415648!5m2!1ses!2smx"
        height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>

<?php include_once('template-parts/footer.php') ?>