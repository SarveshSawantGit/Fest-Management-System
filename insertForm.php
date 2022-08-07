<!DOCTYPE html>
<html>

<head>
	    <!-- Required meta tags -->
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<title>Insert Page page</title>
</head>

<body >
	
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
	
<div class="view min-vw-100 min-vh-100"
            style="background-image: url('http://localhost/fest%20management/media/images/image.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
	<table class="table table-dark table-hover table-striped w-25 opacity-75">
	<center>
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
		

		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
		$usn= $_REQUEST['usn'];
		$gender = $_REQUEST['gender'];
        $phone_no = $_REQUEST['phone_no'];
        $email_id = $_REQUEST['email_id'];
        $date_of_birth = date('Y-m-d', strtotime($_REQUEST['date_of_birth']));
        $branch = $_REQUEST['branch'];
        $course_year = $_REQUEST['course_year'];
        $college_name = $_REQUEST['college_name'];
        $address = $_REQUEST['address'];
        $district = $_REQUEST['district'];
        $pin_code = $_REQUEST['pin_code'];
        $events = $_REQUEST['events'];
        $fees = $_REQUEST['fees'];
        $fee_date = $_REQUEST['fee_date'];
        $registration_date = $_REQUEST['registration_date'];

		
		// Performing insert query execution
		// here our table name is college
		
		
		$sql_1 = "INSERT IGNORE INTO college (College_name)
			VALUES ('$college_name')";

		$sql_2= "INSERT IGNORE INTO student (USN,Name,Gender,Phone_No,Email_Id,DOB,Branch,Course_Year,Adress,District,PIN_Code,College_name
            ) VALUES ('$usn',
			'$name','$gender',$phone_no,'$email_id',
            '$date_of_birth','$branch','$course_year',
            '$address','$district',$pin_code,'$college_name');";


		if(isset($_POST['submit'])) {
			if(!empty($events)) {
				$sql_3 = '';
				foreach($events as $event){
					$sql_3 .= "INSERT IGNORE INTO event_names (Event_name)
					VALUES ('$event');";
				}
			}
		}
		
		$sql_4 = "INSERT IGNORE INTO registration (USN,Reg_date,Fee,Fee_date)
			VALUES ('$usn','$registration_date',
			$fees,'$fee_date');";

		
		if(isset($_POST['submit'])) {
			if(!empty($events)) {
				$sql_5 = '';
				foreach($events as $event){
					$sql_5 .= "INSERT IGNORE INTO participates_in (USN,Event_name)
					VALUES ('$usn','$event');";
				}
			}
		}
		$conn->query($sql_1);
		$conn->query($sql_2);
		$conn->query($sql_4);
		while(mysqli_next_result($conn)){;}
		$conn->multi_query($sql_3);
		while(mysqli_next_result($conn)){;}
			
		if(mysqli_multi_query($conn,$sql_5)){

			
			echo "<h3><p align='center'> <font color=white>data stored in a database successfully.";
            
			echo nl2br("<font color=white>\n$usn \n$name \n$gender \n$phone_no \n$email_id \n$date_of_birth \n$branch \n$course_year \n$address \n$district \n$pin_code");
		} else{
			echo "<h3><p align='center'> <font color=white>data stored in a database successfully.";
            
			echo nl2br("<font color=white>\n$usn \n$name \n$gender \n$phone_no \n$email_id \n$date_of_birth \n$branch \n$course_year \n$address \n$district \n$pin_code");
			echo "ERROR: Hush! Sorry INSERT_ID($conn). "
			. mysqli_error($conn);
		}



		// Close connection
		mysqli_close($conn);
		?>
		<center>
		<a href="http://localhost/fest%20management%20-%20Copy/yourPid.php">
            <button type="button" class="btn btn-outline-secondary me-2">View your Pid</button></a></center>
		</table>
	</center>
</div>
</body>

</html>