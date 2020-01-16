<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The HTML5 Herald</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="css/styles.css?v=1.0">

</head>

<body>
  <script src="js/scripts.js">
  	
  	var db = openDatabase('/db/assistantapp.db')

  </script>

  <?php
$servername = "localhost";
$username = "root";
$password = "Cloudn0033";
$dbname = "lifeboxes";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, category FROM lifeboxes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["name"]. " " . $row["category"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
  
  This website is a test.</br>
  Success.</br>
  That is what we aim for.</br>
  <a href="/business"> Business </a></br>
  <a href="/creatives"> Creatives </a></br>
</body>
</html>
