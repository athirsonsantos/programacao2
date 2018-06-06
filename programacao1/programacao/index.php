<?php
/**
Controlador da pagina inicial
 *
 * quando chegar aqui, deve chamar a view que mostrara a pagina inicial (abas)
 *
 */


if (isset($_GET['acao'])){
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}

require_once 'app/model/CategoriaCrud.php';
require_once 'app/model/ProdutoCrud.php';


switch ($acao){
    case 'index':
        $crud = new CategoriaCrud();
        $categorias =$crud->getCategorias();

        $crudprod = new ProdutoCrud();
        $produtos = $crudprod->getProdutos();

        include 'app/visoes/principal/teste.php';
        break;



}