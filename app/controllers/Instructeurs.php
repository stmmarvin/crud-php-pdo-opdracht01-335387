<?php
class Instructeurs extends BaseController
{

    public function index()
    {
        
        $data = [ 
            'title' => 'Dit is de instructeurs pagina'
            ];

            $this->view('instructeurs/index' , $data);

      
    }
}

?>