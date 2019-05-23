<?php
//session_start();
//$_SESSION['pagename'] = "resources_index";
//include 'db/db.php'; include 'db/error.php';
//include 'db/pushhits.php';
?>

<html>
<head>
<title> 42 * </title>
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
    if ($file != "." &&  $file != "index.php" &&  $file != ".htaccess" ){
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
  echo "<img src = 'http://wa-appliedmath.org/img/".$imgname[$i]."'>";
  echo "<a href = '"."$filelist[$i]"."'>"."$filename[$i]"." </a><br>";
}
echo "<br /><a href = '"."$filelist[$parent]"."'>"."<img src = 'http://wa-appliedmath.org/img/back.png'></a>";
echo "&nbsp;<a href = '"."$filelist[$parent]"."'>"."$filename[$parent]"."</a>";
?>
<br /> <br />
Please contact me if you have any questions.   <br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h4>{ THIS SECTION OF THE WEBSITE IS UNDER CONSTRUCTION. }</h4>
</h2>
</div>

</body>
</html>
