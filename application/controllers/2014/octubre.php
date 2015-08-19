<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Octubre extends CI_Controller
{
    public $_data   = array(
                        'mes'           => 'Octubre',
                        'anio'          => '2014',
                        'numero'        => '10',
                        'stylesheet'    => 'octubre-2014'
                        );

	public function index ()
    {
        $this->_initPage( 'inicio' );

        $this->parser->parse( 'header_v', $this->_data );
		$this->parser->parse( '2014/octubre/inicio_v', $this->_data );
        $this->load->view( 'footer_v' );
	}

    public function salud ()
    {
        $this->_initPage( '/2015/enero/salud' );
        $this->_data[ 'title' ]                 = 'Tu sonrisa es reflejo de tu salud';
        $this->_data[ 'related_article_title' ] = 'Protección dental incluida en los seguros de gastos médicos de AXA';
        $this->_data[ 'related_article_link' ]  = 'http://www.boletinaxa.com.mx/prevencion-360/salud/dentalia-datos.html';
        $this->_data[ 'rating_section' ]        = 'sonrisa-reflejo';

        $this->parser->parse( 'header_v', $this->_data );
        $this->parser->parse( '2014/octubre/salud_v', $this->_data );
        $this->parser->parse( 'related_social_v', $this->_data );
        $this->load->view( 'footer_v' );
    }

    public function futuro ()
    {
        $this->_initPage( '/2015/enero/futuro' );
        $this->_data[ 'title' ]                 = 'Haz de tu retiro una experiencia satisfactoria.';
        $this->_data[ 'related_article_title' ] = 'Tú puedes ser tu propio jefe';
        $this->_data[ 'related_article_link' ]  = 'http://www.boletinaxa.com.mx/anterior/tu-futuro-junio-2014.html';
        $this->_data[ 'rating_section' ]        = 'retiro-experiencia';

        $this->parser->parse( 'header_v', $this->_data );
        $this->parser->parse( '2014/octubre/futuro_v', $this->_data );
        $this->parser->parse( 'related_social_v', $this->_data );
        $this->load->view( 'footer_v' );
    }

    public function auto ( )
    {
        $this->_initPage( '/2015/enero/auto' );
        $this->_data[ 'title' ]                 = '¡Que nada te impida llegar a tu destino!';
        $this->_data[ 'related_article_title' ] = 'Conoce las estadísticas y toma precauciones (Los 5 estados...)';
        $this->_data[ 'related_article_link' ]  = 'http://www.boletinaxa.com.mx/anterior/datos-sobre-robo-de-autom%C3%B3viles.html';
        $this->_data[ 'rating_section' ]        = 'llegar-destino';

        $this->parser->parse( 'header_v', $this->_data );
        $this->parser->parse( '2014/octubre/auto_v', $this->_data );
        $this->parser->parse( 'related_social_v', $this->_data );
        $this->load->view( 'footer_v' );
    }

    public function hogar ()
    {
        $this->_initPage( '/2015/enero/hogar' );
        $this->_data[ 'title' ]                 = '¿Sabes cómo evitar un incendio en tu hogar?';
        $this->_data[ 'related_article_title' ] = 'Conoce los accidentes más frecuentes en el hogar y toma tus precauciones';
        $this->_data[ 'related_article_link' ]  = 'http://www.boletinaxa.com.mx/2015/enero/hogar';
        $this->_data[ 'rating_section' ]        = 'evitar-incendio';

        $this->parser->parse( 'header_v', $this->_data );
        $this->parser->parse( '2014/octubre/hogar_v', $this->_data );
        $this->parser->parse( 'related_social_v', $this->_data );
        $this->load->view( 'footer_v' );
    }

    public function apps ()
    {
        $this->_initPage( 'apps' );

        $this->parser->parse( 'header_v', $this->_data );
        $this->parser->parse( '2014/octubre/apps_v', $this->_data );
        $this->load->view( 'footer_v' );
    }

    private function _processClientData( $_page)
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
