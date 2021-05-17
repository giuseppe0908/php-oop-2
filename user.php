<?php
  class User{
    private $name;
    private $last_name;
    private $date_of_bith;

    public function __construct($name,$last_name,$date_of_bith){
        $this->name = $name;
        $this->last_name = $last_name;
        $this->date_of_bith = $date_of_bith;
    }
    public function getName(){
      return $this->name;
    }
    public function setName($name){
      $this->name = $name;
    }
    public function getLastName(){
      return $this->last_name;
    }
    public function setLastName($last_name){
      $this->last_name = $last_name;
    }
    public function getDate_of_bith(){
      return $this->name;
    }
    public function setDate_of_bith($date_of_bith){
      $this->date_of_bith = $date_of_bith;
    }


  }
  $turuzzu = new User('turuzzu','caputo','12/01/20');
  $turuzzu->setLastName("ok");
  var_dump($turuzzu);
 ?>
