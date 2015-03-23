<?php if ( ! defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );

class Opinion extends CI_Controller
{
    public $_data   = array(
                            'mes'       => 'Abril',
                            'anio'      => '2015',
                            'numero'    => '12',
                            'stylesheet'=> 'enero-2015'
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
                    redirect( 'opinion' );
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

        // $email      = $this->session->userdata( 'email' );

        // if( !$email || !$this->functions->validateMail( $email ) )
        // {
        //     $this->session->set_flashdata( 'msg', 'Suscribete al bolet&iacute;n de AXA.' );
        //     redirect( 'inicio' );
        // }

        $questions  = $this->functions->getQuiz( );

        $poll       = array();
        foreach( $questions as $q )
        {
            $quiz[ 'id' ]         = $q->id;
            $quiz[ 'question' ]   = $q->question;
            $answers              = $this->functions->getAnswers( $q->id );
            $quiz[ 'answers' ]    = array( );
            foreach( $answers as $a )
            {
                $ans[ 'id' ]      = $a->id;
                $ans[ 'answer' ]  = $a->answer;
                array_push( $quiz[ 'answers' ], $ans );
            }
            array_push( $poll, $quiz );
        }

        $this->_data[ 'poll' ]  = $poll;
        $this->_data[ 'form_id' ]  = rand( 0, 999 );

        $this->load->library('parser');

        $this->parser->parse( 'header_v', $this->_data );
        $this->parser->parse( 'opinion_v', $this->_data );
        $this->load->view( 'footer_v' );
    }

    function submit( )
    {
        $question   = $this->input->post( 'question', true );
        $answer     = $this->input->post( 'answer', true );
        $form       = $this->input->post( 'form_id', true );
        $date       = date( 'd-m-Y H:i:s' );

        //echo 'email => '.$email.'<br /> answer => '.$answer.'<br /> question => '.$question;

        if( $this->functions->submitAnswer( $question, $answer, $form, $date ) )
        {
            echo 'ingresado';
        }
        else
        {
            echo 'error';
        }
    }
}
