<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD Airline</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="wrapper2">
    
    <form action="", method = "post">
    <label for="id">ID: </label>
    <input type="number", id= "id", name = "id"> <br><br>
    <label for="airlineName">Airline Name: </label>
    <input type="text", id= "airlineName", name = "airlineName"> <br><br>
    <label for="departLocation">Departure Location : </label>
    <input type="text", id= "departLocation", name = "departLocation"> <br><br>
    <label for="departDate">Departure Date : </label>
    <input type="datetime-local", id= "departDate", name = "departDate"> <br><br>
    <label for="arriveLocation">Arrival Location : </label>
    <input type="text", id= "arriveLocation", name = "arriveLocation"> <br><br>
    <label for="arrivetDate">Arrival Date : </label>
    <input type="datetime-local", id= "arrivetDate", name = "arrivetDate"> <br><br>
    <input type="submit" class="btn" value="Submit">
    </form>
    <div class ="prev-btn">
    <a href="home.php"><button class="btn btn1">All Flights</button></a><br><br>
    <a href="index.php"><button class="btn btn2">Logout</button></a><br><br>
    </div>
    </div>
    <?php
        $servername = "localhost";
           $username = "root";
           $password = "";
           $dbname = "test";
   
             // Create connection
               $conn = mysqli_connect($servername, $username, $password, $dbname);
               // Check connection
               if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
               }
         
           
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $airlineName = $_POST['airlineName'];
        $departLocation = $_POST['departLocation'];
        $departDate = $_POST['departDate'];
        $arriveLocation = $_POST['arriveLocation'];
        $arrivetDate = $_POST['arrivetDate'];
       

        $sql = "Insert into airlines (id, airlineName, departLocation, departDate, arriveLocation, arrivetDate)
            VALUES ($id,'$airlineName', '$departLocation' , '$departDate', '$arriveLocation', '$arrivetDate' )";
            if ($conn->query($sql) === TRUE) {
               ?> 
                <div class="wrapper2"><?php echo "New Record created successfully";?> </div>
            <?php  
            } else {
                echo "Error creating table: " . $conn->error;
            }
    }
    ?>

</body>
</html>