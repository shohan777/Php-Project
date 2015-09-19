<?php

    class human{
        public $name;
        public $age;
		public $person;
        
        public function __construct($na, $ag, $perso){
            $this->name = $na;
			$this->age = $ag;
			$this->person = $perso;
        }
		public function act(){
			echo ($this->person. " name is ". $this->name."<br/>");
		
		}
	}
	
	class father extends human{
		
		public function work(){
		
			echo ($this->person ." go to office.<br/>");
			}
	
		}
	class mother extends human{
	
		public function work(){
			
			
			echo ($this->person . " cook fish.<br/>");
			echo ($this->person. " age is ". $this->age);
			}
		}
		
	$father_obj = new father("Abdul", "45", "Father");
		$father_obj->work();
		$father_obj->act();
		
	$mother_obj = new mother("Sufia", "38", "Mother");
		$mother_obj->act();
		$mother_obj->work();
        

?>