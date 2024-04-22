<?php
class Cars extends BaseController
{
    public function index($Merk = NULL, $Model = NULL)
    {

        $data = [
                
                'title' => 'Mijn Favoriete auto is een  Audi RS3'      
        ];

        $this->view('cars/index', $data);

    }
}
?>