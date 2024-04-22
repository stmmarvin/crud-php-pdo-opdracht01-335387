<?php

class Nails extends BaseController
{
    private $AfspraakModel;

    public function __construct()
    {
        $this->AfspraakModel = $this->model('Afspraak');
    }

    public function index()
    {
        $nails = $this->AfspraakModel->getNails();

        $dataRows = "";

        /**foreach ($nails as $afspraak) {
            $dataRows .= "<tr>
                            <td>{$afspraak->Name}</td>
                            <td>{$afspraak->CapitalCity}</td>
                            <td>{$afspraak->Continent}</td>
                            <td>" . number_format($afspraak->Population, 0, ",", ".") . "</td>            
                        </tr>";
        }//*/

        $data = [
            'title' => 'Bling Bling Nail Studio Chantal',
            'dataRows' => $dataRows
        ];

        $this->view('nails/index', $data);
    }

    /**
     * Creates a new Afspraak.
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
             * Roep de createAfspraak methode aan van het AfspraakModel object waardoor
             * de gegevens in de database worden opgeslagen
             */
            $result = $this->AfspraakModel->createAfspraak($_POST);

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