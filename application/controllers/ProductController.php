<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProductController
 *
 * @author bendz
 */
class ProductController extends CI_Controller {
    //put your code here
    
    public function __construct() {
        parent::__construct();
        $this->load->library('pagination');
    }
    
    public function showData($offset = null) {
        $pagination_setts['base_url'] = base_url().'/showData';  
        $pagination_setts['total_rows'] = $this->ProductModel->count_rows();  
        $pagination_setts['per_page'] = 10;  
        $pagination_setts['full_tag_open'] = '<ul class="pagination" id="search_page_pagination">';
        $pagination_setts['full_tag_close'] = '</ul>';
        $pagination_setts['cur_tag_open'] = '<li class="active"><a href="javascript:void(0)">';
        $pagination_setts['num_tag_open'] = '<li>';
        $pagination_setts['num_tag_close'] = '</li>';
        $pagination_setts['cur_tag_close'] = '</a></li>';
        $pagination_setts['first_link'] = 'First';
        $pagination_setts['first_tag_open'] = '<li>';
        $pagination_setts['first_tag_close'] = '</li>';
        $pagination_setts['last_link'] = 'Last';
        $pagination_setts['last_tag_open'] = '<li>';
        $pagination_setts['last_tag_close'] = '</li>';
        $pagination_setts['next_link'] = FALSE;
        $pagination_setts['next_tag_open'] = '<li>';
        $pagination_setts['next_tag_close'] = '</li>';
        $pagination_setts['prev_link'] = FALSE;
        $pagination_setts['prev_tag_open'] = '<li>';
        $pagination_setts['prev_tag_close'] = '</li>';
        $pagination_setts['page_query_string'] = FALSE;

        $this->pagination->initialize($pagination_setts);

         $data['results'] = $this->ProductModel->fetch_data($pagination_setts['per_page'],$offset);
         $this->load->view('showProducts',$data);
   
    }
    
    
   public function index() {
       $this->load->view('addProducts');    
    }
    
    public function insert_product() {
     
        // Define validation rules for form inputs
        $validation_rules = array(
            //Name
            array(
                'field' => 'productName',
                'label' => 'name',
                'rules' => 'required|min_length[3]'   
            ),
            //Description
            array(
                'field' => 'productDescription',
                'label' => 'description',
                'rules' => 'required|min_length[5]'
            ),
            //Production date
            array(
                'field' => 'productProduction_date',
                'label' => 'production date',
                'rules' => 'required'
            ),
            //Expiry date
            array(
                'field' => 'productExpiry_date',
                'label' => ' expiry date',
                'rules' => 'required'
            ),
            //Price
            array(
                'field' => 'productPrice',
                'label' => ' price',
                'rules' => 'required|numeric'
            ),
            //Currency
            array(
                'field' => 'productCurrency',
                'label' => ' currency',
                'rules' => 'required|min_length[3]'
            ),
            //EAN CODE
            array(
                'field' => 'productEAN_code',
                'label' => ' EAN code',
                'rules' => 'required|numeric' //|min_length[13|max_length[13]
            ),
            //Weight
            array(
                'field' => 'productWeight',
                'label' => ' weight',
                'rules' => 'required|numeric'
            ),
            //Weight unit
            array(
                'field' => 'productWeight_unit',
                'label' => ' weight unit',
                'rules' => 'required|min_length[2]'
            )
            
        );
        
        //Set rules
        $this->form_validation->set_rules($validation_rules);
        
        //Check validation
        if ( $this->form_validation->run() == true ) {
                
             //Preparing input data, keys of array are the same as fields in database table
                $data = array(
                    'Name'            => $this->input->post('productName'),
                    'Description'     => $this->input->post('productDescription'),
                    'Production_date' => date('Y-m-d',  strtotime( $this->input->post('productProduction_date' ))),
                    'Expiry_date'     => date('Y-m-d',  strtotime( $this->input->post('productExpiry_date' ))),
                    'Price'           => $this->input->post('productPrice'),
                    'Currency'        => $this->input->post('productCurrency'),
                    'EAN_code'        => $this->input->post('productEAN_code'),
                    'Weight'          => $this->input->post('productWeight'),
                    'Weight_unit'     => $this->input->post('productWeight_unit')
                );
                
                //Transfer data to model and get message from model
               $row = $this->ProductModel->insert_product($data);
                
                //get answer
                if ($row) {
                   echo "Product successfully added to database";
                }else {
                    echo 'There was an error inserting data in database '.json_encode($row);
                }
 
        }
        else {
             
           echo validation_errors();
        }
    }
}
