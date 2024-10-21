<?php
// function printIterable(iterable $myIterable) {
//   foreach($myIterable as $item) {
//     echo $item;
//   }
// }

// $arr = ["a", "b", "c"];
// printIterable($arr);


//return datatype -> function -> return data type

// function dispalyFullName($firstName, $lastName):string {
//   return $firstName . " " . $lastName;
// }

// echo dispalyFullName("Mehdi", "Ahmadi");


// function dispalyArray($string):array {

//   return explode(',', $string);
// }

// var_dump(dispalyArray("Mehdi,Sara,Ali,Reza"));


// function disaply($name):void {
//   echo $name;
// }

// disaply("Mehdi");


// function getIterable():iterable {
//   return ["a", "b", "c"];
// }

// $myIterable = getIterable();

// foreach($myIterable as $item) {
//   echo $item;
// }


// $fruits = ['Apple', 'Banana', 'Cherry', 'Orange']; // iterable -> array


// echo "Current Fuit " . current($fruits);
// echo "Current Fuit " . key($fruits);

// echo "fruit " . next($fruits) ;
// echo "<br>";
// echo "fruit " . next($fruits);
// echo "<br>";
// echo "Current fruit " . current($fruits);
// echo "<br>";
// // rewind($fruits);
// reset($fruits);

// echo "<br>";
// echo "Current fruit " . current($fruits) ;

// $fruits = ['Apple', 'Banana', 'Cherry', 'Orange'];
// echo "fruit " . next($fruits) ;
// echo "<br>";
// echo "fruit " . next($fruits);
// echo "<br>";
// echo "fruit " . next($fruits) ;
// echo "<br>";
// echo "fruit " . valid($fruits);

// while(valid($fruits)) {

//   echo "Valid Fruit: " . current($fruits);
//   next($fruits);
// }

// $fruits = ['Apple', 'Banana', 'Cherry', 'Orange'];

// while (current($fruits) !== false) {
//   echo "Valid Fruit: " . current($fruits) . "<br>";
//   next($fruits);
// }


// $fruits = ['Apple', 'Banana', 'Cherry'];
// echo current($fruits);
// echo "<br>";
// echo next($fruits);
// echo "<br>";
// echo current($fruits);


// $fruits = ['Apple', 'Banana', 'Cherry'];

// // Move to the next element
// next($fruits);

// echo current($fruits);


// $fruits = ['a' => 'Apple', 'b' => 'Banana', 'c' => 'Cherry'];

// // Gets the key of the current element
// echo key($fruits);
