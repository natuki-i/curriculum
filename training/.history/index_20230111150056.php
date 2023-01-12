<?php
class Enemy
{
	public $name;
	public $stamina;
	public $attack;

	public function __construct($name, $stamina = 100, $attack = 10)
	{
		$this->name = $name;
		$this->stamina = $stamina;
		$this->attack = $attack;
	}

	public function sayMyName()
	{
		echo $this->name . 'があらわれた！';
	}
}
// Enemyクラスからスライムを作る
$slime = new Enemy('スライム');
echo $slime->stamina;
echo $slime->attack;

echo '</br>';

$kuribo = new Enemy('クリボー', 200, 10);
echo $kuribo->stamina;
echo $kuribo->attack;
