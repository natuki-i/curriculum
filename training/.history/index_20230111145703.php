<?php
        class Enemy {
            public $name;
            public $stamina;
            public $attack;

            public function __construct($name) {
                $this->name = $name;
            }

            public function sayMyName() {
                echo $this->name.'があらわれた！';
            }
        }
        // Enemyクラスからスライムを作る
        $slime = new Enemy('スライム');
        $slime->sayMyName();
     ?>