<html>
    <head>
        <meta charset="UTF-8">
        <title>Leave Form</title>
        
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> 
        <link href="css/login.css" rel="stylesheet" type="text/css"/>
        <style>
            th, td {
                padding: 15px;
            }
            #tb1{
                margin-left: auto;
                margin-right: auto;
                border: solid;
                font-family: sans-serif;
                font-size: 20px;
            }
            

            #can,#app{
            font-size: 25px;
            }
                /*position: absolute;
                left: 80%;
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
            }
            #app{
                position: absolute;
                left: 85%;
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
            }
*/
            .confirm
            {
                position: absolute;
                left: 80%;
                padding: 10px 20px;
                font-size: 25px;
               /* border: 1px solid rgba(47, 85, 69, 0.5);*/
            }
                .confirm:hover{
/*            background-color:antiquewhite;*/
                transition: .4s;
                color:#30afaa;      
            }
            h2
            {
/*                top: 100px;*/
                padding-top: 30px;
                margin-left: 50px;
                margin-right: 50px;
                font-family: sans-serif;
                font-size: 50px;
                padding-bottom: 30px;
                background-color: darkcyan;
                padding-left: 60;
            }
            #epf{
             margin-left: 170px;   
            }
            body{
                font-family: sans-serif;
                font-size: 30px;
            }
            #epft{
               background-color:#ccc8c8;
            }
        </style>
    </head>
    
    <body>
        <h2>Leave Form</h2><br>
        <label for="epf" id="epf">EPF No:</label>
        <input type="text" id="epft"><br><br>
        <div class="wrapper fadeInDown">
<div id="formContent">
      <table border = "1" style="width:80%" id="tb1">
         
         <tr>
            <td colspan = "4" rowspan="2" style="width:50%" >Name: <input type="text" style="width:100%"></td>
            <td rowspan="2" style="width:35%" >Date of first appoinment:</td>
            <th style="width:05%" >Y</th>
            <th style="width:05%" >M</th>
            <th style="width:05%" >D</th>
         </tr>
          
          <tr>
            <td style="width:05%" ><input type="text" style="width:100%"> </td>
            <td style="width:05%" > <input type="text" style="width:100%"></td>
            <td style="width:05%" > <input type="text" style="width:100%"></td>
         </tr>
          
          <tr>
            <td colspan = "4" >Designation: <input type="text" style="width:100%"></td>
            <td style="width:35%" >Date of commencing leave:</td>
            <td style="width:05%" > <input type="text" style="width:100%"></td>
            <td style="width:05%" > <input type="text" style="width:100%"></td>
            <td style="width:05%" > <input type="text" style="width:100%"></td>
         </tr>
          
          <tr>
            <td colspan = "4" >Ministry/Dept.: <input type="text" style="width:100%"></td>
            <td style="width:35%" >Date of returning duties:</td>
            <td style="width:05%" > <input type="text" style="width:100%"></td>
            <td style="width:05%" > <input type="text" style="width:100%"></td>
            <td style="width:05%" > <input type="text" style="width:100%"></td>
         </tr>
          
          <tr>
            <td rowspan = "2" style="width:35%" >Number of days leave applied for:</td>
            <th style="width:05%" >C</th>
            <th style="width:05%" >V</th>
            <th style="width:05%" >O</th>
            <td colspan="4" rowspan="2" >Reasons for leave: <input type="text" style="width:100%"></td>
         </tr>
          
        <tr>
            <td style="width:05%" > <input type="text" style="width:100%"></td>
            <td style="width:05%" ><input type="text" style="width:100%"> </td>
            <td style="width:05%" > <input type="text" style="width:100%"></td>       
         </tr>
          
         <tr>
            <td style="width:35%" >Leave taken in current year:</td>
            <td style="width:05%" > <input type="text" style="width:100%"></td>
            <td style="width:05%" > <input type="text" style="width:100%"></td>
            <td style="width:05%" > <input type="text" style="width:100%"></td>
            <td rowspan="2" colspan="4" >Signature of applicant: <input type="text" style="width:100%"></td> 
         </tr>
          
         <tr>
            <td colspan="4">Date: <input type="date" style="width:100%"></td>            
         </tr>
          
        <tr>
            <td colspan="4">Name of the acting officer:  <input type="text" style="width:100%"></td>
            <td colspan="4">Address when on leave:  <input type="text" style="width:100%"></td>
        </tr>
      </table>
    
    <div class="confirm">
<!--
    <input type="button" value="Cancel" id="can">
    <input type="button" value="Apply" id="app">
-->
    <button type="button" class="btn btn-info" id="can">Cancel</button>
    <button type="button" class="btn btn-info" id="app">Apply</button>
            </div>
        </div>
        </div>
   </body>
    
    
</html>
