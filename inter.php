<?php

interface login
{
	public function username();
	public function password();
	public function email();
}

class user implements login
{
	private $us_name;
	private $us_pass;
	private $us_email;
	
		public function __construct($nameormail, $pass)
		{
		$this->nameremail = $nameormail;
		$this->pass = $pass;
		}

		public function username()
		{
	
			if (($this->nameremail) == "username") //DB value Check
			{
				return 1;
			}
			else 
			{
				return 0;
			}
	
		}
		
		public function password()
		{
	
			if(($this->pass) == "password") //DB value Check
			{
				return 1;
			}
 			else
			{
				return 0;
			}
		}

		public function email()
		{
	
			if (($this->nameremail) == "email") //DB value Check
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}

		public function validate()
		{
			$us_name = $this->username();
			$us_pass = $this->password();
			$us_email = $this->email();
	
			if (($us_name || $us_email) && ($us_pass)) //validate the (username or email id) and password
			{
				return 1;
			}
		}
}

// 1st User

$user1 = new user("impelsys", 1234656);
$user1->username();
$user1->password();

// 2nd User

$user2 = new user("impelsys@impelsys.com", 1234656);
$user1->email();
$user1->password();

?>

