<?php	
	function delete_item($ref)
	{
		$basket = get_basket();
		if ($basket)
		{
			foreach ($basket as $key => $value) 
			{	
				if ($value['ref'] == $ref)
				{
					if ($basket[$key]['stock'] >= 1)
						add_stock($ref, get_products($ref), $basket[$key]['stock']);
					unset($basket[$key]);
					fill_basket($basket);
					return;
				}
			}
		}
	}
?>