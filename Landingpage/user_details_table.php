<?php
try {  
 
$exists = mysqli_query($conn,"SELECT * FROM  User_details WHERE 1");

if($exists != FALSE)
{
 $flag="table exits";
}
}   
      //catch block  
catch (Exception $e) {  
  //code to print exception caught in the block 
  
  $sql = "CREATE TABLE User_details (
    user_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(30) NOT NULL,dob DATE NOT NULL ,
    email VARCHAR(30) NOT NULL, password2 VARCHAR(256) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
      
      
      if (mysqli_query($conn, $sql)) 
      {
        $aps = md5("Admin@root001.");
        $sql1 = "INSERT INTO User_details (user_name,dob, password2, email ) VALUES ('Admin','00-00-0000','$aps','admin@gmail.com')";
         mysqli_query($conn,$sql1);
    } else {
      echo "Error creating table: " . mysqli_error($conn);
    }
  


} 


?>