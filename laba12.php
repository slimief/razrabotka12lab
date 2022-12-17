<?php
interface Tovar{
    public function Info();
}

class Video implements Tovar{
    public $video, $price, $rating;
    function __construct($video, $price, $rating){
        $this->video=$video;
        $this->price=$price;
        $this->rating=$rating;
    }
    function Info(){
        echo "Видео: ".$this->video." Ценой: ".$this->price." имея рейтинг: ".$this->rating."<br>";
    }
}
class Photo implements Tovar{
    public $photo, $price,$rating;
    function __construct($photo, $price,$rating){
        $this->photo=$photo;
        $this->price=$price;
        $this->rating=$rating;
    }
    function Info(){
        echo "Фото: ".$this->photo." Ценой: ".$this->price." имея рейтинг: ".$this->rating."<br>";
    }
}
class Screenshot implements Tovar{
    public $screen, $price, $rating;
    function __construct($photo, $price, $rating){
        $this->screen=$screen;
        $this->price=$price;
        $this->rating=$rating;
    }
    function Info(){
        echo "Скрин: ".$this->screen." Ценой: ".$this->price." имея рейтинг: ".$this->rating."<br>";
    }
}

interface User{
    public function userInfo();
}

class User1 implements User{
    public $name, $login, $password;
    function __construct($name, $login, $password){
        $this->name=$name;
        $this->login=$login;
        $this->password=$password;
    }
    function userInfo(){
        echo "Пользователь: ".$this->name." Логин: ".$this->login." Пароль: ".$this->password."<br>";
    }
}
class User2 implements User{
    public $name, $login, $password;
    function __construct($name, $login, $password){
        $this->name=$name;
        $this->login=$login;
        $this->password=$password;
    }
    function userInfo(){
        echo "Пользователь: ".$this->name." Логин: ".$this->login." Пароль: ".$this->password."<br>";
    }
}
class User3 implements User{
    public $name, $login, $password;
    function __construct($name, $login, $password){
        $this->name=$name;
        $this->login=$login;
        $this->password=$password;
    }
    function userInfo(){
        echo "Пользователь: ".$this->name." Логин: ".$this->login." Пароль: ".$this->password."<br>";
    }
}

class Result implements Tovar, User{
    public $name, $video, $photo, $screen;
    function __construct($name, $video, $photo, $screen){
        $this->name=$name;
        $this->video=$video;
        $this->photo=$photo;
        $this->screen=$screen;
    }
    function Info(){
        echo  "Пользователь: ".$this->name." купил: ".$this->video."<br>"; 
    }
    function userInfo(){
        echo "da";
    }
}



$result2 = new Video("чупа-чупс", "300", "2.2");
$result2->Info();
$result3 = new Photo("дама","300","5");
$result3->Info();
$result4 = new Screenshot("скрин", "100", "4");
$result4->Info();

$res1 = new User1("Виталик", "vitaliy", "grybii");
$res1->userInfo();
$res2 = new User2("Валерик","валерик","валерик");
$res2->userInfo();
$res3 = new User3("димос","да-ад","фух");
$res3->userInfo();

$resInfo = new Result("димос", "дама", "","");
$resInfo->Info();
?>