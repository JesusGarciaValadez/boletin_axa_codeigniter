<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Enero extends CI_Controller
{
    public $_data   = array(
                            'mes'       => 'Enero',
                            'anio'      => '2015',
                            'numero'    => '11',
                            'stylesheet'=> 'enero-2015'
                            );

    public function index ()
    {
        $this->_initPage();

        $this->parser->parse( 'header_v', $this->_data );
        $this->parser->parse( '2015/enero/inicio_v', $this->_data );
        $this->load->view( 'footer_v' );
    }

    public function salud ()
    {
        $this->_initPage();
        $this->_data[ 'stylesheet' ]    = 'enero-2015-salud';

        $this->parser->parse( 'header_v', $this->_data );
        $this->parser->parse( '2015/enero/salud_v', $this->_data );
        $this->load->view( 'footer_v' );
    }

    public function futuro ()
    {
        $this->_initPage();
        $this->_data[ 'stylesheet' ]    = 'enero-2015-futuro';

        $this->parser->parse( 'header_v', $this->_data );
        $this->parser->parse( '2015/enero/futuro_v', $this->_data );
        $this->load->view( 'footer_v' );
    }

    public function auto ( )
    {
        $this->_initPage();
        $this->_data[ 'stylesheet' ]    = 'enero-2015-auto';

        $this->parser->parse( 'header_v', $this->_data );
        $this->parser->parse( '2015/enero/auto_v', $this->_data );
        $this->load->view( 'footer_v' );
    }

    public function hogar ()
    {
        $this->_initPage();
        $this->_data[ 'stylesheet' ]    = 'enero-2015-hogar';

        $this->parser->parse( 'header_v', $this->_data );
        $this->parser->parse( '2015/enero/hogar_v', $this->_data );
        $this->load->view( 'footer_v' );
    }

    public function _processClientData ()
    {
        if(!$this->session->userdata('email') || !$this->session->userdata('agente')){
            if($this->input->get('email')){
                $this->session->set_userdata(array(
                    'email'     => $this->input->get('email', true),
                    'agente'    => $this->input->get('agentenom',  true),
                    'tel'       => $this->input->get('agentetel', true),
                    'mail'      => $this->input->get('agentemail', true)
                ));
                //redirect('inicio');
            }else{
                $this->session->set_userdata(array(
                    'email'     => 'guest@axa.mx'
                ));
            }
        }
    }

    public function _initPage ()
    {
        $this->_processClientData ();

        $this->load->library('parser');
    }
}
