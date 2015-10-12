<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Octubre extends CI_Controller
{
    public $_data   = array(
                        'mes'                   => 'Octubre',
                        'anio'                  => '2015',
                        'numero'                => '13',
                        'stylesheet'            => 'octubre-2015'
                        );
    public $_userData;

    public function index ()
    {
        $this->parser->parse( 'header_v', $this->_data );
        $this->parser->parse( '2015/octubre/inicio_v', $this->_data );
        $this->load->view( 'footer_v' );
    }

    public function salud ()
    {
        $this->_data[ 'title' ]                 = '11 razones para dejar de fumar';
        $this->_data[ 'related_article_title' ] = 'Mujer Independiente';
        $this->_data[ 'related_article_link' ]  = 'http://www.boletinaxa.com.mx/anterior/tu-futuro-marzo-2014.html';
        $this->_data[ 'rating_section' ]        = '11-razones';

        $this->parser->parse( 'header_v', $this->_data );
        $this->parser->parse( '2015/octubre/salud_v', $this->_data );
        $this->parser->parse( 'related_social_v', $this->_data );
        $this->load->view( 'footer_v' );
    }

    public function futuro ()
    {
        $this->_data[ 'title' ]                 = 'El que ahorra más, vive mejor';
        $this->_data[ 'related_article_title' ] = 'Haz de tu retiro una experiencia satisfactoria';
        $this->_data[ 'related_article_link' ]  = 'http://www.boletinaxa.com.mx/2014/octubre/futuro';
        $this->_data[ 'rating_section' ]        = 'ahorra-mas-vive-mejor';

        $this->parser->parse( 'header_v', $this->_data );
        $this->parser->parse( '2015/octubre/futuro_v', $this->_data );
        $this->parser->parse( 'related_social_v', $this->_data );
        $this->load->view( 'footer_v' );
    }

    public function auto ( )
    {
        $this->_data[ 'title' ]                 = 'Por tu seguridad, evita el celular al volante';
        $this->_data[ 'related_article_title' ] = 'Conoce las estadísticas y toma las precauciones';
        $this->_data[ 'related_article_link' ]  = 'http://www.boletinaxa.com.mx/anterior/datos-sobre-robo-de-automoviles.html';
        $this->_data[ 'rating_section' ]        = 'evita-celular';

        $this->parser->parse( 'header_v', $this->_data );
        $this->parser->parse( '2015/octubre/auto_v', $this->_data );
        $this->parser->parse( 'related_social_v', $this->_data );
        $this->load->view( 'footer_v' );
    }

    public function hogar ()
    {
        $this->_data[ 'title' ]                 = 'Elabora tu plan familiar';
        $this->_data[ 'related_article_title' ] = '¿Sabes cómo evitar un incendio en tu hogar?';
        $this->_data[ 'related_article_link' ]  = 'http://www.boletinaxa.com.mx/2014/octubre/hogar';
        $this->_data[ 'rating_section' ]        = 'elabora-plan-familiar';

        $this->parser->parse( 'header_v', $this->_data );
        $this->parser->parse( '2015/octubre/hogar_v', $this->_data );
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
