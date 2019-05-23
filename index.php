<?php
//session_start();
//$_SESSION['pagename'] = "resources_index";
//include 'db/db.php'; include 'db/error.php';
//include 'db/pushhits.php';
?>

<html>
<head>
<title>icebowl.cc</title>
<style>
html{
 font-family: system-ui, sans-serif;
}

body{
    background-color: #fff;
    color: #2aa198;
   font-family: system-ui, sans-serif;
}
a{
  color: #268bd2;
  text-decoration: none;
}

a:hover{
  color: #2aa198;
}

.location{
  position:absolute;
  top:110px;
  left:10%;
  font-family: system-ui , sans-serif;
  background-color: #fff ;
  color: #2aa198;
  border: solid 5px;
  border-style: solid;
  border-color: #586e75;
  border-radius: 30px;
  padding : 10px;

.thetop{
  position:absolute;
  top:10px;
  left:10%;
  font-family: system-ui , sans-serif;
  background-color: #fff ;
  color: #2aa198;
}
/*
base03    #002b36
base02    #073642
base01    #586e75
base00    #657b83
base0     #839496
base1     #93a1a1
base2     #eee8d5
base3     #fdf6e3
yellow    #b58900
orange    #cb4b16
red       #dc322f
magenta   #d33682
violet    #6c71c4
blue      #268bd2
cyan      #2aa198
green     #859900
*/
</style>
</head>
<body>
<div class = "thetop">
icebowl.cc<br />
<div style="background-color:#203731 ; color:white;padding:1px;">#203731</div>
<div style="background-color:#ffb612; color:white;padding:1px;">#ffb612</div>
<div style="background-color:#71b09f; color:white;padding:1px;">#71b09f</div>
<div style="background-color:#79b0aa; color:white;padding:1px;">#79b0aa </div>
<div style="background-color:#7fbbb3; color:white;padding:1px;">#7fbbb3</div>
<div style="background-color:#7a8787; color:white;padding:1px;">#7a8787;</div>
<div style="background-color:#b1c7c7; color:white;padding:1px;">#b1c7c7;</div>


</div>
<div class = "location">
<?php
//error_reporting(0);
error_reporting(E_ALL);
ini_set('display_errors', 1);
//


//
$count = 0;
$filelist = array();
$filename = array();
$imgname = array();
if ($handle = opendir('.')) {
  while (false !== ($file = readdir($handle))){
    if ($file != "." &&  $file != "index.php" &&  $file != ".htaccess" &&  $file != ".git" &&  $file != "css" &&  $file != "img" &&  $file != "README.md"){
      $imgname[$count] = "file.png";
      			if (false === strpos((string)$file ,'.'))$imgname[$count] = "folder.png";

      $filelist[$count] = $file;
      if ($file == ".."){
        $file = "RETURN TO PARENT FOLDER";
      }
        $filename[$count] = $file;
        $count = $count + 1;
      }
    }
    closedir($handle);
  }
?>

<?php
//rsort($filelist);
//rsort($filename);
// search for ".."
$parent = -1;
$urgent = -1;
for ($i = 0; $i < sizeof($filelist);$i++){
//  echo " $i ";
//  echo "   ";
//  echo " $filelist[$i] ";
  if ($filelist[$i] == ".."){
    $parent = $i;
	}
//  echo "<br />";

}

for ($i = 0; $i < sizeof($filelist);$i++){
  if ($i == $parent ) continue;
  echo "<img src = 'http://icebowl.cc/img/".$imgname[$i]."'>";
  echo "<a href = '"."$filelist[$i]"."'>"."$filename[$i]"." </a><br>";
}
echo "<br /><a href = '"."$filelist[$parent]"."'>"."<img src = 'http://icebowl.cc/img/back.png'></a>";
echo "&nbsp;<a href = '"."$filelist[$parent]"."'>"."$filename[$parent]"."</a>";
?>
<br /> 
</h2>
</div>

</body>
</html>
