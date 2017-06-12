<?php
/**
 * 工厂模式
 */
/*工*********厂**********方**********法*/
//交通工具接口(抽象产品角色)
interface vehicle{
    public function runing();
}
//交通工具工厂接口（抽象工厂角色）
interface vehiclefactory{
    public static function get();
}
/*具体产品角色*/
class car implements vehicle{
    public function runing(){
        echo "My speed is 120KM/h \r";
    }
}

class bicycle implements vehicle{
    public function runing(){
        echo "My speed is 30KM/h \r";
    }
}
/*具体工厂角色*/
class carfactory implements vehiclefactory{
    public static function get(){
        return new car();
    }
}
class bicyclefactory implements vehiclefactory{
    public static function get(){
        return new bicycle();
    }
}

$test = bicyclefactory::get();
$test->runing();