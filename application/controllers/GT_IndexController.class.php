<?php 

class GT_IndexController extends Controller{

   
    public function index()
    {
    	
        $this->_view->render("index");
    }

    public function book()
    {
    	$data = (new GT_IndexModel)->select("gtBook");

    	
    	//echo gettype($data);
    	
    	$this -> assign("data",$data);

        $this->_view->render("GTIndex");
    }
    
    public function web()
    {
    	$data = (new GT_IndexModel)->select("gtWeb");
    	
    	//echo gettype($data);
    	
    	$this -> assign("data",$data);

        $this->_view->render("GTIndex");
    }
    public function software()
    {
    	$data = (new GT_IndexModel)->select("gtSoftware");
    	
    	//echo gettype($data);
    	
    	$this -> assign("data",$data);

        $this->_view->render("GTIndex");

        // book.php 调用方式 $vars["data"];
        $this->assign("data", $data);

        $this->render("index");

    }
}

