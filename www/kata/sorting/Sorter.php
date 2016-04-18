<?php 

class Sorter
{
	
	// selection sort always performs Θ(n^2) swaps
	public function selection_sort($array)
	{
		for ($i = 0; $i < count($array); ++$i) {
	        $min_value = null;
	        $min_key = null;
	        for($j = $i; $j < count($array); ++$j) {
	            if (null === $min_value || $array[$j] < $min_value) {
	                $min_key = $j;
	                $min_value = $array[$j];
	            }
	        }
	        $array[$min_key] = $array[$i];
	        $array[$i] = $min_value;
	    }
	    return $array;
	}

 	// insertion sort performs from Θ(n) to Θ(n^2)
	public function insertion_sort(array $array) 
	{
        for ($i = 0; $i < count($array); ++$i) {
            $element = $array[$i];
            $j = $i;
            while($j > 0 && $array[$j-1] > $element) {
                //move value to right and key to previous smaller index
                $array[$j]=$array[$j-1];
                $j = $j-1;
            }
            //put the element at index $j
            $array[$j]=$element;
        }
        return $array;
    }

 	// bubble sort performsfrom Θ(n) to Θ(n^2)
	public function bubble_sort(array $array) 
	{
        for ($i = 0; $i < count($array); ++$i) {
        	for ($j = 0; $j < count($array); ++$j) {
        		if( $array[$i] < $array[$j] ){
        			$tmp = $array[$i];
        			$array[$i] = $array[$j];
        			$array[$j] = $tmp;
        		}
        	}
        }
    	return $array;
    }

 	// quick sort performsfrom Θ(n log n) to Θ(n^2)
    function quick_sort($array)
	{
		$length = count($array);
		if($length <= 1)
			return $array;
		$pivot = $array[0];
		$left = $right = array();
		for($i = 1; $i < count($array); $i++)
		{
			if($array[$i] < $pivot){
				$left[] = $array[$i];
			}
			else{
				$right[] = $array[$i];
			}
		}
		return array_merge($this->quick_sort($left), array($pivot), $this->quick_sort($right));
	}


	public function merge_sort($array) {

	    // Only process if we're not down to one piece of array
	    if(count($array)>1) {
	        // Find out the middle of the current array set and split it there to obtain to halfs
	        $array_middle = round(count($array)/2, 0, PHP_ROUND_HALF_DOWN);
	        // and now for some recursive magic
	        $array_part1 = $this->merge_sort(array_slice($array, 0, $array_middle));
	        $array_part2 = $this->merge_sort(array_slice($array, $array_middle, count($array)));

	        // Setup counters so we can remember which piece of array in each half we're looking at
	        $counter1 = $counter2 = 0;

	        // iterate over all pieces of the currently processed array, compare size & reassemble
	        for ($i=0; $i<count($array); $i++) {
	            // if we're done processing one half, take the rest from the 2nd half
	            if($counter1 == count($array_part1)) {
	                $array[$i] = $array_part2[$counter2];
	                ++$counter2;
	            // if we're done with the 2nd half as well or as long as pieces in the first half are still smaller than the 2nd half
	            } elseif (($counter2 == count($array_part2)) or ($array_part1[$counter1] < $array_part2[$counter2])) { 
	                $array[$i] = $array_part1[$counter1];
	                ++$counter1;
	            } else {
	                $array[$i] = $array_part2[$counter2];
	                ++$counter2;
	            }
	        }
	    }
	    return $array;
	}


}


?>