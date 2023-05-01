<?php
<!DOCTYPE html>
<html lang="en">
<head>
<title>CoB: Contact Card</title>
<meta charset="utf-8">
<link href="ATUCoB.css" rel="stylesheet"> 
<script src="main.js" defer></script>
</head>
<body>
  <header>
    <h1> <a href="index.html"> College of Business</a></h1>
  </header>
  <nav>
    <ul>
	 <li><a href="index.html">Home</a></li>
     <li><a href="majors.html">Majors</a></li>
     <li><a href="login.html">Log In</a></li>
	 <li><a href="forum.html">New Student</a></li>
	 <li><a href="TStudentForm.html">Transfer Student</a></li>
	</ul> 
   </nav> 
   
   
  <main> 
   	
	<button id="filter-button" class="button">Filter</button>
<div id="filter-container" class="filters">
  <ul class="filters__list">
        <li>
  <input id="f2" type="checkbox" />
    <label for="f2">High School</label>
    </li>
        <li>
  <input id="f3" type="checkbox" />
    <label for="f3">Transfer</label>
    </li>
  </ul></div>

<button id="filter-button" class="button">Majors</button>
<div id="filter-container" class="filters">
  <ul class="filters__list">
    <li>
  <input id="f1" type="checkbox" />
    <label for="f1">Accounting</label>	SELECT * FROM HighSchool WHERE PotentialMajor = 'Accounting' ORDER BY LastName ASC
    </li>
        <li>
  <input id="f2" type="checkbox" />
    <label for="f2">Business Data Analytics</label> //	SELECT * FROM HighSchool WHERE PotentialMajor = 'Business Data Analytics' ORDER BY LastName ASC
    </li>
        <li>
  <input id="f3" type="checkbox" />
    <label for="f3">Finance</label> //	SELECT * FROM HighSchool WHERE PotentialMajor = 'Finance' ORDER BY LastName ASC
    </li>
        <li>
  <input id="f4" type="checkbox" />
    <label for="f4">Management</label> //	SELECT * FROM HighSchool WHERE PotentialMajor = 'Management' ORDER BY LastName ASC
    </li>
        <li>
  <input id="f5" type="checkbox" />
    <label for="f5">Marketing</label> //	SELECT * FROM HighSchool WHERE PotentialMajor = 'Marketing' ORDER BY LastName ASC
    </li>
  <li>
  <input id="f1" type="checkbox" />
    <label for="f1">Health Information Management</label> //	SELECT * FROM HighSchool WHERE PotentialMajor = 'Health Information Management' ORDER BY LastName ASC
    </li>
        <li>
  <input id="f2" type="checkbox" />
    <label for="f2">Agriculture Business</label> //	SELECT * FROM HighSchool WHERE PotentialMajor = 'Agriculture Business' ORDER BY LastName ASC
    </li>
        <li>
  <input id="f3" type="checkbox" />
    <label for="f3">Agricultural Education</label> //	SELECT * FROM HighSchool WHERE PotentialMajor = 'Agricultural Education' ORDER BY LastName ASC
    </li>
        <li>
  <input id="f4" type="checkbox"  />
    <label for="f4">Parks, Recreation and Hospitality Administration</label> //	SELECT * FROM HighSchool WHERE PotentialMajor = 'Parks, Recreation and Hospitality Administration' ORDER BY LastName ASC
    </li>


  </ul></div>
	<?php
	if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$query1 = mysql_query("select * from employee where employee_id=$id", $connection);
	while ($row1 = mysql_fetch_array($query1)) {
	?>
	<div class="form">
	<h2>---Details---</h2>
	<!-- Displaying Data Read From Database -->
	<span>Name:</span> <?php echo $row1['employee_name']; ?>
	<span>E-mail:</span> <?php echo $row1['employee_email']; ?>
	<span>Contact No:</span> <?php echo $row1['employee_contact']; ?>
	<span>Address:</span> <?php echo $row1['employee_address']; ?>
	</div>
	
  </main> 
   <footer>Copyright &copy; 2022; Last Updated 2023</footer>
</body>
</html>

?>