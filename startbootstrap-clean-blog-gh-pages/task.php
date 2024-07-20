<?php

//task 1
// for($i = 1; $i <=10; $i++) {
//     if($i > 1){
//         echo "-";
//     }
//     echo $i;
// }


// task 2

// $numbers = [ 1 , 1 ,  1 , 2 , 2, 3 ,6 , 7 , 7 ,4 ,5,5 ];
// $unique_numbers = [];
// foreach($numbers as $number) {
//     if(!in_array($number, $unique_numbers)){
//         array_push($unique_numbers, $number);
//     }
// }
// sort($unique_numbers);
// foreach($unique_numbers as $number){
//     echo $number;
// }



// task 3
// $str = "eraasoft";
// $char_search_for = 'r';
// $count = 0;

// for ($i = 0; $i < strlen($str); $i++){

//     if($str[$i] == $char_search_for){
//         $count++;
//     }
// }

// echo "char '$char_search_for' appears in \"$str\" $count times";


// task 4

// $start = 1;
// $end = 50;

// for ($i = $start; $i <= $end; $i++) {
//     if ($i % 3 == 0 && $i % 5 == 0) {
//         echo "FizzBuzz";
//     } elseif ($i % 3 == 0) {
//         echo "Fizz";
//     } elseif ($i % 5 == 0) {
//         echo "Buzz";
//     } else {
//         echo $i;
//     }
//     echo "<br>";
// }




//  task 5
// $start = 0;
// $end = 30;
// $count = 0;
// for ($i = $start; $i <= $end; $i++) {
//     $count += $i;
// }

// echo $count;



//  task 6
// function findLargeNumber($numbers){
//     $largest_number = $numbers[0];

//     foreach($numbers as $number){
//         if($number > $largest_number){
//             $largest_number = $number;
//         }
//     }

//     return $largest_number;
// }

// echo findLargeNumber([ 5 , 15 , -10 , 100 , 250 , 0 , 1 ]);



//  task 7
// function findSmallNumber($numbers){
//     $smallest_number = $numbers[0];

//     foreach($numbers as $number){
//         if($number < $smallest_number){
//             $smallest_number = $number;
//         }
//     }

//     return $smallest_number;
// }

// echo findSmallNumber([ 5 , 15 , -10 , 100 , 250 , 0 , 1 ]);



// task 8

// function getFactorial($number) {
//     $fact = 1;
//     for($i = 1; $i <= $number; $i++){
//         $fact *= $i;
//     }

//     return $fact;
// }

// echo getFactorial(4);


// task 9

// $i = 1;
// while($i <= 15){
//     if($i % 3 == 0){
//         echo "$i <br />";
//     }

//     $i++;
// }


// task 10

// $i = 1;
// while($i <= 15){
//     if($i % 2 == 0){
//         echo "$i <br />";
//     }

//     $i++;
// }


// task 11

// $person = array("name" => "John", "age" => 30, "city" => "New York");

// foreach($person as $key => $val){
//     echo "Key: $key, Value: $val <br>";
// }


// task 12

// $sales = array("Jan" => 100, "Feb" => 200, "Mar" => 150);
// $count = 0;
// foreach($sales as $sale){
//     $count += $sale;
// }

// echo "Count: $count";


// task 13

// $number = 8;

// for ($i = 1; $i <= 10; $i++) {

//     $res = $number * $i;
//     echo  "$number x $i = $res <br>";
// }



// task 14

// $students = array(
//     array("name" => "John", "age" => 20, "grade" => "A"),
//     array("name" => "Mary", "age" => 22, "grade" => "B"),
//     array("name" => "Tom", "age" => 18, "grade" => "A")
// );


// foreach($students as $studend){
//     foreach($studend as $key => $val){
//         echo "Key: $key, Value: $val <br>";
//     }
// }


// task 15

// $num = 1;

// do {
//     if ($num % 3 == 0) {
//         echo "$num <br>";
//     }
//     $num++;
// } while ($num <= 100);
































































