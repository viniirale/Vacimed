<?php
class Request
{
    protected $request;
 
    public function __construct()
    {
        $this->request = $_REQUEST;
    }
 
    public function __get($nuProduto)
    {
        if (isset($this->request[$nuProduto])) {
            return $this->request[$nuProduto];
        }
        return false;
    }
}