<?php 

    if (isset($_POST['submit'])) {
        
        include_once 'dbh.php';
        
        $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
        $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $interestedIn = mysqli_real_escape_string($conn, $_POST['interestedIn']);
        $passwordOne = mysqli_real_escape_string($conn, $_POST['passwordOne']);
        $passwordTwo = mysqli_real_escape_string($conn, $_POST['passwordTwo']);
        $terms = mysqli_real_escape_string($conn, $_POST['checkbox']);
        
        if(!empty($firstName) && !empty($lastName) && !empty($email) && !empty($interestedIn) && !empty($passwordOne) && !empty($passwordTwo) && !empty($terms)){
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                $msg = 'Please use a valid email';
                $msgClass = 'alert-danger';
            } 
            else if ($passwordOne !== $passwordTwo){
                $msg = 'Your passwords do not match';
                $msgClass = 'alert-danger';
             }  else {
                
                $sql = "INSERT INTO customers (customer_first, customer_last, customer_email, customer_phone, customer_interest, customer_password,) VALUES ('$firstName', '$lastName', '$email', '$phone', '$interestedIn', '$passwordOne');";
                mysqli_query($conn, $sql);
                
                $toEmail = 'matevans2008@hotmail.com';
                $subject = 'Customer Welcome Form';
                $body = '<h2>Customer Welcome Form</h2>
                        <h4>First Name: <h4><p>'.$firstName.'</p>
                        <h4>Last Name: <h4><p>'.$lastName.'</p>
                        <h4>Email: <h4><p>'.$email.'</p>
                        <h4>Phone: <h4><p>'.$phone.'</p>
                        <h4>Interested In: <h4><p>'.$interestedIn.'</p>';
                $headers = "MIME-Version: 1.0" ."\r\n";
                $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
                $headers .= "From: ".$firstName.' '.$lastName."<".$email.">". "\r\n";
            
                
                if(mail($toEmail, $subject, $body, $headers)){
                    $msg = 'Your email has been sent';
                    $msgClass = 'alert-success';
                } else {
                     $msg = 'Your email has not been sent';
                    $msgClass = 'alert-danger';
                }
            }
        } 
    }
        
     else {
        header("Location: ../index.php");
        exit();
    }