<?php

class Nails extends BaseController
{
    private $afspraakModel;

    public function __construct()
    {
        $this->afspraakModel = $this->model('Afspraak');
    }

    public function index()
    {
        $nails = $this->afspraakModel->getNails();
        
        $dataRows = "";

        foreach ($nails as $afspraak) {
            $dataRows .= "<tr>
                            <td>{$afspraak->Basiskleur1}</td>
                            <td>{$afspraak->Basiskleur2}</td>
                            <td>{$afspraak->Basiskleur3}</td>
                            <td>{$afspraak->Basiskleur4}</td>
                            <td>{$afspraak->Telefoonnummer}</td>
                            <td>{$afspraak->Emailadres}</td>
                            <td>{$afspraak->Afspraakdatum}</td>
                            <td>{$afspraak->soortbehandeling}</td>
                                       
                        </tr>";
        }

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
             * Roep de createAfspraak methode aan van het afspraakModel object waardoor
             * de gegevens in de database worden opgeslagen
             */
            $result = $this->afspraakModel->createAfspraak($_POST);

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

        $this->view('nails/create', $data);
    }
}