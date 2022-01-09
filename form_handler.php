<?php
    if(isset($_POST["btn"])){
        $email = $_POST["email"]; 
        $pass = $_POST['pass'];
        $Gender = $_POST["gender"];
        function CheckPassword($pass)
        {
            $len = strlen($pass);
            if($len>8 && $len<16){
                return true;
            }else{
                return false;
            }
        }
        
        
        if(CheckPassword($pass)){
            
            echo "Email: ".$email;
            echo "<br/>";
            echo "pass: ".$pass;
            echo "<br/>";
            echo "Gender: ".$Gender;
            echo "<br/>";
            
            if(isset($_POST["box"])){
                $colors  = $_POST["box"];
                foreach ($colors as $color){
                    echo $color;   
                }
                echo"<br>";
            }else{
                echo "No favorite color!<br>";
            }
            
            echo "Registered successfully!";
        
        }else{
            echo "Password should be between 8 to 16 characters!<br/>";
        }

        

    }
    else{
        header("location: form.html");
    }
?>