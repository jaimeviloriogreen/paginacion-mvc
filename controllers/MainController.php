<?php

class MainController{
    function __construct(){
        require_once('models/MainModel.php');
    }

    public function Index(){
        $paginacion = new MainModel();

        $pageId = isset($_GET['paginas']) && !empty((int)($_GET['paginas'])) ? $_GET['paginas'] : 1;
        $postByPage = 5;
        $start = $pageId > 1 ? ($pageId * $postByPage) - $postByPage : 0;

        $allArticulos = $paginacion->getAllArticulos();
        $pageNumber = ceil($allArticulos / $postByPage);
    
        $data = $paginacion->getPaginacion($start, $postByPage);

        require_once('views/paginacion.php');
    }
}