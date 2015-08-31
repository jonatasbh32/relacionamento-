<?php

namespace Seerc\Service;

use Doctrine\ORM\EntityManager;

Class Cidade extends AbstractService {

	public function __construct(EntityManager $em){
		parent::__construct($em);
		$this->entity = "Seerc\Entity\Cidade";
	}

}



?>