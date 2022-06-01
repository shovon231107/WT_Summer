<?php
    $fn = $_GET["fname"];
    $ln = $_GET["lname"];

    $em = $_GET["email"];

    $pass = $_GET["password"];

    if(is_numeric($fn) || is_numeric($ln))
    {
        echo "First name and Last Name should not contain numeric value.<br>";
    }
    elseif(!empty($fn) || !empty($ln))
    {
        echo "Your name is ".$fn." ".$ln."<br>";
    }

    if(isset($_GET["desig"]))
    {
        $de = $_GET["desig"];
        echo "Your designation is ".$de."<br>";
    }
    else
    {
        echo "Designation must be selected<br>";
    }

    if(!isset($_GET["l1"]) && !isset($_GET["l2"]) && !isset($_GET["l3"]))
    {
        echo "Preferred language must be selected<br>";
    }
    else
    {
        echo "Your preferred languages are ";
        if(isset($_GET["l1"]))
        {
            $l1 = $_GET["l1"];
            echo $l1." ";
        }

        if(isset($_GET["l2"]))
        {
            $l2 = $_GET["l2"];
            echo $l2." ";
        }

        if(isset($_GET["l3"]))
        {
            $l3 = $_GET["l3"];
            echo $l3." ";
        }
        echo "<br>";
    }



    if(empty($em))
    {
        echo "Email should not be empty<br>";
    }
    else
    {
        echo "Your E-mail is ".$em."<br>";
    }

    if(strlen($pass)>6)
    {
        echo "Your password is ".$pass."<br>";
    }
    else
    {
        echo "Password should be more than 6 characters<br>";
    }
?> 
 67  
LabTask1/view/h1.php
@@ -0,0 +1,67 @@
<html>
    <head>
            <title>
                my page
            </title>
    </head>
    <body>
        <h1>Registration Form</h1>
        <form action="../control/p1.php" method="GET">
            <table>
                <tr>
                    <td>First Name:</td>
                    <td><input type = "text" name = "fname"></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type = "text" name = "lname"></td>
                </tr>
                <tr>
                    <td>Age:</td>
                    <td><input type = "number" name = "age"></td>
                </tr>
                <tr>
                    <td>Designation:</td>
                    <td><input type = "radio" name = "desig" value = "Junior Programmer">Junior Programmer
                    <input type = "radio" name = "desig" value = "Senior Programmer">Senior Programmer
                    <input type = "radio" name = "desig" value = "Project Lead">Project Lead</td>
                </tr>
                <tr>
                    <td>Preferred Language:</td>
                    <td><input type = "checkbox" name = "l1" value = "JAVA">JAVA
                    <input type = "checkbox" name = "l2" value = "PHP">PHP
                    <input type = "checkbox" name = "l3" value = "C++">C++</td>
                </tr>
                <tr>
                    <td>E-mail:</td>
                    <td><input type="email" name = "email"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name = "password"></td>
                </tr>
               
                <tr>
                    <td>Please choose a file</td>
                    <td><input type="file" name = "file"></td>
                </tr>
                <tr>
                    <td><input type = "submit">
                    <input type="reset"></td>
                </tr>
            </table>
            <p> SAZZAD HOSSAIN SHOVON </p>
        </form>
    </body>
</html> 