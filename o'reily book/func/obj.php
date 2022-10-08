<?php
    // require_once './index3.php';
    // include_once './index3.php';

    // $names = fix_names('WilliaM', 'HENry', 'gaTES');
    // echo $names[2] . ' ' . $names[0] . ' ' . $names[1]; 

    // function fix_names($n1, $n2,$n3){
        
    //     $n1 = ucfirst(strtolower($n1));
    //     $n2 = ucfirst(strtolower($n2));
    //     $n3 = ucfirst(strtolower($n3));
    //     // return $n1 . " " . $n2 . " " . $n3;
    //     return array($n1, $n2, $n3);
    // }

    // $a1 = 'WILLIam';
    // $a2 = 'Henry';
    // $a3 = 'GATes';

    // echo $a1 . ' ' . $a2 . ' ' . $a3 . '<br/>';
    
    // fix_names($a1, $a2, $a3);
    // echo $a1 . ' ' . $a2 . ' ' . $a3 . '<br/>';
    
    // function fix_names(&$n1, &$n2, &$n3){
    //     $n1 = ucfirst(strtolower($n1));
    //     $n2 = ucfirst(strtolower($n2));
    //     $n3 = ucfirst(strtolower($n3));
    // }

    // if(function_exists('array_combine')){
    //     echo "Function Exists";
    // } else{
    //     echo "Non existent, write yourse bruv";
    // }




    // $object = new User;
    // print_r($object); echo '<br/>';

    // $object->name = 'Jolomi';
    // $object->password = 'icelake1029';
    // print_r($object); echo '<br/>';
    // $object-> save_user();

    // class User{
    //     public $name, $password;
    //     function save_user(){
    //         echo 'User function goes here';
    //     }
    // }

    // class User{
    //     public $name, $password;

    //     function save_user(){
    //         echo 'User function goes here';
    //     }
    // }



    // $object1 = new User();
    // $object1->name = "TAIWO";
    // $object2 = clone $object1;
    // $object2->name = 'Amy';

    // echo 'object1 name = ' .$object1->name . '<br/>';
    // echo 'object2 name = ' .$object2->name . '<br/>';


    // class User{
    //     public $name;
    // }

    // constructing
    // $object = new User;
    // $object->password = 'secret';

    // echo $object->get_password();

    // class User{

    //     public $name, $password;


    //     function get_password(){
    //         return $this->password;
    //     }
    // }


    // STATIC METHODS IN PHP5
    // User::pwd_string();
    // class User{
    //     const ENGLISH = 0;
    //     const YORUBA = 1;
    //     const SPANISH = 2;
    //     const FRENCH = 3;
    //     static function pwd_string(){
    //         echo self::SPANISH;
    //     }
    // }


    // PHP PROPERTY AND METHOD SCOPE
    // class Example{
    //     var $name = 'Micheal';
    //     public $age = 23;
    //     protected $usercount;
    //     private function admin(){
    //         // admin code here
    //     }
    // }


    // static properties and methods
    // $temp = new Test();

    // echo "Test A: " . Test::$static_property . '<br/>';
    // // or
    // echo "Test A: " . $temp::$static_property . '<br/>';

    // echo "Text B: " . $temp->get_sp() . '<br/>';
    // echo "Test C: " . $temp->static_property . '<br/>';

    // class Test {
    //     static $static_property = 'I am static';

    //     function get_sp(){
    //         return self::$static_property;
    //     }
    // }

    // INHERITANCE
    // $object = new Subscriber;
    // $object->name = 'Fred';
    // $object->password = 'pword';
    // $object->phone = '1234567890';
    // $object->email = 'taiwo@gmail.com';
    // $object->display();

    // class User{
    //     public $name, $password;

    //     function save_user(){
    //         echo 'Save User code here';
    //     }
    // }



    // class Subscriber extends User{
    //     public $phone, $email;

    //     function display(){
    //         echo "Name: " . $this->name . '<br/>';
    //         echo "Password: " . $this->password . '<br/>';
    //         echo "Phone: " . $this->phone . '<br/>';
    //         echo "Email: " . $this->email . '<br/>';
    //     }
    // }



    // the parent operator
    $object = new Son;
    $object->test();

    $object->test2();

    class Dad{
        function test(){
            echo '[Class Dad] I am your father <br/>';
        }
    }

    class Son extends Dad{
        function test(){
            echo '[Class Son] I am Luke <br/>';
        }

        function test2(){
            parent::test();
        }
    }


    // subclass constructors
    // $object = new Tiger();

    // echo 'Tigers have... <br/>';
    // echo "Fur: " . $object->fur . "<br/>";
    // echo "Stripes: " . $object->stripes;

    // class Wildcat{
    //     public $fur;
    //     function  __construct(){
    //         $this->fur = "True";;
    //     }
    // }

    // class Tiger extends Wildcat{
    //     function __construct()
    //     {
    //         parent::__construct();
    //         $this->stripes = "Trues";
    //     }
    // }


?>