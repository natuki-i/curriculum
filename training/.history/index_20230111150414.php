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

	public function powerUp()
	{
		$this->attack += 10;
		echo '攻撃力が' . $this->attack . 'になった。</br>';
	}
}
// Enemyクラスからスライムを作る
$slime = new Enemy('スライム');
$slime->powerUp();
$slime->powerUp();
$slime->powerUp();
$slime->powerUp();
$slime->powerUp();
$slime->powerUp();
$slime->powerUp();
