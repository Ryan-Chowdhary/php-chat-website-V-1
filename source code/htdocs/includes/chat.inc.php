<?php
    require_once(__DIR__."\dbh.inc.php");

    $name = $_POST['name'];
    $comment = $_POST['chatbox'];

    $sqlc = "INSERT INTO userchat (username, chat_text)
    VALUES ('$name', '$comment');";
    mysqli_query($conn, $sqlc);

    header("Location: ../index.php");