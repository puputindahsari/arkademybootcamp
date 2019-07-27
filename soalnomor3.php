<?php 
 for ($row=0; $row<7; $row++) {
      for ($column=0; $column<=7; $column++) 	{
           if (($column == 1 or $column == 5) or ($row == 3 and $column > 1 and $column < 6)) echo "*";
            else echo " "; 	} 
            echo "\n"; 
        } 
?>