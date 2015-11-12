<?php

class Category extends App_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->loadTable('categories');
    }

    public function getAll()
    {
        return $this->findAll();
    }

    public  function create($data){

        return $this->insert($data);
    }

    public  function delete($id){
        $this->loadTable('categories','id');
        $this->remove($id);
    }
}