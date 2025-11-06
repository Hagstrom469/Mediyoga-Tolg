<?php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $classTime = $_POST['class-time'];
    $className = $_POST['class-name'];

    // Email recipient
    $to = 'eric.hagstrom01@gmail.com';
    
    // Email subject
    $subject = 'Ny yogabokning - ' . $className;
    
    // Email message
    $message = "En ny bokning har gjorts:\n\n";
    $message .= "Klass: $className\n";
    $message .= "Tid: $classTime\n\n";
    $message .= "Personuppgifter:\n";
    $message .= "Namn: $firstname $lastname\n";
    $message .= "E-post: $email\n";
    $message .= "Telefon: $phone\n";
    
    // Headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    // Send email
    mail($to, $subject, $message, $headers);
    
    // Redirect back to confirmation page
    header('Location: booking-confirmation.html');
    exit();
}
?>