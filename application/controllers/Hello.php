<?php
/**
 * Created by PhpStorm.
 * User: ASF
 * Date: 13/07/2020
 * Time: 15:55
 */

class Hello extends CI_Controller{
    public function test(){

        $this->load->view('user');

    }

    public function view(){
        $this->load->model('family');
        $data['users'] = $this->family->getUser();
        $this->load->view('family_list', $data);

        foreach ($data['users'] as $i){

            $this->create_thumb($i['image']);

        }



    }

    public function create_thumb($filename){

        $this->load->library('image_lib');

        $config['image_library'] = 'gd2';
        $config['source_image'] = 'asset/img/' . $filename;
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width']         = 300;
        $config['height']       = 300;
        $config['new_image'] = 'asset/img/thumb/';
        $this->image_lib->initialize($config);
        //$this->image_lib->resize();
        if ( ! $this->image_lib->resize())
        {
            echo $this->image_lib->display_errors();
        }
        $this->image_lib->clear();

    }
}