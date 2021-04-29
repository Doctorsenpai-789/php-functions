<?php
class Email
{

    public $email;

    public function __construct()
    {
     
        $this->email = isset($_POST['email']) ? $_POST['email'] : null;
    }

    public function validateEmail()
    {

        if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            echo ("$this->email is a valid email");
        }
        else if($this->email==""){
            echo "<script type='text/javascript'>alert('Please Enter an email');</script>";
            echo ("Enter a valid email");
            
        } else {
            echo ("$this->email is invalid email");
        }
    }
}

$emailVal = new Email();
$emailVal->validateEmail();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
      <form method="post">
            E-mail: <input type="text" name="email"><br>
           <input type="submit">
      </form>
</body>
</html>