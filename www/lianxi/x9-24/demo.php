<?php
	$arr1 = array(
			'a'=>'apple',
			'b'=>'banana',
			'c'=>'caomei',
			'd'=>'digua'
		);
	$arr2 = array(
			'静静',
			'菲菲',
			'秀秀',
			'晓晓',
		);
	// var_dump($arr);
	// var_dump($arr2);
	// $arr3 =array();
	// $arr4 =array(1,3,4,5,6);
	// $new = array_combine($arr,$arr2);
	// var_dump($new);


	function my_combine($a,$b){
    $lenth1 = count($a);
    $lenth2 = count($b);
    if($lenth1 != $lenth2){
        return false;
    }
    foreach($a as $v){
        $new_arr1[] = $v;
    }
    foreach($b as $value){
        $new_arr2[] = $value;
    }
    
    //$new_arr[$new_arr1[0]] = $new_arr2[0];
    //$new_arr['apple'] = '黄渤';
    for($i=0;$i<count($a);$i++){
        $new_arr[$new_arr1[$i]] = $new_arr2[$i];
    }
    return $new_arr;
}

var_dump(my_combine($arr1,$arr2));