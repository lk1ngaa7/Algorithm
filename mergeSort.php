<?php
  function mergeSort($a){
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
	function Merge($A,$B,$C){
	   $lb = 
	
	}

?>