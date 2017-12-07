<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Hackstreet Hardware</title>
    <link rel="shortcut icon" href="img/favicon.ico"> 
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Faster+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/logo.jpg.png" type="image/x-icon">
  </head>
 
      <div id="header">
        <header>
          <a href="index.php" id="logo">
            <h1>Hackstreet Hardware</h1>
            <h2>For all of your hardware needs</h2>
          </a>
          
</div>
           <div class="topnav" id="mytopnav">
              <nav>
                <ul>
                  <li>
                    <a href="index.php" class="selected">Home</a>
                  </li>
                  <li>
                    <a href="inventory.php">Inventory</a>
                  </li>
                  <li>
                    <a href="customerT.php">Customer Tracking</a>
                  </li>
                  <li>
                    <a href="employees.php">Employees</a>
                  </li>
                </ul>
              </nav>
          </div>
        </header>
      </div>
<body>
  
 <body>  
<?php
include("database.php");
if (isset($_POST["sub"])) {
  $first = testInput($_POST["firstname"]);
  $last = testInput($_POST["lastname"]);
  $age = testInput($_POST["age"]);
  $phone = testInput($_POST["phonenumber"]);
  $email = testInput($_POST["email"]);
  $address = testInput($_POST["address"]);
  $gender = $_POST["Gender"];
  $message = "";
  if (!empty($first) && !empty($last) && !empty($age) && !empty($phone) && !empty($email) && !empty($gender)) {
    $createQuery = "INSERT INTO `c9`.`customer` ( `firstname`, `lastname`, `age`, `gender`, `phonenumber`, `address`, `email` ) VALUES (NULL, '$first', '$last', '$age', '$gender', '$phone', '$address' '$email');";
    $db->query($createQuery);
  } else {
    $message = "You have not fully filled in the form.";
  }
}
?>

<h8>Add New Employee Profile</h8>
<div>
  <form method="post" action="">
    <span class="error"> required field *</span>
    <br></br>
    
    <label for="fname">First Name </label>
    <span class="error">* </span>
    <input type="text" id="fname" name="firstname" placeholder="First name..">
    
    

    <label for="lname">Last Name </label>
    <span class="error">* </span>
    <input type="text" id="lname" name="lastname" placeholder="Last name..">
    
    
    <label for="age">Age </label>
    <span class="error">* </span>
    <input type="text" id="age" name="age" placeholder="Age">
    
    <label for="phones">Phone Number </label>
    <span class="error">* </span>
    <input type="text" id="lname" name="phonenumber" placeholder="Phone number..">
    
    <label for="address">Address </label>
    <span class="error">* </span>
    <input type="text" id="lname" name="address" placeholder="Address..">
    
    <label for="email">Email </label>
    <span class="error">* </span>
    <input type="text" id="lname" name="email" placeholder="Email..">

    <label for="Gender">Gender </label>
    <span class="error">* </span>
    <select id="gender" name="Gender" >
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>
  
    <input name="sub" type="submit" value="Add Profile">
    <?php echo $message; ?>
  </form>
</div>


</body>
  
  
</body>
      
      
 <div id="footer">
        <footer>
          <div class="footer_img">
            
            
            
          </div>
          <div id="footer_nav">
             
            
            
           <ul>
                  <li>
                    <a href="index.php" class="selected">Home</a>
                  </li>
                  <li>
                    <a href="inventory.php">Inventory</a>
                  </li>
                  <li>
                    <a href="customerT.php">Customer Tracking</a>
                  </li>
                  <li>
                    <a href="employees.php">Employees</a>
                  </li>
                  </ul>
                  <p>Phone: (731)283-1846 | 1847 Gardener Road | Exampleville, TN, 38305 | Copyright © 2017 Hackstreet Hardware</p>

          </div>
          
        </footer>
      </div>
    </div>
  

</html>