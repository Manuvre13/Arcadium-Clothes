<!DOCTYPE html>
    <html>
    <head>
        <title>View users</title>
        <link rel="stylesheet" href="Checkusers.css">
    </head>
    <body>
        <table class="table">
            <thead>
                <th>firstname</th>
                <th>middlename</th>
                <th>surname</th>
                <th>gender</th>
                 <th>email</th>
                <th>tel</th>
                 <th>psw</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                require_once("users_select.php");
                foreach($test as $key=> $value){
             ?>     
              <tr>
                  <td><?php echo $value["firstname"]?></td>
                  <td><?php echo $value["middlename"]?></td>
                    <td><?php echo $value["surname"]?></td>
                    <td><?php echo $value["gender"]?></td>
                  <td><?php echo $value["email"]?></td>
                    <td><?php echo $value["tel"]?></td>
                    <td><?php echo $value["psw"]?></td>
                  <td><a href=usersdb.php?edit="<?php echo $value["firstname"]?>">View</a></td>
                  <td><p class="button"><a href="C:\xampp\htdocs\Ecommerce_Clothes\Registration.php"><input type="submit"value="EDIT"></a></p></button>/
              </tr>
              <?php
              }
              ?>
            </tbody>
        </table>
    </body>
</html>