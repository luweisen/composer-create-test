<?php
/**
* \BaseController
*/
define('VIEW_PATH', BASE_PATH.'/app/views/');
class BaseController{
    protected $view;
    public function __construct(){

    }
    public function __destruct(){
        //调用VIEW
        $view = $this->view;
        if ( $view instanceof View ) {
            $this->view
            ->withTitle('lws的网站');
            extract($view->data);
            require VIEW_PATH.'/layouts/header.php';
            require $view->view;
            require VIEW_PATH.'/layouts/footer.php';
        }
    }
}