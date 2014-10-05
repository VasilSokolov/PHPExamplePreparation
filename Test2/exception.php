<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=test');
    // If exception is thrown, the catch block is executed
}
catch (Exception $e) {
    // Display the exception’s message
    echo "Error: " . $e->getMessage();
}
finally {
    echo "This code is always executed.";
}
?>