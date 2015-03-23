<?php
/*
  数组 A 中任意两个相邻元素大小相差 1，现给定这样的数组 A 和目标整数 t，
找出 t 在数组 A 中的位置
*/
  function findInArray($array,$target){
	  $index = $array[0] - $target;
	  $index = $index > 0? $index: -$index;
	  if($index > count($array))
		  return -1;
	  if($array[$index] == $target)
	    return $index;
	  else 
		return -1; 
	  
	  
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
		   $array[] = $i+0.6;
		}
	   $target = 908.6;
	   $index = binarySearch($array,$target);
	   $index1 = findInArray($array,$target);
	   
	   echo ' target-----> '.$target.' is---> '.$index;
	   echo ' target-----> '.$target.' is---> '.$index1;
	   
   }
   main();
?>