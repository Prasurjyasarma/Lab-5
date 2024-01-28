<html>
    <head>
        <title>Redundancy</title>
    </head>
    <body>
    <h2> Write to File</h2>
        <form action="" method="POST">
            <textarea name="content" rows="5" cols="40" placeholder="Enter text to write"></textarea>
            <br><br>
            <input type="Submit" name="write"/>
        </form>
        <h2>Read from file</h2>
        <?php
        $file = 'data.txt';
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $content = $_POST['content'];
        file_put_contents($file, $content . PHP_EOL, FILE_APPEND | LOCK_EX);
        echo "Content written to file successfully!";
        echo "<br>";
        echo $content;
    }
    ?>
    
    </body>
</html> 