<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
/* function definitions for validating form data; these could go in an include file to make this more readable*/
function validTitle($title) { 
/* 	Field is required
	Length should not exceed 150 chars
	Should contain at least one space character */
	if ($title == '') {
		return false;
	}
	if (strlen($title) > 10) {
		return false;
	}
	// if (strpos($firstname,' ') === false) {
	// 	return false;
	// }
	return true;
}
		
		function validFirstName($firstname) { 
		/* 	Field is required
			Length should not exceed 150 chars
			Should contain at least one space character */
			if ($firstname == '') {
				return false;
			}
			if (strlen($firstname) > 150) {
				return false;
			}
			// if (strpos($firstname,' ') === false) {
			// 	return false;
			// }
			return true;
		}
    function validSurName($surname) { 
		/* 	Field is required
			Length should not exceed 150 chars
			Should contain at least one space character */
			if ($surname == '') {
				return false;
			}
			if (strlen($surname) > 150) {
				return false;
			}
			// if (strpos($surname,' ') === false) {
			// 	return false;
			// }
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
		
		function validUserName($username) { 
		/* 	Field is required
			Length should not exceed 150 chars
			Should contain at least one space character */
			if ($username == '') {
				return false;
			}
			if (strlen($username) > 150) {
				return false;
			}
			// if (strpos($firstname,' ') === false) {
			// 	return false;
			// }
			return true;
		}
		
		function validPassword($password) { 
		/* 	Field is required
			Length should not exceed 150 chars
			Should contain at least one space character */
			if ($password == '') {
				return false;
			}
			if (strlen($password) > 150) {
				return false;
			}
			// if (strpos($firstname,' ') === false) {
			// 	return false;
			// }
			return true;
		}
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Sign Up to our Mailing List!</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head>
    <body>
        <h1>Sign Up to Our Mailing List!</h1>
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
						$errors['firstname'] = $html . ' is not valid.';
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
						$errors['title'] = $html . ' is not valid.';
					}
				} else {
						$errors['firstname'] = 'not submitted.';
				}
				if (isset($_POST['surname'])) { #validate the Full Name field
					$trimmed = trim($_POST['surname']);
					$html = htmlentities($trimmed);
					if (validSurName($html)) {
						$CleanData['surname'] = $html;
					} else {
						$errors['surname'] = $html . ' is not valid.';
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
						$errors['email'] = $html . ' is not valid.';
					}
				} else {
						$errors['email'] = 'not submitted.';
				}
				
				if (isset($_POST['title'])) { #validate the Full Name field
					$trimmed = trim($_POST['title']);
					$html = htmlentities($trimmed);
					if (validSurName($html)) {
						$CleanData['title'] = $html;
					} else {
						$errors['title'] = $html . ' is not valid.';
					}
				} else {
						$errors['title'] = 'not submitted.';
				}
				
				if (isset($_POST['username'])) { #validate the Full Name field
					$trimmed = trim($_POST['username']);
					$html = htmlentities($trimmed);
					if (validUserName($html)) {
						$CleanData['username'] = $html;
					} else {
						$errors['username'] = $html . ' is not valid.';
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
						$errors['password'] = $html . ' is not valid.';
					}
				} else {
						$errors['password'] = 'not submitted.';
				}
			} #end of code to validate submitted data
			
			#this section of code is responsible for processing clean or invalid data				
			if ($form_is_submitted === true && empty($errors)) {
			# Valid submission THEN process the valid data
				echo '<p>No errors detected.  Thank you for submitting :)</p>';
			} else { #YOU HAVE TO BE REALLY CAREFUL TO INCLUDE THE FORM HTML IN THIS BLOCK BUT NEED TO CLOSE AND OPEN the PHP tags to do it
				# (re)or display form
				if (!empty($errors)) { #errors exist in the errors() array
					echo '<p style="color:red"> Please correct the highlighted errors below:</p>';					
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
				
		#MUST CLOSE THE PHP BLOCK here to include form html as part of this else block, otherwise form wil not hide when valid data is submitted
		?>
				<!-- this section of HTML and PHP code is responsible for (re)displying the FORM and must be in the PHP (re)display form else block --> 
				<!-- $self is set at the start of the main php block above and ensures form data is submitted to this page -->
				<form action="<?php echo $self; ?>" method="post"> <!-- This file will receive the data; post means data will be passed to server as a seperate file -->
					<fieldset>
					<legend>Sign Up</legend>
						<!-- important to use meaningful names for the name tags, as they are the $_POST array keys -->
						<!-- NOTE THE ADDITION OF THE DATA ERROR VARIABLES -->
						<div>
							<label for="user">Title</label>
							<input value="<?php echo $title ?>" 
											type="text" 
											name="title" 
											id="user" 
											size="10"/>
											<?php echo '<span style="color:red">' . $titleError . '</span>'?>
						</div>
						<div>
							<label for="user">Firstname</label>
							<input value="<?php echo $firstname ?>" 
											type="text" 
											name="firstname" 
											id="user" 
											size="35"/>
											<?php echo '<span style="color:red">' . $firstnameError . '</span>'?>
						</div>
            <div>
              <label for="user">Surname</label>
              <input value="<?php echo $surname ?>" 
                      type="text" 
                      name="surname" 
                      id="user" 
                      size="35"/>
                      <?php echo '<span style="color:red">' . $surnameError . '</span>'?>
            </div>
						<div>            
							<label for="email">Email</label>
							<input value="<?php echo $email ?>" 
											type="text" 
											name="email" 
											id="email" size="40"/>
											<?php echo '<span style="color:red">' . $emailError . '</span>'?>
						</div>
						<div>
							<label for="user">Username</label>
							<input value="<?php echo $username ?>" 
											type="text" 
											name="username" 
											id="user" 
											size="35"/>
											<?php echo '<span style="color:red">' . $usernameError . '</span>'?>
						</div>
						<div>
							<label for="user">Password</label>
							<input value="<?php echo $password ?>" 
											type="text" 
											name="password" 
											id="user" 
											size="35"/>
											<?php echo '<span style="color:red">' . $passwordError . '</span>'?>
						</div>
						<div>            
							<input type="submit" name="SubmitStatus" value="Submit" />
						</div>
					</fieldset>
				</form>
		<?php
			} #this closes the else (re)display php block which includes the relevant html
		?>
    </body>
</html>