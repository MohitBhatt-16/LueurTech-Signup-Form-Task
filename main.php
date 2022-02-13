<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<style>
html {
  height: 100%;
}
body {
  margin:0;
  padding:0;
  font-family: sans-serif;
  background: linear-gradient(#2b0ae3, #8d06f3);
}
.error {
  color: rgba(253, 1, 1, 0.87);
  font-size: 20px;
}

.signup-box {
  position: absolute;
  top: 25%;
  left: 25%;
  width: 50%;
  padding: 40px;
  background: rgb(38 35 35 / 50%);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgb(93 187 161 / 60%);
  border-radius: 25px;
}

.signup-box h2 {
  font-size: 50px;
  margin: 0 0 30px;
  padding: 0;
  color: #32ef5b;
  text-align: center;
}

.signup-box .input-box {
  position: relative;
}

.signup-box .input-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.signup-box .input-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}
/* label of input box will shift to some up and color will also change  */
.signup-box .input-box input:focus ~ label,
.signup-box .input-box input:valid ~ label {
  top: -27px;
  left: 0;
  color: #32ef5b;
  font-size: 20px;
}

.signup-box form a {
  position: relative;
  display: inline-block;
  padding: 2px 2px;
  width:22%;
  height: 40px;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
}
.signup-box form a button{
  position: relative;
  display: inline-block;
  letter-spacing: 4px;
  width: 100%;
  height: 100%;
  background-color: rgb(38 35 35 / 50%);
  color: #32ef5b;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
}
/* Button colour change on hover  */
.signup-box a:hover {
  background: #03e9f4;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #03e9f4,
              0 0 25px #030303,
              0 0 50px #03e9f4,
              0 0 100px #03e9f4;
}

.signup-box a span {
  position: absolute;
  display: block;
}

.signup-box a span:nth-child(1) {
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #32ef5b);
  animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }
  50%,100% {
    left: 100%;
  }
}

.signup-box a span:nth-child(2) {
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(180deg, transparent, #32ef5b);
  animation: btn-anim2 1s linear infinite;
  animation-delay: .25s
}

@keyframes btn-anim2 {
  0% {
    top: -100%;
  }
  50%,100% {
    top: 100%;
  }
}

.signup-box a span:nth-child(3) {
  bottom: 0;
  right: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(270deg, transparent, #32ef5b);
  animation: btn-anim3 1s linear infinite;
  animation-delay: .5s
}

@keyframes btn-anim3 {
  0% {
    right: -100%;
  }
  50%,100% {
    right: 100%;
  }
}

.signup-box a span:nth-child(4) {
  bottom: -100%;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(360deg, transparent, #32ef5b);
  animation: btn-anim4 1s linear infinite;
  animation-delay: .75s
}

@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
}
.type-out {
  overflow: hidden;
  white-space: nowrap;
  font-size: 1.6rem;
  margin-top: 2%;
  margin-left: auto;
  margin-right: auto;
  width: 0;
  animation: animated-text 4s steps(59, end) 1s 1 normal both;
}
.infoheading h1 {
  text-align: center;
  font-size: 5.5rem;
  background: #eef9ef;
  color: #4209ef;
  font-family: 'Pushster', cursive;
  -webkit-background-clip: text;
  -webkit-text-stroke: 8px transparent;
  background-clip: text;
}

@keyframes animated-text {
  from {
      width: 0;
  }

  to {
      width: 82%;
  }
}
@media screen and (max-width:1333px) {
  .infoheading h1{
    font-size : 4rem;
  }
}
@media screen and (max-width:972px) {
  .infoheading h1{
    font-size : 3rem;
  }
  .type-out {
    margin-top:10%
  }
  .signup-box {
    top: 25%;
    left: 15%;
    width: 71%;
}
}
@media screen and (max-width:744px) {
  .infoheading h1{
    font-size : 2rem;
  }
  .type-out {
    margin-top:12%
  }
  .signup-box {
    top: 20%;
    left: 5%;
    width: 90%;
  }
}
</style>
<body>
  <?php 
        $usernameErr=$passwordErr=$confirmpasswordErr="" ; 
        $username=$password=$confirmpassword="" ; 
        if($_SERVER["REQUEST_METHOD"]=="POST" ) 
        { 
            if (empty($_POST["username"])) 
            { 
                $usernameErr="UserName is required" ; 
            } 
            else 
            {
                $username=$_POST["username"]; 
            } 
            if (empty($_POST["password"])) 
            { 
                $passwordErr="Password is required" ; 
            } 
            else 
            {
                $password=$_POST["password"]; 
            } 
            if (empty($_POST["confirmpassword"])) 
            { 
                $confirmpasswordErr="Confirm Your Password Please" ; 
            } 
            else 
            {
                $confirmpassword=$_POST["confirmpassword"]; 
            }      
            if(strcmp($password,$confirmpassword) !=0)
            {
              $confirmpasswordErr="Password didn't match !";
            }
            if(strlen($password)<5 || strlen($confirmpassword)<5)
            {
              $passwordErr=$confirmpasswordErr="Password must be 5 characters long";
            }
        }
    ?>
    <div class="infoheading">
            <h1 class="type-out">Fill The Form To Sign Up</h1>
        </div>
    <div class="signup-box">
        <h2>Sign up</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
          <div class="input-box">
            <input type="text" name="username" >
            <label>Username 
            <span class="error">*
              <?php echo $usernameErr;?>
            </span>
            </label>
            
          </div>
          <div class="input-box">
            <input type="password" name="password" >
            <label>Password
            <span class="error">*
              <?php echo $passwordErr;?>
            </span>
            </label>
            
          </div>
          <div class="input-box">
            <input type="password" name="confirmpassword" >
            
            <label>Confirm Password
            <span class="error">*
              <?php echo $confirmpasswordErr;?>
            </span>
            </label>
          </div>
          <a href="#">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <!-- Submit -->
            <button type="submit" name="submit">Submit</button>
          </a>
        </form>
      </div>
</body>
<?php
if($usernameErr=="" && $passwordErr=="" && $confirmpasswordErr=="" )
{
    if( isset($_POST) && isset( $_POST['submit'] ) )
    {
        echo '<script>alert("Form Submitted successfully");</script>';
    }
}
?>
</html>