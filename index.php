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
        main {
            top : 50%;
            left : 5%;
            position : absolute;
            line-height: 1.5;
        }
        main h1{
            font-size: 50px;
            
        }
        main p{
            font-size: 20px;
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
    </header>
    <main>
        <h1>Hello in my web page</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam deleniti provident quidem aliquid molestiae ipsa consequuntur necessitatibus sapiente ad reiciendis corrupti, saepe fugiat quo doloribus eos ut iure blanditiis! Pariatur delectus architecto corporis. Eligendi ad exercitationem error, architecto at aliquid tempora natus necessitatibus? Exercitationem distinctio, quisquam maiores id quo ipsa!</p>
        
    </main>
</body>
</html>