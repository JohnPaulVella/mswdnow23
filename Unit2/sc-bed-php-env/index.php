<?php

$myName = 'John Paul';
$mySurname = 'Vella';

echo $myName;
echo $mySurname;

// The . is used for concatenation
echo '<p>My name is ' . $myName . '</p>';

// Variable interpolation - has to be with double quatation marks
echo "<p>My surname is $mySurname</p>"; 

$shortStory = <<<BACON
<p>There once was a man from Peru, who dreamt he was eating his shoe.</p>
<p>He woke up one night, in quite a fright to find that his dream had come true!</p>
BACON;
echo $shortStory;

// Fun with data types
$anInt = 42;
echo "<p>The value is $anInt, type is " . gettype($anInt) . '</p>';

$aFloat = 42.21;
echo "<p>The value is $aFloat, type is " . gettype($aFloat) . '</p>';

$country = 'Malta';
echo "<p>The value is $country, type is " . gettype($country) . '</p>';

$isRaining = true;
echo "<p>The value is $isRaining, type is " . gettype($isRaining) . '</p>';

// Using Arrays
$names = ['Valentino', 'Olga', 'Warren', 'Daniel'];
echo '<p>Names of Students:</p>';
print_r($names);

$company = ['CEO'=>'Alice Anderson', 'CTO'=>'Bob Barker'];
echo '<p>Company Exectives:</p>';
print_r($company);

// Type coercion
$val1 = 89;
$val2 = "42";
$val3 = $val1 + $val2;
echo "<p>The result is $val3</p>";

// Type casting
$val4 = "29";
$val5 = 42.82;
$val6 = (int) $val4 + (int) $val5;
echo "<p>The next result is $val6</p>";

// Constants
define('PI', 3.14159);
echo '<p>Approximate value of PI is ' . PI . '</p>';

const L = 6.02e23;
echo '<p> Approximate Avogadro constant: ' . L . '</p>';

// Functions
function greetUser($name)
{
    return "Hello there, $name!";
}

echo '<p>' . greetUser('Keith') . '</p>';
echo '<p>' . greetUser('Oksana') . '</p>';

// Using printf
$animal = 'fox';
printf('%s Did you know that the quick brown %s jumps over the lazy %s' , greetUser('Keith'), $animal, 'dog');

$cartTotal = 89.6592;
printf('<p>Total in your cart: €%.2f</p>', $cartTotal);

$student1 = 4;
$student2 = 32;
$student3 = 168;
printf('<p>Student 1: %03d, Student 2: %03d, Student 3: %03d</p>', $student1, $student2, $student3);

// Variable inspection
$sampleArray = ['Joe', 12, 11.23, true, new stdClass()];
echo "<p>The first item in the array is $sampleArray[0].</p>";

echo '<p>Viewing the entire array with print_r():</p>';
print_r($sampleArray);

echo '<p>Viewing all details with var_dump():</p>';
var_dump($sampleArray);

// Checking if a variable exists
$firstVar = 100;
$secondVar = null;
echo '<p>First variable: ' . (isset($firstVar) ? 'Is Set' : 'Not Set') . '</p>';
echo '<p>Second variable: ' . (isset($secondVar) ? 'Is Set' : 'Not Set') . '</p>';
echo '<p>Third variable: ' . (isset($thirdVar) ? 'Is Set' : 'Not Set') . '</p>';