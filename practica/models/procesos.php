<?php
//Convertir en una sola funcion
    class CRUD{
        public function select($query){
            $rows = null;
            $modelo = new ConexionDB();
            $conexion = $modelo->get_conexion();
            $stm = $conexion->prepare($query);
            $stm->execute();
            return $stm;
        }
        public function consultasUpdateInsertDelete($query){
            $modelo = new ConexionDB();
            $conexion = $modelo->get_conexion();
            $stm = $conexion->prepare($query);
            if(!$stm){
                return 0;
            }else{
                $stm->execute();
                return 1;
            }
        }

        public function row_registro($query){
            $modelo = new ConexionDB();
            $conexion = $modelo->get_conexion();
            $stmt = $conexion->query($query);
            $num_rows = $stmt->rowCount();
            return $num_rows;
        }
    }

?>