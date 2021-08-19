<?php

class anuj{
   public $name;

    function setname($name){
        $this->name=$name;
    }

    function getname(){

        global $name;
        return $name;  
    }
}

//creation of object

$obj = new anuj();
$obj->setname("Anuj Kaushik");
echo $obj->getname();

?>

<?php

class testing{
    function hello(){
        echo "ram ram anuj kaushik";
    }

  //  hello();  //agr bs yeh likhega bina object banaye toh error aajaega java yaad kr usme class ke andr aise function call nai ho skte
}

?>

<?php

class kaushik{
    function hello(){
        echo "ram ram bhai";
    }

}
$obj = new kaushik();
$obj->hello();   //ram ram bhai

?>