<?php

class Crud_model extends CI_Model{

    public function getAllProducts(){

        $query = $this->db->get('product');

        if($query)
            return $query->result();

    }

    public function insertProduct($data){

        $q = $this->db->insert('product', $data);

        if($q)
            return true;
        else
            return false;

    }


    public function getSingleProduct($id){

        $this->db->where('id',$id);
        $q = $this->db->get('product');

        if($q)
            return $q->row();

    }


    public function updateProduct($data, $id){

        $this->db->where('id',$id);
        $q = $this->db->update('product',$data);

        if($q)
            return true;
        else
            return false;
    }


    public function delete($id){

        $this->db->where(id,$id);
        $q = $this->db->delete('product');

        if($q)
            return true;
        else
            return false;
    }
}

?>