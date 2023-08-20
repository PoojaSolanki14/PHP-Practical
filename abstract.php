<?php
// Example: Abstract Class & Methods

abstract class Animal
{
	public $name;
	public $age;
	public final function Describe()
	{
		return $this->name.", ".$this->age." years old";
	}
	
	abstract public function Greet();
}
class Dog extends Animal
{
	public function Greet()
	{
		return "Woof! Woof!";
	}
	public function Describe()
	{
		return parent::Describe().", and I'm a dog!<br>";
	}
}

Dog $animal = new Dog();
$animal->name = "Frodo";
$animal->age = 7;
echo $animal->Describe();
echo $animal->Greet();
?>