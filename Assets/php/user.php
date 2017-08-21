<?php
class User {
  	protected $firstName;
	protected $lastName;
	protected $uid;
	protected $email;
	protected $password;
	protected $type;
	
	
	public function getName()
	{
	    return $this->name;
	}
	
	public function setName($firstName,$lastName)
	{
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}
	

}
?>
