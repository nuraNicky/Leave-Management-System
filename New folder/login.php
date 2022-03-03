<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> 
        <link rel="stylesheet" type="text/css" href="login.css">
        <script src="bostra p_res/jquery.min.js" type="text/javascript"></script>
        <link href="bostrap_res/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bostrap_res/bootstrap.bundle.min.js" type="text/javascript"></script>
        <link href="bostrap_res/fontawesome.css" rel="stylesheet" type="text/css"/>
        <link href="bostrap_res/w3css.css" rel="stylesheet" type="text/css"/>

        <link href="css/login.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="wrapper fadeInDown">
            <div id="formContent">
                <!-- Tabs Titles -->

                <!-- Icon -->
                <div class="fadeIn first">
                    <img src="pic1.png" id="icon" alt="User Icon" />
                </div>

                <!-- Login Form -->
         <!--       <form>
                    <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
                    <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
                    <input type="button" class="fadeIn fourth" onclick="loginCheck();" value="Log In">

                </form>
                -->
                <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
<!--    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

                <div id="formFooter">
                    <p>Don't have an account? <a class="underlineHover" href="#">Sign up</a>.</p>
                </div>

            </div>
        </div>
    </body>



</html>
<script type="text/javascript">

    function loginCheck() {

        var uname = document.getElementById('login').value;
        var pw = document.getElementById('password').value;


        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                
//                    console.log(this.responseText);
                if (this.responseText == "ok") {

                    window.location.href = "dashboard.php";

                }else{
                    
                    alert("Username Or Password Incorrect");
                    
                }

            }
        };
        xhttp.open("GET", "php/login.php?name=" + uname + "&pword=" + pw, true);
        xhttp.send();

    }

</script>
