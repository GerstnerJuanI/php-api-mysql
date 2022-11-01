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
}



?>