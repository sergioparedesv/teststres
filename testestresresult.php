<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Test</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">Medical</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="testestres.php">Test Stress</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Test 2</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Test 3</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Test 4</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Test 5</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Test 6</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Test</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#!">Action</a>
                                        <a class="dropdown-item" href="#!">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!">Something else here</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid">
                    <h1 class="mt-4">Test de Estrés</h1>
                    <p>El siguiente es una adaptación del Cuestionario de detección de estrés del Instituto. Recibirás tus resultados por correo.</p>
                    <p>Esta escala no es un instrumento de diagnóstico clínico y se proporciona con fines educativos. Simplemente identifica algunos de los síntomas más comunes del estrés. Si tienes alguna inquietud sobre tu estado de salud emocional, puedes consultar con un profesional del CIDEPSI.</p>
                </div>

                <?php

if($_POST) {
    $visitor_name = "";
    $visitor_email = "";
    $respuesta_1 = "";
    $respuesta_2 = "";
    $respuesta_3 = "";
    $respuesta_5 = "";
    $respuesta_6 = "";
    $respuesta_7 = "";
    $respuesta_8 = "";
    $respuesta_9 = "";
    $respuesta_10 = "";
    $respuesta_11 = "";
    $respuesta_12 = "";
    $respuesta_13 = "";
    $respuesta_14 = "";
    $respuesta_15 = "";
    $respuesta_16 = "";
    $respuesta_17 = "";
    $respuesta_18 = "";
    $respuesta_19 = "";
    $respuesta_20 = "";
    $respuesta_21 = "";
    $respuesta_22 = "";
    $respuesta_23 = "";
    $respuesta_24 = "";
    $respuesta_25 = "";
    
    if(isset($_POST['visitor_name'])) {
      $visitor_name = filter_var($_POST['visitor_name'], FILTER_SANITIZE_STRING);
    }
    
    if(isset($_POST['visitor_email'])) {
    	$visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
    	$visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
    }
    
    if(isset($_POST['respuesta_1'])) {
    	$respuesta_1 = htmlspecialchars($_POST['respuesta_1']);
    }

    if(isset($_POST['respuesta_2'])) {
    	$respuesta_2 = htmlspecialchars($_POST['respuesta_2']);
    }

    if(isset($_POST['respuesta_3'])) {
    	$respuesta_3 = htmlspecialchars($_POST['respuesta_3']);
    }

    if(isset($_POST['respuesta_4'])) {
    	$respuesta_4 = htmlspecialchars($_POST['respuesta_4']);
    }

    if(isset($_POST['respuesta_5'])) {
    	$respuesta_5 = htmlspecialchars($_POST['respuesta_5']);
    }

    if(isset($_POST['respuesta_6'])) {
    	$respuesta_6 = htmlspecialchars($_POST['respuesta_6']);
    }

    if(isset($_POST['respuesta_7'])) {
    	$respuesta_7 = htmlspecialchars($_POST['respuesta_7']);
    }

    if(isset($_POST['respuesta_8'])) {
    	$respuesta_8 = htmlspecialchars($_POST['respuesta_8']);
    }

    if(isset($_POST['respuesta_9'])) {
    	$respuesta_9 = htmlspecialchars($_POST['respuesta_9']);
    }

    if(isset($_POST['respuesta_10'])) {
    	$respuesta_10 = htmlspecialchars($_POST['respuesta_10']);
    }

    if(isset($_POST['respuesta_11'])) {
    	$respuesta_11 = htmlspecialchars($_POST['respuesta_11']);
    }

    if(isset($_POST['respuesta_12'])) {
    	$respuesta_12 = htmlspecialchars($_POST['respuesta_12']);
    }

    if(isset($_POST['respuesta_13'])) {
    	$respuesta_13 = htmlspecialchars($_POST['respuesta_13']);
    }

    if(isset($_POST['respuesta_14'])) {
    	$respuesta_14 = htmlspecialchars($_POST['respuesta_14']);
    }

    if(isset($_POST['respuesta_15'])) {
    	$respuesta_15 = htmlspecialchars($_POST['respuesta_15']);
    }

    if(isset($_POST['respuesta_16'])) {
    	$respuesta_16 = htmlspecialchars($_POST['respuesta_16']);
    }

    if(isset($_POST['respuesta_17'])) {
    	$respuesta_17 = htmlspecialchars($_POST['respuesta_17']);
    }

    if(isset($_POST['respuesta_18'])) {
    	$respuesta_18 = htmlspecialchars($_POST['respuesta_18']);
    }

    if(isset($_POST['respuesta_19'])) {
    	$respuesta_19 = htmlspecialchars($_POST['respuesta_19']);
    }

    if(isset($_POST['respuesta_20'])) {
    	$respuesta_20 = htmlspecialchars($_POST['respuesta_20']);
    }


    if(isset($_POST['respuesta_21'])) {
    	$respuesta_21 = htmlspecialchars($_POST['respuesta_21']);
    }

    if(isset($_POST['respuesta_22'])) {
    	$respuesta_22 = htmlspecialchars($_POST['respuesta_22']);
    }

    if(isset($_POST['respuesta_23'])) {
    	$respuesta_23 = htmlspecialchars($_POST['respuesta_23']);
    }

    if(isset($_POST['respuesta_24'])) {
    	$respuesta_24 = htmlspecialchars($_POST['respuesta_24']);
    }

    if(isset($_POST['respuesta_25'])) {
    	$respuesta_25 = htmlspecialchars($_POST['respuesta_25']);
    }




    echo($visitor_name. "<br>");
    echo($visitor_email. "<br>");
    $resultado = $respuesta_1 + $respuesta_2 + $respuesta_3 + $respuesta_4 + $respuesta_5  + $respuesta_6 + $respuesta_7 + $respuesta_8 + $respuesta_9 + $respuesta_10 + $respuesta_11 + $respuesta_12 + $respuesta_13 + $respuesta_14 + $respuesta_15 + $respuesta_16 + $respuesta_17 + $respuesta_18 + $respuesta_19 + $respuesta_20 + $respuesta_21 + $respuesta_22 + $respuesta_23 + $respuesta_24 + $respuesta_25;
    $resultado = $resultado*0.8;

    echo("Puntaje de estres :");
    echo($resultado);
    switch(true) { 
    case ($resultado <= 25):
        echo "<font color='#58D68D'> No sufre de estres"; // <font color="#80BFFF">
        break;
    case ($resultado >= 26 && $resultado <= 49):
        echo "<font color='#239B56'> Bajo"; // <font color="#80BFFF">
        break;
    case ($resultado >= 50 && $resultado <= 70):
        echo "<font color='#FFC300'> Medio"; // <font color="#80BFFF">
        break;
    case ($resultado >= 71 && $resultado <= 80):
        echo "<font color='#FF5733'> Alto"; // <font color="#80BFFF">
        break;
    case ($resultado >= 81):
        echo "<font color='#C70039'> Extremo"; // <font color="#80BFFF">
        break; 
  }


    /*
    if($concerned_department == "billing") {
    	$recipient = "billing@domain.com";
    }
    else if($concerned_department == "marketing") {
    	$recipient = "marketing@domain.com";
    }
    else if($concerned_department == "technical support") {
    	$recipient = "tech.support@domain.com";
    }
    else {
    	$recipient = "contact@domain.com";
    }
    
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $visitor_email . "\r\n";
    
    if(mail($recipient, $email_title, $visitor_message, $headers)) {
    	echo "<p>Thank you for contacting us, $visitor_name. You will get a reply within 24 hours.</p>";
    } else {
    	echo '<p>We are sorry but the email did not go through.</p>';
    }
    */
} else {
    echo '<p>No Envio los datos solicitados</p>';
}

?>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
