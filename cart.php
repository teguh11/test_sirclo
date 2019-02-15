<?php

class Cart{

	public $cart = [];
	public $a = 0;

	public function tambahProduk($item, $quantity)
	{
		$cart_keys = array_keys($this->cart);
		$item = ucwords(trim($item));

		if(in_array($item, $cart_keys))
		{
			$this->cart[$item] = $this->cart[$item]+$quantity;
		}
		else
		{
			$this->cart = array_merge($this->cart, [$item => $quantity]);
		}
	}

	public function hapusProduk($item)
	{
		$item = ucwords(trim($item));
		if(isset($this->cart[$item])){
				unset($this->cart[$item]);
		}
	}

	public function tampilkanCart()
	{
		foreach ($this->cart as $key => $value) {
			echo $key." (".$value.")<br>";
		}

	}
}

$cart = new Cart();
$cart->tambahProduk("Topi Putih", 2);
$cart->tambahProduk("Kemeja Hitam", 3);

$cart->tambahProduk("Sepatu Merah", 1);
$cart->tambahProduk("sepatu merah", 4);
$cart->tambahProduk("sepatu merah", 2);

$cart->hapusProduk("kemeja hitam");
$cart->hapusProduk("baju hijau");
$cart->tampilkanCart();

?>