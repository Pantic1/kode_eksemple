<?php
include('./insert_data.php');

$csv = array_map('str_getcsv', file('./datafile.csv'));

array_walk($csv, function(&$data) use ($csv)
{
    $data = array_combine($csv[0], $data);

    if($data['source_status'] == 'active' || $data['source_status'] == 'inactive') 
    {
        $dataddress_split = explode(' ',$data['source_address_road']);

        if(!empty($dataddress_split[1]))
        {
            $InsertData = new Insert();
            $InsertData->insertData($data);
        }
    }
});
