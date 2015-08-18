<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Julio extends CI_Controller
{
    public $_data   = array(
                        'mes'                   => 'Julio',
                        'anio'                  => '2015',
                        'numero'                => '12',
                        'stylesheet'            => 'julio-2015'
                        );
    public $_userData;

    public function index ()
    {
        $this->parser->parse( 'header_v', $this->_data );
        $this->parser->parse( '2015/julio/inicio_v', $this->_data );
        $this->load->view( 'footer_v' );
    }

    public function salud ()
    {
        $this->_data[ 'title' ]                 = '11 razones para dejar de fumar';
        $this->_data[ 'related_article_title' ] = 'Respira y dale un respiro al planeta';
        $this->_data[ 'related_article_link' ]  = 'http://www.boletinaxa.com.mx/prevencion-360/salud/respiro-al-planeta.html';
        $this->_data[ 'rating_section' ]        = '11-razones';

        $this->parser->parse( 'header_v', $this->_data );
        $this->parser->parse( '2015/julio/salud_v', $this->_data );
        $this->parser->parse( 'related_social_v', $this->_data );
        $this->load->view( 'footer_v' );
    }

    public function futuro ()
    {
        $this->_data[ 'title' ]                 = 'Falta cultura del ahorro en México.';
        $this->_data[ 'related_article_title' ] = 'Prevenir es la clave para mantener estable tu economía en momentos difíciles';
        $this->_data[ 'related_article_link' ]  = 'http://www.boletinaxa.com.mx/anterior/tu-futuro-2013.html';
        $this->_data[ 'rating_section' ]        = 'falta-cultura';

        $this->parser->parse( 'header_v', $this->_data );
        $this->parser->parse( '2015/julio/futuro_v', $this->_data );
        $this->parser->parse( 'related_social_v', $this->_data );
        $this->load->view( 'footer_v' );
    }

    public function auto ( )
    {
        $this->_data[ 'title' ]                 = 'Por tu seguridad, evita el celular al volante';
        $this->_data[ 'related_article_title' ] = 'Manejar bien: un propósito de Año Nuevo';
        $this->_data[ 'related_article_link' ]  = 'http://www.boletinaxa.com.mx/2015/enero/auto';
        $this->_data[ 'rating_section' ]        = 'evita-celular';

        $this->parser->parse( 'header_v', $this->_data );
        $this->parser->parse( '2015/julio/auto_v', $this->_data );
        $this->parser->parse( 'related_social_v', $this->_data );
        $this->load->view( 'footer_v' );
    }

    public function hogar ()
    {
        $this->_data[ 'title' ]                 = 'Invertir para darle valor a tu hogar';
        $this->_data[ 'related_article_title' ] = 'Cada familia tiene necesidades de protección diferentes';
        $this->_data[ 'related_article_link' ]  = 'http://www.boletinaxa.com.mx/anterior/tu-futuro-diciembre-2013.html';
        $this->_data[ 'rating_section' ]        = 'darle-valor';

        $this->parser->parse( 'header_v', $this->_data );
        $this->parser->parse( '2015/julio/hogar_v', $this->_data );
        $this->parser->parse( 'related_social_v', $this->_data );
        $this->load->view( 'footer_v' );
    }

    private function _processClientData( $_page )
    {
        log_message( 'info', '------------Iniciando...' );
        if( !$this->session->userdata( 'email' ) || !$this->session->userdata( 'agente' ) )
        {
            log_message( 'info', '------------No hay sesion activa' );
            if( $this->input->get( 'email' ) )
            {
                $this->_userData    = array (
                    'email'     => $this->input->get( 'email', true ),
                    'agente'    => $this->input->get( 'agentename',  true ),
                    'tel'       => $this->input->get( 'agentetel', true ),
                    'mail'      => $this->input->get( 'agentemail', true )
                );
                $this->session->set_userdata( $this->_userData );
                log_message( 'debug', '------------Intentando crear sesion' );
                if ( $this->session->userdata( 'email' ) )
                {
                    log_message( 'info', '------------'.$this->session->userdata( 'agente' ) );
                    redirect( $_page );
                }
                else
                {
                    log_message( 'error', '------------Sesion no creada' );
                }
            }
            else
            {
                log_message( 'debug', '------------No hay paramatros en la url' );
                $this->session->set_userdata( array(
                    'email'     => 'guest@axa.mx'
                ) );
            }
        }
        else
        {
            log_message( 'info', '------------Hay sesion activa' );
        }
    }

    public function _initPage ( $_page )
    {
        $this->_processClientData ( $_page );
    }
}
