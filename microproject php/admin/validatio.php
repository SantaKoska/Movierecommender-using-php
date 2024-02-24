<?php
        include "connect.php";
        function validate($data){
            $data =trim($data);
            $data =stripcslashes($data);
            $data =htmlspecialchars($data);
            return $data; 
        }
        if(isset($_POST["Login"]))
        {
            $username=validate($_POST["adminusername"]);
            $password=validate($_POST["adminpassword"]);
            $sql9="SELECT * FROM `admin` where `userid`='$username'";
            $result6=$con->query($sql9);
            if($result6->num_rows>0)
            {
                $fat=$result6->fetch_assoc();
                if(($fat['userid'] == $username) && ($fat['passid'] == $password))
                {
                    echo"loging in";
                    header("Loaction:adminpanel.php");
                    exit();
                }
                else{
                    echo "The given username and password doesnot match <br> TRY AGAIN";
                    exit();
                }
            }
        }
        ?>