
<h1>Looking for labels uh?</h1>

<?php
function echoFiles() {
    // Get the list of files and directories in the current directory
    $files = scandir(__DIR__);

    // Define files to exclude
    $excluded_files = array('.git', 'index.php', '.DS_Store', 'source.sketch', '.gitignore');
    // Iterate over the array of files
    foreach ($files as $file) {
        // Exclude the current directory (.) and parent directory (..)
        if ($file != '.' && $file != '..' && !in_array($file, $excluded_files)) {
            // Display the file as an image with a clickable link
            echo '<a href="' . htmlspecialchars($file) . '"><img style="height: 65px; margin-right: 1em; margin-bottom: 1em;" src="' . htmlspecialchars($file) . '" alt="' . htmlspecialchars($file) . '"></a>';
        }
    }
}
?>


<div class="container"><?php echoFiles() ?></div>