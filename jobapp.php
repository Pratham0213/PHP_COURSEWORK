//create a job application form which only accepts doc and pdf as  resume input ,along  with name and position applied using php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JObForm</title>
</head>
<body>

<h2>Student Form</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
     <label for="name">Name:</label>
     <input type="text" id="name" name="name" required><br><br>

     <label for="registration_number">Position Applied For:</label>
     <input type="text" id="registration_number" name="registration_number" required><br><br>

     <label for="specialization">Specialization:</label>
     <input type="file" id="specialization" name="specialization" required><br><br>

     <!-- <label for="date_of_birth">Date of Birth:</label>
     <input type="date" id="date_of_birth" name="date_of_birth" required><br><br> -->

     <input type="submit" value="Submit"><br>
 </form>

//validate the form with the file input as only pdf or word file
   <?php
   // ...
   // Check if file already exists
   if (file_exists($target_file)) {
       echo "Sorry, file already exists.";
       $uploadOk = 0;
   }
   // Check file size
   if ($_FILES["specialization"]["size"] > 500000) {
       echo "Sorry, your file is too large.";
       $uploadOk = 0;
   }
   // Allow certain file formats
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   if($imageFileType != "pdf" && $imageFileType != "doc" && $imageFileType != "docx") {
       echo "Sorry, only PDF and DOC files are allowed.";
       $uploadOk = 0;
   }
   // ...
   ?> 

</body>
</html>