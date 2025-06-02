<?php
// Turn off all error reporting
error_reporting(0);

//GET url-
$url = $_GET['id'];
$stream = $_GET['stream'];

//URL String Replace
$search1 = array("https://drive.google.com/file/d/", "/view?usp=drivesdk", "/view", "/preview");
$replace1 = array("", "", "", "");
$string1 = "$url";
//replace
$Converted1 = (str_replace($search1, $replace1, $string1));
//Converted URL
$id = $Converted1;
?>

<form name='myform' id='myform' method='GET' action='drive.php'>
    <input type="text"  name='id' value="<?php echo $id ?>" hidden>

<?php 
if (isset($stream))  
     {
?>
     <input type="text" name="stream" value="<?php echo "$stream"; ?>" hidden>

<?php
     }else{
        echo $variable = "";
     }
?>

    <input type='submit' id='send' name='send' value='Send' hidden>
</form>
<script>            
    document.addEventListener('DOMContentLoaded', function(event) {
            document.createElement('form').submit.call(document.getElementById('myform'));
            });         
</script>