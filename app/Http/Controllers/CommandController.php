<?php

namespace App\Http\Controllers;

class CommandController extends Controller
{
    public function exportTables($tables)
    {
        \File::put("database/needed_data.sql", "");
        foreach( $tables as $table )
        {
            $rows = \DB::table($table)->get();

            foreach ($rows as $row) {
                $data = "INSERT INTO `{$table}` VALUES(";
                foreach ($row as $value) {
                    $data .= "'" . addslashes($value) . "', ";
                }
                $data = rtrim($data, ', ');
                $data .= ");\n";

                \File::append("database/needed_data.sql", $data);
            }
        }

        return 'These table exported - '.env('TABLE_TO_EXPORT');
    }
}