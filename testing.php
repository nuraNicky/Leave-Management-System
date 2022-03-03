
<html>
  <head>
    <title>Educational registration form</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: #eee;
      }
      body {
/*      background: url("pic4.jpg") no-repeat center ;*/
      background-size: cover;
          
      }
      h1, h2 {
      text-transform: uppercase;
      font-weight: 400;
      }
      h2 {
      margin: 0 0 0 8px;
      }
      .main-block {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100%;
      padding: 25px;
      background: rgba(0, 0, 0, 0.5); 
      }
      .left-part, form {
      padding: 25px;
      }
      .left-part {
      text-align: center;
      }
      .fa-graduation-cap {
      font-size: 72px;
      }
      form {
      background: rgba(0, 0, 0, 0.7); 
      }
      .title {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      }
      .info {
      display: flex;
      flex-direction: column;
      }
      input, select {
      padding: 5px;
      margin-bottom: 30px;
      background: transparent;
      border: none;
      border-bottom: 1px solid #eee;
      }
      input::placeholder {
      color: #eee;
      }
      option:focus {
      border: none;
      }
      option {
      background: black; 
      border: none;
      }
   
      .btn-item, button {
      padding: 10px 5px;
      margin-top: 20px;
      border-radius: 5px; 
      border: none;
      background: #26a9e0; 
      text-decoration: none;
      font-size: 15px;
      font-weight: 400;
      color: #fff;
      }
      .btn-item {
      display: inline-block;
      margin: 20px 5px 0;
      }
      button {
      width: 100%;
      }
      button:hover, .btn-item:hover {
      background: #85d6de;
      }
      @media (min-width: 568px) {
      html, body {
      height: 100%;
      }
      .main-block {
      flex-direction: row;
      height: calc(100% - 50px);
      }
      .left-part, form {
      flex: 1;
      height: auto;
      }
      }
    </style>
      <script>
       function validateForm(){
        
            //var a=document.forms["myform"]["epf"].value;           
            var a=document.getElementById("EPF").value;
        
            if(a==""){
                alert("EPF Number must be filled out");
                //return false;
            }

            var b=document.getElementById("name").value;
        
            if(b==""){
                alert("Name must be filled out");
//                return false;
            }
            
            var c=document.getElementById("city").value;
            
            if(c==""){
                alert("City must be filled out");
//                return false;
            }            
        
            var d=document.getElementById("designation").value;

            if(d==""){
                alert("Designation must be filled out");
//                return false;
            }            
        
            var e=document.getElementById("department").value;

            if(e==""){
                alert("Department must be filled out");
//                return false;
            }            
        
            var f=document.getElementById("email").value;

            if(f==""){
                alert("Email must be filled out");
//                return false;
            }            
        
            var g=document.getElementById("telephone").value;

            if(g==""){
                alert("telephone Number must be filled out");
//                return false;
            }            
        
            var h=document.getElementById("homeadd").value;

            if(h==""){
                alert("Home Address must be filled out");
//                return false;
            }
            
        }
      </script>

  </head>
  <body>
    <div class="main-block">
      <div class="left-part">
        <i class="fas fa-graduation-cap"></i>
        <h1>Add, Update and Delete</h1>
<!--        <p>W3docs provides free learning materials for programming languages like HTML, CSS, Java Script, PHP etc.</p>-->
<!--
        <div class="btn-group">
          <a class="btn-item" href="https://www.w3docs.com/learn-html.html">Learn HTML</a>
          <a class="btn-item" href="https://www.w3docs.com/quiz/#">Select Quiz</a>
        </div>
-->
      </div>
      <form method="post" action="/">
        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
          <h2>Enter here</h2>
        </div>
        <div class="info">
        <input class="fname" type="text" name="EPF" placeholder="EPF No">
          <input class="fname" type="text" name="name" placeholder="Full name">
        <input type="text" name="city" placeholder="City">
         <input type="text" name="designation" placeholder="Designation">
        <select  id="department" name="department" required>
        <option selected>Department</option>
        <option value="Computer Engineering">Computer Engineering</option>
        <option value="Software Engineering">Software Engineering</option>
        <option value="Computer Science">Computer Science</option>
          </select>
<!--         <input type="text" name="firstDate" placeholder="Date of first Appoinment">-->
            <input type="text" style="width:100%" name="firstDate" placeholder="Date of first Appoinment" onfocus="(this.type='date')">
            
          <input type="text" name="email" placeholder="Email">
          <input type="text" name="mobile" placeholder="Phone number">
            <input type="text" name="address" placeholder="Home Address">
        </div>
       
          
          <div class="confirm">
              
        <table border = 0 width = "100%">
            
            <tr>
            <td>
                <button type="submit" formaction="connectAdd" value="Submit" name="save" class="btn btn-info" id="sub" onclick="ValidateEmail(email),validateForm()" href=testing.php>Submit</button></td>
              <td>
          <button type="submit" formaction="connectAdd" value="Submit" name="save" class="btn btn-info" id="sub" onclick="ValidateEmail(email),validateForm()" >Update</button></td>
              <td>
          <button type="submit" formaction="connectAdd" value="Submit" name="save" class="btn btn-info" id="sub" onclick="ValidateEmail(email),validateForm()">Delete</button>
                </td>
            </tr>
              </table>    
            
          </div>
          
              </form>
    </div>
        </body>
</html>