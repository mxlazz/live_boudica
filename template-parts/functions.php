<?php



function url(){
    $root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
    return $root;
}

function get_active_url () {
    $active_url = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    return $active_url;
}

function meta() {
    $meta[] = "";

    if(get_active_url() === "") {
        $meta["title"] = "Boudica - Venta de departamentos de lujo";
        $meta["description"] = "Boudica, los departamentos en Puebla que estabas buscando. Su concepto, diseño y estilo crean toda una experiencia única.";
    }

    if(get_active_url() === "concepto") {
        $meta["title"] = "Concepto - Boudica";
        $meta["description"] = "Boudica es el proyecto de departamentos que estabas buscando. Su concepto, diseño y estilo crean, en conjunto, toda una experiencia única para quienes están dispuestos a vivirla. ";
    }

    if(get_active_url() === "amenidades") {
        $meta["title"] = "Amenidades - Boudica";
        $meta["description"] = "Cada día será una nueva experiencia para tí, en donde disfrutarás de actividades tanto deportivas como recreativas.";
    }

    if(get_active_url() === "departamentos") {
        $meta["title"] = "Departamentos - Boudica";
        $meta["description"] = "Arquitectura única y funcional. Departamentos a partir de 42 m2.<br> Máxima calidad en acabados. 4 elevadores por torre.";
    }

    if(get_active_url() === "mapa-interactivo") {
        $meta["title"] = "Mapa Interactivo - Boudica";
        $meta["description"] = "Navega entre nuestros diferentes mapas interactivos y conoce nuestros exclusivos departamentos.";
    }

    if(get_active_url() === "e-book") {
        $meta["title"] = "Descarga E-book - Boudica";
        $meta["description"] = "Descarga nuestro e-book y conoce más sobre nuestro proyecto y enamórate de algo tan único como tú.";
    }

    if(get_active_url() === "contacto") {
        $meta["title"] = "Contacto - Boudica";
        $meta["description"] = "El proyecto fue diseñado para brindar una vida extraordinaria y llena de experiencias.";
    }
    
    if(get_active_url() === "recorrido") {
        $meta["title"] = "Recorrido Virtual - Boudica";
        $meta["description"] = "El proyecto fue diseñado para brindar una vida extraordinaria y llena de experiencias.";
    }

    return $meta;
}

function generate_menu () {
    $menu_items = array("concepto", "departamentos", "amenidades", "mapa-interactivo", "e-book", "contacto");



    foreach ($menu_items as $nav_item) {
        if($nav_item === "mapa-interactivo")
            $navlink = "Mapa Interactivo";
        else
            $navlink = $nav_item;

        if ($nav_item == get_active_url())
        {
            echo '<li class="nav-item active">
                     <a class="nav-link" href="' . url() . $nav_item . '/">' . $navlink . '</a>
                 </li>';
        } else {
            echo '<li class="nav-item">
                     <a class="nav-link" href="' . url() . $nav_item . '/">' . $navlink . '</a>
                 </li>';
        }
    }
}

?>