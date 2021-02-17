<?php
        $uname="";
        $err_uname="";
        $pass="";
        $err_pass="";
        $gender="";
        $err_gender="";
        $profession="";
        $err_profession="";
        $hobbies="";
        $err_hobbies="";
        $bio="";
        $err_bio="";

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(empty($_POST["uname"])){
                $err_uname="User name required";
            }
            else if(strlen($_POST["uname"]) < 6){
                $err_uname="Username must be more than 6 characters long";
            }
            else if(strpos($_POST["uname"]," ")){
                $err_uname="Username should not contain whitespace";
            }

            else{   
                $uname=$_POST["uname"];

            }

            if(empty($_POST["pass"])){
                $err_pass="Enter pass";
                
            }
            else if(strlen($_POST["pass"])<6){
                $err_pass="Password must be more than 6 characters long";
                $pass="";
            }
            else if(strpos($_POST["pass"]," ")){
                $err_pass="Password should not contain whitespace";
            }

            else{   
                $pass=$_POST["pass"];

            }

            if(empty($_POST["gender"])){
                $err_gender="Gender must be selected";
            }
            else{
                $gender=$_POST["gender"];
            }

            if(empty($_POST["profession"])){
                $err_profession="Profession must be selected";
            }
            else{
                $profession=$_POST["profession"];
            }

            if(isset($_POST["hobbies[]"])){
                $err_hobbies="Hobbies must be selected";
            }
            else{
                $hobbies=$_POST["hobbies[]"];
            }
            if(empty($_POST["tarea"])){
                $err_bio="Bio should not be empty";
            }
            else{
                $bio=$_POST["tarea"];
            }
           
           
        
        }
    ?>
    



<html>
<head>
</head>
<body>
<!--  echo "Name: " . $_POST["uname"]."<br>"; 
            echo "Password: " . $_POST["pass"]."<br>" ;
            echo "Gender: " . $_POST["gender"]."<br>";
            echo "Profession: ".$_POST["profession"]."<br>";
            echo "Bio: " . $_POST["tarea"]."<br>";-->

    <h1>User Registration</h1>
        <form action="" method="post"><!-- controls must be in form tag-->
            <table>
                <tr>
                    <td><span>Username</span></td>
                    <td>: <input type="text" name="uname" placeholder ="Username">
                        <span><?php echo $err_uname;?></span></td>
                </tr>
                <tr>
                    <td><span>Password</span></td>
                    <td>: <input type="password" name="pass" placeholder ="Password">
                    <span><?php echo $err_pass;?></span></td>
                </tr>
                <tr>
                    <td><span>Gender</span></td>
                    <td>: <input type="radio" name="gender" value="male">Male
                          <input type="radio" name="gender" value="male">Female
                          <span><?php echo $err_gender;?></span></td>
                </tr>
                <tr>
                    <td><span>Hobbies</span></td>
                    <td>: <input type="checkbox"value="Movies" name="hobbies[]">Movies
                    <input type="checkbox" value="Music" name="hobbies[]">Music
                    <input type="checkbox" value="Games" name="hobbies[]">Games 
                    <span><?php echo $err_hobbies;?></span></td>
                </tr>
                <tr>
                    <td><span>Profession</span></td>
                    <td><select name ="profession">
                    <option disabled selected>Choose one</option>
                    <option>Teaching</option>
                    <option>Service</option>
                    <option>Business</option>
                    </select>
                    <span><?php echo $err_profession;?></span></td>
                </tr>
                <tr>
                    <td><span>Bio:</span></td>
                    <td><textarea name="tarea"></textarea><br>
                    <input type="submit" value="Submit" >
                    <span><?php echo $err_bio;?></span></td>


            </table>


        </form>    
</body>
</html>