<?php

namespace Seerc\Service;

use Doctrine\ORM\EntityManager;

Class Empresa extends AbstractService {

	public function __construct(EntityManager $em){
		parent::__construct($em);
		$this->entity = "Seerc\Entity\Empresa";
	}

}



?>