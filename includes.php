<?php
class Login
{
    public $username;
    public $password;
    public $u;
    public $p;
    public $data;


    public function __construct()
    {
        $this->username = @htmlentities(strtolower($_POST['username']));
        $this->password = @htmlentities(strtolower($_POST['password']));
    }

    public function login()
    {
        if ($this->verify()) {
          $_SESSION['username'] = $this->username;
          $_SESSION['password'] = $this->password;
          $_SESSION['is_auth'] = true;
            if ($_SESSION['username'] == 'admin'){
              header("Location: private.php");
            }
            else {
              header("Location: afterlogin.php");
            }
          die();
        } else {
            echo '<div text-center>wrong Username Or Password!</div><br>';
            echo '<b>Please enter again!</b>';
            header("refresh:2; url=login.php");
            die;
        }
    }

    public function logout()
    {
        session_start();
        session_unset();
        header("Location: login.php");
        die();
    }

    public function verify()
    {
        $d = file_get_contents("users.txt");
        $data = explode("\n", $d);

        foreach ($data as $row => $data) {

            $row_user = explode(',', $data);
            $this->u = @(strtolower($row_user[0]));
            $this->p = @trim(strtolower($row_user[1]), "\r");

            if (empty(($_POST['username']) || ($_POST['password']))) {
                return false;
          } elseif (strcmp($this->u, $this->username) === 0 && strcmp($this->p, $this->password) === 0) {
                return true;
            }
        }
        return false;
    }

}


function validfirstname($firstname) { 
			if ($firstname == '') {
				return false;
			}
			if (strlen($firstname) > 30) {
				return false;
			}
			if (strpos($firstname,' ') === false) {
				return false;
			}
			return true;
		}
    
function validsurname($surname) { 
    			if ($surname == '') {
    				return false;
    			}
    			if (strlen($surname) > 30) {
    				return false;
    			}
    			if (strpos($surname,' ') === false) {
    				return false;
    			}
    			return true;
}
		
		function validEmail($email) {
		/*	Field is required
			Should be a valid email address	*/
			if ($email == '') {
				return false;
			}			
			if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
				return false;
			}
			return true;
		}
		
    		
		function validFormat($format) {
		/*	Field is required
			Submitted value must be one of the values specified in the html form	*/
			if ($format == '') {
				return false;
			}
			if ($format == 'plain' or $format =='html') {
				return true;
			} else {
				return true;
			}
		}
