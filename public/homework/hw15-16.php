<?php

/*	Задача 1.
	Создайте переменную $string и присвойте ей значение "Привет, мир!".
*/

	$string = "Привет, мир!";
	echo "Задача 1: " . $string . "</br>";
	
/*	Задача 2.
	Создайте переменные $str1 и $str2 и склейте их вместе с помощью оператора ".".
*/

	$str1 = "Привет, ";
	$str2 = " мир!";
	$result_2 = $str1 . $str2;
	
	echo "Задача 2: " . $result_2 . "</br>";
	
/*	Задача 3.
	Извлеките символы "W" и "o" из строки "Hello World!".
*/

	$string_task3 = "Hello World!";
	
	$search_W = strpos($string_task3, "W");
	$result_W = substr($string_task3, $search_W, 1);

	$search_o = strpos($string_task3, "o");
	$result_o = substr($string_task3, $search_o, 1);
	
	echo "Задача 3: Извлеченные символы - " . $result_W . " , " . $result_o . "</br>";
	
/*	Задача 4.
	Проверьте, содержит ли строка "Hello World!" подстроку "World".
*/

	$string_task4 = "Hello World!";
	$substr_task4 = "World";
	
	echo "Задача 4: ";
	if (strpos($string_task4, $substr_task4) !== false) {
		echo "Строка содержит 'World'." . "</br>";
	} else {
		echo "Строка НЕ содержит подстроку 'World'." . "</br>";
	}
	
/*	Задача 5.
	Замените все вхождения подстроки "world" на "everyone" в строке "Hello world!".
*/
	
	$string_task5 = "Hello world!";
	$result_5 = str_replace("world", "everyone", $string_task5);
	
	echo "Задача 5: " . $result_5 . "</br>";
	
/*	Задача 6.
	Удалите все HTML-теги из строки "<p>Hello, <b>world</b>!</p>".
*/
	
	$string_task6 = "<p>Hello, <b>world</b>!</p>";
	$result_6 = strip_tags($string_task6);
	echo "Задача 6: " . $result_6 . "</br>";
	
/*	Задача 7.
	Преобразуйте строку "HeLLo, WorLd!" к нижнему регистру.
*/
	
	$string_task7 = "HeLLo, WorLd!";
	$result_7 = strtolower($string_task7);
	echo "Задача 7: " . $result_7 . "</br>";
	
/*	Задача 8:
	Разбейте строку "apple,orange,banana" на массив из трех элементов.
*/
	
	$string_task8 = "apple,orange,banana";
	$fruitsArray = explode(",", $string_task8);
	
	echo "Задача 8: ";
	print_r($fruitsArray);
	echo "</br>";
	
/*	Задача 9:
	Создайте массив из 5 элементов и выведите на экран второй элемент.
*/
	
	$fruitsArr = array("apple", "pear", "orange", "banana", "kiwi");
	echo "Задача 9: " . $fruitsArr[1] . "</br>";
	
	
/*	Задача 10:
	Создайте массив чисел от 1 до 10, найдите сумму элементов массива и выведите на экран используя функцию array_sum;
*/
	
	$numbersArray = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
	$result_10 = array_sum($numbersArray);
	
	echo "Задача 10: " . $result_10 . "</br>";
	
/*	Задача 11:
	Создайте массив строк, отсортируйте его в алфавитном порядке и выведите на экран.
*/
	
	$fruitStore = array("banana", "apple", "orange", "grape", "kiwi");
	$result_11 = sort($fruitStore);
	
	echo "Задача 11: ";
	
	foreach ($fruitStore as $fruit) {
		echo $fruit . " ";
	}
	echo "</br>";
	
/*	Задача 12:
	Создайте двумерный массив и выведите на экран элемент, расположенный во втором ряду и третьем столбце.
*/
	
	$array_task12 = array(
		array(1, 2, 3),
		array(10, 20, 30),
		array(100, 200, 300)
	);

	echo "Задача 12: " . $array_task12[1][2] . "</br>";
	
/*	Задача 13:
	Создайте ассоциативный массив, где ключами будут названия фруктов, а значениями - их цена в рублях за килограмм. Выведите на экран цену апельсинов.
*/
	
	$fruitsPrices = array(
		"яблоко" => 100,
		"банан" => 150,
		"апельсин" => 200,
		"груша" => 250,
		"киви" => 300
	);

	echo "Задача 13: " . $fruitsPrices["апельсин"] . " рублей за килограмм </br>";
	
/*	Задача 14:
	Найти значение по ключу. Напишите функцию, которая принимает ассоциативный массив и ключ, и возвращает значение, связанное с этим ключом, если ключ существует, и null в противном случае.
*/
	
	function getValueByKey($arr, $key) {
		if (array_key_exists($key, $arr)) {
			return $arr[$key];
		} else {
			return null;
		}
	}
	
	$keyToFind = "апельсин";
	$result_14 = getValueByKey($fruitsPrices, $keyToFind);
	
	echo "Задача 14: " . $keyToFind . ": " . ($result_14 !== null ? $result_14 . " рублей за килограмм </br>" : "Ключ не найден </br>");
	
/*	Задача 15:
	Поиск наибольшего значения. Напишите функцию, которая принимает ассоциативный массив и возвращает наибольшее значение из всех значений в массиве.
*/
	function findMaxValue($arr) {
		return max($arr);
	}
	
	$maxValue = findMaxValue($fruitsPrices);
	echo "Задача 15: " . $maxValue . "</br>";

/*	Задача 16:
	Сортировка по значениям. Напишите функцию, которая принимает ассоциативный массив и сортирует его по значениям.
*/
	function sortByValues($arr) {
		asort($arr);
		return $arr;
	}
	
	$sortArray = sortByValues($fruitsPrices);
	
	echo "Задача 16: " . "</br>";
	foreach ($sortArray as $fruit => $price) {
		echo $fruit . ": " . $price . " рублей за килограмм" . "<br>";
	}

/*	Задача 17:
	У вас есть массив чисел. Напишите функцию, которая принимает этот массив и колбек функцию в качестве аргументов. Функция должна применить колбек к каждому элементу массива и вернуть новый массив, содержащий результаты применения колбека к каждому элементу.
*/
	
	function applyCallback($arr, $callback) {
		$result = array();
		foreach ($arr as $element) {
			$result[] = $callback($element);
		}
		return $result;
	}

	$numbers_task17 = array(1, 2, 3, 4, 5);

	function multiplyByTwo($num) {
		return $num * 2;
	}

	$result_17 = applyCallback($numbers_task17, 'multiplyByTwo');
	echo "Задача 15: ";
	print_r($result_17);
	echo "</br>";
	
	#####################################
	#####     Замыкание в PHP     #######
	#####################################
	
/*	1. Создание функции-счетчика (без использования static). Каждый вызов функции +1 к исходному результату от начального значения функции. Использовать только замыкание и начальное значение переменной.*/
	
	function createCounter ($value) {
		$count = $value;
		return function () use (&$count) {
			return ++$count;
		};
	}

	$counter = createCounter(10);

	echo $counter() . " " . $counter() . " " . $counter() . "</br>";
	
	// 2. Создать замыкание для генератора случайных чисел в заданном диапазоне в передаваемых аргументах ($min, $max).
	
	function createGenerator($min, $max) {
		return function () use ($min, $max) {
			return rand($min, $max);
		};
	}

	$randomNumberGenerator = createGenerator(1, 20);

	for ($i = 0; $i < 5; $i++) {
		echo $randomNumberGenerator() . " ";
	}

	
	
	