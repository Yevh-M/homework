<?php
// Створити масив з 5 країн,
// вивести масив на екран за допомогою print_r з використанням тега форматованого виведення

$countries = array(China, India, USA, Indonesia, Brazil);

echo '<pre>';
print_r($countries);
echo '</pre>';
?>

<?php
// Асоціативний масив

$countries = array('China' => Beijing, 'India' => New_Delhi, 'USA' => Washington, 'Indonesia' => Jakarta, 'Brazil' =>Brasília);

echo '<pre>';
print_r($countries);
echo '</pre>';

?>

<?php
//Багатовимірний масив

$book1 = array('style' => novel, 'author' => Ernest_Hemingway, 'name' => The_Old_Man_and_the_Sea, 'price' => 9.99,);
$book2 = array('style' => psychological_horror, 'author' => Stephen_King, 'name' =>  Duma_Key, 'price' => 15.95,);
$book3 = array('style' => quest, 'author' => Paulo_Coelho, 'name' => The_Alchemist, 'price' => 16.39,);
$books_shop = array($book1, $book2, $book3);

echo '<pre>';
print_r ($books_shop);
echo '</pre>';



