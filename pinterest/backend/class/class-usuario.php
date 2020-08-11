<?php
    class Usuario{
        private $codigoUsuario;
        private $nombre;
        private $correo;
        private $contrasena;
        private $imagen;
        private $siguiendo;

        public function __construct($codigoUsuario,$nombre,$correo,$contrasena,$imagen,$siguiendo){
            $this->codigoUsuario = $codigoUsuario;
            $this->nombre = $nombre;           
            $this->correo = $correo;             
            $this->contrasena = $contrasena;            
            $this->imagen = $imagen;            
            $this->siguiendo = $siguiendo;           
        }

        public static function obtenerUsuarios(){
            $contenidoArchivo = file_get_contents('../data/usuarios.json');
            echo $contenidoArchivo;
        }

        public static function obtenerUsuario(){

        }

        /**
         * Get the value of codigoUsuario
         */ 
        public function getCodigoUsuario()
        {
                return $this->codigoUsuario;
        }

        /**
         * Set the value of codigoUsuario
         *
         * @return  self
         */ 
        public function setCodigoUsuario($codigoUsuario)
        {
                $this->codigoUsuario = $codigoUsuario;

                return $this;
        }

        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Get the value of correo
         */ 
        public function getCorreo()
        {
                return $this->correo;
        }

        /**
         * Set the value of correo
         *
         * @return  self
         */ 
        public function setCorreo($correo)
        {
                $this->correo = $correo;

                return $this;
        }

        /**
         * Get the value of contrasena
         */ 
        public function getContrasena()
        {
                return $this->contrasena;
        }

        /**
         * Set the value of contrasena
         *
         * @return  self
         */ 
        public function setContrasena($contrasena)
        {
                $this->contrasena = $contrasena;

                return $this;
        }

        /**
         * Get the value of imagen
         */ 
        public function getImagen()
        {
                return $this->imagen;
        }

        /**
         * Set the value of imagen
         *
         * @return  self
         */ 
        public function setImagen($imagen)
        {
                $this->imagen = $imagen;

                return $this;
        }

        /**
         * Get the value of siguiendo
         */ 
        public function getSiguiendo()
        {
                return $this->siguiendo;
        }

        /**
         * Set the value of siguiendo
         *
         * @return  self
         */ 
        public function setSiguiendo($siguiendo)
        {
                $this->siguiendo = $siguiendo;

                return $this;
        }
    }
?>