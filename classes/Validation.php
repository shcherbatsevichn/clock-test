<?php
namespace classes;

class Validation extends Converter{

    public function __construct($information)
    {
        parent::__construct($information);
    }

    public function Validation()
    {
        $counter = 0;
        if((int)$this->info >0 && (int) $this->info < 361)
        {
            $counter++;
        }
        if(strlen($this->info) == 1){
            if(preg_match("/[0-9]/", $this->info)){
                $counter++;
            }
         }
         elseif(strlen($this->info) > 1){
            if(preg_match("/^[0-9]{1}[0-9]*[0-9]{1}$/", $this->info))
            {
                $counter++;
            }
         }
        if($counter == 2)
        {
            return true;
        }
        else{
            return false;
        }
    }
}