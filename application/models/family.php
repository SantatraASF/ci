<?php
/**
 * Created by PhpStorm.
 * User: ASF
 * Date: 13/07/2020
 * Time: 16:11
 */

class Family extends CI_Model{

    public function getUser(){
        $this->load->database();

        //It's an active records the shortcut of (query('SELECT * FROM family'));
        $data = $this->db->get('family');

        //retourne un array
        return $data->result_array();

        /*//return an object
        return $data->result();*/


    }

}