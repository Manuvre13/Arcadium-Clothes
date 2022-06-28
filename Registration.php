<head>
<title>Registration</title>
<link rel="stylesheet" href="lore.css">
</head>
<body>
<form action=Insert.php method="post">
    <div class="container">
    <h1>Registration</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="firstname"><b>Firstname</b></label>
    <input type="text" placeholder="Enter Firstname" name="firstname" id="firstname" required> 
    <br> <br>

    <label for="middlename"><b>Middlename</b></label>
    <input type="text" placeholder="Enter Middlename" name="middlename" id="middlename" required> 
    <br> <br>

    <label for="surname"><b>Surname</b></label>
    <input type="text" placeholder="Enter Surname" name="surname" id="surname" required>
    <br> <br>

    <label for="gender">Gender:</label>
    <select name="gender" id="gender">
    <option value="male">Male</option>
    <option value="female">Female</option>
   </select>
   <br> <br>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>
    <br> <br>

    <label for="tel"><b>Telephone Number</b></label>
    <input type="text" placeholder="Enter Tel" name="tel" id="tel" required> 
    <br> <br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
            <br> <br>

    <label for="psw"><b>Confirm Password</b></label>
    <input type="password" placeholder="Re-enter Password" name="con_psw" id="con_psw" required>
            <br> <br>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn">Register</button>


</div>


<div class="container signin">
    <p>Already have an account? <a href="Login.html">Sign in</a>.</p>
  </div>
</form>


</body>


