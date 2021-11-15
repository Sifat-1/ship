<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 10px;
  background-color: black;
}
img{
  max-width: 100%;
    height: auto;
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 60%;
  /* height: 500%;
  width: 95%; */
}
/* Full-width input fields */
 input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
} */

/* Overwrite default styles of hr */
 hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
} 

/* Set a style for the submit button */
.registerbtn {
  background-color: #045daa;
  color: white;
  padding: 16px 20px;
  margin: 11px 542px;
  border: none;
  cursor: pointer;
  width: 18%;
  opacity: 0.9;
  border-radius: 110px;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f100;
  text-align: center;
}
</style>
</head>
<body>

 <form action="login">
  <div class="container">
    <!-- <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr> -->

    <!-- <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required> -->

    <!-- <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required> -->

    <!-- <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required> -->
    <!-- <hr> -->

<picture><img src="/backend/images/sailor.PNG"></picture>
<ul class="navbar-nav navbar-nav-right">
             <li class="nav-item dropdown d-lg-flex d-none">
           
            </li>
</ul>
    <button type="submit" class="registerbtn"> <a class="nav-link" href="{{url('/login')}}"></a>Admin</button>
    <button type="submit" class="registerbtn">Sailor</button>
  </div>
  
  
</form> 

</body>
</html>



<!-- comments -->
    <!-- <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p> -->
    <!-- <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div> -->