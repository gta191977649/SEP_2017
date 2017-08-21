<?php
class User {
  	protected $firstName;
	protected $lastName;
	protected $uid;
	protected $email;
	protected $password;
	protected $type;
	protected $username;
	protected $gender;
	
	public function getName($firstName,$lastName)
	{
		return $this->firstName;
		return $this->lastName;
	}
	
	public function setName($firstName,$lastName)
	{
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}
	
	public function getUid($uid)
	{
		return $this->uid;
	}

	public function setUid($uid)
	{
		$this->uid = $uid;
	}

	public function getEmail($email)
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getPassword($password)
	{
		return $this->password;
	}

	public function setPassword($password)
	{
		$this->password = $password;
	}

	public function getType($type)
	{
		return $this->type;
	}

	public function setType($type)
	{
		$this->type = $type;
	}

	public function getUsername($username)
	{
		return $this->username;
	}

	public function setUsername($username)
	{
		$this->username = $username;
	}

	public function getGender($gender)
	{
		return $this->gender;
	}

	public function setGender($gender)
	{
		$this->gender = $gender;
	}
}
?>
