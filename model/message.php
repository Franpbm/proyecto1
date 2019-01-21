<?php

    class Message {
        private $user;
        private $message;
        private $date;

        function __construct ($name, $message){
            $this->name = $name;
            $this->message = $message;
            $this->date = $date;
        }

        function get_name (){
            return $this->name;
        }

        function set_name (){
            $this->name = $name;
        }

        function get_message (){
            return $this->message;
        }

        function set_message (){
            $this->message = $message;
        }

        function get_date (){
            return $this->date;
        }

        function set_date (){
            $this->date = $date;
        }
    }

?>