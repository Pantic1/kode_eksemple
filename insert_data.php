<?php
require('./db_conn.php');
class Insert extends DB 
{
    public function insertData($dataArray) 
    {              
        $query = 'INSERT INTO csvdata (source_id,
        source_status,
        source_name,
        source_desc,
        source_address_road,
        source_address_zip,
        source_address_city,
        source_external_id,
        source_latitude,
        source_longitude) VALUES (';
        foreach ($dataArray as $item => $value) {
            $query .= "'$value'";
            $query .= ',';

        }
        $query = rtrim($query, ', ');
        $query .= ');';
        echo $query . PHP_EOL;
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        
    }
}
