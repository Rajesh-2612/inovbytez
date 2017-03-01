<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Inovbytez Registration Form</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
<script src="js/sweetalert.min.js"></script>
    
    <link rel="stylesheet" href="css/normalize.css">   
        <link rel="stylesheet" href="css/style.css">
		
		<script>        
           function phoneno(){          
            $('#m_num').keypress(function(e) {
                var a = [];
                var k = e.which;

                for (i = 48; i < 58; i++)
                    a.push(i);

                if (!(a.indexOf(k)>=0))
                    e.preventDefault();
            });
        }
       </script>
		
		
  </head>
  
  <body>
  
    <div class="form" >
 
    
      
        <div id="signup">   
          <h1>Registration Form</h1>
          <font color="#02EE0D">
          <marquee direction="Left" onmouseover="this.stop();" onmouseout="this.start();">For Invitation Code Contact Vikram Raja (PRO): 8760636511 or Mail us : inovbytez@gmail.com</marquee></font>
          
          <form action="insert.php" method="post" id="form1">
                 		  
						  
		<div class="field-wrap">
            <label>
              Invitation Code<span class="req">*</span>
            </label>
            <input name="i_code" type="text/css"required autocomplete="off"/>
          </div>
						  
						  
		  <div class="field-wrap">
            <label>
              Name<span class="req">*</span>
            </label>
            <input name="name" type="text/css"required autocomplete="off"/>
          </div>
		  
		  		  
		  
		  <div class="field-wrap">
            <label>
              Department Name<span class="req">*</span>
            </label>
            <input name="d_name" type="text/css"required autocomplete="off"/>
          </div>
	
	<div class="field-wrap">
            <label>
              Course<span class="req">*</span>
            </label>
            <input name="course" type="text/css"required autocomplete="off"/>
          </div>
	
	<div class="field-wrap">
            <label>
              Year<span class="req">*</span>
            </label>
            <input name="year" type="text/css"required autocomplete="off"/>
          </div>
		  
		  <div class="field-wrap">
            <label>
              Institution Name<span class="req">*</span>
            </label>
            <input name="in_name" type="text/css"required autocomplete="off"/>
          </div>
		  
		  <div class="field-wrap">
            <label>
              City Name<span class="req">*</span>
            </label>
            <input name="city_name" type="text/css"required autocomplete="off"/>
          </div>
		  
	<div class="field-wrap">
	<label>
              Select event 1<span class="req" class="selLabel">*</span>
            </label>
            </div>
            <br></br>
            <div><center>
	<select name="cd_dropdown" type="text/css" id="wgtmsr">
	
	<option value="None">None</option>
  <option value="Chalk Talk">Chalk Talk</option>
  <option value="Code Gush">Code Gush</option>
  <option value="Neuromaze">Neuromaze</option>
  <option value="Ad-Hawk">Ad-Hawk</option>
  <option value="Reckless">Reckless</option>
  <option value="Crack ode">Crack ode</option>
  <option value="Cyber Sketch">Cyber Sketch</option>
  <option value="Ace Hunt">Ace Hunt</option>
  <option value="Aperture">Aperture</option>
  
	</select></center>
	
	</div>
	<div class="field-wrap" background: #34495e>
	<label>
              Select event 2<span> (Optional)</span>
            </label>
            </div>
            <div><center>
	<select name="cd_dropdown1" type="text/css" id="wgtmsr">
	
	<option value="None">None</option>
  <option value="Chalk Talk">Chalk Talk</option>
  <option value="Code Gush">Code Gush</option>
  <option value="Neuromaze">Neuromaze</option>
  <option value="Ad-Hawk">Ad-Hawk</option>
  <option value="Reckless">Reckless</option>
  <option value="Crack ode">Crack ode</option>
  <option value="Cyber Sketch">Cyber Sketch</option>
  <option value="Ace Hunt">Ace Hunt</option>
  <option value="Aperture">Aperture</option>
  
	</select>
	</center>
	
	</div>
	<br></br>
	
	<div class="field-wrap">
            <label>
              E-mail<span class="req">*</span>
            </label>
            <input name="email" type="email"required autocomplete="off"/>
          </div>
		  <div class="field-wrap">
		  <label>
              Mobile Number<span class="req">*</span>
            </label>
            <input name="m_num" id="m_num" type="text" onkeypress="phoneno()" maxlength="10" required autocomplete="off"/>
          </div>


		  
		<div >
          <button type="submit" class="button button-block"/>Register</button></li>
         
          </form>
        </div>
      
</div> <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>