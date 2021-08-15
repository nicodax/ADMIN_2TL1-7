<!DOCTYPE HTML>  
<html>
    <head>
        <style>
            .error {color: #FF0000;}
        </style>
    </head>
    <body>  
        <?php
            //These are the defined authentication environment in the db service

            // The MySQL service named in the docker-compose.yml.
            $host = 'db';
            // Database use name
            $user = 'admin';
            // Database user password
            $pass = 'admin';
            // Database name
            $dbname = 'b2b';

            // check the MySQL connection status
            $mysqli = new mysqli($host, $user, $pass, $dbname);
            if ($mysqli->connect_error) {
                die("Connection failed: " . $mysqli->connect_error);
            } else {
                printf("<script>console.log('Connected to MySQL server successfully!')</script>");
            }

            // Create products table
            $sql = "CREATE TABLE products( ".
                "product_name VARCHAR(100) NOT NULL, ".
                "product_qtity INT(2) NOT NULL, ".
                "product_price INT(3) NOT NULL, ".
                "PRIMARY KEY ( product_name )); ";
            if ($mysqli->query($sql)) {
                printf("<script>console.log('Table tutorials_tbl created successfully.')</script>");
            }
            if ($mysqli->errno) {
                printf("<script>console.log(\"Could not create table: %s\")</script>", $mysqli->error);
            }

            // Insert products inside products table
            $sql = "INSERT INTO products ".
                "(product_name, product_qtity, product_price) "."VALUES ".
                "('JEUX EN BOIS', 85, 17),".
                "('JEUX EN PLASTIQUE', 72, 6),".
                "('JEUX EN FER', 65, 25),".
                "('JEUX EN CAOUTCHOUC', 99, 11)";
            
            if ($mysqli->query($sql)) {
                printf("<script>console.log(\"Record inserted successfully\")</script>");
            }
            if ($mysqli->errno) {
                printf("<script>console.log(\"Could not insert record into table: %s\")</script>", $mysqli->error);
            }

            // define variables and set to empty values
            $nameErr = $priceErr = $qtityErr = '';
            $name = $price = $qtity = '';

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["name"])) {
                    $nameErr = "Name is required";
                } else {
                    $name = strtoupper(test_input($_POST["name"]));
                    // check if name only contains letters and whitespace
                    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                        $nameErr = "Only letters and white space allowed";
                    }
                }
                
                if (empty($_POST["price"])) {
                    $priceErr = "Price is required";
                } else {
                    $price = $_POST["price"];
                }
                    
                if (empty($_POST["qtity"])) {
                    $qtityErr = "Quantity is required";
                } else {
                    $qtity = $_POST["qtity"];
                }
            }

            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            // Insert products inside products table
            if ($name && $price && $qtity && $nameErr === '') {
                $sql = "INSERT INTO products ".
                "(product_name, product_qtity, product_price) "."VALUES ".
                "('$name', '$qtity', '$price')";
            
                if ($mysqli->query($sql)) {
                    printf("<script>console.log(\"Record inserted successfully\")</script>");
                }
                if ($mysqli->errno) {
                    printf("<script>console.log(\"Could not insert record into table: %s\")</script>", $mysqli->error);
                } else {
                    $name = $price = $qtity = '';
                }
            }
        ?>

        <h2>Ajouter un jeu</h2>
        <p><span class="error">* required field</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
            Nom : <input type="text" name="name" value="<?php echo $name;?>">
            <span class="error">* <?php echo $nameErr;?></span>
            <br><br>
            Prix : <input type="number" name="price" value="<?php echo $price;?>" min="1" max="999">
            <span class="error">* <?php echo $priceErr;?></span>
            <br><br>
            Quantité : <input type="number" name="qtity" value="<?php echo $qtity;?>" min="1" max="99">
            <span class="error">* <?php echo $qtityErr;?></span>
            <br>
            <input type="submit" name="submit" value="Submit">  
        </form>

        <br>
        <br>
        <br>

        <?php
            

            $sql = "SELECT * FROM products";
                
            $result = $mysqli->query($sql);
            
            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                printf("Nom du produit: %s, prix: %s, en stock: %s<br />",
                        $row["product_name"], 
                        $row["product_price"], 
                        $row["product_qtity"]);
            }
            } else {
                printf('No record found.<br />');
            }
            mysqli_free_result($result);
        ?>
    </body>
</html>