
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form validateMe="number4.php" method="post">
             Name: <input type="text" name="username" required><br>
             Address <input type="text" name="address" required><br>
             Age: <input type="number" name="age" required> <br>
             Mobile Number: <input type="text" name="mobileno" required> <br>
             
             <input type="submit">
 </form>
</body>
</html>
<?php
class Validate
{


    public function __construct()
    {
        $this->var1 = isset($_POST['username']) ? $_POST['username'] : null;
        $this->var2 = isset($_POST['address']) ? $_POST['address'] : null;
        $this->var3 = isset($_POST['mobileno']) ? $_POST['mobileno'] : null;
        $this->var4 = isset($_POST['age']) ? $_POST['age'] : null;
    }

    public function validateMe()
    {
        if (!preg_match("/^[a-zA-z]*$/", $this->var1)) {
            $ErrMsg = "Only alphabets and whitespace are allowed.<br>";
            echo $ErrMsg;
        } else if($this->var1=="") {
            echo $this->var1 . " Enter a valid name<br>";
        }else{
            echo $this->var1 . " Name is valid <br>";
        }


        if(!preg_match('/^(?:\\d+ [a-zA-Z ]+, ){2}[a-zA-Z ]+$/', $this->var2)){
            echo $this->var2 ." not valid address<br>";
        }else{
            echo $this->var2 ." Address is valid<br>";
        }
        

        if ($this->var4 >= 18) {
            echo $this->var4 ." is not a legal age<br>";
        } else {
            echo $this->var4 ." is a legal age<br>";
        }

        $length = strlen($this->var3);

        if ($length < 11 || $length > 11    ) {
            $ErrMsg = $this->var3 ." this must be 11 digits";
            echo $ErrMsg;
        } else {
            echo $this->var3 ." Phone number is valid";
        }
        
    }
}


$validate = new Validate();

$validate->validateMe();
?>