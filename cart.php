<?php 

/**
*  Dummy shopping cart
*/
class Cart {
	/**
	* Shopping cart checkout
	*/
        public function checkout($amount) {
        	// A random slow call...
			if ($amount % 10 == 0)
				sleep(1);
        	return $amount;
        }
}

?> 
