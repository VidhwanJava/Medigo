<?php
require 'config.php';

    if(isset($_POST["submit"]))
    {
    	         $name=$_POST["name"];
    	         $no=$_POST["no"];
    	        $type1=$_POST["type1"];
    	        $district1=$_POST["district1"];
    	        $description=$_POST["description"];
    	       
    	         
    	$sql = "INSERT INTO data (name, no,hod,type,district,description) VALUES ('$name', '$no',1,'$type1','$district1','$description')";
    if ($conn->query($sql) === TRUE) 
    {   
        //echo "New record created successfully";
        header("Location:main.php");
    }
    }
?>
<html> <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <head>
        <title>S O S</title>  
      </head>
        <body>
                      <style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
}

.button1:hover {
    background-color: #4CAF50;
    color: white;
}
</style>
            <center>
              <form action="" method="post">
<fieldset>
  <legend>Fill the form to get help</legend>
  <br><br>
Name:
<input type="text" name="name" value="">
<br><br>
Mobile Number: 
<input type="text" name="no" value="">
<br><br>
Item: 
 <select name="type1">
  <option value="food">Food</option>
  <option value="water">Water</option>
  <option value="clothes">Clothes</option>
  <option value="napkins">Napkins</option>
  <option value="cleaning">Cleaning</option>
  <option value="medicine">Medicine</option>
</select>
  <br><br>
      District: <select name="district1">
    <option value="Alappuzha">Alappuzha</option>
    <option value="Ernakulam">Ernakulam</option>
    <option value="Idukki">Idukki</option>
    <option value="Kannur">Kannur</option>
    <option value="Kasaragod">Kasaragod</option>
    <option value="Kollam">Kollam</option>
    <option value="Kottayam">Kottayam</option>
    <option value="Kozhikode">Kozhikode</option>
    <option value="Malappuram">Malappuram</option>
    <option value="Palakkad">Palakkad</option>
    <option value="Pathanamthitta">Pathanamthitta</option>
    <option value="Thiruvananthapuram">Thiruvananthapuram</option>
    <option value="Thrissur">Thrissur</option>
    <option value="Wayanad">Wayanad</option>
  </select>
  <br><br>
Description
<input type="text" name="description" id="description">
    
</textarea><br><br>


  <input type="submit" class="button button1" name="submit" value="Submit">
</fieldset>
</form>
            </center>
      </body>
      </html>