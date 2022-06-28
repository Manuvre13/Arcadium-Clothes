<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
 
        
        $conn = mysqli_connect("localhost", "root", "", "clothes");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $Firstname=$_REQUEST["firstname"];
        $Middlename=$_REQUEST["middlename"];
        $Surname=$_REQUEST["surname"];
        $Gender=$_REQUEST["gender"];
        $Email=$_REQUEST["email"];
        $Telephone_No=$_REQUEST["tel"];
        $Password=$_REQUEST["psw"];

        // Performing insert query execution
        // here our table name is registration
        $sql = "INSERT INTO registration VALUES ('$Firstname',
            '$Middlename','$Surname','$Gender','$Email','$Telephone_No','$Password')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$Firstname\n$Middlename\n "
                . "$Surname\n$Gender\n$Email\n$Telephone_No\n$Password");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>