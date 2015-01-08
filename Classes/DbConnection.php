<?php
/**
 * Created by PhpStorm.
 * User: Filip
 * Date: 8.1.2015.
 * Time: 9:23
 */


class DbConnection {

    private $user;
    private $path;

    function __construct() {
        echo 'Object Constructed';
    }

    public function connectDb(){

        echo 'Connected';

    }

    public function queryDb($query){

        echo "$query executed";
        $results="It should be rows,cell,scalar..";
        return $results;

    }


    public function disconnectDb(){

        echo 'Disconnected';

     }



}
?>