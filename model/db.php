<?php

class Database{
 
    protected $host = 'mysql:host=localhost;dbname=search';
    protected $user = 'root';
    protected $password = '';
    
    function __construct($host, $user, $password){
        try {
            $dbh = new PDO($host, $user, $password);
            echo 'ok';
            // foreach($dbh->query('SELECT * from FOO') as $row) {
            //     print_r($row);
            // }
            // $dbh = null;
        } catch (PDOException $e) {
            print "Error with database!: " .__FILE__. $e->getMessage() . "<br/>";
            die();
        }
    }

    public function constructSearch(){
        $sql = "CREATE TABLE `search`.`sites` (
            `site_id` INT NOT NULL AUTO_INCREMENT,
            `site_title` VARCHAR(240) NOT NULL,
            `site_link` VARCHAR(240) NOT NULL,
            `site_keyword` TEXT(500) NULL,
            `site_desc` TEXT(100) NULL,
            `site_image` TEXT(100) NULL,
            PRIMARY KEY (`site_id`))
          ENGINE = InnoDB
          DEFAULT CHARACTER SET = utf8;
          ";
    }

    

}