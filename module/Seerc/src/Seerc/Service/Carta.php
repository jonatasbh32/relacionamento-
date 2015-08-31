<?php

namespace Seerc\Service;

use Doctrine\ORM\EntityManager;
use Seerc\Entity\Configurator;

Class Carta extends AbstractService {

	public function __construct(EntityManager $em){
		parent::__construct($em);
		$this->entity = "Seerc\Entity\Carta";
	}

	
	public function insert(array $data) {
        $entity = new $this->entity($data);
        
        $cidade = $this->em->getReference("Seerc\Entity\Cidade", $data['cidade']);
        $entity->setCidade($cidade);
        
        $this->em->persist($entity);
        $this->em->flush();
        
        return $entity;
        
    }

	public function update(array $data){
		$entity = $this->em->getReference($this->entity, $data['id']);
		$entity = Configurator::configure($entity,$data);

		$cidade = $this->em->getReference("Seerc\Entity\Cidade", $data['cidade']);
		$entity->setCidade($cidade);

		$this->em->persist($entity);
		$this->em->flush();
		return $entity;
	}

}




?>