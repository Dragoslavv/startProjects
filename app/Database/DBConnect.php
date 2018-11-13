<?php
namespace App\Database;

class DB{

    private $_mysqli,
            $_query,
            $_results = array(),
            $_count = 0;
    public static $_instance; //The single instance

    /**
     * Get an instance of the Database
     * @return DB
     */
    public static function getInstance() {
        if(!isset(self::$_instance)) { // If no instance then make one
            self::$_instance = new DB();
        }
        return self::$_instance;
    }

    /**
     * DB constructor.
     */
    public function __construct() {
        $this->_mysqli = new \mysqli("localhost","admin","admin4321","instance_db");

        // Error handling
        if ( !$this->_mysqli )
        {
            die("Connection error: " . mysqli_connect_error());
        }
    }

    /**
     * @param $sql
     * @return $this
     */
    public function query($sql){
       if( $this->_query = $this->_mysqli->query($sql) ){
           while ( $row = $this->_query->fetch_object() ) {
               $this->_results[] = $row;
           }
           $this->_count = $this->_query->num_rows;
       }
       return $this;
    }

    /**
     * @return array
     */
    public function results() {
        return $this->_results;
    }

    /**
     * @return int
     */
    public function count() {
        return $this->_count;
    }

}