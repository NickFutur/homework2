<?php

function task1(array $strings, $return = true){
	echo "<b>Задние №1</b><br>";
	$result = implode(array_map(function ($str){
		return "<p>$str</p>";
	}, $strings));
	if($return){
		return $result;
	}
	echo $result;
	echo "<br><br><br>";
};
function task2(string $action, int|float ...$arguments){
	echo "<b>Задние №2</b><br>";
	foreach ($arguments as $argument){
		$example = $argument . $action;
		echo " " . $example . " "; //выводит пример, единственное не ридумал, как убрать последний знак
	}

switch ($action){

	case " +":
		return array_sum($arguments); // сумма аргументов
	case " -":
		return array_shift($arguments) - array_sum($arguments);
	case " *":
		$composition = 1; // 1, чтобы умножение не превращалась всегда в 0
		foreach ($arguments as $argument) // перебор аргументов из массива
		{
			$composition *= $argument;
		}
		return $composition;
	case " /":
		$division = array_shift($arguments); // выборка первого числа из массива

		foreach ($arguments as $argument)
		{

			if($argument !== 0){
				$division = $division / $argument;
			} elseif ($division == 0){
				$division = 0;
			}else{
				$division = INF;
			}

		}
		return $division;

	default:
		echo "Unknown element";
}

};
function task3(int $a, int $b){
	echo "<b>Задние №3</b><br>";
	$result = "<table>";
	if($a>=0 && $b>=0){
		for ($i = 1; $i <= $a; $i++){
			$result .= "<tr>";
			for ($j = 1; $j <= $b; $j++){
				$result .= "<td>";
				$result .= $i * $j;
				$result .= "</td>";
			}
			$result .= "</tr>";
		}
	}elseif ($a < 0 && $b < 0){
		for ($i = -1; $i >= $a; $i--){
			$result .= "<tr>";
			for ($j = -1; $j >= $b; $j--){
				$result .= "<td>";
				$result .= $i * $j;
				$result .= "</td>";
			}
			$result .= "</tr>";
		}
	}elseif ($a < 0 && $b > 0){
		for ($i = -1; $i >= $a; $i--){
			$result .= "<tr>";
			for ($j = 1; $j <= $b; $j++){
				$result .= "<td>";
				$result .= $i * $j;
				$result .= "</td>";
			}
			$result .= "</tr>";
		}
	}elseif ($a > 0 && $b < 0){
		for ($i = 1; $i <= $a; $i++){
			$result .= "<tr>";
			for ($j = -1; $j >= $b; $j--){
				$result .= "<td>";
				$result .= $i * $j;
				$result .= "</td>";
			}
			$result .= "</tr>";
		}
	}

	$result .= "</table>";
echo $result . "<br><br>";
};

function task4(){
echo "<b>Задние №4</b><br>";
	date_default_timezone_set('Europe/Moscow');
	echo date("d.m.Y g:i");
	echo "<br><br><br>";
};
function task5(){
	echo "<b>Задние №5</b><br>";
	$string1 = "Карл у Клары украл Кораллы";
	echo $string1 . "<br>";
	$string1Change = str_replace("К", " ",$string1);
	echo $string1Change . "<br>";
	$string1 = "Две бутылки лимонада";
	echo $string1 . "<br>";
	$string1Change = str_replace("Две", "Три",$string1);
	echo $string1Change;
	echo "<br><br><br>";
};
function task6(){
	echo "<b>Задние №6</b><br>";
	file_put_contents("test.txt", "Hello again!");
	function myFileInfo()
	{
		$fp = fopen('test.txt', 'r');
		if (!$fp)
		{
			return(false);
		}
		$fileString = "";
		while(!feof($fp))
		{
			$fileString .= fgets($fp, 1024);
			echo "$fileString";
		}
		fclose($fp);
	};
	myFileInfo();
	echo "<br>";
};

