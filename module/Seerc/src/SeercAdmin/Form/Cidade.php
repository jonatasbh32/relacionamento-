<?php

namespace SeercAdmin\Form;

use Zend\Form\Form;

class Cidade extends Form {

	public function __construct($name = null){
		parent::__construct('cidade');

		$this->setAttribute('method', 'post');
		$this->setInputFilter(new CidadeFilter);

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
				'label' => 'Cidade'
			),
			'attributes' => array(
				'id' => 'nome',
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