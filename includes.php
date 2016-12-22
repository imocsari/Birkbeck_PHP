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
