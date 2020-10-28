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

add_filter('login_errors', 'altera_msg_login'); //Aqui penduramos o altera_msg_login no login_errors

function altera_msg_login()
{

   return 'Credenciais inválidas.';
}


add_action('wp_head', 'colocar_og_tags');

function colocar_og_tags()
{

   if (is_single()) {

      $dados_do_post = get_post( get_the_ID() );

      $nome_do_site = get_bloginfo();

      $titulo = $dados_do_post->post_title;
      $resumo = $dados_do_post->post_excerpt;

      echo " \n\n\n
            <meta property='og:title' content='" . $titulo. "'>\n
            <meta property='og:site_name' content='" . $nome_do_site . "'>
            <meta property='og:url' content='" . get_permalink() . "'>
            <meta property='og:description' content='" . $resumo . "'>
            \n\n\n";
   }
}
