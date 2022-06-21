<?php

$connection = mysqli_connect('localhost', 'root', '', 'portfolio');

if($connection){
    // echo "connected";
}
else{
    echo "not connected";
}

if (isset($_REQUEST['send'])) {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'] ;
    $subject = $_REQUEST['subject'];
    $message = $_REQUEST['message'];
    
    $query = "INSERT INTO contact_info (`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$subject', '$message')";
    $result = mysqli_query($connection, $query);

    if ($result) {
        header('location:index.php?msg=record Inserted');
        echo "record Inserted";
        
    }
    else {
        header('location:index.php?msg=record not Inserted');
        echo "record not Inserted";
    }

}

?>