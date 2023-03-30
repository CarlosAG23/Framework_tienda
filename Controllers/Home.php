<?php 
	class Home extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}
        
        public function home($params)
        {
            //echo "Mensaje desde el home";
            $this->views->getView($this,"home");
        }
        public function datos($params)
        {
            echo "Datos recibidos: ".$params;
        }
        public function carrito($params)
        {
            $carrito = $this->model->getCarrito($params);
            echo $carrito;
        }

    }

?>