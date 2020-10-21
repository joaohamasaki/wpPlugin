<?php
/**
 * Plugin Name: Meu Primeiro Plug-in
 * Plugin URI: https://sp.senac.br
 * Description: Primeiro plug-in desenvolvido na aula de CMS.
 * Version: 0.0.1
 * Author: João Hamasaki
 * Author URI: https://latters.cnpq.br/0275558279027775
 * License: CC BY
 */

 add_filter( 'login_errors' , 'altera_msg_login');

 function altera_msg_login() {

    return 'Credenciais inválidas.';
 }