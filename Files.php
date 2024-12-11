<?php

namespace Rizk\Blog\Classes;

class Files{
    private $file_type;
    public function __construct($file_type)
    {
        $this->file_type = $file_type;
    }
    public function checkFile(){
        if($_FILES[$this->file_type]["name"] != null){
            return true;
        }else{
            return false;
        }
    }
    public function getFileData($key){
        return $_FILES[$this->file_type][$key];
    }
    public function sizeMB($size){
        return $size/(1024*1024);
    }

    public function getExt($imageName){
        return pathinfo($imageName,PATHINFO_EXTENSION);
    }

    public function setNewFileName($extension){
        return uniqid().".".$extension;
    }

    public function storeFile($tmp_name,$new_name){
        move_uploaded_file($tmp_name,"path-that-you-need-to-store-files/$new_name");
    }

    public function checkFileExists($file_name){
        return (file_exists("path-that-you-need-to-store-files/$file_name"))? true : false;
    }

    public function deleteImage($image){
        $path = "path-that-you-need-to-store-files/$image";
        if(file_exists($path)){
            unlink($path);
            return true;
        }else{
            return false;
        }
    }
}