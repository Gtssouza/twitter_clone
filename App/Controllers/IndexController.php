<?php

    namespace App\Controllers;

    //recursos do miniframework
    use MF\Model\Container;
    use MF\Controller\Action;

    //recursos do model
    use App\Models\Produto;
    use App\Models\Info;

    

    class IndexController extends Action{
        
        public function index(){

            //$this->view->dados = array('Sofá', 'Cadeira', 'Cama');

            $prod = Container::getModel('Produto');

            $produtos = $prod->getProdutos();

            $this->view->dados = $produtos;

            $this->render('index','layout3');
        }

        public function sobreNos(){

            $info = Container::getModel('Info');

            $infos = $info->getInfo();

            $this->view->dados = $infos;


           //$this->view->dados = array('Notebook', 'Smarthphone');
            $this->render('sobreNos','layout1');
        }

        
    }
?>