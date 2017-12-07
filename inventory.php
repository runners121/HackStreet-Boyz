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
  <div id="body">    
    <div id="inventory">
        <table class="Itable">
            <tr>
                <th>Product</th>
                <th>Item ID#</th>
                <th>Price</th>
                <th>Item Status</th>
                <th>Amount in Stock</th>
                <th>Seasonal</th>
                <th>Manufacturer</th>
            </tr>
            <?php
            include("database.php");
            
            $query = $db->query("SELECT * FROM inventory");
            while($row = mysqli_fetch_assoc($query)) {
              echo "<tr><td>" . $row["COL 1"] . "</td><td>"
              . $row["COL 2"] . "</td><td>"
              . $row["COL 3"] . "</td><td>"
              . $row["COL 4"] . "</td><td>"
              . $row["COL 5"] . "</td><td>"
              . $row["COL 6"] . "</td><td>"
              . $row["COL 7"] . "</td></tr>"; 
            }
            ?>
        </table>
        <h8>Add New Item</h8>
        
        
        <?php
        if (isset($_POST["sub"])) {
          $product = testInput($_POST["product"]);
          $id = testInput($_POST["id"]);
          $price = testInput($_POST["price"]);
          $status = testInput($_POST["status"]);
          $stock = testInput($_POST["stock"]);
          $seasonal = testInput($_POST["seasonal"]);
          $manufacturer = testInput($_POST["manufacturer"]);
          
          if (!empty($product) && !empty($id) && !empty($price) && !empty($status) && !empty($stock) && !empty($seasonal) && !empty($manufacturer)) {
            $query = $db->query("INSERT INTO `c9`.`inventory`(`COL 1`, `COL 2`, `COL 3`, `COL 4`, `COL 5`, `COL 6`, `COL 7`) VALUES (\"$product\", \"$id\", \"$price\", \"$status\", \"$stock\", \"$seasonal\", \"$manufacturer\");");
          } else {
            $message = "You have not fully filled in the form.";
          }
          header("Refresh:0");
        }
        ?>
<div>
  <form method="post" action="">
    <span class="error"> required field *</span>
    <br></br>
    
    <label for="product">Product </label>
    <span class="error">* </span>
    <input type="text" id="fname" name="product" placeholder="">
    
    

    <label for="item">Item ID </label>
    <span class="error">* </span>
    <input type="text" id="lname" name="id" placeholder="">
    
    
    <label for="price">Price </label>
    <span class="error">* </span>
    <input type="text" id="age" name="price" placeholder="">
    
    <label for="status">Item Status </label>
    <span class="error">* </span>
    <input type="text" id="lname" name="status" placeholder="">
    
    <label for="stock">Amount in Stock </label>
    <span class="error">* </span>
    <input type="text" id="lname" name="stock" placeholder="">
    
    <label for="seasonal">Seasonal </label>
    <span class="error">* </span>
    <input type="text" id="lname" name="seasonal" placeholder="">

    <label for="manufacturer">Manufacturer </label>
    <span class="error">* </span>
  <input type="text" id="lname" name="manufacturer" placeholder="">
    </select>
  
    <input name="sub" type="submit" value="Add Profile">
    <?php echo $message; ?>
  </form>
</div>
    </div>  
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
