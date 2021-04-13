<?php

class database{
    public function createDatabase():void{
        $connection = new mysqli(servername, user, password);

        $sql = "CREATE DATABASE IF NOT EXISTS php_mysql_1";
        $res = mysqli_query($connection, $sql);

//        var_dump($res);

        $connection->close();

        $connection = new mysqli(servername, user, password, "php_mysql_1");

        $sql = "CREATE TABLE IF NOT EXISTS `books` ("
            ."`Id` INT NOT NULL AUTO_INCREMENT ,"
            ."`Title` VARCHAR(50) NOT NULL ,"
            ."`Author` VARCHAR(50) NOT NULL ,"
            ."`Price` FLOAT(10,2) NOT NULL ,"
            ."`Amount` INT NOT NULL ,"
            ."PRIMARY KEY  (`Id`)) ENGINE = InnoDB;";
        $res = mysqli_query($connection, $sql);

//        var_dump($res);

        $sql = "CREATE TABLE IF NOT EXISTS `users` ("
            ."`Id` INT NOT NULL AUTO_INCREMENT ,"
            ."`Username` VARCHAR(50) NOT NULL ,"
            ."`Password` VARCHAR(50) NOT NULL ,"
            ."`Permissions` INT(1) NOT NULL ,"
            ."PRIMARY KEY  (`Id`)) ENGINE = InnoDB;";
        $res = mysqli_query($connection, $sql);

//        var_dump($res);

        $connection->close();
    }
}