<?php
    require_once("../config/CFG.php");
    require_once("../src/Model.php");
    $model = new Model(CFG::class);

    $mysongs = $model->getTracks(5);
    print_r($mysongs);
    $mysongs[0]['name'] = "jociga dziesma";
    $model->updateTrack($mysongs[0]);
    // $model->addTrack($mysongs[0]);
    //controller will have to provide data in similar format to $mysongs[0]
    // $model->deleteTrack(45, 5);