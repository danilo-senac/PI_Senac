<?php
session_start();

if(isset($_SESSION['cpf'])) {
    require 'bd.php';

    try{
        $stmt = $conn->prepare("DELETE FROM users WHERE cpf = :cpf");
        $stmt->bindParam(':cpf', $_SESSION['cpf']);
        $stmt->execute();
    } catch(Exception $e) {
        session_destroy();
        header("Location: login.php?erro=3");
    }
    
    session_destroy();
    header("Location: login.php?ok=1");

} else {
    session_destroy();
    header("Location: login.php?erro=4");
}

?>
