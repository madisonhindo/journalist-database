<?php include 'database.php'; ?>

<?php
// This is the "prepared statement" version of this file.
if (isset($_POST['name']) && isset($_POST['publication'])) {
    // sanitizeMySQL() is a custom function, written below
    $name = sanitizeMySQL($conn, $_POST['name']);
    $twitter = sanitizeMySQL($conn, $_POST['twitter']);
    $publication = sanitizeMySQL($conn, $_POST['publication']);
    $specialties = sanitizeMySQL($conn, $_POST['specialties']);
    $location = sanitizeMySQL($conn, $_POST['location']);
    // the prepared statement - note: 6 question marks represent
    // 6 variables we will send to database separately
    $query = "INSERT INTO journalistlist (name, twitter, publication, specialties, location)
    VALUES (?, ?, ?, ?, ?)";
    // prepare the statement in db
    if ( $stmt = mysqli_prepare($conn, $query) ) {
        // bind the values to replace the 6 question marks
        // note that 6 letters in 'sssids' MUST MATCH data types in table
        // Type specification chars:
        // i - integer, s - string , d - double (decimal), b - blob
        mysqli_stmt_bind_param($stmt, 'sssss',
        $name,
        $twitter,
        $publication,
        $specialties,
        $location
        );
        // executes the prepared statement with the values already set, above
        mysqli_stmt_execute($stmt);
        // close the prepared statement
        mysqli_stmt_close($stmt);
        // close db connection
        mysqli_close($conn);
    } // end of prepare if-statement
} else {
    echo "Failed to enter!";
} // end of isset if-statement
// erase any HTML tags and then escape all quotes
// this is used on each value that came from the HTML form
function sanitizeMySQL($conn, $var) {
    $var = strip_tags($var);
    $var = mysqli_real_escape_string($conn, $var);
    return $var;
}

?>
