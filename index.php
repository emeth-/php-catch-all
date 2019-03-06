<?

foreach($_POST as $h=>$v) {
    error_log("POST: ".$h." = ".$v);
}

/*
foreach($_SERVER as $h=>$v) {
    error_log("SERVER: ".$h." = ".$v);
}
*/

