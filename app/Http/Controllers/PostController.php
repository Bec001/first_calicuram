<?php
require 'Post.php';
require 'index.blade.php';

$model = new saikoroModel();
$view = new saikoroView();

$mode = $_REQUEST['mode'] ? $_REQUEST['mode'] : 'index';

switch($mode){
    case 'index':
        echo $view->index();
        break;
    case 'result':
        $saikoro = $model->result();
        echo $view->result($saikoro);
        break;
}
?>
