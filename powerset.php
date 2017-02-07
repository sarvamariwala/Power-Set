<?php
$s = [ 'A','B','C','D'];
$numItems = count($s);
$i = 0;
echo "[";
foreach($s as $tmp ){
    echo $tmp;
    if(++$i != $numItems)
        echo ", ";
}
echo " ]";
echo "=>";
echo "";
$numItems = count(powerset($s,1));
$i = 0;
 echo "[ ],";
 foreach(powerset($s,1) as $value)
 {
     echo "[ ";
     $num = count($value);
     $j =0 ;
        foreach($value as $ans)
		{
            echo $ans;
            if(++$j != $num)
                echo ", ";
        }
        echo " ]";
        if(++$i != $numItems)
        echo ", ";
 }
function powerset($in,$minLength = 1) 
{
   $count = count($in);
   $members = pow(2,$count);
   $return = array();
   for ($i = 0; $i < $members; $i++) 
   {
      $b = sprintf("%0".$count."b",$i);
      $out = array();
      for ($j = 0; $j < $count; $j++) 
	  {
         if ($b{$j} == '1') $out[] = $in[$j];
      }
      if (count($out) >= $minLength) 
	  {
         $return[] = $out;
      }
   }
   sort($return);
   return $return;
}
?>
