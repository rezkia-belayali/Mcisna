
<meta charset="UTF-8">

<?php

        include 'database.php';

        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $sql = "INSERT INTO  contact (name, email, subject, message) VALUES ('$name', '$subject', '$email', '$message')";
        $result = mysqli_query($conn, $sql);
        if($result == TRUE)
        {
            echo "<script>alert('Message envoyé !'); location.href = 'contact.php'</script>";
        }
        else 
        echo "<script>alert('Erreur, veuillez réessayer ultérieurement.'); location.href = 'contact.php'</script>";

?>