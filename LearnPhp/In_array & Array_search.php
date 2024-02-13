<?php

// $food = array('orange','banana','apple',55,'graps');
// //true is use for strick mode find only same data type value
// if(in_array('55', $food, true)){
//     echo "Find Successful";
// }
// else{
//     echo"Cant't Find";
// }

// $foods = array(array('orange','blueberry'),array('mango','green apple'),'apple','graps');
// if(in_array(array('orange','blueberry'), $foods, true)){
//     echo "Find Successful";
// }
// else{
//     echo"Cant't Find";
// }


$food = array('orange','banana','apple',55,'graps');
//true is use for strick mode find only same data type value
echo(array_search('55', $food)) //show the index
?>