<?php

    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO students (lastname, firstname, dob, email) VALUES(?, ?, ?, ?)");
    $stmt->bind_param("ssss", $lastname, $firstname, $dob, $email);

    // set parameters and execute
    $lastname = "Doe";
    $firstname = "John";
    $dob = "1982/10/08";
    $email = "john.doe@foobar.com";
    $stmt->execute();
    
    $lastname = "Ann";
    $firstname = "Mary";
    $dob = "1975/08/18";
    $email = "jmary.ann@foobar.com";
    $stmt->execute();

    echo "Friends Birthday Pop-up";
        $stmt->close();

?>