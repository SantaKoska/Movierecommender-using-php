<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta value="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="kaka.css">
    <link rel="stylesheet" href="poster.css">
    <link rel="stylesheet" href="universe.css">
    <title>MOVIE RECOMMENDER</title>
  </head>
  <body  style="background-color: black;">
    <div id="carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="5000">
          <img src="moving stuff/1.png" class="d-block w-100" alt="first">
        </div>
        <div class="carousel-item" data-bs-interval="5000">
          <img src="moving stuff/2.png" class="d-block w-100" alt="second">
        </div>
        <div class="carousel-item" data-bs-interval="5000">
          <img src="moving stuff/3.png" class="d-block w-100" alt="third">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script> 
<form method="post" action="#" class="loc">
  <button name="week" class="rdr" id="week">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
    <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm4 0v6h8V1zm8 8H4v6h8zM1 1v2h2V1zm2 3H1v2h2zM1 7v2h2V7zm2 3H1v2h2zm-2 3v2h2v-2zM15 1h-2v2h2zm-2 3v2h2V4zm2 3h-2v2h2zm-2 3v2h2v-2zm2 3h-2v2h2z"/>
    </svg><h5>NEW WEEK</h5>
  </button>
  <button name="sort" class="rdr">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-filter-circle-fill" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16M3.5 5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1 0-1M5 8.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m2 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5"/>
    </svg><h5>GENRE SORT</h5></button>
  <button name="cuniverse" class="rdr">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-diagram-2-fill" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H11a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 5 7h2.5V6A1.5 1.5 0 0 1 6 4.5zm-3 8A1.5 1.5 0 0 1 4.5 10h1A1.5 1.5 0 0 1 7 11.5v1A1.5 1.5 0 0 1 5.5 14h-1A1.5 1.5 0 0 1 3 12.5zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1A1.5 1.5 0 0 1 9 12.5z"/>
    </svg>
    <h5>C-UNIVERSE</h5>
  </button>
</form>
<br>
<?php

include "connect.php";
  if(isset($_POST["sort"]))
{
  include "ttt.php";  
  
}
if(isset($_POST['search']))
  {
    $varcpor=$_POST["genre"];
    $sql1="SELECT * FROM `newcinema` WHERE `Genre`='$varcpor'ORDER BY `IMDB`DESC";
    $result=$con->query($sql1);
    if($result->num_rows>0)
    {
      while($row=$result->fetch_assoc())
      {
        echo'
        <div class="main">
        <br>
        <h2 class="mname">'.$row['Moviename'].'</h2><hr>
        <table>
            <tr>
                <th>
                    <div class="first">
                        <table>
                            <tr>
                                <th>
                                    <img class="mimg" src="'.$row['Movieimage'].'" alt="">
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
                                        <h4 class="klkl">-'.$row["IMDB"].'</h4>
                                    </th>
                                </div>
                                <div class="fourth">
                                    <th>
                                        <img class="rtomt" src="resources/Rotten Tomatoes.png" alt="">  
                                    </th>
                                    <th>
                                        <h4 class="klkl">-'.$row["Rottentomato"].'%</h4>
                                    </th>
                                    <th>
                                          <h4 class="klkl">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.$row["Date"].'</h4>
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
                                            <p class="jkjk">'.$row["Description"].'</p>
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
                                            <h3 class="sixthsub">'.$row["Genre"].'</h3>
                                        </th>
                                        <th>
                                            <h5 class="sixthsub2">DIRECTED BY:</h5>
                                        </th>
                                        <th>
                                            <h3 class="sixthsub">'.$row["Director"].'</h3>
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
if(isset($_POST["cuniverse"]))
{
  include "mar.html";
}
if(isset($_POST['search1']))
{
  $poda=$_POST['universe'];
  $sql2="SELECT * FROM `newcinema` WHERE `Universe`= '$poda' ORDER BY `Date`";
  $result1=$con->query($sql2);
  if($result1->num_rows>0)
  {
    while($row=$result1->fetch_assoc())
      {
        echo'
        <div class="main">
        <br>
        <h2 class="mname">'.$row['Moviename'].'</h2><hr>
        <table>
            <tr>
                <th>
                    <div class="first">
                        <table>
                            <tr>
                                <th>
                                    <img class="mimg" src="'.$row['Movieimage'].'" alt="">
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
                                        <h4 class="klkl">-'.$row["IMDB"].'</h4>
                                    </th>
                                </div>
                                <div class="fourth">
                                    <th>
                                        <img class="rtomt" src="resources/Rotten Tomatoes.png" alt="">  
                                    </th>
                                    <th>
                                        <h4 class="klkl">-'.$row["Rottentomato"].'%</h4>
                                    </th>
                                    <th>
                                          <h4 class="klkl">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.$row["Date"].'</h4>
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
                                            <p class="jkjk">'.$row["Description"].'</p>
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
                                            <h3 class="sixthsub">'.$row["Genre"].'</h3>
                                        </th>
                                        <th>
                                            <h5 class="sixthsub2">DIRECTED BY:</h5>
                                        </th>
                                        <th>
                                            <h3 class="sixthsub">'.$row["Director"].'</h3>
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
if(isset($_POST["week"]))
{
    $sql5="SELECT * FROM `week` WHERE 1 order by `Date`";
    $result5=$con->query($sql5);
    if($result5->num_rows>0)
  {
    while($row=$result5->fetch_assoc())
      {
        echo'
        <div class="main">
        <br>
        <h2 class="mname">'.$row['Moviename'].'</h2><hr>
        <table>
            <tr>
                <th>
                    <div class="first">
                        <table>
                            <tr>
                                <th>
                                    <img class="mimg" src="'.$row['Movie image'].'" alt="">
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
                                          <h4 class="klkl">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.$row["Date"].'</h4>
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
                                            <p class="jkjk">'.$row["Description"].'</p>
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
                                            <h3 class="sixthsub">'.$row["Genre"].'</h3>
                                        </th>
                                        <th>
                                            <h5 class="sixthsub2">DIRECTED BY:</h5>
                                        </th>
                                        <th>
                                            <h3 class="sixthsub">'.$row["Director"].'</h3>
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
?>
</body>
</html>