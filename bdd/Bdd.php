<?php

/**
 * 
 * If exist => use it else instanciate it
 * 
 * 
 */
class Bdd
{
    protected static $instance;

    /**
     * Function getPDO
     *
     * @return [obj] $instance instance of PDO
     */
    public static function getPDO() 
    {
        try{
            if (!isset(self::$instance)) {
                self::$instance = new PDO(
                    'mysql:host='. _IP . ';dbname=' . _DB . '',
                    _USER,
                    _PWD,
                    array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION)
                );
            }
            return self::$instance;
        } catch (PDOException $e) {
            throw new PDOException(
                'BDD : impossible de se connecter à la base de données',
                "00",
                $e
            );
        }
    }
}