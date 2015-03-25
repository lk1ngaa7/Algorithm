<?php
  function mergeSort(&$a){
	  $len = count($a);
	  $b = array();
	  $c = array();
	  if($len > 1){
		  $i = 0;
		  $middle = $len >> 1;
		  foreach($a as $k){
			  if($i = $middle)
			     continue;
			 $b[] = $k;
		      $i++;
		}
		 for(;$i < $len;$i++){
			 $c[] = $a[$i]; 
		 } 
		  mergeSort($b);
		  mergeSort($c);
		  Merge($a,$b,$c);
	  }
	  
  }
	function Merge(&$A,&$B,&$C){
	   $lb = count($B);
	   $lc = count($C);
	   $b = 0;
	   $c = 0;
	   $a = 0;
	   while($b < $lb && $c < $lc){
		   if($B[$b] >= $C[$c]){
			   $A[$a++] = $B[$b++];
		   }else{
			   $A[$a++] = $C[$c++];
		  }
        } 
		if($b < $lb){
		    while($b < $lb){
				$A[$a++] = $B[$b++]; 
			}
			
		}
		if($c < $lc){
			while($c < $lc){
				
				$A[$a++] = $C[$c++];
				
			}
			
		}
	}
    function main(){
		$array = [13,1,23,8,6,41,313,87,41,1,3,4,86,4,55,1];
		mergeSort($array);
		foreach($array as $a){
		   echo $a;
		   echo '<br>';
		}
	}
	main();
?>