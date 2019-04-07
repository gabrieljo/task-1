<?php
namespace traits;

trait Validation {
    public function isNumber($value)
    {
//        option 1 : use built in method
//        return is_numeric($value);
//        if(!is_numeric($value)){
//            throw new \Exception("The given value is not a number");
//        }
//        return true;

//        option 2 :use gettype to check type of value;
        if(gettype($value) === 'integer' || gettype($value) === 'double'){
            return true;
        }else {
            throw new \Exception("The given value is not a number");
        }
    }
}