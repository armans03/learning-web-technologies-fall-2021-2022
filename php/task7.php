 <?php

function star(){
 $n=3;
 for ($i = 0; $i < $n; $i++)
    {
          
        for($j = 0; $j <= $i; $j++ )
        {
              
            echo "* ";
        }
  
        echo "<br>";
        
    }
}

function number(){
$rows = 3; 
for($index = $rows; $index>=1; --$index)
{
for($j = 1; $j<=$index ; ++$j)
{
echo ($j);
}
echo "<br>";
}
}

function alphabet()
{
 $n=3;
 $alphabet = 'A';
 for ($i = 0; $i < $n; $i++)
    {
          
        for($j = 0; $j <= $i; $j++ )
        {
              
            echo "$alphabet ";
            ++$alphabet;
        }
  
        
        echo "<br>";
    }
}

echo "<table border= >
<tr>
<td>".star()."</td> 
<td>".number()."</td>
<td>".alphabet()."</td>
</tr>
</table>"

?>