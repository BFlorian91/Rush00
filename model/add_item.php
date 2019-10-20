<?php
	include 'basket_utils.php';
	// include 'stock_manager.php';

	function is_already_in_basket($ref, $basket)
	{
		foreach ($basket as $key => $value) 
		{	
			if ($value['ref'] == $ref)
			{
				$basket[$key]['stock'] += 1;
				fill_basket($basket);
				return (1);
			}
		}
		return (0);
	}

	function add_item($ref)
	{
		$price = substract_stock($ref, get_products($ref), 1);
		$basket = get_basket();
		if ($price == -1)
		{
			header("Location: ../view/out_of_stock.php");
			exit ;
		}
		if ($basket)
		{
			if (is_already_in_basket($ref, $basket))
				return ;
		}
		$basket[] = array('ref' => $_POST['ref'], 'price' => $price, 'stock' => 1);
		fill_basket($basket);
	}
?>