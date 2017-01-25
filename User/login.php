
<?php
include_once("top.php");

# The student login form submits to here.
# Upon login, remembers student login name in a PHP session variable.

if (isset($_REQUEST["username"]) && isset($_REQUEST["password"])) {
    $name = $_REQUEST["username"];
    $password = $_REQUEST["password"];
    if (is_password_correct($name, $password)) {
        if (isset($_SESSION)) {
            session_destroy();
            session_regenerate_id(TRUE);
            session_start();
        }
        $_SESSION["name"] = $name;     # start session, remember user info

        error_log("Login successful! Welcome back." . $_SESSION["name"] , 0);
        redirectSimple("index.php");
    } else {
        error_log("Incorrect user name and/or password." , 0);
        redirectSimple("index.php");

    }
}

# Returns TRUE if given password is correct password for this user name.
function is_password_correct($name, $password) {
    $dsn = 'mysql:dbname=progettoFinale;host=localhost';
    try{

        $db = new PDO($dsn, 'root', 'root');
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $name = $db->quote($name);
        $rows = $db->query("SELECT password FROM users WHERE username = $name");
        if ( $rows) {
            foreach ($rows as $row) {
                $correct_password = $row["password"];
                return $password === $correct_password;
            }
        } else {
            return FALSE;   # user not found
        }
    }catch (PDOException $e){?>

        <p>Sorry, a database error occurred.</p>
        <p>(Error details: <?= $e->getMessage() ?>)</p>

        <?php
        return NULL;
    }
}

function redirectSimple($url) {
    header("Location: $url");
    die;
}?>

