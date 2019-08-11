<?php

class Laptop
{
    public static function read()
    {
        $db = Db::getInstance();
        $prep = $db->prepare("select * from product where category=2");
        $prep->execute();
        return $prep->fetchAll();
    }

    public static function find($id)
    {
        $db = Db::getInstance();
        $prep = $db->prepare("select * from product where product_id=:product_id");
        $prep->execute(["product_id"=>$id]);
        return $prep->fetch();
    }

    
}