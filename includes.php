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
              header("Location: intranet.php");
            }
          die();
        } else {
            echo '<div style="padding-top:200px; padding-bottom:800px; background-color:#8B7488; font-weight: bold; color: white; text-align:center; font-size:30px"><p>Wrong password!</p><br><p style="padding-top:50px;">Please enter agian!</p></div>';
            echo '<b>Please enter again!</b>';
            header("refresh:2; url=login.php");
            die;
        }
    }

    // public function logout()
    // {
    //     session_start();
    //     session_unset();
    //     header("Location: login.php");
    //     die();
    // }

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


/* function definitions for validating form data; these could go in an include file to make this more readable*/
function validTitle($title) { 
/* 	Field is required
	Length should not exceed 150 chars
	Should contain at least one space character */
	if ($title == '') {
		return false;
	}
  // if (!ctype_digit($title)) {
  //     return false;
  // }
  if (strlen($title) < 2) {
    return false;
  }
	if (strlen($title) > 10) {
		return false;
	}
	return true;
}
		
		function validFirstName($firstname) { 
		/* 	Field is required
			Length should not exceed 150 chars
			Should contain at least one space character */
			if ($firstname == '') {
				return false;
			}
			if (strlen($firstname) > 20) {
				return false;
			}
      if (ctype_digit($firstname)) {
          return false;
      }
      if (strlen($firstname) < 2) {
				return false;
			}

			return true;
		}
    function validSurName($surname) { 
		/* 	Field is required
			Length should not exceed 150 chars
			Should contain at least one space character */
			if ($surname == '') {
				return false;
			}
      
      if (ctype_digit($surname)) {
          return false;
      }
      if (strlen($surname) < 2) {
				return false;
			}
			if (strlen($surname) > 20) {
				return false;
			}
			return true;
		}
		function validEmail($email) {
		/*	Field is required
			Should be a valid email address	*/
      
      if (($_SESSION['email']) == ($_POST['email'])) {
        return false;
      }
			if ($email == '') {
				return false;
			}			
			if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
				return false;
			}
			return true;
		}
		
		function validUserName($username) { 
		/* 	Field is required
			Length should not exceed 150 chars
			Should contain at least one space character */
      if (($_SESSION['username']) == ($_POST['username'])) {
        return false;
      }
      
      if ($username == '') {
				return false;
			}
			if (strlen($username) > 50) {
				return false;
			}
      
			return true;
		}
		
		function validPassword($password) { 
		/* 	Field is required
			Length should not exceed 150 chars
			Should contain at least one space character */
			if ($password == '') {
				return false;
			}
			if (strlen($password) > 30) {
				return false;
			}
			return true;
		}
?>
<?php
			$self = htmlentities($_SERVER['PHP_SELF']); #get the path and file name of this file; always Escape first using htmlentities()
			#echo '<p>This file is : ' . $self . '</p>'; #DEBUG test to see if correct self file name assigned
			$form_is_submitted = false; #indicates whether the form in this file has been submitted
			$errors_detected = false;	#indicates whether any data errors have been detected in the form
			$CleanData = array(); 	#holds valid data
			$errors = array();		#holds details of any invalid data
			
			if (isset($_POST['SubmitStatus'])) { 
			#Form has been submitted THEN validate field data
			#this section of code is responsible for validating the form data ONLY IF THE FORM HAS BEEN SUBMITTED
			
				$form_is_submitted = true;
				#the following data validation code should be recycled from last weeks process.php file
				if (isset($_POST['firstname'])) { #validate the Full Name field
					$trimmed = trim($_POST['firstname']);
					$html = htmlentities($trimmed);
					if (validFirstName($html)) {
						$CleanData['firstname'] = $html;
					} else {
						$errors['firstname'] = $html .' is incorrect value.';
					}
			} else {
						$errors['firstname'] = 'not submitted.';
				}
				if (isset($_POST['title'])) { #validate the Full Name field
					$trimmed = trim($_POST['title']);
					$html = htmlentities($trimmed);
					if (validTitle($html)) {
						$CleanData['title'] = $html;
					} else {
						$errors['title'] = $html . ' is incorrect value.';
					}
				} else {
						$errors['title'] = 'not submitted.';
				}
				if (isset($_POST['surname'])) { #validate the Full Name field
					$trimmed = trim($_POST['surname']);
					$html = htmlentities($trimmed);
					if (validSurName($html)) {
						$CleanData['surname'] = $html;
					} else {
						$errors['surname'] = $html . ' is incorrect value.';
					}
				} else {
						$errors['surname'] = 'not submitted.';
				}
				if (isset($_POST['email'])) { #validate the user email
					$trimmed = trim($_POST['email']);
					$html = htmlentities($trimmed);
					if (validEmail($html)) {
						$CleanData['email'] = $html;
					} else {
						$errors['email'] = $html . ' is incorrect value.';
					}
				} else {
						$errors['email'] = 'not submitted.';
				}
				
				if (isset($_POST['username'])) { #validate the Full Name field
					$trimmed = trim($_POST['username']);
					$html = htmlentities($trimmed);
					if (validUserName($html)) {
						$CleanData['username'] = $html;
					} else {
						$errors['username'] = $html . ' is incorrect value.';
					}
				} else {
						$errors['username'] = 'not submitted.';
				}
				if (isset($_POST['password'])) { #validate the Full Name field
					$trimmed = trim($_POST['password']);
					$html = htmlentities($trimmed);
					if (validPassword($html)) {
						$CleanData['password'] = $html;
					} else {
						$errors['password'] = $html . ' is incorrect value.';
					}
				} else {
						$errors['password'] = 'not submitted.';
				}
			} #end of code to validate submitted data
			
			#this section of code is responsible for processing clean or invalid data				
			if ($form_is_submitted === true && empty($errors)) {
        $data = $_POST['username'] . ',' . $_POST['password'] . ',' . $_POST['email'] . ',' . $_POST['title'] . ',' . $_POST['firstname'] .  ',' . $_POST['surname'] . "\n";
        $ret = file_put_contents('users.txt', $data, FILE_APPEND | LOCK_EX);
        
			# Valid submission THEN process the valid data
				echo '<div style="padding-top:200px; padding-bottom:800px; font-weight: bold; color: white; text-align:center; font-size:30px"><p>No errors detected.  Thank you for submitting :)</p></div>';
        header("Refresh: 2; url=private.php");
			} else { #YOU HAVE TO BE REALLY CAREFUL TO INCLUDE THE FORM HTML IN THIS BLOCK BUT NEED TO CLOSE AND OPEN the PHP tags to do it
				# (re)or display form
				if (!empty($errors)) { #errors exist in the errors() array
          sleep(2);				
				} 
				
				#this section of code sets the form field data to either clean or NULL if there was an error
				#when redisplaying the form for clean data, you do not want the user to enter it again
				if (isset($CleanData['title'])) { #UserName is in the CleanData array so display what was entered by user
					$title = htmlentities($CleanData['title']);
				} else { #failed validation, so clear the data eneted by the user
					$title = '';
				}
				if (isset($CleanData['firstname'])) { #UserName is in the CleanData array so display what was entered by user
					$firstname = htmlentities($CleanData['firstname']);
				} else { #failed validation, so clear the data eneted by the user
					$firstname = '';
				}
        if (isset($CleanData['surname'])) { #UserName is in the CleanData array so display what was entered by user
					$surname = htmlentities($CleanData['surname']);
				} else { #failed validation, so clear the data eneted by the user
					$surname = '';
				}
				
				if (isset($CleanData['email'])) { #UserEmail is in the CleanData array so display what was entered by user
					$email = htmlentities($CleanData['email']);
				} else { #failed validation, so clear the data eneted by the user
					$email = '';
				}
				if (isset($CleanData['username'])) { #UserName is in the CleanData array so display what was entered by user
					$username = htmlentities($CleanData['username']);
				} else { #failed validation, so clear the data eneted by the user
					$username = '';
				}
				if (isset($CleanData['password'])) { #UserName is in the CleanData array so display what was entered by user
					$password = htmlentities($CleanData['password']);
				} else { #failed validation, so clear the data eneted by the user
					$password = '';
				}

				
				#this section of code sets the form field data errors to either the problem or NULL by looking at the $errors() array
				if (isset($errors['title'])) {
					$titleError = htmlentities($errors['title']);
				} else {
					$titleError = '';
				}
				
				if (isset($errors['firstname'])) {
					$firstnameError = htmlentities($errors['firstname']);
				} else {
					$firstnameError = '';
				}
        
        if (isset($errors['surname'])) {
          $surnameError = htmlentities($errors['surname']);
        } else {
          $surnameError = '';
        }
				
				if (isset($errors['email'])) {
					$emailError = htmlentities($errors['email']);
				} else {
					$emailError = '';
				}
				
				if (isset($errors['username'])) {
					$usernameError = htmlentities($errors['username']);
				} else {
					$usernameError = '';
				}
				if (isset($errors['password'])) {
					$passwordError = htmlentities($errors['password']);
				} else {
					$passwordError = '';
				}
      }
?>
