<?php
session_start();

?>
<!DOCTYPE html>
<h1tml>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
var globid=0;
function myfun(id){
    globid=id;
    var xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange=function(){
        if(this.readyState==4){
                document.getElementById("myaudio").src=xhttp.responseText;

        }
    }

    xhttp.open("GET","querymuzik.php?q="+id,true)
    xhttp.send()
}

function nextsong(){
  globid++;
  myfun(globid);
}
</script> 
<style>
    
    </style>

</head>
<body>
<nav class="navbar-expand-lg navbar-light bg-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
<?php
echo $_SESSION['email'];

?>

<?php 
require 'connection ui.php';
$sql="select * from song";
$result=mysqli_query($conn,$sql);

while($songarr = mysqli_fetch_assoc($result)) {
        echo "<p onclick='myfun(".$songarr['id'].")'>". $songarr['title']."   ".$songarr['artist']."</p></br></br>";
        //chutiya code echo '<button type="button" name="back" onclick="myfun('.($songarr['id']-1).')">back</button> <button type="button" name="next">next</button>';
  }
?>

<button value="lut gaye" onclick="myfun()" >lut gaye</button>
<audio controls id="myaudio" src="jugni.mp3" type="audio/mpeg">

</audio>
<button onclick="nextsong()"><img width="100px" height="100px" src="next-button.png"></img></button>
</div>
</body></html>