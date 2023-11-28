<?php
// Indexed Array
$fruits = array("Apple", "Banana", "Orange");
echo "Fruits: ";
foreach ($fruits as $fruit) {
    echo $fruit . " ";
}
echo "<br>";

// Associative Array
$age = array("Peter" => 35, "Ben" => 37, "Joe" => 43);
echo "Ages: ";
foreach ($age as $name => $ageValue) {
    echo $name . " is " . $ageValue . " years old. ";
}
echo "<br>";

// Multidimensional Array
$contacts = array(
    array(
        "name" => "Peter Parker",
        "email" => "peterparker@mail.com",
    ),
    array(
        "name" => "Clark Kent",
        "email" => "clarkkent@mail.com",
    ),
    array(
        "name" => "Harry Potter",
        "email" => "harrypotter@mail.com",
    )
);

echo "Contacts: <br>";
foreach ($contacts as $contact) {
    echo $contact["name"] . ": " . $contact["email"];
    echo "<br>";
}

// Array Functions
echo "<br>Array Functions:<br>";
echo "Number of fruits: " . count($fruits) . "<br>";
array_push($fruits, "Grapes"); // Adding an item
echo "Added Grapes to fruits<br>";
echo "Sorted Ages: ";
asort($age); // Sort associative arrays in ascending order, according to the value
foreach ($age as $name => $ageValue) {
    echo $name . " ";
}
echo "<br>";

// Checking if element exists
if (in_array("Apple", $fruits)) {
    echo "Apple is in the fruits array<br>";
}
?>
