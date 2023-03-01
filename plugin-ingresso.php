<?php
/*
Plugin Name: Plugin de Compra de Ingressos Fórmula E
Plugin URI: https://github.com/laisGaletto/plugin-ingresso
Description: Plugin para encaminhar usuários para página de compra de ingressos da fórmula e.
Version: 1.0
Author: Lais Galetto
Author URI: https://github.com/laisGaletto/
*/

// Função para redirecionar para a página de compra de ingressos
function plugin_de_compra_de_ingressos_function() {
    // URL da página de compra de ingressos
    $url = 'https://www.eventim.com.br/artist/formulae-sp/?affiliate=BR1';

    // Título do bloco de ingressos
    $titulo = 'ABB FORMULA E 2023 JULIUS </br> BAER SÃO PAULO E-PRIX';

    // Data do evento
    $data = '25/03/2023';

    // URL da imagem de background
    $background_url = plugins_url( 'src/images/background.png', __FILE__ );

    // Código HTML do bloco de ingressos responsivo
    $html = '<div class="container-fluid" style="background-image: url(' . $background_url . '); background-size: cover; background-position: center; padding: 20px; font-family: Arial, sans-serif; color: #fff;">';
    $html .= '<div class="row">';
    $html .= '<div class="col-sm-12">';
    $html .= '<h2 style="font-size: 24px; font-weight: bold; margin-bottom: 10px;">' . $titulo . '</h2>';
    $html .= '<p style="font-size: 16px; margin-bottom: 30px;">' . $data . '</p>';
    $html .= '<a href="' . $url . '" class="btn btn-primary btn-lg" style="background-color: #139DF4; border-color: #139DF4; color: #fff; padding: 10px 30px; border-radius: 5px; text-decoration: none;" onmouseover="this.style.backgroundColor=\'#006BBF\'; this.style.borderColor=\'#006BBF\';" onmouseout="this.style.backgroundColor=\'#139DF4\'; this.style.borderColor=\'#139DF4\';">Ingressos</a>';
    $html .= '</div>';
    $html .= '</div>';
    $html .= '</div>';

    // Saída do código HTML
    return $html;
}

// Adiciona o arquivo do Bootstrap CSS
wp_enqueue_style( 'bootstrap-css', plugins_url( 'src/css/bootstrap.min.css', __FILE__ ), array(), '4.6.0' );

// Adiciona o arquivo do Bootstrap JS
wp_enqueue_script( 'bootstrap-js', plugins_url( 'src/js/bootstrap.min.js', __FILE__ ), array( 'jquery' ), '4.6.0', true );

// Adicionar shortcode para exibir o bloco de ingressos
add_shortcode( 'plugin_de_compra_de_ingressos', 'plugin_de_compra_de_ingressos_function' );
