<!DOCTYPE html>
<html>
    <head>
        <title>
            PANEL
        </title>
        <link rel="stylesheet" href="adminpanel.css">
        <link rel="stylesheet" href="pp.css">
    </head>
    <body style="background-color: black; color: white;">
        <form method="post" action="#" class="loc">
            <button name="weekad" class="rdr" id="week">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
              <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm4 0v6h8V1zm8 8H4v6h8zM1 1v2h2V1zm2 3H1v2h2zM1 7v2h2V7zm2 3H1v2h2zm-2 3v2h2v-2zM15 1h-2v2h2zm-2 3v2h2V4zm2 3h-2v2h2zm-2 3v2h2v-2zm2 3h-2v2h2z"/>
              </svg><h5>NEW WEEK</h5>
            </button>
            <button name="sortad" class="rdr">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-filter-circle-fill" viewBox="0 0 16 16">
              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16M3.5 5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1 0-1M5 8.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m2 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5"/>
              </svg><h5>GENRE SORT</h5></button>
            </button>
          </form>
          <?php
          include "connect.php";
          if(isset($_POST["sortad"]))
          {
            include "okl.html";
            $we="SELECT * FROM `newcinema` WHERE 1";
            $rth=$con->query($we);
            if($rth->num_rows>0)
            {
                while($rrr=$rth->fetch_assoc())
                {
                    echo'
        <div class="main">
        <br>
        <h2 class="mname">'.$rrr['Moviename'].'</h2><hr>
        <table>
            <tr>
                <th>
                    <div class="first">
                        <table>
                            <tr>
                                <th>
                                    <img class="mimg" src="'.$rrr['Movieimage'].'" alt="">
                                </th>
                            </tr>
                        </table>        
                    </div>
                </th>
                <th>
                    <div class="second">
                        <table>
                            <tr>
                                <div class="Third">
                                    <th>
                                        <img class="imdb"src="resources\imdb-logo-transparent.png" alt="">
                                    </th>
                                    <th>
                                        <h4 class="klkl">-'.$rrr["IMDB"].'</h4>
                                    </th>
                                </div>
                                <div class="fourth">
                                    <th>
                                        <img class="rtomt" src="resources/Rotten Tomatoes.png" alt="">  
                                    </th>
                                    <th>
                                        <h4 class="klkl">-'.$rrr["Rottentomato"].'%</h4>
                                    </th>
                                    <th>
                                          <h4 class="klkl">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.$rrr["Date"].'</h4>
                                        </th>
                                    </div>
                                </tr>
                            </table>
                            <div class="fifth">
                                <table>
                                    <tr>
                                        <th>
                                            <h3>DESCRIPTION:</h3>
                                        </th>
                                    </tr>
                                    <tr class="fifthsub">
                                        <th>
                                            <p class="jkjk">'.$rrr["Description"].'</p>
                                        </th>
                                    </tr>
                                </table>    
                            </div>
                            <div class="sixth">
                                <table>
                                    <tr>
                                        <th>
                                            <h5>GENRE:</h5>
                                        </th>
                                        <th>
                                            <h3 class="sixthsub">'.$rrr["Genre"].'</h3>
                                        </th>
                                        <th>
                                            <h5 class="sixthsub2">DIRECTED BY:</h5>
                                        </th>
                                        <th>
                                            <h3 class="sixthsub">'.$rrr["Director"].'</h3>
                                        </th>
                                    </tr>
                                </table>   
                            </div>
                        </div>
                    </th>
                </tr>
            </table>
        </div>';
      }
    }
  }
          elseif(isset($_POST["Insert"]))
          {
            echo '<center>
            <form method="post" action="adminpanel.php" style="border:2px solid gold; margin-top:10px; background-color:gold; ">
                <table style="color: black;">
                    <tr>
                        <th>
                            MOVIENAME:
                        </th>
                        <th>
                            <input type="text" name="mn" required>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            IMDB RATING:
                        </th>
                        <th>
                            <input type="text" name="imdb" required>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            ROTTEN TOMATOES:
                        </th>
                        <th>
                            <input type="text" name="rtrate" required>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            GENRE:
                        </th>
                        <th>
                            <select name="G" required>
                                <option value="">SELECT</option>
                                <option value="Action">ACTION</option>
                                <option value="Crime">CRIME</option>
                                <option value="Fantasy">FANTASY</option>
                                <option value="Horror">HORROR</option>
                                <option value="Romance">ROMANCE</option>
                                <option value="Sci-fi">SCI-FI</option>
                                <option value="Biograpphy">BIOGRAPHY</option>
                                <option value="Sports">SPORTS</option>
                                <option value="Thriller">THRILLER</option>
                                <option value="War">WAR</option>
                                <option value="Western">WESTERN</option>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            DIRECTOR:
                        </th>
                        <th>
                            <input type="text" name="Dir" required>
                        </th>
                    </tr>
                    <tr>
                        <th>DATE OF RELEASE</th>
                        <th>
                            <input type="date" name="date" required>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            MOVIE IMAGE<br>(url with end .jpg) 
                        </th>
                        <th>
                            <input type="text" name="imgurl" required>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            UNIVERSE:
                        </th>
                        <th>
                            <select name="uni">
                                <option value="NULL">SELECT</option>
                                <option value="Star Wars">STAR WARS</option>
                                <option value="Marvels">MARVELS</option>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            DESCRIPTION:
                        </th>
                        <th>
                            <input type="text" name="desc" required>
                        </th>
                    </tr>
               </table>
               <input type="submit" name="add" value="INSERT" style="margin-top:10px; margin-bottom:5px;">
            </form>
        </center>';
          }
          elseif(isset($_POST["add"]))
          {
            $movname=$_POST['mn'];
            $imdb=$_POST['imdb'];
            $rt=$_POST['rtrate'];
            $genre=$_POST['G'];
            $dir=$_POST['Dir'];
            $date=$_POST['date'];
            $movimg=$_POST['imgurl'];
            $univ=$_POST['uni'];
            $desr=$_POST['desc'];
            $sql8="INSERT INTO `newcinema`(`Moviename`, `IMDB`, `Rottentomato`, `Genre`, `Director`, `Universe`, `Date`, `Movieimage`, `Description`) VALUES ('$movname','$imdb','$rt','$genre','$dir','$univ','$date','$movimg','$desr')";
            $res=$con->query($sql8);
            if($res)
            {
              echo"<h3>The inssertion is successfull</h3>";
            }
          }
          elseif(isset($_POST["Delete"]))
          {
            include "kakki.html";
          }
          elseif(isset($_POST['mvns']))
          {
            $tip=$_POST['title43'];
            $sql56="SELECT * FROM `newcinema` WHERE `Moviename`LIKE '$tip%' ";
            $result56=$con->query($sql56);
            if($result56->num_rows>0)
            {
              while($row5=$result56->fetch_assoc())
              {
                echo'<div class="main">
                <br>
                <h3>'.$row5['SI.NO'].'<//h3>
                <h2 class="mname">'.$row5['Moviename'].'</h2><hr>
                <table>
                    <tr>
                        <th>
                            <div class="first">
                                <table>
                                    <tr>
                                        <th>
                                            <img class="mimg" src="'.$row5['Movieimage'].'" alt="">
                                        </th>
                                    </tr>
                                </table>        
                            </div>
                        </th>
                        <th>
                            <div class="second">
                                <table>
                                    <tr>
                                            <th>
                                                  <h4 class="klkl">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.$row5["Date"].'</h4>
                                                </th>
                                            </div>
                                        </tr>
                                    </table>
                                    <div class="fifth">
                                        <table>
                                            <tr>
                                                <th>
                                                    <h3>DESCRIPTION:</h3>
                                                </th>
                                            </tr>
                                            <tr class="fifthsub">
                                                <th>
                                                    <p class="jkjk">'.$row5["Description"].'</p>
                                                </th>
                                            </tr>
                                        </table>    
                                    </div>
                                    <div class="sixth">
                                        <table>
                                            <tr>
                                                <th>
                                                    <h5>GENRE:</h5>
                                                </th>
                                                <th>
                                                    <h3 class="sixthsub">'.$row5["Genre"].'</h3>
                                                </th>
                                                <th>
                                                    <h5 class="sixthsub2">DIRECTED BY:</h5>
                                                </th>
                                                <th>
                                                    <h3 class="sixthsub">'.$row5["Director"].'</h3>
                                                </th>
                                            </tr>
                                        </table>   
                                    </div>
                                </div>
                            </th>
                        </tr>
                    </table>
                </div>
                <center>
                <form method="post" action="adminpanel.php">
                <table>
                    <tr>
                        <th>
                        Carefully enter the name of movie to be deleted  
                        </th>
                        <th>
                            <input type="text" name="mvdname">
                        </th>
                    </tr>
                </table>
                <input type="submit" name="mvd" value="Delete">
            </form></center>';
              }
            }
            else
            {
              echo"<h1>NO RESULTS FOUND</h1>";
            }
          }
          elseif(isset($_POST["mvd"]))
          {
            $tltp=$_POST["mvdname"];
            $sq="DELETE FROM `newcinema` WHERE `Moviename`='$tltp'";
            $res=$con->query($sq);
            if($res)
            {
              echo"THE DATA IS DELETED SUCCEFFULLY";
            }
          }
          elseif(isset($_POST["Update"]))
          {echo '
            <center>
            <form method="post" action="adminpanel.php">
                <table>
                    <tr>
                        <th>
                            ENTER THE NAME OF THE MOVIE TO UPDATED 
                        </th>
                        <th>
                            <input type="text" name="ti">
                        </th>
                    </tr>
                </table>
                <input type="submit" name="mvnsrch" value="SEARCH">
            </form>
        </center>
        <br><br>';
          }
          elseif(isset($_POST["mvnsrch"]))
          {
            $ti=$_POST["ti"];
            $dl="SELECT * FROM `newcinema` WHERE `Moviename` = '$ti'";
            $req=$con->query($dl);
            if($req->num_rows>0)
            {
              while($ro=$req->fetch_assoc())
              {echo'
                <center>
            <form method="post" action="adminpanel.php" style="border:2px solid gold; margin-top:10px; background-color:gold; ">
                <table style="color: black;">
                <tr><th>SI.NO:</th>
                <th><input type="hidden" name="usi" value="'.$ro["SI.NO"].'" required>'.$ro["SI.NO"].'</th></tr>
                    <tr>
                        <th>
                            MOVIENAME:
                        </th>
                        <th>
                            <input type="text" name="umn" value="'.$ro["Moviename"].'" required>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            IMDB RATING:
                        </th>
                        <th>
                            <input type="text" name="uimdb" value="'.$ro["IMDB"].'" required>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            ROTTEN TOMATOES:
                        </th>
                        <th>
                            <input type="text" name="urtrate" value="'.$ro["Rottentomato"].'" required>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            GENRE:
                        </th>
                        <th>
                            <select name="ug" required>
                                <option value="">'.$ro["Genre"].'</option>
                                <option value="Action">ACTION</option>
                                <option value="Crime">CRIME</option>
                                <option value="Fantasy">FANTASY</option>
                                <option value="Horror">HORROR</option>
                                <option value="Romance">ROMANCE</option>
                                <option value="Sci-fi">SCI-FI</option>
                                <option value="Biograpphy">BIOGRAPHY</option>
                                <option value="Sports">SPORTS</option>
                                <option value="Thriller">THRILLER</option>
                                <option value="War">WAR</option>
                                <option value="Western">WESTERN</option>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            DIRECTOR:
                        </th>
                        <th>
                            <input type="text" name="udir" value="'.$ro["Director"].'" required>
                        </th>
                    </tr>
                    <tr>
                        <th>DATE OF RELEASE</th>
                        <th>
                            <input type="date" name="udate" value="'.$ro["Date"].'" required>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            MOVIE IMAGE<br>(url with end .jpg) 
                        </th>
                        <th>
                            <input type="text" name="uimgurl" value="'.$ro["Movieimage"].'" required>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            UNIVERSE:
                        </th>
                        <th>
                            <select name="juni">
                                <option value="">'.$ro["Universe"].'</option>                             
                                <option value="NULL">NULL</option>
                                <option value="Star Wars">STAR WARS</option>
                                <option value="Marvels">MARVELS</option>
                                <option value="Jhon Wick">JHON WICK</option>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            DESCRIPTION:
                        </th>
                        <th>
                            <input type="text" name="udesc" value="'.$ro["Description"].'" required>
                        </th>
                    </tr>
               </table>
               <input type="submit" name="up" value="UPDATE" style="margin-top:10px; margin-bottom:5px;">
            </form>
        </center>';
              }
            }
            else{
              echo"<h1>NO DATA FOUND</h1>";
            }
          }
          elseif(isset($_POST["up"]))
          {
            $si=$_POST['usi'];
            $movname=$_POST['umn'];
            $imdb=$_POST['uimdb'];
            $rt=$_POST['urtrate'];
            $genre=$_POST['ug'];
            $dir=$_POST['udir'];
            $date=$_POST['udate'];
            $movimg=$_POST['uimgurl'];
            $univ=$_POST['juni'];
            $desr=$_POST['udesc'];
            $qwe="UPDATE `newcinema` SET `Moviename`='$movname',`IMDB`='$imdb',`Rottentomato`='$rt',`Genre`='$genre',`Director`='$dir',`Universe`='$univ',`Date`='$date',`Movieimage`='$movimg',`Description`='$desr' WHERE `SI.NO`=$si";
            $qsc=$con->query($qwe);
            if($qsc)
            {
              echo "Updated succefully";
            }
          }
          elseif(isset($_POST['Search']))
          {
            echo'
            <body>
        <center>
            <form method="post" action="adminpanel.php">
                <table>
                    <tr>
                        <th>
                            ENTER THE FIRST LETTER OF THE MOVIE NAME TO BE DISPLAYED 
                        </th>
                        <th>
                            <input type="text" name="mvm">
                        </th>
                    </tr>
                </table>
                <input type="submit" name="serc" value="DISPLAY">
            </form>
        </center>
        <br><br>';
          }
          elseif(isset($_POST['serc']))
          {
            $vhu=$_POST['mvm'];
            $cfr="SELECT * FROM `newcinema` WHERE `Moviename` like '$vhu%'";
            $xx=$con->query($cfr);
            if($xx->num_rows>0)
            {
              while($gb=$xx->fetch_assoc())
              {
                echo'<div class="main">
                <br>
                <h3>'.$gb['SI.NO'].'<//h3>
                <h2 class="mname">'.$gb['Moviename'].'</h2><hr>
                <table>
                    <tr>
                        <th>
                            <div class="first">
                                <table>
                                    <tr>
                                        <th>
                                            <img class="mimg" src="'.$gb['Movieimage'].'" alt="">
                                        </th>
                                    </tr>
                                </table>        
                            </div>
                        </th>
                        <th>
                            <div class="second">
                                <table>
                                    <tr>
                                            <th>
                                                  <h4 class="klkl">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.$gb["Date"].'</h4>
                                                </th>
                                            </div>
                                        </tr>
                                    </table>
                                    <div class="fifth">
                                        <table>
                                            <tr>
                                                <th>
                                                    <h3>DESCRIPTION:</h3>
                                                </th>
                                            </tr>
                                            <tr class="fifthsub">
                                                <th>
                                                    <p class="jkjk">'.$gb["Description"].'</p>
                                                </th>
                                            </tr>
                                        </table>    
                                    </div>
                                    <div class="sixth">
                                        <table>
                                            <tr>
                                                <th>
                                                    <h5>GENRE:</h5>
                                                </th>
                                                <th>
                                                    <h3 class="sixthsub">'.$gb["Genre"].'</h3>
                                                </th>
                                                <th>
                                                    <h5 class="sixthsub2">DIRECTED BY:</h5>
                                                </th>
                                                <th>
                                                    <h3 class="sixthsub">'.$gb["Director"].'</h3>
                                                </th>
                                            </tr>
                                        </table>   
                                    </div>
                                </div>
                            </th>
                        </tr>
                    </table>
                </div>';
              }
            }
            else{
              echo'<h1>NO DATA FOUND</h1>';
            }
          }
          elseif(isset($_POST['weekad']))
          {
            include "weeekad.html";
            $wesql5="SELECT * FROM `week` WHERE 1 order by `Date`";
    $weresult5=$con->query($wesql5);
    if($weresult5->num_rows>0)
  {
    while($werow=$weresult5->fetch_assoc())
      {
        echo'
        <div class="main">
        <br>
        <h2 class="mname">'.$werow['Moviename'].'</h2><hr>
        <table>
            <tr>
                <th>
                    <div class="first">
                        <table>
                            <tr>
                                <th>
                                    <img class="mimg" src="'.$werow['Movie image'].'" alt="">
                                </th>
                            </tr>
                        </table>        
                    </div>
                </th>
                <th>
                    <div class="second">
                        <table>
                            <tr>
                                    <th>
                                          <h4 class="klkl">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.$werow["Date"].'</h4>
                                        </th>
                                    </div>
                                </tr>
                            </table>
                            <div class="fifth">
                                <table>
                                    <tr>
                                        <th>
                                            <h3>DESCRIPTION:</h3>
                                        </th>
                                    </tr>
                                    <tr class="fifthsub">
                                        <th>
                                            <p class="jkjk">'.$werow["Description"].'</p>
                                        </th>
                                    </tr>
                                </table>    
                            </div>
                            <div class="sixth">
                                <table>
                                    <tr>
                                        <th>
                                            <h5>GENRE:</h5>
                                        </th>
                                        <th>
                                            <h3 class="sixthsub">'.$werow["Genre"].'</h3>
                                        </th>
                                        <th>
                                            <h5 class="sixthsub2">DIRECTED BY:</h5>
                                        </th>
                                        <th>
                                            <h3 class="sixthsub">'.$werow["Director"].'</h3>
                                        </th>
                                    </tr>
                                </table>   
                            </div>
                        </div>
                    </th>
                </tr>
            </table>
        </div>';
      }
  }
}

          elseif(isset($_POST['WInsert']))
          {
            echo '<center>
            <form method="post" action="adminpanel.php" style="border:2px solid gold; margin-top:10px; background-color:gold; ">
                <table style="color: black;">
                    <tr>
                        <th>
                            MOVIENAME:
                        </th>
                        <th>
                            <input type="text" name="wmn" required>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            GENRE:
                        </th>
                        <th>
                            <select name="wg" required>
                                <option value="">SELECT</option>
                                <option value="Action">ACTION</option>
                                <option value="Crime">CRIME</option>
                                <option value="Fantasy">FANTASY</option>
                                <option value="Horror">HORROR</option>
                                <option value="Romance">ROMANCE</option>
                                <option value="Sci-fi">SCI-FI</option>
                                <option value="Biograpphy">BIOGRAPHY</option>
                                <option value="Sports">SPORTS</option>
                                <option value="Thriller">THRILLER</option>
                                <option value="War">WAR</option>
                                <option value="Western">WESTERN</option>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            DIRECTOR:
                        </th>
                        <th>
                            <input type="text" name="wdir" required>
                        </th>
                    </tr>
                    <tr>
                        <th>DATE OF RELEASE</th>
                        <th>
                            <input type="date" name="wdate" required>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            MOVIE IMAGE<br>(url with end .jpg) 
                        </th>
                        <th>
                            <input type="text" name="wimgurl" required>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            DESCRIPTION:
                        </th>
                        <th>
                            <input type="text" name="wdesc" required>
                        </th>
                    </tr>
               </table>
               <input type="submit" name="weekadd" value="INSERT" style="margin-top:10px; margin-bottom:5px;">
            </form>
        </center>';
          }
          elseif(isset($_POST['weekadd']))
          {
            $wmovname=$_POST['wmn'];
            $wgenre=$_POST['wg'];
            $wdir=$_POST['wdir'];
            $wdate=$_POST['wdate'];
            $wmovimg=$_POST['wimgurl'];
            $wdesr=$_POST['wdesc'];
            $sql09="INSERT INTO `week`( `Moviename`, `Genre`, `Movie image`, `Description`, `Date`, `Director`) VALUES ('$wmovname','$wgenre','$wmovimg','$wdesr','$wdate','$wdir')";
            $res09=$con->query($sql09);
            if($res09)
            {
              echo"<center><h3>The insertion is successfull</h3></center>";
            }
          }
          elseif(isset($_POST['WDelete']))
          {
            echo '
            <body>
            <center>
                <form method="post" action="adminpanel.php">
                    <table>
                        <tr>
                            <th>
                                ENTER THE FIRST LETTER OF THE MOVIE NAME TO BE DELETED 
                            </th>
                            <th>
                                <input type="text" name="weekdel" required>
                            </th>
                        </tr>
                    </table>
                    <input type="submit" name="weekmvndel" value="SEARCH">
                </form>
            </center>
            <br><br>';
          }
          elseif(isset($_POST['weekmvndel']))
          {
            $wtip=$_POST['weekdel'];
            $wsql56="SELECT * FROM `week` WHERE `Moviename`LIKE '$wtip%' ";
            $wresult56=$con->query($wsql56);
            if($wresult56->num_rows>0)
            {
              while($wrow5=$wresult56->fetch_assoc())
              {
                echo'<div class="main">
                <br>
                <h3>'.$wrow5['SI.NO'].'<//h3>
                <h2 class="mname">'.$wrow5['Moviename'].'</h2><hr>
                <table>
                    <tr>
                        <th>
                            <div class="first">
                                <table>
                                    <tr>
                                        <th>
                                            <img class="mimg" src="'.$wrow5['Movie image'].'" alt="">
                                        </th>
                                    </tr>
                                </table>        
                            </div>
                        </th>
                        <th>
                            <div class="second">
                                <table>
                                    <tr>
                                            <th>
                                                  <h4 class="klkl">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.$wrow5["Date"].'</h4>
                                                </th>
                                            </div>
                                        </tr>
                                    </table>
                                    <div class="fifth">
                                        <table>
                                            <tr>
                                                <th>
                                                    <h3>DESCRIPTION:</h3>
                                                </th>
                                            </tr>
                                            <tr class="fifthsub">
                                                <th>
                                                    <p class="jkjk">'.$wrow5["Description"].'</p>
                                                </th>
                                            </tr>
                                        </table>    
                                    </div>
                                    <div class="sixth">
                                        <table>
                                            <tr>
                                                <th>
                                                    <h5>GENRE:</h5>
                                                </th>
                                                <th>
                                                    <h3 class="sixthsub">'.$wrow5["Genre"].'</h3>
                                                </th>
                                                <th>
                                                    <h5 class="sixthsub2">DIRECTED BY:</h5>
                                                </th>
                                                <th>
                                                    <h3 class="sixthsub">'.$wrow5["Director"].'</h3>
                                                </th>
                                            </tr>
                                        </table>   
                                    </div>
                                </div>
                            </th>
                        </tr>
                    </table>
                </div>
                <center>
                <form method="post" action="adminpanel.php">
                <table>
                    <tr>
                        <th>
                        Carefully enter the name of movie to be deleted   
                        </th>
                        <th>
                            <input type="text" name="wmvdname">
                        </th>
                    </tr>
                </table>
                <input type="submit" name="wmvd" value="Delete">
            </form></center>';
              }
            }
            else
            {
              echo"<h1>NO RESULTS FOUND</h1>";
            }
          }
          elseif(isset($_POST['wmvd']))
          {
            $wtltp=$_POST["wmvdname"];
            $wsq="DELETE FROM `week` WHERE `Moviename`='$wtltp'";
            $wres=$con->query($wsq);
            if($wres)
            {
              echo"THE DATA IS DELETED SUCCEFFULLY";
            }
          }
          elseif(isset($_POST["WUpdate"]))
          {
            echo '
            <center>
            <form method="post" action="adminpanel.php">
                <table>
                    <tr>
                        <th>
                            ENTER THE NAME OF THE MOVIE TO UPDATED 
                        </th>
                        <th>
                            <input type="text" name="wti">
                        </th>
                    </tr>
                </table>
                <input type="submit" name="wmvnsrch" value="SEARCH">
            </form>
        </center>
        <br><br>';
          }
          elseif(isset($_POST["wmvnsrch"]))
          {
            $wti=$_POST["wti"];
            $wdl="SELECT * FROM `week` WHERE `Moviename` = '$wti'";
            $wreq=$con->query($wdl);
            if($wreq->num_rows>0)
            {
              while($wro=$wreq->fetch_assoc())
              {echo'
                <center>
            <form method="post" action="adminpanel.php" style="border:2px solid gold; margin-top:10px; background-color:gold; ">
                <table style="color: black;">
                <tr><th>SI.NO:</th>
                <th><input type="hidden" name="wusi" value="'.$wro["SI.NO"].'" required>'.$wro["SI.NO"].'</th></tr>
                    <tr>
                        <th>
                            MOVIENAME:
                        </th>
                        <th>
                            <input type="text" name="wumn" value="'.$wro["Moviename"].'" required>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            GENRE:
                        </th>
                        <th>
                            <select name="wug" required>
                                <option value="">'.$wro["Genre"].'</option>
                                <option value="Action">ACTION</option>
                                <option value="Crime">CRIME</option>
                                <option value="Fantasy">FANTASY</option>
                                <option value="Horror">HORROR</option>
                                <option value="Romance">ROMANCE</option>
                                <option value="Sci-fi">SCI-FI</option>
                                <option value="Biograpphy">BIOGRAPHY</option>
                                <option value="Sports">SPORTS</option>
                                <option value="Thriller">THRILLER</option>
                                <option value="War">WAR</option>
                                <option value="Western">WESTERN</option>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            DIRECTOR:
                        </th>
                        <th>
                            <input type="text" name="wudir" value="'.$wro["Director"].'" required>
                        </th>
                    </tr>
                    <tr>
                        <th>DATE OF RELEASE</th>
                        <th>
                            <input type="date" name="wudate" value="'.$wro["Date"].'" required>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            MOVIE IMAGE<br>(url with end .jpg) 
                        </th>
                        <th>
                            <input type="text" name="wuimgurl" value="'.$wro["Movie image"].'" required>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            DESCRIPTION:
                        </th>
                        <th>
                            <input type="text" name="wudesc" value="'.$wro["Description"].'" required>
                        </th>
                    </tr>
               </table>
               <input type="submit" name="wup" value="UPDATE" style="margin-top:10px; margin-bottom:5px;">
            </form>
        </center>';
              }
            }else{
              echo"<h1>NO DATA FOUND</h1>";
            }
          }
          elseif(isset($_POST["wup"]))
          {
            $wsi=$_POST['wusi'];
            $wmovname=$_POST['wumn'];
            $wgenre=$_POST['wug'];
            $wdir=$_POST['wudir'];
            $wdate=$_POST['wudate'];
            $wmovimg=$_POST['wuimgurl'];
            $wdesr=$_POST['wudesc'];
            $wqwe="UPDATE `week` SET `Moviename`='$wmovname',`Genre`='$wgenre',`Director`='$wdir',`Date`='$wdate',`Movie image`='$wmovimg',`Description`='$wdesr' WHERE `SI.NO`=$wsi";
            $wqsc=$con->query($wqwe);
            if($wqsc)
            {
              echo "Updated succefully";
            }
          }
          elseif(isset($_POST['WSearch']))
          {
            echo'
            <body>
        <center>
            <form method="post" action="adminpanel.php">
                <table>
                    <tr>
                        <th>
                            ENTER THE FIRST LETTER OF THE MOVIE NAME TO BE DISPLAYED 
                        </th>
                        <th>
                            <input type="text" name="weemvm">
                        </th>
                    </tr>
                </table>
                <input type="submit" name="weeserc" value="DISPLAY">
            </form>
        </center>
        <br><br>';
          }
          elseif(isset($_POST['weeserc']))
          {
            $wvhu=$_POST['weemvm'];
            $wcfr="SELECT * FROM `week` WHERE `Moviename` like '$wvhu%'";
            $wxx=$con->query($wcfr);
            if($wxx->num_rows>0)
            {
              while($wgb=$wxx->fetch_assoc())
              {
                echo'<div class="main">
                <br>
                <h3>'.$wgb['SI.NO'].'<//h3>
                <h2 class="mname">'.$wgb['Moviename'].'</h2><hr>
                <table>
                    <tr>
                        <th>
                            <div class="first">
                                <table>
                                    <tr>
                                        <th>
                                            <img class="mimg" src="'.$wgb['Movie image'].'" alt="">
                                        </th>
                                    </tr>
                                </table>        
                            </div>
                        </th>
                        <th>
                            <div class="second">
                                <table>
                                    <tr>
                                            <th>
                                                  <h4 class="klkl">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.$wgb["Date"].'</h4>
                                                </th>
                                            </div>
                                        </tr>
                                    </table>
                                    <div class="fifth">
                                        <table>
                                            <tr>
                                                <th>
                                                    <h3>DESCRIPTION:</h3>
                                                </th>
                                            </tr>
                                            <tr class="fifthsub">
                                                <th>
                                                    <p class="jkjk">'.$wgb["Description"].'</p>
                                                </th>
                                            </tr>
                                        </table>    
                                    </div>
                                    <div class="sixth">
                                        <table>
                                            <tr>
                                                <th>
                                                    <h5>GENRE:</h5>
                                                </th>
                                                <th>
                                                    <h3 class="sixthsub">'.$wgb["Genre"].'</h3>
                                                </th>
                                                <th>
                                                    <h5 class="sixthsub2">DIRECTED BY:</h5>
                                                </th>
                                                <th>
                                                    <h3 class="sixthsub">'.$wgb["Director"].'</h3>
                                                </th>
                                            </tr>
                                        </table>   
                                    </div>
                                </div>
                            </th>
                        </tr>
                    </table>
                </div>';
              }
            }
            else{
              echo'<h1>NO DATA FOUND</h1>';
            }
        }
          ?>
    </body>
</html>