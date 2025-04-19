
<?php
function sanitize_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    //convert special characters to HTML entities
    $data = htmlentities($data);
    return $data;
}
