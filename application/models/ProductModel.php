<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProductModel
 *
 * @author bendz
 */
class ProductModel extends CI_Model {
    //put your code here
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    /** SHOW DATA USING PAGINATION **/
    
    public function count_rows() {
        return $this->db->count_all('products');
    }
    
    public function fetch_data($limit, $offset) {
        
        $query = $this->db->get('products',$limit,$offset);
        return $query->result_array();
    }
    
    
    
    
    /** INSERTING PRODUCT INTO DATABASE **/
    
    public function insert_product($data = array()) {
        
        //insert row and return success or fail status
        return ( $this->db->insert('products',$data)) ? true : false ;
    }
}
