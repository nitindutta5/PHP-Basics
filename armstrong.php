<?php
for($i=1;$i<1000;$i++)
{
  $n=$i;
 $sum=0; 
  while($n>0)
    {
      $num=$n%10;
      $sum=$sum+($num*$num*$num);
      $n=$n/10;
    }
      if($sum==$i)
            {
              echo $i."<br>";
            }
      
       }
 phpinfo(); 
?>