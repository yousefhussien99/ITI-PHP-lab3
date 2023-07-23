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
        }
        main form input[type="email"],
        main form input[type="password"],
        main form input[type="submit"]{
            width: 100%;
            padding: 5px;
            font-size: 18px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        main form input[type="submit"]{
            background-color: #49a09d;
            color: #fff;
            cursor: pointer;
        }
        main form input[type="submit"]:hover{
            background-color: #5f2c82;
        }
        main form input[type="submit"]:active{
            background-color: #000;
        }
        main form input[type="submit"]:focus{
            outline: none;
        }
        main form input[type="email"]:focus,
        main form input[type="password"]:focus{
            border: 1px solid #49a09d;
        }
        main form input[type="email"]:invalid,
        main form input[type="password"]:invalid{
            border: 1px solid red;
        }
        main form input[type="email"]:valid,
        main form input[type="password"]:valid{
            border: 1px solid green;
        }
        main form input[type="email"]:focus,
        main form input[type="password"]:focus{
            border: 1px solid #49a09d;
        }
        main form input[type="email"]:invalid,
        main form input[type="password"]:invalid{
            border: 1px solid red;
        }
        main form input[type="email"]:valid,
        main form input[type="password"]:valid{
            border: 1px solid green;
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
               <li><a href="login.php" class = "active">Login</a></li>


            </ul>
        </nav>
    </header>
    <main>
        <h1>Login</h1>
        <form  method="post" action="login.php">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Email" >
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password" >
            <input type="submit" value="Login" onclick="return validate()" >
        </form>
    </main>
</body>
</html>
<script>
    function validate() {
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        if (email == "" || password == "") {
            alert("Please fill all the fields");
            return false;
        }
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if (!emailReg.test(email)) {
            alert ("Please enter a valid email address");
            return false;
        }
        try{
            var file = fopen("users.txt", "r");
            var line = fgets(file);
            while (line != false) {
                var data = line.split(",");
                if (data[0] == email && data[1] == password) {
                    var active = document.getElementsByClassName("active");
                    active.innerHTML = "Logout";
                    alert("Login successful");
                    window.location.href = "index.php";
                    return true;
                }
                line = fgets(file);
            }
            alert("Login failed");
            return false;
        } 
        catch (e) {
            alert("Login failed");
            return false;
        }
    }
</script>
