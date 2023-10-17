<?php

    class Customer{
        private $id, $firstName, $lastName, $email;
        public function __construct(int $id, string $firstName, string $lastName, string $email){
            $this->id = $id;
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->email = $email;
        }

        public function getId():string{
            return $this->id;
        }
        public function getFirstName():string{
            return $this->firstName;
        }
        public function getLastName():string{
            return $this->lastName;
        }
        public function getEmail():string{
            return $this->email;
        }

        public function addId(int $id){
            $this->id = $id;
        }
        public function addFirstName(string $firstName){
            $this->firstName = $firstName;
        }
        public function addLastName(string $lastName){
            $this->lastName = $lastName;
        }
        public function addEmail(string $email){
            $this->email = $email;
        }
        public function __get($name){
            return $this->id;
        }
        public function __set($name, $value){
            $this->payment = $value;
        }
        public function __call($name, $argument){
            echo  implode(' ', $argument);
        }
    }

?>
