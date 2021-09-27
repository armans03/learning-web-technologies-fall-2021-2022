<?php

 $arr = array('arman','salman','sufiur','foisal');

   function search($arr,$el){

       for($i=0;$i<3;++$i){

           if($arr[$i]==$el){

               return true;

           }

       }

       return false;

   }




  




   echo 'arman is '.(search($arr,'arman')?'':'not ').'in array<br>';

   echo 'shah is '.(search($arr,'shah')?'':'not ').'in array<br>';

   echo 'salman is '.(search($arr,'salman')?'':'not ').'in array<br>';




?>