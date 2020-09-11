<?php 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sort Character</title>
</head>
<body>

<form method="post" action="">
	<input type="text" name="input">
	<input type="submit">
</form>
<?php 
    $stringArray = array();
    $vowels = array();
    $index=0;
    $vowelsIndex=0;
    $consonantIndex=0;

	if(!isset($_POST["submit"])) {
        if(isset($_POST["input"])){
            //Clear input
            $data = str_replace(' ', '',strtolower($_POST["input"]));
            for($index; $index < strlen($data); $index++){
                $stringArray[$index] = $data[$index];
                //grouping
                if($stringArray[$index] == "a" ||
                   $stringArray[$index] == "i" || 
                   $stringArray[$index] == "u" || 
                   $stringArray[$index] == "e" || 
                   $stringArray[$index] == "o"){
                    $vowels[$vowelsIndex] = $stringArray[$index];
                    $vowelsIndex++; 
                }
                else{
                    $consonant[$consonantIndex] = $stringArray[$index];
                    $consonantIndex++;
                }
            }
            //Ordering
            $vowels = implode($vowels);
            $sparts = str_split($vowels);
            sort($sparts);
            $vowels = implode('',$sparts);

            $consonant = implode($consonant);
            $sparts = str_split($consonant);
            sort($sparts);
            $consonant = implode('',$sparts);
        
            echo 'Vowel Characters: '. "<br>".$vowels."<br>";
            echo 'Consonant Characters: '. "<br>".$consonant;

        }
    }
?>
</body>
</html>