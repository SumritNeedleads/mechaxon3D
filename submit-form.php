<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "kabhinit@emazetechnologies.com"; // Replace with owner's email
  $subject = "New Form Submission - 2025 Guide";
  $message = "First Name: " . $_POST["first_name"] . "\n"
           . "Last Name: " . $_POST["last_name"] . "\n"
           . "Company: " . $_POST["company"] . "\n"
           . "Email: " . $_POST["email"] . "\n"
           . "Phone: " . $_POST["phone"] . "\n"
           . "Country: " . $_POST["country"] . "\n"
           . "Subscribed: " . (isset($_POST["subscribe"]) ? "Yes" : "No") . "\n";

  $headers = "From: no-reply@example.com"; // Replace if needed

  mail($to, $subject, $message, $headers);

  // Auto download file after submission
  $file = 'guide.pdf'; // Replace with your actual guide file
  if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($file) . '"');
    header('Content-Length: ' . filesize($file));
    flush();
    readfile($file);
    exit;
  } else {
    echo "File not found.";
  }
}
?>
