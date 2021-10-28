<?php


namespace BatoiPOP;


class Product
{
    protected $id;
    protected $name;
    protected $features;

    /**
     * Category constructor.
     * @param $id
     * @param $name
     */
    public function __construct(int $id = null,String $name = null,Array $features = [])
    {
        $this->id = $id;
        $this->name = $name;
        $this->features = $features;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    public function __get($key){
        return $this->features[$key]??null;
    }

    public function __set($key,$value){
        $this->features[$key] = $value;
    }

    public function __isset($key){
        return isset($this->features[$key]);
    }


    public static function import(Array $products):Array
    {
        $productsObjects = [];

        foreach ($products as $key => $product){
            $tmp = new Product($key);
            foreach ($product as $feature => $value){
                $tmp->$feature = $value;
            }
            $productsObjects[$key] = $tmp;
        }
        return $productsObjects;
    }
}