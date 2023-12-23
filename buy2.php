<?php
// Connect to MySQL database
$con = mysqli_connect('localhost','root','');

// Check connection
if($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
mysqli_select_db($con, 'continue');

// Fetch data from table
$query = "SELECT * FROM user";
$result = $con->query($query);

?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Product Details</title>
        <link rel="stylesheet" type="text/css" href="s.css">
    </head>
    <body>
    <style>
        .contain {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: cadetblue;
            border-radius: 5px;

        }

        .data {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .data label {
            font-weight: bold;
        }

        .data span {
            margin-left: 10px;
        }
        .contai {
            max-width: 400px;
            margin: 50px auto;
        }
        .btn-custom {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
            border-radius: 30px;
            padding: 12px 20px;
            margin-top: 10px;
            transition: background-color 0.3s ease-in-out;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
    </style>
    <header class="d1">
        <h2>JUSTMUSIC</h2>
    </header>
    <div class="container"><div class="overlay"><div class="content">
                <h1>PRODUCT DETAILS</h1>
                <p>Product Name: GAMING HEADSET BIG EARPHONES</p>
                <p>Product Price: NPR 2,592.26</p>
                <div class="contai">
                <button type="button" class="btn btn-custom">BUY NOW</button>
                </div>
                <div class="contain" >
                    <h3>Customer Review</h3>
                    <?php
                    // Loop through the result and display data in custom format
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='data'>";
                        echo "<label>Name:</label><span>".$row["name"]."</span>";
                        echo "<label>Rating:</label><span>".$row["rating"]."</span>";
                        echo "<label>Comment:</label><span>".$row["comment"]."</span>";
                        echo "</div>";
                    }
                    ?>
                </div>
    </body>
    </html>

<?php
// Close database connection
$con->close();
?>