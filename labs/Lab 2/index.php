<!DOCTYPE html>
<html> 
    <head> 
        <title> 777 Slot Machine</title>
    </head>
    <body>
        
        
        <?php
        
    
    function displaySymbol( $random_value ) {
        
            //$random_value = rand(0,3); //Generates a random value from 0 to 3
            
            // echo $random_value . "<br >"; //The dot is to concatanate text with variables
            
           
            if ($random_value == 0) {
                
                $symbol = "seven";
            
            } else if ($random_value == 1) {
                
                $symbol = "cherry";
                
            } else if ($random_value == 2) {
               
                $symbol = "orange";
                
            } else {
                
                $symbol = "lemon"; 
                
            }
            echo "<img src='img/$symbol.png' alt='$symbol' title=\"$symbol\" />";
  
    }    //displaySymbol
    
        
    $randomValue1 = rand(0,3); //generates random number from0 to 3
    displaySymbol($randomValue1); //calling the function
   
   
    $randomValue2 = rand(0,3); //generates random number from0 to 3
    displaySymbol($randomValue2); //calling the function
     
    $randomValue3 = rand(0,3); //generates random number from0 to 3
    displaySymbol($randomValue3); //calling the function
            
    
    echo "<br>Random value 1:  "  . $randomValue1 . "<br>"; 
    echo "Random value 2:  "  . $randomValue2 . "<br>";
    echo "Random value 3:  "  . $randomValue3 . "<br>";
    
    if ( $randomValue1 == $randomValue2 AND $randomValue2 == $randomValue3) {
        
        echo "JACKPOT!";
    }
    
              ?> 
      
      
      
      
      
    </body>
</html>