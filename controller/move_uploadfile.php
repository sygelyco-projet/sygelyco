<?php


 function move_file($file,$file_name,$chemin){
if (!empty($file)) {
    $myFile = $file;

    if ($myFile["error"] !== UPLOAD_ERR_OK) {
        echo "<p>An error occurred.</p>";
        exit;
    }
    // ensure a safe filename
    $name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);
    $parts = pathinfo($name);
    $name = $file_name . "." . $parts["extension"];
    // preserve file from temporary directory
    $success = move_uploaded_file($myFile["tmp_name"],
        $chemin . $name);
    if (!$success) { 
        echo "<p>Unable to save file.</p>";
        exit;
    }
        return $name;
    // set proper permissions on the new file
    //chmod(UPLOAD_DIR . $name, 0644);
}
}

?>