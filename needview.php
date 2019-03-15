
  
  <html> <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<head><title>S O S</title></head>
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

<style>
table, th, td {
    border: 3px solid #2bad47;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
    text-align: left;
}
table#t01 {
    width: 100%;    
    background-color: #f1f1c1;
}
</style>

<br>
 &emsp;&emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp; &emsp;
<a href="donform.php">
<input type="button" value="Donate" class="button button1" style="width: 180px; height: 80px;">
</a>

&emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp; &emsp;&emsp; &emsp;
<a href="needfull.php">
<input type="button" value="Full List"class="button button1" style="width: 180px; height: 80px;">
</a>


<br><br>
</br>

<h2> Help Needed</h2><br>
<table style="width:100%">
  <tr>
      <th>Date & Time</th>
      <th>District</th>
            <th>Item</th>
      <th>Description</th>
    <th>Name of  Donator</th>
    <th>Phone Number</th> 
  
  </tr>
<?php
      require "config.php";
    if(isset($_POST["submit"]))
    {
    	         $type=$_POST["type"];
    	         $district=$_POST["district"];
    	
    }
    $query = "SELECT name,no,description,time FROM data WHERE type='$type' AND district='$district' AND hod=0 ORDER BY time DESC ";
    $ans = mysqli_query($conn,$query)  ;
while($row=mysqli_fetch_array($ans))
{?><tr>
    <td><?php echo $row['time']; ?></td>
    <td><?php echo $district; ?></td>
    <td><?php echo $type; ?></td>
    <td><?php echo $row['description']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['no']; ?></td>
   </tr> 
    <?php
}
?>
</table>
<br>
</body>
</html>

