<?php
  function findInArray($array,$target){
	  
	  
  }
  function binarySearch($array,$target){
	  $left = 0;
	  $right = count($array) - 1;
	  while($left <= $right){
		  
			$middle = $left + (int)(($right - $left)/2);
		    
			if($array[$middle] < $target)
				 $left = $middle + 1;
			 else if($array[$middle] > $target) 
				 $right = $middle - 1;
			 else 
				 return $middle;
		
	}
		return -1;
  }
   function main(){
	   
	   $i = 0;
	   $array = array();
	   for(;$i<=1000;$i++){
		   $array[] = $i;
		}
	   $target = 908;
	   $index = binarySearch($array,$target);
	   echo ' target-----> '.$target.' is---> '.$index.' and the value is: '.$array[$index];
	   
   }
   main();
?>