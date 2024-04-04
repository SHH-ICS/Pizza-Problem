<html>
<head>
<title>PHP Test</title>
</head>
<body>
<?php 
  $tax = 1.13;
  $onlytax = 0.13;
  $exitsizeloop = 1;
  $exittoppingloop = 1;
  while ($exitsizeloop == 1)
  {
     $size = readline("What type of pizza would you like? Large or XL?");
      $size = strtolower($size); // Convert the input to lowercase for easier comparison.
    $cost = 0;

    // Check the input for "Large" or "XL".
      if (strpos($size, "large") !== false)
       {
        $cost = 6;
        echo "You have chosen a Large Pizza <br />"; 
      }
      if (strpos($size, "xl") !== false) {
        $cost = 10;
        echo "You have chosen an XL Pizza<br />";
        }
     }
}
      else {
          echo "Please enter a valid Pizza size<br />";
       }
       if ($exitsizeloop == 0 ) {
          while ($exittoppingloop == 1)
            {

              $toppings = readline("How many topping would you like? 0-4?"); // Read the input for the number of toppings.

              // Check the input for valid topping numbers (0-4).

              switch ($toppings) {
                  case 0:
                      $cost = $cost + 0;
                      $exittoppingloop = 0;
                      break;
                 case 1:
                      $cost += 1;
                      $exittoppingloop = 0;

                      break; 
                 case 2:
                       $cost += 1.75;
                       $exittoppingloop  =0; 
                      break;
                 case 3:
                     $cost +=  2.5 ;
                     $exittoppingloop =  0;
                    break;
                case 4:
                   $cost += 3.35;  
                   $exittoppingloop =0;
                 break;

              }
          }
      echo "Your Subtotal is $", round($cost, 2), "<br />"; 
     echo "Your Tax is $",round($cost * $onlytax),"<br />" ; 
      echo "Your total is $",  round($cost*$tax, 2),"<br />";
          } 
    }
  }
  ?> 

</body>
</html>