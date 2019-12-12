<?php
    include("modelo.php");
    class Todo extends modeloCredencialesBD{
        public function __construct(){
            parent::__construct();
        }

        public function consultaMenus(){
            $query= "CALL sp_verMenu";
            $consulta= $this->_db->query($query);
            $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
            if(isset($resultado)){
                echo"kul";
                return $resultado;
            }
            else{
                echo "no kul";
            }
        }

        public function insertarMenu($menu,$precio,$imagen){
            $query= "CALL sp_insertarMenu('$menu','$imagen','$precio')";
            $consulta=$this->_db->query($query);

            if($consulta){
                echo "kul io se metio a la base de datos";
                $this->_db->close();
            }
            else{
                echo "no ta kul io";
            }
            
        
        }

        public function insertarFactura($nombre,$correo){
            $query= "CALL sp_insertarFactura('$nombre','$correo')";
            $consulta=$this->_db->query($query);

            if($consulta){
                echo "kul io se metio a la base de datos";
                $this->_db->close();
            }
            else{
                echo "no ta kul io";
            }
            
        
        }

        public function editarMenu($id,$desc,$price,$imagen){
            $query="CALL editarMenu('$desc','$imagen','$price','$id')";
            $consulta= $this->_db->query($query);
            if($consulta){
                echo "kul io se edito en la base de datos";
                $this->_db->close();
            }
            else{
                echo "no ta kul io no se edito";
            }
        }

        public function eliminarMenu($id){
            $query="CALL eliminarMenu($id)";
            $consulta= $this->_db->query($query);
            if($consulta){
                echo "kul io se elimino de la base de datos";
                $this->_db->close();
            }
            else{
                echo "no ta kul io no se Elimino";
            }
        }


        public function ultimaFactura(){
            $query= "CALL ultimaFactura";
            $consulta= $this->_db->query($query);
            $resultado = $consulta->fetch_array(MYSQLI_NUM);
            echo"desde la funcion= ";
            var_dump($resultado);
            $res= $resultado[0];//esto solo era para recuperar el id de la ultima factura
            if(isset($resultado)){
                echo"kul";
                return $resultado;
            }
            else{
                echo "no kul";
            }
           
        }


        public function insertarVenta($idFactura,$idMenu){
            var_dump($idFactura);
            $query="CALL insertarVenta($idFactura,$idMenu)";
            $consulta= $this->_db->query($query);
            echo"Desde insertarVenta";
            var_dump($consulta);
            if($consulta){
                echo "venta guardada";
                //$this->_db->close();
            }
            else{
                echo "no se guardo la venta";
            }
        }

        public function calcularTotal($idFactura)
        {
            var_dump($idFactura);
            $query="CALL calcularTotal($idFactura)";
            $consulta= $this->_db->query($query);
            $resultado = $consulta->fetch_array(MYSQLI_NUM);            
            $res= $resultado[0];
            var_dump($res);
            if(isset($resultado)){
                echo"kul";
                return $res;
            }
            else{
                echo "no kul";
            }
        }



        public function crearUsuario($usuario,$pass){
            $query="CALL crearUsuario('$usuario','$pass')";
            $consulta= $this->_db->query($query);
            var_dump($consulta);
            if($consulta){
                echo"usuario guardado";
                $this->_db->close();

            }
            else{
                echo"No se guardo el usuario";
            }
        }


        public function validarUsuario($usuario,$pass){
            var_dump($usuario);
            var_dump($pass);
            $query="CALL validarUsuario('$usuario','$pass')";
            $consulta= $this->_db->query($query);
            var_dump($consulta);
            $resultado = $consulta->fetch_array(MYSQLI_NUM);  
            $res=$resultado[0];
            var_dump($res);
            if($resultado){
                return $res;
                $resultado->close();
                $this->_db->close();
            }
            else{
                echo"No se encuentran registros";
                header( "refresh:5;url=../createFactura.php" );
            }
        }









       




        
    }

?>