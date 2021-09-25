<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cupload_img_ajax extends CI_Controller {

    function index(){
        
        if($this->input->post('urlImgResize')){
            $imgUrl = $this->input->post('urlImgResize');
            // exit(json_encode($test));
        }
        $data = array(
            
        );
        $template = array(
            'template' => 'Vupload_img_ajax',
            'data' => $data,
        );
        $this->load->view('master_layout/content', $template);
    }

}