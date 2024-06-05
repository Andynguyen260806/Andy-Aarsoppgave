<!DOCTYPE html>
<html>
<head>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
}

form {
    width: 300px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="password"] {
    width: calc(100% - 22px);
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

button[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #45a049;
}

a {
    display: block;
    text-align: center;
    margin-top: 15px;
    text-decoration: none;
    color: #333;
}

a:hover {
    text-decoration: underline;
}

    </style>
</head>
<body>
<form action="login.php" method="post">
    <h2>Login:</h2>
    <label>Brukernavn: </label>
    <input type="text" name="brukernavn" placeholder="Brukernavn"><br/>
    <label>Passord: </label>
    <input type="password" name="passord" placeholder="Passord"><br/>
    <button type="submit">Login</button><br/>
    <a href="createUser.php">
    create user
    </a>
</form>


</body>
</html>
