<?php

class Afspraak
{
    private $db;

    public function __construct()
    {
        /**
         * Maak een nieuw database object die verbinding maakt met de 
         * MySQL server
         */
        $this->db = new Database();
    }

    /**
     * Haal alle records op uit de Afspraak-tabel
     */
    public function getNails()
    {
        try {
            /**
             * Maak een sql-query die de gewenste informatie opvraagt uit de database
             */
            $sql = 'SELECT Id
                          ,Basiskleur1
                          ,Basiskleur2
                          ,Basiskleur3
                          ,Basiskleur4
                          ,Telefoonnummer
                          ,Emailadres
                          ,Afspraakdatum
                          ,soortbehandeling
                    FROM   Afspraak';

            /**
             * Prepare de query voor het PDO object
             */
            $this->db->query($sql);

            /**
             * Geef de opgehaalde informatie terug aan de controller
             */
            return $this->db->resultSet();
        } catch (Exception $e) {
            // Behandel de uitzondering hier, bijvoorbeeld loggen of een foutmelding weergeven
            echo 'Er is een fout opgetreden: ' . $e->getMessage();
        }
    }

    public function createAfspraak($postArrayData) 
    {
        /**
         * Maak een sql-query die de ingevulde gegevens van het formulier
         * wegschrijft naar de database
         */
        $sql = 'INSERT INTO Afspraak (Basiskleur1
                                    ,Basiskleur2
                                    ,Basiskleur3
                                    ,Basiskleur4
                                    ,Telefoonnummer
                                    ,Emailadres
                                    ,Afspraakdatum
                                    ,soortbehandeling)
                     VALUES     (:basiskleur1
                                ,:basiskleur2
                                ,:basiskleur3  
                                ,:basiskleur4
                                ,:telefoonnummer
                                ,:emailadres
                                ,:afspraakdatum
                                ,:soortbehandeling)';

         /**
         * Maak de query $sql gereed voor het PDO database-object
         */
        $this->db->query($sql);

        /**
         * We koppelen de waardes uit het formulier aan de parameters in de query
         */
        $this->db->bind(':basiskleur1', $postArrayData['nail_colors'][0], PDO::PARAM_STR);
        $this->db->bind(':basiskleur2', $postArrayData['nail_colors'][1], PDO::PARAM_STR);
        $this->db->bind(':basiskleur3', $postArrayData['nail_colors'][2], PDO::PARAM_STR);
        $this->db->bind(':basiskleur4', $postArrayData['nail_colors'][3], PDO::PARAM_STR);
        $this->db->bind(':telefoonnummer', $postArrayData['phone_number'], PDO::PARAM_STR);
        $this->db->bind(':emailadres', $postArrayData['email'], PDO::PARAM_STR);
        $this->db->bind(':afspraakdatum', $postArrayData['appointment_datetime'], PDO::PARAM_INT);
    
        if (isset($postArrayData['behandeling'][0])) {
            $this->db->bind(':soortbehandeling', $postArrayData['behandeling'][0], PDO::PARAM_STR);
        } else {
            $this->db->bind(':soortbehandeling', null, PDO::PARAM_NULL);
        }


        /**
         * Voer de query uit zodat de gegevens worden weggeschreven naar de database
         */
        return $this->db->execute();

        
    
 }
}