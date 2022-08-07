<!DOCTYPE html>
<html lang="en">

<html>
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Fest Registration</title>
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
    <div class="view min-vw-100 min-vh-100"
            style="background-image: url('http://localhost/fest%20management/media/images/24-242844_college-events.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <center>
            <h1>Fest Registration</h1>
            <form action="insertForm.php" method="post">
                <table class="table table-dark table-hover table-striped w-25 opacity-75">
                    <tr">
                        <td>
                            <label for="Name">Name:</label>
                        </td>
                        <td>
                            <input type="text" name="name" id="Name" placeholder="Name">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="USN">USN:</label>
                        </td>
                        <td>
                            <input type="text" name="usn" id="USN" placeholder="USN">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Gender">Gender:</label>
                        </td>
                        <td>
                            <input type="radio" name="gender" id="Gender" value="Male">Male
                            <input type="radio" name="gender" id="Gender" value="Female">Female
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="PhoneNo">Phone No:</label>
                        </td>
                        <td>
                            <input type="text" name="phone_no" id="PhoneNo" placeholder="9619******">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="EmailId">Email Id:</label>
                        </td>
                        <td>
                            <input type="email" name="email_id" id="EmailId" placeholder="Example@.com">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="DateOfBirth">Date of birth:</label>
                        </td>
                        <td>
                            <input type="date" name="date_of_birth" id="DateOfBirth">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Branch">Branch:</label>
                        </td>
                        <td>
                            <select name="branch" id="Branch">
                                <option>Select Option</option>
                                <option value="ETRX">ETRX</option>
                                <option value="EXTC">EXTC</option>
                                <option value="ECS">ECS</option>
                                <option value="CS">CS</option>
                                <option value="IT">IT</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="CourseYear">Course Year:</label>
                        </td>
                        <td>
                            <input type="radio" name="course_year" id="CourseYear" value="FE">FE
                            <input type="radio" name="course_year" id="CourseYear" value="SE">SE
                            <input type="radio" name="course_year" id="CourseYear" value="TE">TE
                            <input type="radio" name="course_year" id="CourseYear" value="BE">BE
                            <input type="radio" name="course_year" id="CourseYear" value="ME">ME
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="CollegeName">College Name:</label>
                        </td>
                        <td>
                            <input type="text" name="college_name" id="CollegeName" placeholder="SAKEC">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Address">Address:</label>
                        </td>
                        <td>
                            <input type="text" name="address" id="Address" placeholder="Address">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="District">District:</label>
                        </td>
                        <td>
                            <input type="text" name="district" id="District" placeholder="Mumbai City">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="PinCode">Pin Code:</label>
                        </td>
                        <td>
                            <input type="text" name="pin_code" id="PinCode" placeholder="400028">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Events">Event:</label>
                        </td>
                        <td>
                            <select name="events[]" id="Events" multiple>
                                <option>Select Option</option>
                                <option value="SAKEC Studio">SAKEC Studio</option>
                                <option value="Trivia">Trivia</option>
                                <option value="Squid Games">Squid Games</option>
                                <option value="Human Foosball">Human Foosball</option>
                                <option value="Speed Painting">Speed Painting</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Fees">Fees:</label>
                        </td>
                        <td>
                            <input type="text" name="fees" id="Fees" placeholder="100">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="FeeDate">Fee Date:</label>
                        </td>
                        <td>
                            <input type="date" name="fee_date" id="FeeDate">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="RegistrationDate">Registration Date:</label>
                        </td>
                        <td>
                            <input type="date" name="registration_date" id="RegistrationDate">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <center>
                                <button type="submit" class="btn btn-outline-secondary me-2" name='submit' value="Submit">Submit</button>
                                
                            </center>
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </div>
    </body>
</html>