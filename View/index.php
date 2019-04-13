<?php include'header.php';?>

  
    <div class="container">    
	<div id="main-row" class="row">
		<div id="info" class="col-md-4">
			<h3 id="info-title">
				Join our Website
			</h3>
			<p id="info-para">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui. Sed iaculis posuere diam ut cursus. Morbi commodo sodales nisi id.
			</p>
		</div>
        

        
<div class="col-md-8">
    <form>           
  <div class="form-row">
      <div class="col-6">
    <label for="FirstName" class="col-form-label">First Name*</label> 
      <input id="FirstName" name="FirstName" placeholder="First Name" type="text" class="form-control" required="required">
    </div>
     <div class="col-6">
    <label for="InterestedIn" class="col-form-label">Interested In*</label> 
      <select id="InterestedIn" name="InterestedIn" class="form-control" required="required">
        <option>Wed Design</option>
        <option>Logo</option>
        <option>Brochure</option>
      </select>
    </div>
  </div>
  <div class="form-row"> 
    <div class="col-6">
        <label for="LastName" class="col-form-label">Last Name*</label> 
      <input id="LastName" name="LastName" placeholder="Last Name" type="text" class="form-control" required="required">
     </div>   
    <div class="col-6"> 
     <label for="PasswordOne" class="col-form-label">Password*</label> 
   <input id="PasswordOne" name="PasswordOne" placeholder="********" type="text" class="form-control" required="required ">         
    </div>
     </div>
<div class="form-row"> 
    <div class="col-6">
    <label for="Email" class="col-form-label">Email*</label> 
      <input id="Email" name="Email" placeholder="email@example.com" type="text" class="form-control" required="required">
      </div>   
    <div class="col-6">
         <label for="PasswordTwo" class="col-form-label">Password Confirm*</label> 
      <input id="PasswordTwo" name="PasswordTwo" placeholder="********" type="text" class="form-control" required="required">
    </div> 
  </div>
   
  <div class="form-row">
       <div class="col-6">
    <label for="PhoneNumber" class="col-form-label">Phone</label> 
 <input id="PhoneNumber" name="PhoneNumber" placeholder="Phone Number" type="text" class="form-control" required="required">
    </div>
     <div class="col-6">
       <div id="terms" class="custom-control custom-checkbox custom-control-inline">   
        <input name="checkbox" id="checkbox_0" type="checkbox" checked="checked" class="custom-control-input" value="rabbit" required="required"> 
        <label id="checkbox" for="checkbox_0" class="custom-control-label">I have read the terms-and-conditions</label>
      </div>   
      </div>
   </div>
  <div class="form-row">
    <div class="col-12">
      <button id="submit-btn" name="submit" type="submit" class="btn btn-primary">Sign Up</button>
    </div>
  </div>
</form>
		</div>
	</div>
        </div>

<?php include'footer.php';?>