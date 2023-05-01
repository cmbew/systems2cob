<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="ATUCoB.css">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
  </head>
  <header>
  <h1> <a href="index.html"> College of Business </a></h1>
  <nav>
    <ul>
	 <li><a href="index.html">Home</a></li>
     <li><a href="majors.html">Majors</a></li>
     <li><a href="login.html">Log In</a></li>
		<li><a href="forum.html">New Student</a></li>
		<li><a href="TStudentForm.html">Transfer Student</a></li>
	</ul> 
   </nav>
   </header>
  <body>
    <main>
        <h1>Student Interest Report</h1>  

        <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Highschool</th>
                <th>Grad Year</th>
                <th>Major</th>
            </tr>

            <?php
                include_once 'connect.php';

                $sql = "Select fName, lName, email, hSchool, gYear, major from student";
                $result = mysqli_query($conn,$sql);

                if(mysqli_num_rows($result) > 0)
                {
                    while($row= mysqli_fetch_assoc($result)){
                        echo "<tr><td>".$row["fName"]."</td><td>".$row["lName"]."</td><td>".$row["email"]."</td><td>".$row["hSchool"]."</td><td>".$row["gYear"]."</td><td>".$row["major"]. "</td></tr>";
                    }
                    echo "</table>";
                }
                else
                {
                    echo "0 Results";
                }
            ?>


    </main>
	<footer>
	Copyright &copy; Last Updated 2023
	</footer>
	<script src="main.js"></script>
  </body>
</html>
