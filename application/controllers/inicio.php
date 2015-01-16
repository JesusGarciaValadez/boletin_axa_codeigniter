<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller
{

    public function index( )
    {
        if( !$this->session->userdata( 'email' ) || !$this->session->userdata( 'agente' ) )
        {
            if( $this->input->get( 'email' ) )
            {
                $this->session->set_userdata( array(
                    'email'     => $this->input->get( 'email', true ),
                    'agente'    => $this->input->get( 'agentenom',  true ),
                    'tel'       => $this->input->get( 'agentetel', true ),
                    'mail'      => $this->input->get( 'agentemail', true )
                ) );
                redirect( 'inicio' );
            }else{
                $this->session->set_userdata( array(
                    'email'     => 'guest@axa.mx'
                ) );
            }
        }
        $this->load->library( 'parser' );
        $data   = array(
            'mes'           => 'Enero',
            'anio'          => '2015',
            'numero'        => '11',
            'stylesheet'    => 'enero-2015'
        );

        $this->parser->parse( 'header_v', $data );
        $this->parser->parse( '2015/enero/inicio_v', $data );
        $this->load->view( 'footer_v' );
    }
}
