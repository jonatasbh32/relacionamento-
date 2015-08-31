<?php

namespace Seerc;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

use Seerc\Service\Cidade as CidadeService;
use Seerc\Service\Empresa as EmpresaService;
use Seerc\Service\Carta as CartaService;
use SeercAdmin\Form\Carta as CartaFrm;


class Module{
   
    public function getConfig(){
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig(){
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__.'Admin' => __DIR__ . '/src/' . __NAMESPACE__."Admin",
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
     public function getServiceConfig(){
        return array(
            'factories' => array(
                    'Livraria\Model\CategoriaService' => function ($service){
                        $dbAdapter = $service->get('Zend\Db\Adapter\Adapter');
                        $categoriaTable = new CategoriaTable($dbAdapter);
                        $categoriaService = new Model\CategoriaService($categoriaTable);
                        return $categoriaService;
                    },
                    'Seerc\Service\Cidade' => function($service){
                        return new CidadeService($service->get('Doctrine\ORM\EntityManager'));
                    },
                    'Seerc\Service\Empresa' => function($service){
                        return new EmpresaService($service->get('Doctrine\ORM\EntityManager'));
                    },   
                    'Seerc\Service\Carta' => function($service){
                        return new CartaService($service->get('Doctrine\ORM\EntityManager'));
                    }, 
                     
                    'SeercAdmin\Form\Carta' => function($service) {
                    $em = $service->get('Doctrine\ORM\EntityManager');
                    $repository = $em->getRepository('Seerc\Entity\Cidade');
                    $cidades = $repository->fetchPairs();
                    return new CartaFrm(null, $cidades);
                },
                ),
            );
        }
    }     
