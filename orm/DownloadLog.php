<?php

namespace Orm;

use \Orm\ActiveRecord;
use \Traits\Validation;

final class DownloadLog extends ActiveRecord
{
    use Validation;
    /* @var int */
    private $fileId;

    /* @var int */
    private $userId;
    private static $instance = null;
    /**
     * DownloadLog constructor.
     * to block make instance from outside.
     */
    private function __construct(){}
    public function __destruct(){
        echo 'Destroying DownloadLog';
    }

    /**
     * make singleton
     * @return null|DownloadLog
     */
    public static function create(){


        if(self::$instance === null){
            self::$instance = new DownloadLog();
        }

        return self::$instance;
    }

    /**
     * implement method for ActiveRecord interface
     * @return bool
     */
    public function isModified() :bool{
        return $this->isModified;
    }


    /**
     * setter for fileId
     * To make chain method, return $this and update isModified flag
     * @param $id
     * @return DownloadLog
     */
    public function setFiledId($id) :DownloadLog{
        try{
            $this->isNumber($id);
            $this->fileId = $id;
            $this->isModified = true;
        }catch(\Exception $e){
            echo $e->getMessage();
        }

        return $this;
    }

    /**
     * setter for userId
     * @param $userId
     * @return DownloadLog
     */
    public function setUserId($userId) :DownloadLog{
        $this->userId = $userId;
        $this->isModified = true;
        return $this;
    }

    /**
     * getter for fileId
     */
    public function getUserId() :Int{
        return $this->userId;
    }

    public function destroy() :void{
        self::$instance = null;
    }
}
