<?php

namespace SeercAdmin\Controller;

  

Class EmpresasController extends CrudController {

    public function __construct(){
        $this->entity = "Seerc\Entity\Empresa";
        $this->form = "SeercAdmin\Form\Empresa";
        $this->service = "Seerc\Service\Empresa";
        $this->controller = "empresas";
        $this->route = "livraria-admin";
    }
	
}


?>