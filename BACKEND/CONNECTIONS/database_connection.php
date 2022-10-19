<?php

require('database_credentials.php');
       


        //create connection
        $connection=new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE);


        //check connection
        if ($connection->connect_error) {
            die("Connection failed: " 
                . $connection->connect_error);
        } return true;




        
         ?>
          
        
       

      

    