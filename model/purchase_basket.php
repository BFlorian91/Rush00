<?php
	function empty_basket()
	{
		$basket = get_basket();
		if ($basket)
		{
			foreach ($basket as $key => $value)
				delete_item($value['ref']);
			delete_basket();	
		}
	}

	function purchase_basket()
	{
		session_start();
		if ($_SESSION['loggued_on_user'] != NULL)
		{
			delete_basket();
			return (1);
		}
		else
			return (0);
	}
?>
