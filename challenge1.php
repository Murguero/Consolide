<?php

/*
Implement AInterface and get A to echo "8".

Rules:
1. No Exceptions or PHP errors / warnings notices allowed
2. No redefining $x and $y

Hints:
1. Magic methods

*/

class A
{
    public function __construct(AInterface $answer)
    {
        echo "What is 3 + 10 / 2 ?\n";
        $answer = $answer->get()->the()->answer();

        if ($answer instanceof AInterface) {
            echo $answer . PHP_EOL;
        }
    }
}

interface AInterface
{
    public function get();
    public function the();
    public function answer();
}

// start editing here

class B implements AInterface {
    public function get() {
        return $this;
    }

    public function the() {
        return $this;
    }

    public function answer() {
        return $this;
    }

    public function __toString() {
        return "8";
    }
}

// end editing here

$x = new B;
$y = new A($x);

