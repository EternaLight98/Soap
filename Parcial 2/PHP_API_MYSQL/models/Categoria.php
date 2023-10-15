<?php 
 

class Categoria extends Conectar{ 

  

   public function get_categoria(){
        $conectar=parent::conexion();
        parent::set_name();
        $sql="SELECT * FROM tm_categoria ";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }


    
   public function get_categoria_x_id($cat_id){
        $conectar=parent::conexion();
        parent::set_name();
        $sql="SELECT * FROM tm_categoria WHERE est=1 AND cat_id=?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$cat_id);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }


      public function insert_categoria($cat_nom,$cat_obs,$est){
        $conectar=parent::conexion();
        parent::set_name();
        $sql="INSERT INTO tm_categoria(cat_id,cat_nom,cat_obs,est) VALUES(NULL,?,?,?)";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$cat_nom);
        $sql->bindValue(2,$cat_obs);
        $sql->bindValue(3,$est);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }


       public function update_categoria($cat_id,$cat_nom,$cat_obs,$est){
        $conectar=parent::conexion();
        parent::set_name();
        $sql="UPDATE tm_categoria set cat_nom=? , cat_obs=?, est=? WHERE cat_id=?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$cat_nom);
        $sql->bindValue(2,$cat_obs);
        $sql->bindValue(3,$est);
        $sql->bindValue(4,$cat_id);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);



    }


        public function delete_categoria($cat_id){
        $conectar=parent::conexion();
        parent::set_name();
        $sql="DELETE FROM tm_categoria  WHERE cat_id=?"; 
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$cat_id);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);



    }












    

}



?>