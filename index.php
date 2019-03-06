<?

foreach($_GET as $h=>$v) {
    error_log("GET: ".$h." = ".$v);
}

foreach($_POST as $h=>$v) {
    error_log("POST: ".$h." = ".$v);
}

/*
foreach($_SERVER as $h=>$v) {
    error_log("SERVER: ".$h." = ".$v);
}
*/

