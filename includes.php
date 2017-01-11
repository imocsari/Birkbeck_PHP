<?php
#This is an includes file for functions
#login function class created for authorization of the username and password
class Login
{
  #initialization of username and password
  public function __construct() {
    $this->loginname = @htmlentities($_POST['username']);
    $this->loginpass = @htmlentities($_POST['password']);
  }
  #if the username and password pass the approve function, will log in the user or display error message.
  public function login() {
    if ($this->approve()) {
      $_SESSION['username'] = $this->loginname;
      $_SESSION['password'] = $this->loginpass;
      $_SESSION['is_auth'] = true;
        if ($_SESSION['username'] == 'admin') {
          header("Location: adminform.php"); #Redirecting admin to form page to enter new user details
        }
        else {
          header("Location: intranet.php"); #redirecting user to intranet page, unless user is admin.
        }
          die();
  } else {
      echo '<div style="padding-top:200px; padding-bottom:800px; background-color:#8B7488; font-weight: bold; color: white; text-align:center; font-size:30px"><p>Wrong password!</p><br><p style="padding-top:50px;">Please enter again!</p></div>';
      header("refresh:1; url=login.php"); #displaying error message if the password does not match with the one in the database. 
      die;
    }
  }
  #approve function comparing the username and password with the stored username and password.
  private function approve() { 
    $content = file_get_contents("users.txt");
    $data = explode("\n", $content);

    foreach ($data as $row => $data) {
      $user_data = explode(',', $data);
      $this->user = @($user_data[0]);
      $this->pass = @trim(($user_data[1]), "\r");
        if (empty(($_POST['username']) || ($_POST['password']))) {
          return false;
      } elseif (strcmp($this->user, $this->loginname) === 0 && strcmp($this->pass, $this->loginpass) === 0) {
          return true;
      }
    }
      return false;
   }
   
  }

#function valid Title validating the title of the form. 
  function validTitle($title) { 
	 if ($title == '') { #title can not be empty
		return false;
   }
   if (!ctype_alnum($title)) { #title can not include special characters
		return false;
	 }
   if (ctype_digit($title)) { #title can not include numbers
    return false;
	 }
   if (strlen($title) < 2) { #title Length has to be more then 2 characters
    return false;
   }
	 if (strlen($title) > 10) { #title Length can not be longer then 10 characters
		return false;
	 }
	  return true;
  }
#function valid FirstName validating the firstname of the form. 
  function validFirstName($firstname) { 
	  if ($firstname == '') { #can not be empty
		  return false;
		}
		if (strlen($firstname) > 30) { #firstname can not be longer than 30 characters
		  return false;
		}
    if (ctype_digit($firstname)) { #firstname can not include numbers
      return false;
    }
    if (strlen($firstname) < 2) { #firstname can not be shorter than 2 characters
		  return false;
		}
	 return true;
	}
  function validSurName($surname) { 
	  if ($surname == '') {  #can not be empty
			return false;
		}  
    if (ctype_digit($surname)) { #surname can not include numbers
      return false;
    }
    if (strlen($surname) < 2) { #surname can not be shorter than 2 characters
		  return false;
		}
		if (strlen($surname) > 30) { #surname can not be longer than 30 characters
			return false;
		}
	 return true;
	}
	function validEmail($email) {
    if ($email == ($_POST['email'])) {
      return false;
    }
		if ($email == '') { #email field can not be blank
			return false;
		}			
		if (!filter_var($email,FILTER_VALIDATE_EMAIL)) { #filter validation function in PHP
			return false;
		}
	 return true;
  }
		
	function validUserName($username) { 
    if ($username == ($_POST['username'])) { #username can not be a username already stored in the system
      return false;
    }
    if (!ctype_alnum($username)) {
    	return false;
    }
    if ($username == '') { #can not be empty
		  return false;
		}
    if (strlen($username) < 3) { #username can not be shorter than 3 characters
		  return false;
		}
		if (strlen($username) > 30) { #username can not be longer than 30 characters
			return false;
		}
	 return true;
	}
		
  function validPassword($password) { 
    if ($password == '') { #can not be empty
		  return false;
		}
		if (strlen($password) > 30) { #can not be longer then 30 characters
			return false;
		}
	 return true;
	}
?>
<?php
			$self = htmlentities($_SERVER['PHP_SELF']); #get the path and file name of this file
			$form_is_submitted = false; #whether form in this file has been submitted
			$errors_detected = false;	#whether data errorsvdetected in the form
			$CleanData = array(); 	#holds valid data
			$errors = array();		#holds details of any invalid data
			
			if (isset($_POST['SubmitStatus'])) { 
			#validating the form data if the form submitted
				$form_is_submitted = true;
				if (isset($_POST['firstname'])) { #validate the firstname field
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
				if (isset($_POST['title'])) { #validate the title field
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
				if (isset($_POST['surname'])) { #validate the surname field
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
				if (isset($_POST['email'])) { #validate the email field
					$trimmed = trim($_POST['email']);
					$html = htmlentities($trimmed);
					if (validEmail($html)) {
						$CleanData['email'] = $html;
				} elseif ($email == ($_POST['email'])) {
						$errors['email'] = 'Email already exist!';
					
				} else {
            $errors['email'] = ' is incorrect value';
      } 
    } else {
						$errors['email'] = 'not submitted.';
				}
				
				if (isset($_POST['username'])) { #validate the username field
					$trimmed = trim($_POST['username']);
					$html = htmlentities($trimmed);
					if (validUserName($html)) {
						$CleanData['username'] = $html;
					} else {
						$errors['username'] = $html . ' is incorrect value or username already exist.';
					}
				} else {
						$errors['username'] = 'not submitted.';
				}
				if (isset($_POST['password'])) { #validate the password field
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
			} #end of code to validate data
			
			#processing clean or invalid data				
			if ($form_is_submitted === true && empty($errors)) {
        $data = $_POST['username'] . ',' . $_POST['password'] . ',' . $_POST['email'] . ',' . $_POST['title'] . ',' . $_POST['firstname'] .  ',' . $_POST['surname'] . "\n";
        $save = file_put_contents('users.txt', $data, FILE_APPEND | LOCK_EX);
        
			# processing the valid data
				echo '<div style="padding-top:200px; padding-bottom:800px; font-weight: bold; color: white; text-align:center; font-size:30px"><p>No errors detected.  Thank you for submitting :)</p></div>';
        header("Refresh: 2; url=adminform.php");
			} else { 
				if (!empty($errors)) {
          sleep(2);				
				} 
				#when redisplaying the form, redisplaying the entered data agian
				if (isset($CleanData['title'])) { #title display what was entered by user
					$title = htmlentities($CleanData['title']);
				} else { #failed validation
					$title = '';
				}
				if (isset($CleanData['firstname'])) {
					$firstname = htmlentities($CleanData['firstname']);
				} else {
					$firstname = '';
				}
        if (isset($CleanData['surname'])) { 
					$surname = htmlentities($CleanData['surname']);
				} else { 
					$surname = '';
				}
				
				if (isset($CleanData['email'])) { 
					$email = htmlentities($CleanData['email']);
				} else { 
					$email = '';
				}
				if (isset($CleanData['username'])) { 
					$username = htmlentities($CleanData['username']);
				} else { 
					$username = '';
				}
				if (isset($CleanData['password'])) { 
					$password = htmlentities($CleanData['password']);
				} else {
					$password = '';
				}

				
				#this section of code sets the form field data errors
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
