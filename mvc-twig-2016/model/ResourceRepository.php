<?php

/**
 * Description of ResourceRepository
 *
 * @author fede
 */
class ResourceRepository extends PDORepository {

    private static $instance;

    public static function getInstance() {

        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __construct() {
        
    }

    public function listAll() {

        $mapper = function($row) {
            $resource = new Resource($row['TABLE_SCHEMA'], $row['TABLE_NAME']);
            return $resource;
        };

        $answer = $this->queryList(
                "select TABLE_SCHEMA, TABLE_NAME from information_schema.TABLES where TABLE_TYPE=?;", ['BASE TABLE'], $mapper);

        return $answer;
    }

}
