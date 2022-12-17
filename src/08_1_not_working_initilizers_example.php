<?php

class Cart {
	private array $items;
	
	public static function defaultInstance(): Cart
	{
		return new static();
	}
}

class User
{
    public function __construct(
        public string $name,
        // Fatal error: Constant expression contains invalid operations in /home/user/scripts/code.php on line 14
        public ?Cart $cart = Cart::defaultInstance()
    )
    {
    }
}

$user = new User('John');

echo '<pre>';
var_dump($user);
echo '</pre>';
