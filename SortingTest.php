<?php

spl_autoload_register(
  function ($class_name) {
    include $class_name . '.php';
  }
);

//Making an instance of Sorting class and using the function for sorting

//String array
$strArray = array(
                array('Kevin ', 'Asya', 'Martin', 'Petko', 'John'),
                array('Aleks', 'Asya', 'Martin', 'Petko', 'John'),
                array('Asya', 'Nelly', 'Martin', 'Petko', 'John')
);

//Integer Array
$intArray = array(
                array(5, 4, 2, 8, 1),
                array(3, 9, 6, 3, 4),
                array(1, 9, 2, 5, 3)

);


$sorting = new Sorting();
$sorting->sortingArray($intArray);

?>
