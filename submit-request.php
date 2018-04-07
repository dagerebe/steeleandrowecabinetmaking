<?php
if(isset($_POST['email'])) {
    $email_to = "kevin@steeleandrowecabinetmaking.com";
    $email_subject = "Email subject";
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname']; // required
    $email_from = $_POST['email']; // required
    $phonenumber = $_POST['phonenumber']; // not required
    $message = $_POST['message']; // required

    function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"",$string);
    }

    $email_message = "Form details below.\n\n";
    $email_message .= "Name: ".clean_string($firstname)."\n";
    $email_message .= "Name: ".clean_string($lastname)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Telephone: ".clean_string($phonenumber)."\n";
    $email_message .= "Location: ".clean_string($message)."\n";

// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers);
?>
  <!-- include your own success html here -->

  <div class="feedback">Thank you for contacting us. We will be in touch with you very soon.</div>
  <?php
}
?>