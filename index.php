<?php
// Output Examples
// "1.37 Terabyte"
// "0.46 Terabyte"

// Challenge 1

// HINT ===> in linux os
echo "home directory " . round(disk_total_space("/home") / 1024 / 1024 / 1024 / 1024, 2) . "<br>";
// echo "home directory " . round(disk_free_space("/home")/1024/1024/10241024, 2) ."<br>";

echo "root directory " . round(disk_total_space("/") / 1024 / 1024 / 1024 / 1024, 2) . "<br>";
// echo "root directory " . round(disk_free_space("/")/1024/1024/1024/1024, 2) ."<br>";

?>



<?php
// Challenge 2
// Output
// "Size In Megabyte Is 32"
// "Size In Kilobyte Is 33261"
// echo "Size In Megabyte Is " . round(filesize("React.mp4") / 1024 / 1024) . "<br>";
// echo "Size In Kilobyte Is " . round(filesize("React.mp4") / 1024) . "<br>";

?>


<?php
// challenge 3
// mkdir("Programming/PHP", 0711, true);
// rmdir("Programming");


function deleteDir($dir)
{
  if (!file_exists($dir)) {
    return false;
  }

  if (!is_dir($dir)) {
    return unlink($dir);
  }

  foreach (scandir($dir) as $d) {
    if (in_array($d, [".", ".."]))
      continue;
    deleteDir($dir . DIRECTORY_SEPARATOR . $d);
  }

  return rmdir($dir);
}

deleteDir("Programming");


?>

<?php
// Challenge 4
// echo change_permissions("Elzero"); // This Is Directory And Only Files Allowed
// echo change_permissions("Work.docx"); // File Extension Is Not Txt
// echo change_permissions("Result.txt"); // Permissions Changed


// function change_permissions($file): string
// {
//   if (!is_file($file) && is_dir($file)) {
//     return "This Is Directory And Only Files Allowed<br>";
//   }

//   if (pathinfo($file)["extension"] !== "txt") {
//     return "File Extension Is Not Txt<br>";
//   }

//   chmod($file, "0700");
//   return "Permissions Changed<br>";

// }



?>


<?php
// Challenge 5
// Output

// "index.php"
// "index.php"
// "index.php"
// "index.php"

// echo pathinfo("index.php")["basename"] . "<br>";
// echo basename(__File__) . "<br>";
// echo basename($_SERVER['PHP_SELF']) . "<br>";
// echo basename($_SERVER['SCRIPT_FILENAME']) . "<br>";

?>

<?php 
// Challenge 6

// $handle = fopen("elzero.txt", "r");
// #1
// echo fgets($handle) . " " . fgets($handle) . "<br>";

// #2
// rewind($handle);
// echo fread($handle, 23) . "<br>";

// #3
// // fseek($handle, 0);
// echo stream_get_contents($handle, 23, 0)."<br>";


// fclose($handle);

// #4
// echo file_get_contents("elzero.txt", false, Null, 0, 23) . "<br>";

// #5 
// $file = file("elzero.txt");
// echo $file[0] . $file[1] . "<br>";
// echo <<<Here
// {$file[0]} {$file[1]}
// <br>
// Here;

// #6
// readfile("elzero.txt");

// echo "<br>";



?>

<?php 
// Challenge 7
$start = mb_strlen("Hello ");
$numberOfBytesNeedReplace = mb_strlen("Osamaa");
$content = file_get_contents("elzero.txt");
$content = substr_replace($content, "Elzero", $start, $numberOfBytesNeedReplace);
file_put_contents("elzero.txt", $content);


$content = file_get_contents("elzero.txt");
$content = str_replace("Osamaa", "Elzero", $content );
file_put_contents("elzero.txt", $content);

?>


