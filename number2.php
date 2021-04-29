
<?php
 
 session_start();

 class userInput{
 
    public $userInput;

    function __construct($userInput){

         $this->userInput = $userInput;

    }

    function addInput(){

        if(!isset($_SESSION['option'])){
            $_SESSION['option'] = [];
        }

        array_push($_SESSION['option'],$this->userInput);
        
        echo '<select name="dropdown">';
                
        foreach ($_SESSION['option'] as $value) {
            echo '<option value="'.$value.'">"'.$value.'"</option>' ;
        }
        
        echo '</select>';
              
    }

 }



if(isset($_POST['submit'])){
    $userInput = $_POST['userInput'];
    $input = new userInput($userInput);
    $input->addInput();
}


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

    <form action="" method="post">
        Enter Anything :
        <input type="text" name="userInput">
        <br>
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>