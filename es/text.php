<?php
$GLOBALS['INDEX_TITLE'] = "Ride'N";
$GLOBALS['INDEX_SUBTITLE'] = "Está bien.";
$GLOBALS['INDEX_COMMAND_BUTTON'] = "PEDIR";

$GLOBALS['LANG_TITLE'] = "idioma del sitio";
$GLOBALS['LANG_FR'] = "Francés";
$GLOBALS['LANG_EN'] = "Inglés";
$GLOBALS['LANG_ES'] = "Español";

$GLOBALS['NAV_SUBSCRIBE'] = "suscripción";
$GLOBALS['NAV_SERVICES'] = "servicios";
$GLOBALS['NAV_DEMO'] = "demostración";

$GLOBALS['LOG_CHOICE_DRIVER'] = "yo soy un conductor";
$GLOBALS['LOG_CHOICE_USER'] = " yo soy un usuario";

$GLOBALS['LOG_IN_TITLE'] = "conexión";
$GLOBALS['LOG_IN_MAIL'] = "E-mail";
$GLOBALS['LOG_IN_PWD'] = "Contraseña";
$GLOBALS['LOG_IN_FORGOTTEN'] = "¿ Contraseña olvidadaé ?";
$GLOBALS['LOG_IN_SUBMIT'] = "conectarse";

$GLOBALS['REGISTER_TITLE'] = "registro";
$GLOBALS['REGISTER_FIRST_NAME'] = "Nombre";
$GLOBALS['REGISTER_LAST_NAME'] = "Apellido";
$GLOBALS['REGISTER_NUMBER'] = "Número";
$GLOBALS['REGISTER_ADDRESS'] = "Dirección";
$GLOBALS['REGISTER_CITY'] = "Ciudad";
$GLOBALS['REGISTER_ZIP'] = "Código postal";
$GLOBALS['REGISTER_MAIL'] = "E-mail";
$GLOBALS['REGISTER_PWD1'] = "Contraseña";
$GLOBALS['REGISTER_PWD2'] = "confirmación";
$GLOBALS['REGISTER_TERMS'] = "Estoy de acuerdo con los <a href='terms.php'>términos y Condiciones</a> de servicio.";
$GLOBALS['REGISTER_SUBMIT'] = "registro";

$GLOBALS['LOG_OUT_TITLE'] = "desconectarse";

$GLOBALS['SUBSCRIBE_TITLE'] = "nuestras suscripciones";
$GLOBALS['SUBSCRIBE_NO_SUB_TITLE'] = "sin suscripción";
$GLOBALS['SUBSCRIBE_SIMPLE_SUB_TITLE'] = "suscripción individual";
$GLOBALS['SUBSCRIBE_TEAM_SUB_TITLE'] = "suscripción al equipo";
$GLOBALS['SUBSCRIBE_ALERT'] = "alert('¡Por favor inicie sesión para ordenar!')";
$GLOBALS['SUBSCRIBE_PRICES'] = "Tarifas válidas en 06/05/19";

$GLOBALS['SUBSCRIBE_CARD_1_CONTENT'] = "<p>El precio se calcula por kilómetro (impuestos incluidos) en la carrera con un mínimo de 3 € por día y 3,50 € por noche.</p>
                                        <p style=\"font-weight: bold\">Accesible sin reserva ni suscripción.</p>";

$GLOBALS['SUBSCRIBE_CARD_2_CONTENT'] = "<p>¡Únase a la comunidad Ride'N como miembro y obtenga tarifas preferenciales!</p>
                                        <div>
                                            <b>Hazte miembro sin compromiso:</b>
                                            <li>22€ impuestos incluidos/mes</li><br>

                                            <b>Hazte socio con un compromiso de 12 meses:</b>
                                            <li>20€ impuestos incluidos/mes</li><br>

                                            <b>Acceso a diferentes servicios con un compromiso de 12 meses:</b>
                                            <li>Servicios de comidas y bebidas</li>
                                            <li>Alquiler de electrónica y audioguías</li>
                                            <li>Hacer turismo</li>
                                            <li>Intérprete y entrenadores</li>
                                            <li>Sesiones de mascotas</li>
                                        </div>";

$GLOBALS['SUBSCRIBE_CARD_3_CONTENT'] = "<p>¡Únase a la comunidad Ride'N como miembro corporativo y benefíciese de tarifas preferenciales !<br>¡Benefíciese del acceso privilegiado ilimitado los 7 días de la semana !</p>
                                        <div>
                                            <b>Conviértete en un miembro de la empresa sin compromiso :</b>
                                            <li>80€ impuestos incluidos/mes para una empresa con menos de 10 empleados</li>
                                            <li>100€ impuestos incluidos/mes para una empresa con más de 10 empleados + 15€ impuestos incluidos por 10 empleados</li><br>

                                            <b>Devenir membre entreprise avec engagement sur 12 mois :</b>
                                            <li>65€ impuestos incluidos/mes para una empresa con menos de 10 empleados</li>
                                            <li>85€ impuestos incluidos/mes para una empresa con más de 10 empleados + 12€ impuestos incluidos por 10 empleados</li>
                                        </div>";

$GLOBALS['SAVE_BACK'] = "Por favor regrese a la página anterior.";
$GLOBALS['SAVE_WARN'] = "No has rellenado todos los campos !";

$GLOBALS['TERMS_FOOTER'] = "volver al inicio";

$GLOBALS['FOOTER_STUFF'] = "otro";
$GLOBALS['FOOTER_TEAM'] = "equipo";
$GLOBALS['FOOTER_TERMS'] = "términos";
$GLOBALS['FOOTER_LANG'] = "idioma";


$submitForm = [
    'error' =>  [
        1=>"El apellido debe hacer entre 2 y 50 caracteres.",
        2=>"El nombre debe hacer entre 2 y 50 caracteres.",
        3=>"El correo electrónico no coincide con el formato solicitado.",
        4=>"La contraseña debe hacer en 8 y 64 caracteres.",
        5=>"Las contraseñas no coinciden.",
        6=>"El correo electrónico ya existe.",
        7=>"Los identificadores no son válidos.",
        8=>"La cuenta ha sido eliminada.",
        10=>"La dirección debe hacer entre 2 y 70 caracteres.",
        11=>"La cuidad debe hacer entre 2 y 50 caracteres.",
        12=>"El código postal es incorrecto.",
        13=>"El número no existe.",
    ],
    'success' => []
];
