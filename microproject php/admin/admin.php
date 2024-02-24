<!DOCTYPE html> 
<html>
    <head>
        <title>
            Admin
        </title>
        <link rel="stylesheet" href="admin.css">
    </head>
    <body>
        <div id="take">
             <h1 id="head">MOVIERECOMMENDER</h1><hr>
             <form method="post" action="#" id="adminbox">
             <h4 id="adminhead">Admin Login</h4><hr>
             <input type="text" name="adminusername" placeholder="Username" id="jiji" required><br><br>
             <input type="text" name="adminpassword" placeholder="Password" id="jiji" required><br><br>
             <input type="Submit" name="Login" value="Login" id="jiji">
            </form> 
        </div>
        <?php
include "connect.php";

function validate($data) {
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST["Login"])) {
    $username = validate($_POST["adminusername"]);
    $password = validate($_POST["adminpassword"]);
    $sql9 = "SELECT * FROM `admin` where `userid`='$username'";
    $result6 = $con->query($sql9);

    if ($result6->num_rows > 0) {
        $fat = $result6->fetch_assoc();

        if (($fat['userid'] == $username) && ($fat['passid'] == $password)) {
            echo "logging in";
            header("Location: ./adminpanel.php");
            exit(); 
        } else {
            echo "The given username and password do not match <br> TRY AGAIN";
        }
    } else {
        echo "The given username and password do not match <br> TRY AGAIN";
    }
}
?>
    </body>
</html>