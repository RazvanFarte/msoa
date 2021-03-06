<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

<!--    2. Fisier extern css-->
    <link href="main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>



<div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Meniu
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="about.html">Despre noi</a>
            <a class="dropdown-item" href="blog.html">Blog</a>
            <a class="dropdown-item" href="contact.html">Contact</a>
            <a class="dropdown-item" href="servicii.html">Servicii</a>
            <a class="dropdown-item" href="index.php">Acasa</a>

        </div>
    </div>

<!--    1. 3 Imagini-->
    <img src="https://via.placeholder.com/150">

    <img src="https://via.placeholder.com/250">

    <img src="https://via.placeholder.com/450">

<!--3. 5 Pagini html -->

<!--2.1 Formular -->
    <form name="myForm" action="/index.php" onsubmit="return validateForm()" method="post">
        Name: <input type="text" name="fname">
        <input type="submit" value="Submit">
    </form>

<?php
    if(isset($_POST) && isset($_POST["fname"]))
    {
        $servername = "localhost";
        $username = "root";
        $password = "Password_2019";
        $dbname = "darius";

        $conn = new mysqli($servername, $username, $password, $dbname);

        $numeForm = $_POST["fname"];
        $sql = "insert into persoana_contact (nume) values ('?');";

        $statement = $conn->prepare($sql);
        $statement->bind_param("s", $numeForm);

        $statement->execute();
    }
?>

<script type="text/javascript">
    function validateForm() {
        var x = document.forms["myForm"]["fname"].value;
        if (x == "") {
            alert("Name must be filled out");
            return false;
        }
    }
</script>

</body>
</html>