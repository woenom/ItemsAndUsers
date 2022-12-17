<?php
interface Items{
  function Name();
  function Cost();
  function Rate();
}
class IPhone implements Items{
  function Name(){
    echo('Iphone 11, ');
  }
  function Cost(){
    echo('за 57000 рублей, ');
  }
  function Rate(){
    echo('с рейтингом 9,5 <br>');
  }
}
class Breack implements Items{
  function Name(){
    echo('Большой керпич, ');
  }
  function Cost(){
    echo('за 200 рублей, ');
  }
  function Rate(){
    echo('с рейтингом 9,9 <br>');
  }
}
class Bread implements Items{
  function Name(){
    echo('Хлебушек, ');
  }
  function Cost(){
    echo('за 99 рублей, ');
  }
  function Rate(){
    echo('с рейтингом 10 <br>');
  }
}
interface User{
  function Login();
  function Password();
}
class User1 implements User{
  public $login,$pass;
  function __construct($login,$pass){
    $this->login=$login;
    $this->pass=$pass;
  }
  function Login(){
    echo($this->login);
  }
  function Password(){
    echo(' чей пороль:'.$this->pass);
  }
}
class User2 extends User1{}
class User3 extends User1{}
class Toge{
  public $a,$b,$c,$d,$e,$f;
    function __construct($a,$b,$c,$d,$e,$f){
    $this->a=$a;
    $this->b=$b;
    $this->c=$c;
    $this->d=$d;
    $this->e=$e;
    $this->f=$f;
  }
  function get(){
    echo('Пользователь: ');
    $Petr=new User1($this->a,$this->b);
    $Petr->Login();
    $Petr->Password();
    echo(' купил: ');
    $PetrSh=new IPhone();
    $PetrSh->Name();
    $PetrSh->Cost();
    $PetrSh->Rate();
    echo('Пользователь: ');
    $Tom=new User2($this->c,$this->d);
    $Tom->Login();
    $Tom->Password();
    echo(' купил: ');
    $TomSh=new Breack();
    $TomSh->Name();
    $TomSh->Cost();
    $TomSh->Rate();
    echo('Пользователь: ');
    $Leon=new User3($this->e,$this->f);
    $Leon->Login();
    $Leon->Password();
    echo(' купил: ');
    $LeonSh=new Bread();
    $LeonSh->Name();
    $LeonSh->Cost();
    $LeonSh->Rate();
  }
}
$spisok=new Toge('Пётр','234','Томсон','6326523','Лев','239487');
$spisok->get();