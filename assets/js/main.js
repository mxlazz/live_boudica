$(document).ready(function () {
    
    /* Run animation Menu Burguer */
    $('.nav-icon').click(function () {
        $(this).toggleClass('open');
        $("body").toggleClass("fixedPosition");
    });


    //---------------- SPLIT WORDS ------------------

    Splitting();

    //---------------- DETECT SCROLL ------------------

    ScrollOut({
        once: true,
        onShown: function(element, ctx, scrollingElement) {
            /* Triggered when an element is shown */
            if(element.className === "counter") {
                const counter = element;
                const speed = 1000; // The lower the slower
                const target = counter.getAttribute('data-target');
                const ms = counter.getAttribute('data-ms');
                // Lower inc to slow and higher to slow
                const inc = Math.ceil(target / speed);
                const updateCount = () => {
                    
                    const count = +counter.innerText;
            
                    // console.log(inc);
                    // console.log(count);
            
                    // Check if target is reached
                    if (count < target) {
                        // Add inc to count and output in counter
                        counter.innerText =  count + inc;
                        // Call function every ms
                        setTimeout(updateCount, ms);
                    } else {
                        counter.innerText = target;
                    }
                };
                updateCount();
            }
                
        }
    });

    //---------------- CARROUSEL HOME ------------------

    $('.carousel').carousel({
        'interval': 6000,
        'pause': false
    });

    //---------------- SLIDER AMENIDADES ------------------

    $('.slider').slick({
        slidesToShow: 3,
        slidesToScroll: 3,
        dots: false,
        arrows: true,
        focusOnSelect: false,
        infinite: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });

    //---------------- FILTER AMENIDADES ------------------

    var category_item = $('.filter__option');
    var first_category_item = $('.filter__option[category="all"]');
    var project = $('.project__element');

    function addColorFirstCategoryItem(){
      if(first_category_item.length){
        first_category_item.addClass('filter__option--active');
      }
    }
    addColorFirstCategoryItem();

    category_item.click(function(event){
      event.preventDefault();
      var category_active = $(this).attr('category');

      //Quitando seleccion
      category_item.removeClass('filter__option--active');

      //Agregando seleccion
      $(this).addClass('filter__option--active');

      //ocultando proyecto
      project.css('transform', 'scale(0)');
      function hideProject(){
        project.hide();
      } setTimeout(hideProject, 300);


      //mostrar proyecto

      function showProject(){
        $('.project__element[category*="'+ category_active +'"]').show();
        $('.project__element[category*="'+ category_active +'"]').css('transform', 'scale(1)');
      } setTimeout(showProject, 300);
    });

    //mostrar todos los proyectos
    first_category_item.click(function(){
      function showAllProjects(){
        project.show();
        project.css('transform', 'scale(1)');
      } setTimeout(showAllProjects, 300);
    });
    

});

    //modal promo
    $(window).on('load', function() {
        $('#myModalRegister').modal('show');
    });


(function () {
  'use strict';
  window.addEventListener('load', function () {
      
      function createForm (formElement, responseElement, urlPhp) {
            formElement.addEventListener('submit', (e) => {
                e.preventDefault();
                
                
                let loader = document.getElementById("loader");
                loader.style.display = "block";
                if (formElement.checkValidity() === false) {
                    e.stopPropagation();
                    loader.style.display = "none";
                    responseElement.innerHTML = `
                            <div class="alert alert-danger" role="alert">
                                Por favor rellena todos los campos obligatorios marcados con (*).
                            </div>`;
                    
                } else {
                    
                    grecaptcha.ready(function() {
                        grecaptcha.execute('6LcbJPAZAAAAALzEj9d-rNQKzRXJv_sS-OrhN3sc', {action: 'formulario'}).then(function(token) {
                            let recaptchaResponse = document.getElementById('token');
                            if(recaptchaResponse) recaptchaResponse.value = token;
                            
                            let data = new FormData(formElement);
                    
                            fetch(urlPhp, {
                                method: 'POST',
                                body: data
                            })
                            .then (res => res.json())
                            .then (newData => {
                                loader.style.display = "none";
                                if (newData === 'ok') {
                                    console.log('ok');
                                    responseElement.innerHTML = `
                                    <div class="alert alert-success" role="alert">
                                        <b>¡Gracias por escribirnos, ${data.get('nombre')}!</b> Nos comunicaremos contigo lo más pronto posible.
                                    </div>`;
                                } else {
                                    responseElement.innerHTML = `
                                    <div class="alert alert-danger" role="alert">
                                       ${newData}
                                    </div>`;
                                }
                            });
                        });
                    });
                    
                }
                formElement.classList.add('was-validated');
            });
        }
      
      /* CREATE FORM */
      let formContact = document.getElementById('contactoForm');

      if(formContact) {
          let response = document.getElementById('response');
          let urlPhp = 'https://liveboudica.com/template-parts/form-home.php';
          createForm(formContact, response, urlPhp);
      }
      
      /* CREATE FORM */
      formContact = document.getElementById('contact');

      if(formContact) {
          let response = document.getElementById('response');
          let urlPhp = 'https://liveboudica.com/template-parts/form-contact.php';
          createForm(formContact, response, urlPhp);
      }
      

  }, false);
})();

    grecaptcha.ready(function() {
	  grecaptcha.execute('6LcbJPAZAAAAALzEj9d-rNQKzRXJv_sS-OrhN3sc', {action: 'homepage'})
	  .then(function(token) {
	    $('#google-response-token').val(token);
	  });
	});