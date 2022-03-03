<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Lecturer</title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<!--        <link rel="stylesheet" type="text/css" href="login.css">-->
        <style>
            #fm{
                margin-left: 150px;
                margin-right: 150px;
                border: solid;
                font-size: 20px;
            }
         h2
            {
/*                top: 100px;*/
                padding-top: 30px;
                margin-left: 50px;
                margin-right: 50px;
                font-size: 50px;
                padding-bottom: 30px;
                background-color: darkcyan;
                padding-left: 60;
            }
            #sub{
                position: absolute;
                left: 80%;
                padding: 10px 20px;
                font-size: 25px;
            }
            #fm{
                padding: 50px;
            }
            body{
                font-family: sans-serif;
                font-size: 30px;
            }
        </style>
         </head>
    <body>
<!--         <div class="wrapper fadeInDown">-->
            <div id="formContent">
                <!-- Tabs Titles -->

                <!-- Icon -->
<!--
                <div class="fadeIn first">
                    <img src="13.jpg" id="icon" alt="User Icon" />
                </div>
-->
        <h2>Add Lecturer</h2><br>
       <form class="needs-validation" novalidate id="fm">
         
    <div class="form-group row">
      <label for="validationCustom03"  class="col-sm-2 col-form-label">EPF No:</label>
        <div class="col-sm-10">
      <input type="text" class="form-control" id="validationCustom03" required>
    </div>
    </div>
           <div class="form-group row">
      <label for="validationCustom03"  class="col-sm-2 col-form-label">Full Name</label>
        <div class="col-sm-10">
      <input type="text" class="form-control" id="validationCustom03" required>
    </div>
    </div>

    <div class="form-group row">
      <label for="validationCustom03"  class="col-sm-2 col-form-label">City</label>
        <div class="col-sm-10">
      <input type="text" class="form-control" id="validationCustom03" required>
    </div>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
           
           <div class="form-group row">
      <label for="validationCustom03"  class="col-sm-2 col-form-label">Designation</label>
        <div class="col-sm-10">
      <input type="text" class="form-control" id="validationCustom03" required>
    </div>
    </div>
          
<!--
                <div class="form-group row">
      <label for="validationCustom03"  class="col-md-3 mb-3">Department</label>
        <select class="custom-select" id="validationCustom04" required>
        <option selected disabled value="">Choose...</option>
        <option>Computer Engineering</option>
        <option>Software Engineering</option>
        <option>Computer Science</option>
      </select>
    </div>
-->
    
<!--           <div class="col-md-9 mb-3">--><p>
      <label for="validationCustom04">Department</label>
      <select class="custom-select" id="validationCustom04" required>
        <option selected disabled value="">Choose...</option>
        <option>Computer Engineering</option>
        <option>Software Engineering</option>
        <option>Computer Science</option>
      </select>
                </p>
<!--    </div>-->
          
          <div class="form-group row">
      <label for="validationCustom03"  class="col-sm-2 col-form-label">Email Address</label>
        <div class="col-sm-10">
      <input type="text" class="form-control" id="validationCustom03" required>
    </div>
    </div>      
        
            <div class="form-group row">
      <label for="validationCustom03"  class="col-sm-2 col-form-label">Telephone</label>
        <div class="col-sm-10">
      <input type="text" class="form-control" id="validationCustom03" required>
    </div>
    </div>    
           
              <div class="form-group row">
      <label for="validationCustom03"  class="col-sm-2 col-form-label">Home Address</label>
        <div class="col-sm-10">
      <input type="text" class="form-control" id="validationCustom03" required>
    </div>
    </div>
           
    
   
<!--  </div>-->
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  
</form>
<button type="button" class="btn btn-info" id="sub">Submit form</button>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script> 
        
     

            </div>
<!--        </div>   -->
            </body>



</html>