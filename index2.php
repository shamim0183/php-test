<?php

function multiplication($firstDigit,$secondDigit,$thirdDigit){
    echo "Multiplication Table No: ", $firstDigit, " To ", $thirdDigit, "<br>";
    for($x = $firstDigit; $x <= $thirdDigit; $x++){
       
        for($y = 1; $y <= $secondDigit ; $y++){
            
            echo $x."x".$y." = ". $x*$y. "<br>";
            
            
            }
           
            echo "<br>";
        }
        
        
    }

multiplication("1","10","7");
?>
<?php

?>

