<?php
	include 'basket_utils.php';

	function check_stock($ref, $products)
	{
		if (!$products)
			return (-1);
		foreach ($products as $key => $value)
		{
			if ($value['ref'] == $ref)
			{
				if ($value['stock'] <= 0)
					return (-1);
				$products[$key]['stock'] -= 1;
				file_put_contents("../private/products.csv", serialize($products));
				return ($products[$key]['price']);
			}
		}
		return (-1);
	}

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
		if (($price = check_stock($ref, get_products($ref)) == -1))
		{
			//header("Location: ../view/out_of_stock.php");
			exit ;
		}
		if (($basket = get_basket()))
		{
			if (is_already_in_basket($ref, $basket))
			{
				header("Location: ../index.php");
				exit ;
			}
		}
		else
		{
			$basket[] = array('ref' => $_POST['ref'], 'price' => $price, 'stock' => 1);
			fill_basket($basket);
			header("Location: ../index.php");
		}
	}
?>