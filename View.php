<?php

namespace Rizk\Blog\Classes;

class View{
    public static function render($fileName,$data=[]){
        $path = "write-your-needed-file-fullpath".$fileName;
        if(file_exists($path)){
            extract($data);
            include($path);
        }else{
            die("file doesn't exist");
        }
    }
}