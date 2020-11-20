<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Article</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
    <div class="row">

        <?php

        include '../Config/BaseDades.php';
        //create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if($conn -> connect_error){
            die("Connection failed: " . $conn->connect_error);
        }
        $rebreId = $_GET["id"];
        $sql = "SELECT id, name, preu, descripcio FROM articles where id = $rebreId";
        $result = $conn->query($sql);

        if($result -> num_rows > 0){
        while($row = $result -> fetch_assoc()){
        ?>

        <div>
            <img src="../SASS/<?php echo $row['id'];?>.jpg" class="d-block w-100" alt="<?php echo $row['name']; ?>">
        </div>

    <div style="float: right; max-width: 55%; margin-left: 250px; margin-top: 20px; " class="col-sm-8">
        <h1 class ="card-title"><?php echo $row['name']; ?></h1>
        <h3 class ="card-text"><?php echo $row['descripcio']; ?></h3>
        <h3 class ="card-text">PREU : <?php echo $row['preu']; ?> €</h3>
    </div>

</div>


<a href="Fitxa.php"><button class="btn btn-primary" style="float : right; margin-top: 50px; margin-left: 620px;"><i class="fa fa-home">Inici</i></button></a>

<a href="Carrito.php?id=<?php echo $row['id'];?>"><button class="btn btn-primary" style="float: right; margin-left: 150px; margin-top: 50px;"><i class="fa fa-shopping-cart">Afegir al Carro</i></button></a>
<?php
}
}
$conn->close();
?>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>