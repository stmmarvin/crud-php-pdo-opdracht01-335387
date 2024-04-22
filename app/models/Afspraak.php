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
                          ,Basiskleur
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
        $sql = 'INSERT INTO Afspraak (Basiskleur
                                    ,Telefoonnummer
                                    ,Emailadres
                                    ,Afspraakdatum
                                    ,soortbehandeling)
                     VALUES     (:basiskleur
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
        $this->db->bind(':basiskleur', $postArrayData['afspraak'], PDO::PARAM_STR);
        $this->db->bind(':telefoonnummer', $postArrayData['telefoonnummer'], PDO::PARAM_STR);
        $this->db->bind(':emailadres', $postArrayData['emailadres'], PDO::PARAM_STR);
        $this->db->bind(':afspraakdatum', $postArrayData['afspraakdatum'], PDO::PARAM_INT);
        $this->db->bind(':soortbehandeling', $postArrayData['soortbehandeling'], PDO::PARAM_STR);

        /**
         * Voer de query uit zodat de gegevens worden weggeschreven naar de database
         */
        return $this->db->execute();
    }

}