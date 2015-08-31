<?php

namespace Seerc\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="cartas")
 * @ORM\Entity(repositoryClass="Seerc\Entity\CartaRepository")
 */

Class Carta{

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
     * @ORM\ManyToOne(targetEntity="Seerc\Entity\Cidade", inversedBy="carta")
     * @ORM\JoinColumn(name="cidade_id", referencedColumnName="id")
     */
	protected $cidade;

	/**
	 * @ORM\Column(type="text")
	 * @var string
	 */

	protected $cpf;

	/**
	 * @ORM\Column(type="text")
	 * @var string
	 */
	protected $data;

	public function __construct($options=null){
		Configurator::configure($this, $options);
	}


	public function getId()
	{
	    return $this->id;
	}
	
	public function setId($id)
	{
	    return $this->id = $id;
	}

	public function getNome()
	{
	    return $this->nome;
	}
	
	public function setNome($nome)
	{
	    return $this->nome = $nome;
	}

	public function getCidade()
	{
	    return $this->cidade;
	}
	
	public function setCidade($cidade)
	{
	    return $this->cidade = $cidade;
	}

	public function getCpf()
	{
	    return $this->cpf;
	}
	
	public function setCpf($cpf)
	{
	    return $this->cpf = $cpf;
	}
	
	public function getData()
	{
	    return $this->data;
	}
	
	public function setData($data)
	{
	    return $this->data = $data;
	}

	public function toArray(){
		 return array(
			'id' => $this->getId(),
			'nome' => $this->getNome(),
			'cidade' => $this->getCidade()->getId(),
			'cpf' => $this->getCpf(),
			'data' => $this->getData(),
		);	
	}

}




?>