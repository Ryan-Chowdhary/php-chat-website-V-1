<?php
    include_once 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="refresh" content="60">
    <title>Chat</title>
    <script src="/index.css" type="css"></script>

</head>
<body>

    <form action="includes/chat.inc.php" method="POST">
        <input type="text" name="name" placeholder="name">
        <br>
        <input type="text" name="chatbox" placeholder="write here">
        <br>
        <button type="submit" name="submit">click</button>
    </form>

    <div id="chatpage">
        <h3>
            <?php
            $sql = "SELECT * FROM userchat
            ORDER BY id DESC
            LIMIT 5;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['username'], '  |  ', $row['chat_text'] . "<br>";
                }

            }
            ?>
        </h3>
    </div>
</body>
</html>