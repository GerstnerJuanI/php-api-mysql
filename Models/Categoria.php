<?php

class Categoria extends Conectar 
{
    public function get_categoria()
    {
        $conectar=parent::conexion();
    
        parent::set_name();
    
        $sql="SELECT * FROM tm_categoria WHERE est=1";
        $sql =$conectar->prepare($sql);
        $sql->execute();
    
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }


    public function get_categoria_x_id($cat_id)
    {
        $conectar=parent::conexion();
    
        parent::set_name();
    
        $sql="SELECT * FROM tm_categoria WHERE est=1 AND 
        cat_id = ?";
        $sql =$conectar->prepare($sql);
        $sql->bindValue(1,$cat_id);
        $sql->execute();
    
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }
}



?>