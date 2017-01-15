<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class shape_controller extends CI_Controller{

    public function display_all_images(){
        $this->load->model('shape_model');
        $lognote['shape'] = $this->shape_model->get_all_shapes();
        $this->load->view('shape_description',$lognote);
    }

    public function get_description($shape_id){
        $this->load->model('shape_model');
        $lognote['shape'] = $this->shape_model->get_description($shape_id);
        $this->load->view('shape_description',$lognote);
    }
}