<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Abril extends CI_Controller
{
    public $_data   = array(
                        'mes'           => 'Abril',
                        'anio'          => '2015',
                        'numero'        => '12',
                        'stylesheet'    => 'abril-2015'
                        );
    public $_userData;

    public function index ()
    {
        $this->parser->parse( 'header_v', $this->_data );
        $this->parser->parse( '2015/abril/inicio_v', $this->_data );
        $this->load->view( 'footer_v' );
    }

    public function salud ()
    {
        $this->parser->parse( 'header_v', $this->_data );
        $this->parser->parse( '2015/abril/salud_v', $this->_data );
        $this->load->view( 'footer_v' );
    }

    public function futuro ()
    {
        $this->parser->parse( 'header_v', $this->_data );
        $this->parser->parse( '2015/abril/futuro_v', $this->_data );
        $this->load->view( 'footer_v' );
    }

    public function auto ( )
    {
        $this->parser->parse( 'header_v', $this->_data );
        $this->parser->parse( '2015/abril/auto_v', $this->_data );
        $this->load->view( 'footer_v' );
    }

    public function hogar ()
    {
        $this->parser->parse( 'header_v', $this->_data );
        $this->parser->parse( '2015/abril/hogar_v', $this->_data );
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
