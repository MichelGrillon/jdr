<?php

abstract class ConnectBdd
{
    protected $_connection;

    public function __construct()
    {
        define('SERVER', "michely31.mysql.db");
        define('USER', "michely31");
        define('PASSWORD', "Tolosa31");
        define('BASE', "michely31");

        try {
            $this->_connection = new PDO("mysql:host=" .
                SERVER . ";dbname=" .
                BASE, USER, PASSWORD);
            // Activation des erreurs PDO
            $this->_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // mode de fetch par défaut : FETCH_ASSOC / FETCH_OBJ / FETCH_BOTH
            //$this->connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die('Erreur:' . $e->getMessage());
        }
    }
}
