<?php

namespace App\Functions;

/**
 * create Helpers class
 * @author FRANCESCO CIMINO
 */
class Helpers
{
    // to read csv data
    // i receive the path
    public static function GetCsvData(String $path)
    {
        // empty array
        $data = [];
        $file_stream = fopen($path, 'r');

        if ($file_stream === false) {
            exit("Open file ERROR!");
        }

        while (($row = fgetcsv($file_stream)) !== false) {
            $data[] = $row;
        }

        // close stream data
        fclose($file_stream);
        return $data;
    }
}