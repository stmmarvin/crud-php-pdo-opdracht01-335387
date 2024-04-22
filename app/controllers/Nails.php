<?php

class nails extends BaseController
{
    private $nagelsModel;

    public function __construct()
    {
        $this->nagelsModel = $this->model('nagels');
    }

    public function index()
    {
        $nails = $this->nagelsModel->getNails();

        $dataRows = "";

        foreach ($nails as $nagels) {
            $dataRows .= "<tr>
                            <td>{$nagels->Name}</td>
                            <td>{$nagels->CapitalCity}</td>
                            <td>{$nagels->Continent}</td>
                            <td>" . number_format($nagels->Population, 0, ",", ".") . "</td>            
                        </tr>";
        }

        $data = [
            'title' => 'Landen van de Wereld',
            'dataRows' => $dataRows
        ];

        $this->view('nails/index', $data);
    }

    /**
     * Creates a new nagels.
     *
     * This method is responsible for rendering the create view and passing the necessary data to it.
     *
     * @return void
     */
    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            /**
             * Maak het $_POST-array schoon van ongewenste tekens en tags
             */
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            /**
             * Roep de createnagels methode aan van het nagelsModel object waardoor
             * de gegevens in de database worden opgeslagen
             */
            $result = $this->nagelsModel->createnagels($_POST);

            echo '<div class="alert alert-success" role="alert">
                    Uw gegevens zijn opgeslagen. U wordt doorgestuurd naar de index-pagina.
                  </div>';

            /**
             * Na het opslaan van de formulier wordt de gebruiker teruggeleid naar de index-pagina
             */
            header("Refresh:6; url=" . URLROOT . "/nails/index");
        }

        $data = [
            'title' => 'Maak een afspraak bij Bling Bling Nail Studio Chantal'
        ];

        $this->view('nails/index', $data);
    }
}