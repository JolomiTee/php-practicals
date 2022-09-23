<?php 

    // $lorem = readfile('readme.txt');
    // echo $lorem;
    $file = 'quotes.txt';
    // if (file_exists($file)){
        
        // echo readfile($file). '<br/>';

        // copy($file, 'quotes.txt');

        // echo realpath($file). '<br/>';

        // echo filesize($file). '<br/>';

        // rename($file, 'test.txt');
    
    // } else {
    //     echo 'file doesnt exist'. '<br/>';

    //     mkdir('read');
    // }

    $handle = fopen($file, 'r');
    
    // echo fread($handle, filesize($file));
    // echo fread($handle, 122);


    // fgets($handle);
    // echo fgetc($handle);
    
    

    // copy file


    // if(isset($_POST['submit'])){

    //     setcookie('gender', $_POST['gender'], time() + 86400);

    //     session_start();

    //     $_SESSION['name'] = $_POST['name'];


    //     // echo $_SESSION['name'];
    //     header('Location: ./projects/index.php');
    // }

    // $score = 50;

    // if($score >= 50){
    //     echo 'High Score';
    // } else {
    //     echo 'Low Score';
    // }

    // ternary format

    // $val = $score > 40 ? 'high score': 'low score';
    // echo $val;

    // echo $_SERVER['SERVER_NAME'] . '<br/>';
    // echo $_SERVER['SCRIPT_FILENAME'] . '<br/>';
    // echo $_SERVER['PHP_SELF'] . '<br/>';
    // echo $_SERVER['REQUEST_METHOD'] . '<br/>';
    

    // CLASSES AND OBJECTS

    class User{
        private $email;
        private $name;

        public function __construct($name, $email){
            // $this->email = 'taiwot2002@gmail.com';
            // $this->name = 'Taiwo';
            $this->email = $email;
            $this->name = $name;
        }

        public function login(){
            echo 'Logged in as '. $this->name;
        }

        public function getName(){
            return $this->name;
        }

        public function setName($name){
            if (is_string($name) && strlen($name) > 1){
                $this->name = $name;
                return 'Name has been updated to '. $name;
            } else {
                return 'not a valid name';
            }
        }
    }
    
    // $userOne = new User();

    // $userOne->login();
    // echo $userOne->email;

    $userTwo = new User('Taiwo', 'taiwot2002@gmail.com');
    // echo $userTwo->name. '<br/>';
    // echo $userTwo->email;
    // echo $userTwo->getName();
    // $userTwo->login();
    // echo $userTwo->setName(50);
    echo $userTwo->setName('Jolomi');
    echo $userTwo->getName();

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandbox</title>
</head>
<body>
    <p><?php echo $score > 40 ? 'high score': 'low score'; ?></p>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="text" name="name">
        <select name="gender" id="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="binary">Binary</option>
        </select>

        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html> -->