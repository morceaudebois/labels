
<h1>Looking for labels uh?</h1>

<?php
function echoFiles() {
    // Get the list of files and directories in the current directory
    $files = scandir(__DIR__);

    // Iterate over the array of files
    foreach ($files as $file) {
        // Exclude the current directory (.) and parent directory (..)
        if ($file != '.' && $file != '..') {
            // Get the file extension
            $file_extension = pathinfo($file, PATHINFO_EXTENSION);

            // Check if the file has a .svg extension
            if (strtolower($file_extension) === 'svg') {
                // Display the file as an image with a clickable link
                echo '<a href="' . htmlspecialchars($file) . '"><img style="height: 65px; margin-right: 1em; margin-bottom: 1em;" src="' . htmlspecialchars($file) . '" alt="' . htmlspecialchars($file) . '"></a>';
            }
        }
    }
}
?>


<div class="container"><?php echoFiles() ?></div>

<a href="https://github.com/morceaudebois/labels" style="margin-top: 4em; display: block;">Source 🌊</a>