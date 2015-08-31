<?php

namespace Seerc\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="cidades")
 * @ORM\Entity(repositoryClass="Seerc\Entity\CidadeRepository")
 */
class Cidade {


    public function __construct($options = null){
        Configurator::Configure($this, $options);
        $this->cartas = new ArrayCollection();
    }
   
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @var int
     */
    protected $id;
    
    /**
     * @ORM\Column(type="text")
     * @var string
     */
    protected $nome;

   /**
     * @ORM\OneToMany(targetEntity="Seerc\Entity\Carta", mappedBy="cidade")
     */

    protected $cartas;
    
    
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function __toString() {
        return $this->nome;
    }
    
   public function getCartas(){
    return $this->cartas;
   }
    
    public function toArray() {
        return array('id'=>$this->getId(),'nome'=>$this->getNome());
    }
}




?>