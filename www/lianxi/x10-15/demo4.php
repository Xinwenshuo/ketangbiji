<?php
class fei{
    public $name = '郭冰';
    public function fly(){
        echo "耍鸡儿";
    }
}
$bing = new fei();
echo $bing->name;
$bing->fly();
