<?php
	include "config.php"; // подключение к базе данных
	
	$countView = (int)$_POST['count_add']; 	// количество записей, получаемых за один раз
	$startIndex = (int)$_POST['count_show']; // с какой записи начать выборку


$query = "SELECT * FROM `mobshop` ORDER BY id LIMIT $startIndex, $countView";
$result = mysqli_query($connect, $query);

if (!$result)
    die(mysqli_error($connect));

$n = mysqli_num_rows($result);
$Products = [];

for ($i = 0; $i < $n; $i++) {
    $row = mysqli_fetch_assoc($result);
    $Products[] = $row;
}

	if(empty($Products)){
		// если товаров нет
		echo json_encode(array(
			'result' 	=> 'finish'
		));
	}else{
		// если товар получили из базы, то сформируем html элементы
		// и отдадим их клиенту
		$html = "";
		foreach($Products as $Product){

			$html .= "
				<div>
					<b>{$Product['name']}</b>
					<p>{$Product['desccription']}</p>
					<p>{$Product['img']}</p>
					<p>{$Product['price']}</p>
				</div>
			";
		}
		echo json_encode(array(
			'result' 	=> 'success',
			'html'		=> $html
		));
	}
	
	