<?php
    
    //Replace
    $to = 'ventas@liveboudica.com,live-boudica-a3e412-universe-keen@conversion.zenvia.com,laura.rosas@grupo4s.com,robert@blanck.mx, mpablo24@hotmail.com, live-boudica-a3e412-ability-mixture@leads.getsirena.com, live-boudica-a3e412-mansion-sea@leads.getsirena.com';
    //$to = 'travoltasag@gmail.com';
    
    //Replace
    $subject = "Agendar recorrido";
    
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    
    //Replace
    $headers .= "from: contactoweb@liveboudica.com" . "\r\n";
    
    $headers .= "Reply-to: ". strip_tags($_POST['correo']) . "\r\n";
    
    $message = '';
    
    // Message Body
    
    $message .= "Nombre:" . strip_tags($_POST['nombre']) . "\n";
    $message .= "E-mail:" . filter_var(strip_tags($_POST["correo"]), FILTER_SANITIZE_EMAIL) . "\n";
    $message .= "Teléfono:" . strip_tags($_POST['telefono']) . "\n";
    $message .= "Fecha:" . strip_tags($_POST['fecha']) . "\n";
    $message .= "Horario:" . strip_tags($_POST['horario']) . "\n";
    $message .= "Plataforma de Meeting:" . strip_tags($_POST['plataforma']) . "\n";
    
    //Replace
    $message .= "\n\n\nEste Email ha sido enviado desde la página web de https://liveboudica.com/";
    
    $message .= '';
    
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
        
        header('Location: https://liveboudica.com/gracias/');
        echo json_encode("ok");
    } else {
        ob_start();
        var_dump($response);
        $result = ob_get_clean();
        echo json_encode("Ha ocurrido un error al enviar tu mensaje, inténtalo nuevamente más tarde. Error:" . $result);
    }

?>