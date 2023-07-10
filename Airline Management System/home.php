<html>
    <head>   
      <link rel="stylesheet" href="styles.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
           
          
         
      
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

          //  $sql= "Create Table airlines(
          //       id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          //       airlineName VARCHAR(30) not null,
          //       departLocation VARCHAR(30) not null,
          //       departDate DATETIME not null,
          //       arriveLocation VARCHAR(30) not null,
          //       arrivetDate DATETIME not null
          //   )";

          //   if ($conn->query($sql) === TRUE) {
          //       echo "Table airlines created successfully";
          //     } else {
          //       echo "Error creating table: " . $conn->error;
          //    }
            
          //   $sql = "Insert into airlines (id, airlineName, departLocation, departDate, arriveLocation, arrivetDate)
          //           VALUES (1, 'Dhaka Biman', 'Dhaka', '2023-09-10 14:00:00', 'Rajshahi', '2023-09-10 15:00:00')";

          //           if (mysqli_query($conn, $sql)) {
          //               echo "New record created successfully";
          //           } else {
          //               echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          //           }

            $sql = "SELECT * FROM airlines";
            $result = $conn->query($sql);

           ?> 
           
           <div class = "container mt-5">
              <div class = "row">
                  <div class = "col">
                    <div class = "card">
                      <div class = "card-header">
                        <h2 class = "display-6 text-center" >Flight Management System: Available Flights</h2>
                      </div>
                      <div class = "card-body">
                          <table class= "table table-bordered text-center">
                            <tr class= "table-dark">
                              <td> Flight ID</td>
                              <td> Airline Name</td>
                              <td> Departure</td>
                              <td> Departure Date</td>
                              <td> Arrival </td>
                              <td> Arrival Date</td>
                            </tr>
                            <tr>
                            <?php
                              
                               // output data of each row
                                       while($row = $result->fetch_assoc()) {
                                          ?> 
                                          <td> <?php echo $row["id"]  ?>   </td>
                                          <td> <?php echo $row["airlineName"]  ?>   </td>
                                          <td> <?php echo $row["departLocation"]  ?>   </td>
                                          <td> <?php echo $row["departDate"]  ?>   </td>
                                          <td> <?php echo $row["arriveLocation"]  ?>   </td>
                                          <td> <?php echo $row["arrivetDate"]  ?>   </td>
                                          </tr>
                                          <?php
                                     }
              ?>                      
                            
                          </table>
                          
                      </div>
                    </div>
                  </div>
              </div>
           </div>
           
           <div class="container text-center">
          <div class="row row-cols-2">
            <div class="col"><a href="insert.php"><button class="btn btn-success"> ADD AIRLINE</button></a></div>
            <div class="col"> <a href="index.php"><button class="btn btn-danger">Logout</button></a></div>
            
          </div>
        </div>



    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>