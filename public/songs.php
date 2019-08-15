<?php
    session_start();
    //TODO read about autoloading and namespaces!!
    require_once("../src/SongView.php");
    require_once("../src/Model.php");
    require_once("../src/SongController.php");
    require_once("../config/CFG.php");

    $model = new Model(CFG::class);
    $view = new SongView();
    $controller = new SongController($view, $model);
    $controller->process();
    