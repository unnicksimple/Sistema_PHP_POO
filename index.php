<?php
/* 
#  
#       ___       _______    ______     ______    __  ___  __       ___     
#      /   \     |       \  /  __  \   /  __  \  |  |/  / |  |     /   \    
#     /  ^  \    |  .--.  ||  |  |  | |  |  |  | |  '  /  |  |    /  ^  \   
#    /  /_\  \   |  |  |  ||  |  |  | |  |  |  | |    <   |  |   /  /_\  \  
#   /  _____  \  |  '--'  ||  `--'  | |  `--'  | |  .  \  |  |  /  _____  \ 
#  /__/     \__\ |_______/  \______/   \______/  |__|\__\ |__| /__/     \__\
#  Desarrollo de webapp y diseño web || www.adookia.com || hola@adookia.com
#
# c[] by @unNickSimple
#
# Luis Suárez
# Programdor
#
# Me lo contaron y lo olvidé
# lo vi y lo entendí
# lo hice y lo aprendí
# Confucio, 551 - 479 ac.
*/

ini_set('error_reporting', E_ALL | E_NOTICE | E_STRICT);
ini_set('display_errors', '1');
ini_set('track_errors', 'On');


// Configuración
require_once 'config/Config.php';
// Autocarga de clases atraves de los namespace
require CORE . '/autocarga.php';
// Carga de vista.
$v = new controladores\Plantillas;
// session_start();
$v -> vistas();

