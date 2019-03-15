<?php 
   
// connect to the database
include 'config.php';

// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx','png','jpg','jpeg'])) {
        echo "There should a Image file to upload";
    } elseif ($_FILES['myfile']['size'] > 100000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (name, size, downloads) VALUES ('$filename', $size, 0)";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
} 
?>
<html> <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <head>
        <title>MediGo</title>
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
    border-radius:25px;
}

.button1:hover {
    background-color: #4CAF50;
    color: white;
}

input[type=text] {
  width: 25%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  border-radius:25px;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
      display: inline;

}

.buy{
    font-size:30px;
    font-weight:bold;
    color:#4CAF50;
    display:inline;
}
input[type=text]:focus {
  border: 3px solid #4CAF50;;
}

.upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}

.btn {
  border: 2px solid gray;
  color: gray;
  background-color: white;
  padding: 8px 20px;
  border-radius: 25px;
  font-size: 20px;
  font-weight: bold;
}

.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}

</style>
            <center>
                <br><br><br><br>
               
                <!--<input type="button"onClick="rescue.php" value="Recsue">-->
                <br><br><br>
                 <a href="needhelp.php">
                <input type="button" class="button button1"   value="Donate Medicines"></a>
                
                <br><br><br>
              <div class="buy">Buy:</div>&nbsp;
              <input type="text" id="fname" name="fname" placeholder="search for medicines here">
                <br><br><div >
                <form action="" method="post" enctype="multipart/form-data" >
          <h3></h3>
          <input class=btn type="file" name="myfile" content:"image/*"> <br>
          <br>
          <button class=btn type="submit" name="save">Upload Prescription</button>
        </form>

            </center>
        </body>
    </head>
</html>