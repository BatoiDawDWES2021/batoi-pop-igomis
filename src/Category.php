<?php


namespace BatoiPOP;


class Category
{
    protected $id;
    protected $name;

    /**
     * Category constructor.
     * @param $id
     * @param $name
     */
    public function __construct(int $id,String $name)
    {
        $this->id = $id;
        $this->name = $name;
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

    public static function import(Array $categories):Array
    {
        $categoriesObject = [];
        foreach ($categories as $key => $categoria){
            $categoriesObject[$key] = new Category($categoria['id'],$categoria['name']);
        }
        return $categoriesObject;
    }

}