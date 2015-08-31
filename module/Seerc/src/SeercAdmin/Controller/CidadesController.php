<?php

namespace SeercAdmin\Controller;

  

Class CidadesController extends CrudController {

    public function __construct(){
        $this->entity = "Seerc\Entity\Cidade";
        $this->form = "SeercAdmin\Form\Cidade";
        $this->service = "Seerc\Service\Cidade";
        $this->controller = "cidades";
        $this->route = "livraria-admin";
    }
	
}


?>