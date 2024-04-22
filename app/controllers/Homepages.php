<?php 
class Homepages extends BaseController
{
    public function index($firstname = NULL, $lastname = NULL) 
    {
        /**
         * Het data-array geeft informatie mee aan de view-pagina
         */

        $data = [
            'title' => 'Dit is de homepage! Welkom',
            'name'  => 'Mijn naam is Marvin Akpabot'
        ];

        /**
         * Met de view-method uit de BaseController-class wordt de view
         * aangeroepen met de informatie uit het $data-array
         */
        $this->view('homepages/index', $data);

    }
}

