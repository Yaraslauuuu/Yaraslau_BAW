<?php
class Messages {
    private $errors = array();
    private $infos  = array();

    public function addError($msg){
        $this->errors[] = $msg;
    }

    public function addInfo($msg){
        $this->infos[] = $msg;
    }

    public function getErrors(){
        return $this->errors;
    }

    public function getInfos(){
        return $this->infos;
    }

    public function isError(){
        return count($this->errors) > 0;
    }
}
