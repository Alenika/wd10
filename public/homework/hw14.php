<?php

	// Задача 1

	function sum_numbers ($number1, $number2) {
		$sum = $number1 + $number2;
		return $sum;
	}
	
	$result = sum_numbers(10, 15);
	echo "Задача 1: 10 + 15 = " . $result . "</br>";
	
	// Задача 2

	function get_length ($string) {
		return strlen($string);
	}
	
	$message = "Привет. Я хочу узнать длину данной строки.";
	$result_2 = get_length($message);
	
	echo "Задача 2:  " . $result_2 . "</br>";
	
	// Задача 3

	function calculate_average ($numbers) {
		$counter = count($numbers);
		
		if ($counter === 0) {
			return 0;
		}
		
		$sum = array_sum($numbers);
		$average_value = $sum / $counter;
		return $average_value;
	}
	
	$array_test = [20, 5, 10, 15, 25];
	$result_3 = calculate_average($array_test);
	
	echo "Задача 3:  " . $result_3 . "</br>";
	
	// Задача 4

	function find_larger_number ($number1, $number2) {
		
		if ($number1 > $number2) {
			return $number1;
		} else {
			return $number2;
		}
	}
	
	$number1 = 10;
	$number2 = 20;
	
	$result_4 = find_larger_number($number1, $number2);
	
	echo "Задача 4:  " . $result_4 . "</br>";
	
	// Задача 5

	function concatenate_strings ($string1, $string2): string
	{
		$concat = $string1 . $string2;
		return $concat;
	}
	
	$str1 = "Мне нравится ";
	$str2 = " программирование.";
	$result_5 = concatenate_strings($str1, $str2);
	
	echo "Задача 5:  " . $result_5 . "</br>";
	
	// Задача 6

	function convert_to_uppercase($string): string
	{
		$upperCase = strtoupper($string);
		return $upperCase;
	}

	$message2 = "the great white shark!";
	$result_6 = convert_to_uppercase($message2);
	
	echo "Задача 6:  " . $result_6 . "</br>";
	
	// Задача 7
	
	function checkSubstringPresence ($mainString, $subString): bool
	{
		if (str_contains($mainString, $subString)) { // strpos()
			return true;
			} else {
			return false;
		}
	}
	
	$title = "The great white shark";
	$substringToFind = "shark";
	$result_7 = checkSubstringPresence($title, $substringToFind);
	
	echo "Задача 7:  ";
	if ($result_7) {
		echo "Строка содержит подстроку.</br>";
	} else {
		echo "Строка не содержит подстроку.</br>";
	}

	// Задача 8

	function calculateAverage ($num1, $num2) {
		$sum = $num1 + $num2;
		$average = $sum / 2;
		return $average;
	}
	
	$number_1 = 10;
	$number_2 = 20;
	$result_8 = calculateAverage($number_1, $number_2);
	
	echo "Задача 8:  " . $result_8 . "</br>";

	// Задача 9

	function findSquareRoot ($number) {
		$squareRoot = sqrt($number);
		return $squareRoot;
	}
	
	$number_task9 = 16;
	$result_9 = findSquareRoot($number_task9);
	
	echo "Задача 9:  " . $result_9 . "</br>";












	
	
	
	
	
	
	

	
	
	