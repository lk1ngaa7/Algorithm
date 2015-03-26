<?php
 function  quickSort(&$array,$start,$last){
	$length = count($array);
	if($start  == $last || $length == 0)
		return ;
	$index = Partion($array,$start,$last);
	if($index > $start)
		quickSort($array,$start,$index - 1);
	if($index < $last)
		quickSort($array,$index + 1,$last);
 }
 function  swap(&$a,&$b){
	 $a = $a + $b;
     $b = $a - $b;	 
	 $a = $a - $b;
}
function Partion(&$array,$start,$last){
	
    $index = rand($start,$last);
    swap($array[$index],$array[$last]);
    $small = $start - 1	;
    for($index  = $start ;$index < $last; $index++){
		
		if($array[$index] < $array[$last]){
			    $small++;
			if($small != $index){
				
				swap($array[$small],$array[$index]);
			}
			
		}
	}
	$small++;
	swap($array[$small],$array[$last]);
	return $small;
	
}
function main(){
	
	$array = [4,1,53,1,3,41,53,4,8,4,35,13,5,1];
	quickSort($array,0,count($array) - 1);
	foreach($array as $a)
	   echo $a.'<br>';
	
	
}
main();

?>