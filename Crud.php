<?php

class Crud extends CI_Controller{

    public function index(){

        $data['product_detail'] = $this->crud_model->getAllProducts();

        $this->load->view('crud_view', $data);
    }

    public function addProduct(){

       $this->form_validation->set_rules('name','Product Name','trim|required');
       $this->form_validation->set_rules('price','Product Price','trim|required');
       $this->form_validation->set_rules('quantity','Product Quantity','trim|required');

       if($this->form_validation->run() == false){

            $data_error = [

                'error' => validation_errors()
            ];

            $this->session->set_flashdata($data_error);
       }

       else{

            $result = $this->crud_model->insertProduct([

                'name' => $this->input->post('name'),
                'price' => $this->input->post('price'),
                'quantity' => $this->input->post('quantity')
            ]);

            if($result){

                $this->session->set_flashdata('inserted', 'Data added successfully');
            }
       }

       redirect('crud');
    }


    public function editProduct($id){

        $data['singleProduct'] = $this->crud_model->getSingleProduct($id);

        $this->load->view('edit_view',$data);
    }


    public function update($id){

        $this->form_validation->set_rules('name','Product Name','trim|required');
        $this->form_validation->set_rules('price','Product Price','trim|required');
        $this->form_validation->set_rules('quantity','Product Quantity','trim|required');
 
        if($this->form_validation->run() == false){
 
             $data_error = [
 
                 'error' => validation_errors()
             ];
 
             $this->session->set_flashdata($data_error);
        }
 
        else{
 
             $result = $this->crud_model->updateProduct([
 
                 'name' => $this->input->post('name'),
                 'price' => $this->input->post('price'),
                 'quantity' => $this->input->post('quantity')
             ], $id);
 
             if($result) 
                 $this->session->set_flashdata('updated', 'Data updated successfully');
        }
 
        redirect('crud');
    }

    public function deleteProduct($id){

        $result = $this->crud_model->delete($id);

        if($result)
            $this->session->set_flashdata('deleted', 'Data deleted successfully');
        
        redirect('crud');
    }
   
}

?>