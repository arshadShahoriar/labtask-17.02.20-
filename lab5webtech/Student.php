<!DOCTYPE html>
<html>
<?php
class Student
 {
  
  public $name;
  public $gender;
  public $blood;
  public $degree;
  public $email;
  public $date;
  
   function __construct($name,$email,$date,$gender,$degree,$blood) 
   {
	   
    $this->name = $name;
	
	$this->email = $email;
	
	$this->gender = $gender;
	
    $this->blood = $blood;
	
	$this->degree = $degree;
	
	$this->date = $date;
	
   }
  

  
  function set_name($name) {
    $this->name = $name;
  }
  
  function get_name() 
  {
    return $this->name;
  }
   function set_email($email)
   {
    $this->email = $email;
  }
  function get_email()
  {
    return $this->email;
  }
  function set_gender($gender)
  {
    $this->gender = $gender;
  }
  function get_gender()
  {
    return $this->gender;
  }
  function set_blood($blood)
  {
    $this->blood = $blood;
  }
  function get_blood() 
  {
    return $this->blood;
  }
  function set_degree($degree)
  {
    $this->degree = $degree;
  }
  function get_degree()
  {
    return $this->degree;
  }
  function set_date($date)
  {
    $this->date = $date;
  }
  function get_date()
  {
    return $this->date;
  }
  
}
?>
</html>