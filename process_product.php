<?php
print_r($_FILES['product_image']);

echo "<br.<br>";
echo "Current Location of my file"."<br>";
$temp_location= $_FILES['product_image']['tmp_name'];
$file_path= "assets";

move_uploaded_file(, destination)

/*Ways of storing images/files to the database:
1. Store that actual file/image - BLOB
2. Stoe the path to the file/image (common Way)*/


