<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller
{
    private $_data    = array(
        'mes'           => 'Abril',
        'anio'          => '2015',
        'numero'        => '12',
        'stylesheet'    => 'abril-2015'
    );

    function __construct( )
    {
        parent::__construct();
        $this->load->model( 'functions_m', 'functions' );
    }

    private function _processClientData()
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
                    redirect( 'inicio' );
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

    public function index( )
    {
        //$this->_processClientData();

        $this->parser->parse( 'header_v', $this->_data );
        $this->parser->parse( '2015/abril/inicio_v', $this->_data );
        $this->load->view( 'footer_v' );
    }

    public function starPost( )
    {
        $questions  = $this->functions->startPost( $_POST['star'], $_POST['section'], $_POST['month'], $_POST['year'], $_SERVER['REMOTE_ADDR'] );
        if ( $questions )
        {
            $response = array( 'code' => 'success' ) ;
        }
        else
        {
            $response = array( 'code' => 'fail' ) ;
        }
        echo json_encode( $response );
    }
}
