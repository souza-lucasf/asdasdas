<?php

class HtmlString {

    public $string;



    public function setString ($string){
        $newString = $string;
        echo $newString;
    }
    public function getString ($string){
        echo $string;
    }
    public function getBoldString($string){
        echo "<span style='font-weight: bold;'>$string</span>";
    }
    public function getItalicString ($string){
        echo "<span style='font-style: italic;'>$string</span>";
    }
    public function getItalicBoldString ($string){
        echo "<span style='font-weight: bold; font-style: italic;'>$string</span>";
    }
}