<?php
abstract class animal{
    abstract public function eats();
    abstract public function makesound();
}
class dog extends animal{
    public function eats(){
        echo 'the dog is eating.';
    }
    public function makesound(){
        echo 'the dog barks.';
    }
}
class cat extends animal{
    public function eats(){
        echo 'the cat is eating.';
    }
    public function makesound(){
        echo 'the cat meows.';
    }
}
class bird extends animal{
    public function eats(){
        echo 'the bird is eating.';
    }
    public function makesound(){
        echo 'the bird chirps.';
    }
}
$dog=new dog();
$cat=new cat();
$bird=new bird();
$dog->eats();
echo '<br>';
$dog->makesound();
echo '<br>';
echo '<br>';
$cat->eats();
echo '<br>';
$cat->makesound();
echo '<br>';
echo '<br>';
$bird->eats();
echo '<br>';
$bird->makesound();