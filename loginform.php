<!--<?php include('connect1.php')?>-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loginform</title>
</head>
<style>

form {
  font-family: "Montserrat";
  background-color: #262626;
}

span{
    color: teal;
    text-decoration: none;
}

h1{
  color: white;
  text-decoration: none;
}


input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.container {
  padding: 16px;
}
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}
</style>

<body>
 

<form action="connect1.php" method="post">
    <div class="brand" style="text-align: center; padding-top: 20px; text-decoration: none;">
        <a href="index.html"><h1><span>Mangalore</span> Central<span> Jail</span></h1></a>
    </div>
  
    <div class="container" style="color: white;">
      <label for="Email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="Email" required>
  
      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
  
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
  
    <div class="container" style="background-color: #262626;">
      <button type="button" class="cancelbtn">Cancel</button>
      <span class="signup">Create New<a href="regform.php"> Account</a></span>
    </div>
  </form>
</body>
</html>