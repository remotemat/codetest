<?php include'header.php';?>

<?php 

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "codetest";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    $msg = '';
    $msgClass = '';

    if (isset($_POST['submit'])) {
        
       
        
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $interestedIn = $_POST['interestedIn'];
        $passwordOne = $_POST['passwordOne'];
        $passwordTwo = $_POST['passwordTwo'];
        $terms = $_POST['checkbox'];
        
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                $msg = 'Please use a valid email';
                $msgClass = 'alert-danger';
            } 
            else if ($passwordOne !== $passwordTwo){
                $msg = 'Your passwords do not match';
                $msgClass = 'alert-danger';
             }  
            else {
                mysqli_query($conn, "INSERT INTO customers (customer_first, customer_last, customer_email, customer_phone, customer_interest, customer_password) VALUES ('$firstName', '$lastName', '$email', '$phone', '$interestedIn', '$passwordOne')");
                 
                $msg = 'Your message is sent';
                $msgClass = 'alert-success';
            }
        } 
    
?>
  
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
    <?php if ($msg != ''): ?>
    <p class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></p>
    <?php endif; ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">           
  <div class="form-row">
      <div class="col-6">
    <label for="firstName" class="col-form-label">First Name*</label> 
      <input id="firstName" name="firstName" placeholder="First Name" type="text" class="form-control" required="required" value="<?php echo isset($_POST['firstName']) ? $firstName : ''; ?>">
    </div>
     <div class="col-6">
    <label for="interestedIn" class="col-form-label">Interested In*</label> 
      <select id="interestedIn" name="interestedIn" class="form-control" required="required" value="<?php echo isset($_POST['interestedIn']) ? $interestedIn : ''; ?>">
        <option>Wed Design</option>
        <option>Logo</option>
        <option>Brochure</option>
      </select>
    </div>
  </div>
  <div class="form-row"> 
    <div class="col-6">
        <label for="lastName" class="col-form-label">Last Name*</label> 
      <input id="lastName" name="lastName" placeholder="Last Name" type="text" class="form-control" required="required" value="<?php echo isset($_POST['lastName']) ? $lastName : ''; ?>">
     </div>   
    <div class="col-6"> 
     <label for="passwordOne" class="col-form-label">Password*</label> 
   <input id="passwordOne" name="passwordOne" placeholder="********" type="text" class="form-control" required="required " value="<?php echo isset($_POST['passwordOne']) ? $passwordOne : ''; ?>">        
    </div>
     </div>
<div class="form-row"> 
    <div class="col-6">
    <label for="email" class="col-form-label">Email*</label> 
      <input id="email" name="email" placeholder="email@example.com" type="text" class="form-control" required="required" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
      </div>   
    <div class="col-6">
         <label for="passwordTwo" class="col-form-label">Password Confirm*</label> 
      <input id="passwordTwo" name="passwordTwo" placeholder="********" type="text" class="form-control" required="required" value="<?php echo isset($_POST['passwordTwo']) ? $passwordTwo : ''; ?>">
    </div> 
  </div>
   
  <div class="form-row">
       <div class="col-6">
    <label for="phone" class="col-form-label">Phone</label> 
 <input id="phone" name="phone" placeholder="Phone Number" type="text" class="form-control" value="<?php echo isset($_POST['phone']) ? $phone : ''; ?>">
    </div>
     <div class="col-6">
       <div id="terms" class="custom-control custom-checkbox custom-control-inline">   
        <input name="checkbox" id="checkbox_0" type="checkbox" checked="checked" class="custom-control-input" value="rabbit" required="required"> 
        <label id="checkbox" for="checkbox_0" class="custom-control-label">I have read the <a id="terms-link" href="#">terms-and-conditions</a></label>
      </div>   
      </div>
   </div>
  <div class="form-row">
    <div class="col-12">
      <button id="submit-btn" name="submit" type="submit" class="btn btn-primary">Sign Up<img id="sumbit-icon" src="src/img/Group.svg"/></button>
    </div>
  </div>
</form>
		</div>
	</div>
        </div>

<?php include'footer.php';?>