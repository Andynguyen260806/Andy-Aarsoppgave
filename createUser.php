<?php
session_start();
include "db_connect.php";
 
 
 
if(isset($_POST['Brukernavn']) && isset($_POST['Passord'])) {
function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
 
//her definer jeg variablene//
 
$brukernavn = validate($_POST['Brukernavn']);
$passord = validate($_POST['Passord']);
 
//Hvis brukernavn eller passord mangler sender dette en feilmelding til url
if(empty($brukernavn)) {
    header ("Location: createUser.php?error=Username is required!");
    exit();
}
else if(empty($passord)) {
    header ("Location: createUser.php?error=Password is required!");
    exit();
}
 
echo $_POST['Brukernavn'];
 
//her legges brukeren inn i databasen
$sql = "INSERT INTO Kunde (Brukernavn, Passord) VALUES ('".$brukernavn."', '".$passord."')";
 
// if statement for å sende brukeren tilbake til startsiden
if ($result = mysqli_query($conn, $sql)){
    header("location: index.php");
 
                }      
 
           
 
        }
     
?>
 
<!DOCTYPE html>
<html>
<head>
 <style>body {
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

input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}
</style>
</head>
<body>
    <form method="post">
        <h2>Opprett bruker:</h2>
        <label>Bruker: </label>
    <input type="text" name="Brukernavn" placeholder="Brukernavn"><br/>
        <label>Passord: </label>
    <input type="password" name="Passord" placeholder="Passord"><br/>
    <input type="submit">
    </form>
   
</body>
</html>
 
 
 
<?php
 
?>