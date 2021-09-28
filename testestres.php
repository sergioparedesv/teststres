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
                <div class="container-fluid">
                <form action="testestresresult.php" method="post">

                <div class="card">
  <div class="card-body">
      <h3>Datos Personales</h3>
  <div class="elem-group">
    <label for="name"></label>
    <input type="text" id="name" name="visitor_name" placeholder="Nombre" pattern=[A-Z\sa-z]{3,20} required>
  </div>
  <div class="elem-group">
    <label for="email"></label>
    <input type="email" id="email" name="visitor_email" placeholder="E-mail" required>
  </div>
  </div>
</div>


  <!-- Pregunta 1 -->
  <label for="customRange3" class="form-label">1. Me siento cansado/a*</label>
    <div class="row">
        <div class="col">
            Nunca
        </div>
        <div class="col">
            A veces
        </div>
        <div class="col">
            Seguido
        </div>
        <div class="col">
            Frecuentemente
        </div>
        <div class="col">
            Siempre
        </div>
    </div>

    <input type="range" name="respuesta_1" id="ageInputId1" value="1" min="1" max="5" step="1" oninput="ageOutputId1.value = ageInputId1.value" width: 100%; height: 50px" >
    <output name="ageOutputName" id="ageOutputId1" class="out-level">1</output>          

    <!-- Fin Pregunta 1 -->

      <!-- Pregunta 2 -->
  <label for="customRange3" class="form-label">2. Me es difícil relajarme o sentirme tranquilo/a*</label>
    <div class="row">
        <div class="col">
            Nunca
        </div>
        <div class="col">
            A veces
        </div>
        <div class="col">
            Seguido
        </div>
        <div class="col">
            Frecuentemente
        </div>
        <div class="col">
            Siempre
        </div>
    </div>

    <input type="range" name="respuesta_2" id="ageInputId2" value="1" min="1" max="5" step="1" oninput="ageOutputId2.value = ageInputId2.value" width: 100%; height: 50px" >
    <output name="ageOutputName" id="ageOutputId2" class="out-level">1</output>          

    <!-- Fin Pregunta 2 -->

<!-- Pregunta 3 -->
  <label for="customRange3" class="form-label">3. Me es difícil tomar decisiones*</label>
    <div class="row">
        <div class="col">
            Nunca
        </div>
        <div class="col">
            A veces
        </div>
        <div class="col">
            Seguido
        </div>
        <div class="col">
            Frecuentemente
        </div>
        <div class="col">
            Siempre
        </div>
    </div>

    <input type="range" name="respuesta_3" id="ageInputId3" value="1" min="1" max="5" step="1" oninput="ageOutputId3.value = ageInputId3.value" width: 100%; height: 50px" >
    <output name="ageOutputName" id="ageOutputId3" class="out-level">1</output>          

    <!-- Fin Pregunta 3 -->

<!-- Pregunta 4 -->
<label for="customRange3" class="form-label">4. Mi corazón se acelera y respiro rápidamente.*</label>
    <div class="row">
        <div class="col">
            Nunca
        </div>
        <div class="col">
            A veces
        </div>
        <div class="col">
            Seguido
        </div>
        <div class="col">
            Frecuentemente
        </div>
        <div class="col">
            Siempre
        </div>
    </div>

    <input type="range" name="respuesta_4" id="ageInputId4" value="1" min="1" max="5" step="1" oninput="ageOutputId4.value = ageInputId4.value" width: 100%; height: 50px" >
    <output name="ageOutputName" id="ageOutputId4" class="out-level">1</output>          

    <!-- Fin Pregunta 4 -->

<!-- Pregunta 5 -->
<label for="customRange3" class="form-label">5. Tengo problemas para pensar con claridad.*</label>
    <div class="row">
        <div class="col">
            Nunca
        </div>
        <div class="col">
            A veces
        </div>
        <div class="col">
            Seguido
        </div>
        <div class="col">
            Frecuentemente
        </div>
        <div class="col">
            Siempre
        </div>
    </div>

    <input type="range" name="respuesta_5" id="ageInputId5" value="1" min="1" max="5" step="1" oninput="ageOutputId5.value = ageInputId5.value" width: 100%; height: 50px" >
    <output name="ageOutputName" id="ageOutputId5" class="out-level">1</output>          

    <!-- Fin Pregunta 5 -->

<!-- Pregunta  6 -->
<label for="customRange3" class="form-label">6. Como demasiado o muy poco.*</label>
    <div class="row">
        <div class="col">
            Nunca
        </div>
        <div class="col">
            A veces
        </div>
        <div class="col">
            Seguido
        </div>
        <div class="col">
            Frecuentemente
        </div>
        <div class="col">
            Siempre
        </div>
    </div>

    <input type="range" name="respuesta_6" id="ageInputId6" value="1" min="1" max="5" step="1" oninput="ageOutputId6.value = ageInputId6.value" width: 100%; height: 50px" >
    <output name="ageOutputName" id="ageOutputId6" class="out-level">1</output>          

    <!-- Fin Pregunta 6 -->

    <!-- Pregunta 7 -->
  <label for="customRange3" class="form-label">7. Me siento anestesiado emocionalmente.*</label>
    <div class="row">
        <div class="col">
            Nunca
        </div>
        <div class="col">
            A veces
        </div>
        <div class="col">
            Seguido
        </div>
        <div class="col">
            Frecuentemente
        </div>
        <div class="col">
            Siempre
        </div>
    </div>

    <input type="range" name="respuesta_7" id="ageInputId7" value="1" min="1" max="5" step="1" oninput="ageOutputId7.value = ageInputId7.value" width: 100%; height: 50px" >
    <output name="ageOutputName" id="ageOutputId7" class="out-level">1</output>          

    <!-- Fin Pregunta 7 -->

    <!-- Pregunta 8 -->
  <label for="customRange3" class="form-label">8. Pienso en mis problemas una y otra vez durante el día.</label>
    <div class="row">
        <div class="col">
            Nunca
        </div>
        <div class="col">
            A veces
        </div>
        <div class="col">
            Seguido
        </div>
        <div class="col">
            Frecuentemente
        </div>
        <div class="col">
            Siempre
        </div>
    </div>

    <input type="range" name="respuesta_8" id="ageInputId8" value="1" min="1" max="5" step="1" oninput="ageOutputId8.value = ageInputId8.value" width: 100%; height: 50px" >
    <output name="ageOutputName" id="ageOutputId8" class="out-level">1</output>          

    <!-- Fin Pregunta 8 -->

    <!-- Pregunta 9 -->
  <label for="customRange3" class="form-label">9. Tengo problemas para dormir*</label>
    <div class="row">
        <div class="col">
            Nunca
        </div>
        <div class="col">
            A veces
        </div>
        <div class="col">
            Seguido
        </div>
        <div class="col">
            Frecuentemente
        </div>
        <div class="col">
            Siempre
        </div>
    </div>

    <input type="range" name="respuesta_9" id="ageInputId9" value="1" min="1" max="5" step="1" oninput="ageOutputId9.value = ageInputId9.value" width: 100%; height: 50px" >
    <output name="ageOutputName" id="ageOutputId9" class="out-level">1</output>          

    <!-- Fin Pregunta 9 -->

    <!-- Pregunta 10 -->
  <label for="customRange3" class="form-label">10. Me es difícil sentirme esperanzado/a*</label>
    <div class="row">
        <div class="col">
            Nunca
        </div>
        <div class="col">
            A veces
        </div>
        <div class="col">
            Seguido
        </div>
        <div class="col">
            Frecuentemente
        </div>
        <div class="col">
            Siempre
        </div>
    </div>

    <input type="range" name="respuesta_10" id="ageInputId10" value="1" min="1" max="5" step="1" oninput="ageOutputId10.value = ageInputId10.value" width: 100%; height: 50px" >
    <output name="ageOutputName" id="ageOutputId10" class="out-level">1</output>          

    <!-- Fin Pregunta 10 -->

    <!-- Pregunta 11 -->
  <label for="customRange3" class="form-label">11. Corro riesgos innecesarios o participo en actividades que podrían ser peligrosas para la salud y / o seguridad*</label>
    <div class="row">
        <div class="col">
            Nunca
        </div>
        <div class="col">
            A veces
        </div>
        <div class="col">
            Seguido
        </div>
        <div class="col">
            Frecuentemente
        </div>
        <div class="col">
            Siempre
        </div>
    </div>

    <input type="range" name="respuesta_11" id="ageInputId11" value="1" min="1" max="5" step="1" oninput="ageOutputId11.value = ageInputId11.value" width: 100%; height: 50px" >
    <output name="ageOutputName" id="ageOutputId11" class="out-level">1</output>          

    <!-- Fin Pregunta 11 -->

    <!-- Pregunta 12 -->
  <label for="customRange3" class="form-label">12. Tengo dolor de espalda y cuello, u otro dolor crónico relacionado con la tensión.*</label>
    <div class="row">
        <div class="col">
            Nunca
        </div>
        <div class="col">
            A veces
        </div>
        <div class="col">
            Seguido
        </div>
        <div class="col">
            Frecuentemente
        </div>
        <div class="col">
            Siempre
        </div>
    </div>

    <input type="range" name="respuesta_12" id="ageInputId12" value="1" min="1" max="5" step="1" oninput="ageOutputId12.value = ageInputId12.value" width: 100%; height: 50px" >
    <output name="ageOutputName" id="ageOutputId12" class="out-level">1</output>          

    <!-- Fin Pregunta 12 -->

    <!-- Pregunta 13 -->
  <label for="customRange3" class="form-label">13. Uso más cafeína o nicotina de lo habitual.*</label>
    <div class="row">
        <div class="col">
            Nunca
        </div>
        <div class="col">
            A veces
        </div>
        <div class="col">
            Seguido
        </div>
        <div class="col">
            Frecuentemente
        </div>
        <div class="col">
            Siempre
        </div>
    </div>

    <input type="range" name="respuesta_13" id="ageInputId13" value="1" min="1" max="5" step="1" oninput="ageOutputId13.value = ageInputId13.value" width: 100%; height: 50px" >
    <output name="ageOutputName" id="ageOutputId13" class="out-level">1</output>          

    <!-- Fin Pregunta 13 -->

    <!-- Pregunta 14 -->
  <label for="customRange3" class="form-label">14. Me siento abrumado/a e indefenso/a.*</label>
    <div class="row">
        <div class="col">
            Nunca
        </div>
        <div class="col">
            A veces
        </div>
        <div class="col">
            Seguido
        </div>
        <div class="col">
            Frecuentemente
        </div>
        <div class="col">
            Siempre
        </div>
    </div>

    <input type="range" name="respuesta_14" id="ageInputId14" value="1" min="1" max="5" step="1" oninput="ageOutputId14.value = ageInputId14.value" width: 100%; height: 50px" >
    <output name="ageOutputName" id="ageOutputId14" class="out-level">1</output>          

    <!-- Fin Pregunta 14 -->

<!-- Pregunta 15 -->
  <label for="customRange3" class="form-label">15. Tengo tics nerviosos*</label>
    <div class="row">
        <div class="col">
            Nunca
        </div>
        <div class="col">
            A veces
        </div>
        <div class="col">
            Seguido
        </div>
        <div class="col">
            Frecuentemente
        </div>
        <div class="col">
            Siempre
        </div>
    </div>

    <input type="range" name="respuesta_15" id="ageInputId15" value="1" min="1" max="5" step="1" oninput="ageOutputId15.value = ageInputId15.value" width: 100%; height: 50px" >
    <output name="ageOutputName" id="ageOutputId15" class="out-level">1</output>          

<!-- Fin Pregunta 15 -->

<!-- Pregunta 16 -->
<label for="customRange3" class="form-label">16. Olvido cosas pequeñas*</label>
    <div class="row">
        <div class="col">
            Nunca
        </div>
        <div class="col">
            A veces
        </div>
        <div class="col">
            Seguido
        </div>
        <div class="col">
            Frecuentemente
        </div>
        <div class="col">
            Siempre
        </div>
    </div>

    <input type="range" name="respuesta_16" id="ageInputId16" value="1" min="1" max="5" step="1" oninput="ageOutputId16.value = ageInputId16.value" width: 100%; height: 50px" >
    <output name="ageOutputName" id="ageOutputId16" class="out-level">1</output>          

<!-- Fin Pregunta 16 -->

<!-- Pregunta 17 -->
<label for="customRange3" class="form-label">17. Tengo malestar estomacal.*</label>
    <div class="row">
        <div class="col">
            Nunca
        </div>
        <div class="col">
            A veces
        </div>
        <div class="col">
            Seguido
        </div>
        <div class="col">
            Frecuentemente
        </div>
        <div class="col">
            Siempre
        </div>
    </div>

    <input type="range" name="respuesta_17" id="ageInputId17" value="1" min="1" max="5" step="1" oninput="ageOutputId17.value = ageInputId17.value" width: 100%; height: 50px" >
    <output name="ageOutputName" id="ageOutputId17" class="out-level">1</output>          

<!-- Fin Pregunta 17 -->

<!-- Pregunta 18 -->
<label for="customRange3" class="form-label">18. Me irrito con facilidad.*</label>
    <div class="row">
        <div class="col">
            Nunca
        </div>
        <div class="col">
            A veces
        </div>
        <div class="col">
            Seguido
        </div>
        <div class="col">
            Frecuentemente
        </div>
        <div class="col">
            Siempre
        </div>
    </div>

    <input type="range" name="respuesta_18" id="ageInputId18" value="1" min="1" max="5" step="1" oninput="ageOutputId18.value = ageInputId18.value" width: 100%; height: 50px" >
    <output name="ageOutputName" id="ageOutputId18" class="out-level">1</output>          

<!-- Fin Pregunta 18 -->

<!-- Pregunta 19 -->
<label for="customRange3" class="form-label">19. Tengo cambios de humor y me siento demasiado emocional.*</label>
    <div class="row">
        <div class="col">
            Nunca
        </div>
        <div class="col">
            A veces
        </div>
        <div class="col">
            Seguido
        </div>
        <div class="col">
            Frecuentemente
        </div>
        <div class="col">
            Siempre
        </div>
    </div>

    <input type="range" name="respuesta_19" id="ageInputId19" value="1" min="1" max="5" step="1" oninput="ageOutputId19.value = ageInputId19.value" width: 100%; height: 50px" >
    <output name="ageOutputName" id="ageOutputId19" class="out-level">1</output>          

<!-- Fin Pregunta 19 -->

<!-- Pregunta 20 -->
<label for="customRange3" class="form-label">20. Me resulta difícil concentrarme.*</label>
    <div class="row">
        <div class="col">
            Nunca
        </div>
        <div class="col">
            A veces
        </div>
        <div class="col">
            Seguido
        </div>
        <div class="col">
            Frecuentemente
        </div>
        <div class="col">
            Siempre
        </div>
    </div>

    <input type="range" name="respuesta_20" id="ageInputId20" value="1" min="1" max="5" step="1" oninput="ageOutputId20.value = ageInputId20.value" width: 100%; height: 50px" >
    <output name="ageOutputName" id="ageOutputId20" class="out-level">1</output>          

<!-- Fin Pregunta 20 -->

<!-- Pregunta 21 -->
<label for="customRange3" class="form-label">21. Tengo problemas para sentir que la vida tiene sentido.*</label>
    <div class="row">
        <div class="col">
            Nunca
        </div>
        <div class="col">
            A veces
        </div>
        <div class="col">
            Seguido
        </div>
        <div class="col">
            Frecuentemente
        </div>
        <div class="col">
            Siempre
        </div>
    </div>

    <input type="range" name="respuesta_21" id="ageInputId21" value="1" min="1" max="5" step="1" oninput="ageOutputId21.value = ageInputId21.value" width: 100%; height: 50px" >
    <output name="ageOutputName" id="ageOutputId21" class="out-level">1</output>          

<!-- Fin Pregunta 21 -->

<!-- Pregunta 22 -->
<label for="customRange3" class="form-label">22. Estoy retraído/a y me siento distante y alejado de otras personas.*</label>
    <div class="row">
        <div class="col">
            Nunca
        </div>
        <div class="col">
            A veces
        </div>
        <div class="col">
            Seguido
        </div>
        <div class="col">
            Frecuentemente
        </div>
        <div class="col">
            Siempre
        </div>
    </div>

    <input type="range" name="respuesta_22" id="ageInputId22" value="1" min="1" max="5" step="1" oninput="ageOutputId22.value = ageInputId22.value" width: 100%; height: 50px" >
    <output name="ageOutputName" id="ageOutputId22" class="out-level">1</output>          

<!-- Fin Pregunta 22 -->

<!-- Pregunta 23 -->
<label for="customRange3" class="form-label">24. Uso alcohol o drogas para afrontar los problemas vida.*</label>
    <div class="row">
        <div class="col">
            Nunca
        </div>
        <div class="col">
            A veces
        </div>
        <div class="col">
            Seguido
        </div>
        <div class="col">
            Frecuentemente
        </div>
        <div class="col">
            Siempre
        </div>
    </div>

    <input type="range" name="respuesta_23" id="ageInputId23" value="1" min="1" max="5" step="1" oninput="ageOutputId23.value = ageInputId23.value" width: 100%; height: 50px" >
    <output name="ageOutputName" id="ageOutputId23" class="out-level">1</output>          

<!-- Fin Pregunta 23 -->

<!-- Pregunta 24 -->
<label for="customRange3" class="form-label">24. Mi desempeño en el trabajo ha disminuido y tengo problemas para completar tareas.</label>
    <div class="row">
        <div class="col">
            Nunca
        </div>
        <div class="col">
            A veces
        </div>
        <div class="col">
            Seguido
        </div>
        <div class="col">
            Frecuentemente
        </div>
        <div class="col">
            Siempre
        </div>
    </div>

    <input type="range" name="respuesta_24" id="ageInputId24" value="1" min="1" max="5" step="1" oninput="ageOutputId24.value = ageInputId24.value" width: 100%; height: 50px" >
    <output name="ageOutputName" id="ageOutputId24" class="out-level">1</output>          

<!-- Fin Pregunta 24 -->

<!-- Pregunta 25 -->
<label for="customRange3" class="form-label">25. Mi desempeño en las actividades fisicas y tengo problemas para completar tareas.</label>
    <div class="row">
        <div class="col">
            Nunca
        </div>
        <div class="col">
            A veces
        </div>
        <div class="col">
            Seguido
        </div>
        <div class="col">
            Frecuentemente
        </div>
        <div class="col">
            Siempre
        </div>
    </div>

    <input type="range" name="respuesta_25" id="ageInputId25" value="1" min="1" max="5" step="1" oninput="ageOutputId25.value = ageInputId25.value" width: 100%; height: 50px" >
    <output name="ageOutputName" id="ageOutputId25" class="out-level">1</output>          

<!-- Fin Pregunta 25 -->


  <br>
  <button type="submit" class="btn btn-success">Enviar</button>
</form>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
