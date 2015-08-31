<?php

namespace SeercAdmin\Form;

use Zend\Form\Form,
	Zend\Form\Element\Select;

class Carta extends Form {

	protected $cidades; 

	 public function __construct($name = null, array $cidades = null) {
        parent::__construct('cidade');
        $this->cidades  = $cidades;


		$this->setAttribute('method', 'post');
		//$this->setInputFilter(new CidadeFilter);

		$this->add(array(
			'name' => 'id',
			'atributes' => array(
				'type' => 'hidden'
			)
		));

		$this->add(array(
			'name' => 'nome',
			'options' => array(
				'type' => 'text',
				'label' => 'Nome'
			),
			'attributes' => array(
				'id' => 'nome',
				'placeholder' => 'Entre com os dados'
			)


		));

		
		$cidade = new Select();
        $cidade->setLabel("cidade")
                ->setName("cidade")
                ->setOptions(array('value_options' => $this->cidades)
        );
        $this->add($cidade);


		$this->add(array(
			'name' => 'cpf',
			'options' => array(
				'type' => 'text',
				'label' => 'CPF'
			),
			'attributes' => array(
				'id' => 'cpf',
				'placeholder' => 'Entre com os dados'
			)


		));	   

		$this->add(array(
			'name' => 'data',
			'options' => array(
				'type' => 'text',
				'label' => 'Data'
			),
			'attributes' => array(
				'id' => 'data',
				'placeholder' => 'Entre com os dados'
			)


		));


		$this->add(array(
			'name' => 'submit',
			'type' => 'Zend\Form\Element\Submit',
			'attributes' => array(
				'value' => 'Salvar',
				'class' => 'btn btn-success'
			)

		));
	}

}

?>