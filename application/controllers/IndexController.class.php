<?php 

class IndexController extends Controller{

    function consult(){

        $this->assign('title', '首页');
        $this->assign('content', 'php MVC');
        $this->render("Index");
    }


    public function add()
    {
        $this->render("author");
    }
}

