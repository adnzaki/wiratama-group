<?php namespace App\Models;

class Connector
{
    public $db;

    public function __construct()
    {
        $this->db = db_connect(); // connect to default database
    }

    public function setOnUpdateTimestamp(string $field, string $table): void
    {
        $query =    "ALTER TABLE `{$table}`
					CHANGE `{$field}` `{$field}` TIMESTAMP NULL
                    DEFAULT CURRENT_TIMESTAMP
                    on update CURRENT_TIMESTAMP NULL";

        $this->db->simpleQuery($query);
    }
}