<?php
namespace App;
class MagicClass
{
	private $data = array();
	function __construct()
	{
		print "вызван конструктор\n";
	}
	function __destruct()
	{
		print "Уничтожается " . __CLASS__ . "\n";
	}
    //public function __call($name, $arguments)
	//{
    //    echo "Вызов метода '$name' "
   //          . implode(', ', $arguments). "\n";
   // }
   // public static function __callStatic($name, $arguments)
   // {
   //     echo "Вызов статического метода '$name' "
   //          . implode(', ', $arguments). "\n";
   // }
   // public function __set($name, $value)
   // {
    //	echo "Установка '$name' в '$value' \n";
   // 	$this->data[$name] = $value;
   // }

   // public function __get($name)
    //{
    //	echo "Получение '$name' \n";
    //	if (array_key_exists($name, $this->data)){
    //		return $this->data[$name];
    //	}
    //	echo "Неопределенное свойство в __get\n";
    //	return null;
   // }
   // public function __isset($name)
    //{
    //	echo "Установлено ли '$nane'?\n";
    //	return isset($this->data[$name]);
   // }
   // public function __unset($name)
   // {
    //	echo "Уничтожеие '$name' \n";
    //	unset($this->data[$name]);
    //}
    //public function __serialize()
    //{
    //	echo "Вызван __serialize. data будет сериализоваться\n";
    //	return array('data');
    //}
    //public function __unserialize()
    //{
   // 	echo "после десериализации будет вызван __unserialize\n";
    //}
   // public function __toString()
   //{
    //	return "Преобразование экземпляра класса в строку\n";
   // }
    //public function __invoke()
   // {
   //	echo "__invoke вызывается, когда мы пытаемся вызвать объект как функцию\n";
   // }
    //public function __clone()
    //{
   //	echo "__clone вызывается когда мы пытаемся клонировать объект \n";
   // }
    public function __debugInfo()
    {
    	echo "__debugInfo вызывается функцией var_dump(), когда необходимо вывести список свойств объекта. 
    	Если этот метод не определен, тогда будут выведены все свойства объекта c модификаторами public, protected и private.\n";
    	return array();
    }
}