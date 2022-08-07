<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>View</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/fest management/index.html">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <center>
    <div class="view min-vw-100 min-vh-100"
        style="background-image: url('http://localhost/fest%20management/media/images/24-242844_college-events.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <h1>Registered Students.</h1>
            <?php

            // servername => localhost
            // username => root
            // password => empty
            // database name => staff
            $conn = mysqli_connect("127.0.0.1", "root", "", "trial");

            // Check connection
            if($conn === false){
                die("ERROR: Could not connect. "
                    . mysqli_connect_error());
            }
            
            $sql = "SELECT * FROM register1";
            $result = $conn->query($sql);

            $sql = "SELECT SUM(Fee) FROM `register1`";
            $result1 = $conn->query($sql);

            // Close connection
            mysqli_close($conn);
            ?>
        

        
        <table class="table table-dark table-hover table-striped w-75 opacity-75">

            <tr>
                <th scope="col">USN</th>
                <th scope="col">name</th>
                <th scope="col">College Name</th>
                <th scope="col">Event Name</th>
                <th scope="col">Pid</th>
                <th scope="col">Reg date</th>
                <th scope="col">Fee</th>
            </tr>
            <?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['USN'];?></td>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['College_name'];?></td>
                <td><?php echo $rows['Event_name'];?></td>
                <td><?php echo $rows['Pid'];?></td>
                <td><?php echo $rows['Reg_date'];?></td>
                <td><?php echo $rows['Fee'];?></td>
            </tr>
            <?php
                }
             ?> 
            <?php 
                while($row=$result1->fetch_row()) 
                {
            ?>
            <tr>
                <td colspan="4"></td>
                <td colspan="2" >
                    <?php echo "Total Fees Collected :"?>
                </td>
                <td>
                    <?php echo $row[0]?>
                </td>
                </center>
            </tr>
            <?php
                }
             ?>
        </table>
        


        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        -->
    </div>
    </center>
  </body>
</html>