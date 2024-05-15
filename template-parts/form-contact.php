<?php
    
    //Replace
    $to = 'ventas@liveboudica.com, live-boudica-a3e412-universe-keen@conversion.zenvia.com,laura.rosas@grupo4s.com,robert@blanck.mx, mpablo24@hotmail.com, live-boudica-a3e412-armor-team@leads.getsirena.com';
    //$to = 'travoltasag@gmail.com';
    //ventas@liveboudica.com, mpablo24@hotmail.com, robert@blanck.mx
    
    //Replace
    $subject = "Formulario de contacto enviado desde Live Boudica ";
    
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    
    //Replace
    $headers .= "from: contactoweb@liveboudica.com" . "\r\n";
    
    $headers .= "Reply-to: ". strip_tags($_POST['correo']) . "\r\n";
    $message = '<html><body>';
    
    // Message Body
    
    $message .= "<p><b>Nombre: </b>" . strip_tags($_POST['nombre']) . "</p>";
    $message .= "<p><b>E-mail: </b>" . filter_var(strip_tags($_POST["correo"]), FILTER_SANITIZE_EMAIL) . "</p>";
    $message .= "<p><b>Teléfono: </b>" . strip_tags($_POST['telefono']) . "</p>";
    /*$message .= "<p><b>Mensaje: </b>" . strip_tags($_POST['mensaje']) . "</p>";*/
    $message .= "<p><b>Mensaje: </b> Mail enviado desde Live Boudica </p>";
    
    //Replace
    $message .= "<br><br><p>--</p><p>Este Email ha sido enviado desde la página web de https://liveboudica.com/</p>";
    
    $message .= '</body></html>';
    
    
    /* VALIDATE RECAPTCHA */
    
    $token = $_POST['token'];
    $action = $_POST['action'];
    
    // call curl to POST request
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => "6LcbJPAZAAAAAKJ236nU9IKxJ8QpJ2o81UJderiA", 'response' => $token)));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    $error_msg = curl_error($ch);
    curl_close($ch);
    $arrResponse = json_decode($response, true);
    
    // verify the response
    if($arrResponse["score"] >= 0.5) {
        mail($to, $subject, $message, $headers);
        echo json_encode("ok");
    } else {
        ob_start();
        var_dump($response);
        $result = ob_get_clean();
        echo json_encode("Ha ocurrido un error al enviar tu mensaje, inténtalo nuevamente más tarde. Error:" . $result);
    }
?>