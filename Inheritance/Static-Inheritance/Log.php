<?php

class Log{
 
//  private $name;


//  public function __construct($n)
//  {
//      $this->name = $n;

//     }
    
    public static function save_log(){

        $file_handle = fopen('last_accessed.txt', 'a');
        fwrite($file_handle, date('d/m/Y H:i:s') . " - Accessing file\r");
        fclose($file_handle);
        echo 'Last access saved into the file';

    }
        


}