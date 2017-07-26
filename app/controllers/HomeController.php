<?php
/**
* \HomeController
*/
class HomeController extends BaseController{
    public function home(){
        $this->view = View::make('home')
        ->with('articles',Article::get());
    }
}