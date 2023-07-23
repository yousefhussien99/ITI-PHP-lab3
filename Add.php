<!DOCTYpE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Web Page </title>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        body{
            background : linear-gradient( to bottom , #49a09d , #5f2c82);
            height: 100%;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        header{
            width: 100%;
            padding: 20px 0;
        }
        header nav ul{
            list-style: none;
            text-align: center;
        }
        header nav ul li{
            display: inline-block;
        }
        header nav ul li a{
            text-decoration: none;
            color: #000;
            padding: 5px 20px;
            font-size: 20px;
            font-weight: bold;
        }
        header nav ul li a:hover{
            background-color: #000;
            color: #fff;
        }
        main{
            width: 90%;
            max-width: 1000px;
            margin: 30px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
        }
        main h1{
            text-align: center;
            margin-bottom: 20px;
        }
        main form{
            width: 80%;
            margin: 0 auto;
        }
        main form label{
            display: block;
            font-size: 20px;
            font-weight: bold;
            margin: 10px 0;
        }
        main form input[type="text"],
        main form input[type="email"],
        main form input[type="password"],
        main form input[type="number"]{
            width: 100%;
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
            outline: none;
            font-size: 18px;
        }
        main form input[type="submit"],
        main form input[type="reset"]{
            padding: 5px 20px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
        }
        main form input[type="submit"]{
            background-color: #49a09d;
            color: #fff;
        }
        main form input[type="submit"]:hover{
            background-color: #fff;
            color: #000;
        }
        main form input[type="reset"]{
            background-color: #49a09d;
            color: #fff;
            margin-left: 10px;
        }
        main form input[type="reset"]:hover{
            background-color: #fff;
            color: #000;
        }
        main form input[type="file"]{
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
            outline: none;
            font-size: 18px;
            background-color: #fff;
        }

    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Contact us</a></li>
                <li><a href="Add.php">Add User</a></li>
                <li><a href="login.php">Log in</a></li>

            </ul>
        </nav>       
    </header>
    <main>
        <h1>Add User</h1>
        <form action="Add.php" method="post">
            <label for="Name">Name</label>
            <input type="text" name="Name" id="Name" placeholder="Name">
            <label for="Email">Email</label>
            <input type="email" name="Email" id="Email" placeholder="Email">
            <label for="Password">Password</label>
            <input type="password" name="Password" id="Password" placeholder="Password">
            <label for="ConfirmPassword">Confirm Password</label>
            <input type="password" name="ConfirmPassword" id="ConfirmPassword" placeholder="Confirm Password">
            <label for="RoomNumber">Room Number</label>
            <input type="number" name="RoomNumber" id="RoomNumber" placeholder="Room Number">
            <label for="Ext">Ext</label>
            <input type="number" name="Ext" id="Ext" placeholder="Ext">
            <label for="ProfilePhoto">Profile Photo</label>
            <input type= "file" name="ProfilePhoto" id="ProfilePhoto" placeholder="Profile Photo">
            <input type="submit" value="Add" onclick="return validate()">
            <input type="reset" value="Reset">
        </form>
    </main>
</body>
</html>
<script>
    function validate() {
        var name = document.getElementById("Name").value;
        var email = document.getElementById("Email").value;
        var password = document.getElementById("Password").value;
        var confirmPassword = document.getElementById("ConfirmPassword").value;
        var roomNumber = document.getElementById("RoomNumber").value;
        var ext = document.getElementById("Ext").value;
        var profilePhoto = document.getElementById("ProfilePhoto").value;
        if (name == "" || email == "" || password == "" || confirmPassword == "" || roomNumber == "" || ext == "" || profilePhoto == "") {
            alert ("Please fill all the fields");
            return false;
        }
        else if (password != confirmPassword) {
            alert ("Password and Confirm Password must be the same");
            return false;
        }
        else {
            alert ("User added successfully");
            return true;
        }
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if (!emailReg.test(email)) {
            alert ("Please enter a valid email address");
            return false;
        }
        <?php
        $name = $_POST['Name'];
        $email = $_POST['Email'];
        $password = $_POST['Password'];
        $confirmPassword = $_POST['ConfirmPassword'];
        $roomNumber = $_POST['RoomNumber'];
        $ext = $_POST['Ext'];
        $profilePhoto = $_POST['ProfilePhoto'];
        $myfile = fopen("users.txt", "a") or die("Unable to open file!");
        $txt = $name . "," . $email . "," . $password . "," . $confirmPassword . "," . $roomNumber . "," . $ext . "," . $profilePhoto . "\n";
        fwrite($myfile, $txt);
        fclose($myfile);
        ?>
    }
</script>
