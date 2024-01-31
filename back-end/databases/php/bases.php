<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First</title>
</head>
<body>
    <?php 
// String Manipulation

    // $con = "Hello World <br>";
    // $con[0] = "j"; 
    // echo $con;
    // echo "Primeiro Project <br/>";
    // print "Primeiro Project";


// Switch

    // $x = 2;
    // switch ($x):
    //     case 1 : echo "x is 1";break;
    //     case 2: echo "x is 2";break;
    //     default: echo "x is something else";
    // endswitch;

     
    // switch ($x)
    // {
    //    case 1 : echo "x is 1";break;
    //    case 2: echo "x is 2";break;
    //    default: echo "x is something else";
    // }


// Ternary operator expression

        // $x=1;
        // $y= ($x == 1) ? 1 : 0; 
        // echo "y number is $y."; 


// Ternary operator statement

        // $x = 1;
        // ($x == 1) ? $y = 2: $y = 3;
        // echo "y number is $y";


// Match

        // $x=1;

        // $output = match($x){
        //     1 => True,
        //     2 => False,
        //     default => $output = UNKNOWN_TYPE,
        // };
        // echo $output;


        // $x='1';
        // $output = match($x){
        //     1 => "Integer",
        //     '1' => "String",
        // };

        // echo $output;

// while

        // $i = 0;
        // while ($i <= 10)echo $i++;
        

        // $i = 0;
        // while ($i < 10) {
        //     $i++;
        //     echo "$i<br>";
        // }


// Do While

        // $i = 0;
        // $virg= ",";
        // do {echo $i++,$virg;} while($i <= 10);

        
        // For
        
        // $i = 0;
        // $virg= ",";
        // for ($i = 0; $i < 10; $i++) {echo $i,$virg;};
        

        // for ($a=0; $a<=5; $a++){echo $a;};


// Function

        // function myFunction(){
        //     echo "Hello World";
        // };
        
        // myFunction();


        // function myFunc($x, $y = "World"){
        //     echo $x . $y;
        // }

        // myFunc("Hello ");


        // function orientation($a, $b, $c){
        //     echo $a,$b,$c;
        // }

        // orientation(c:3, b:1, a:2);


        // function Returning(){
        //     return "Everything Okay";
        // }

        // echo Returning();


// Anonymous Function

        // $say = function($name)
        // {
        //     echo "Hello " .$name;
        // };
        // $say("World");


        // function myCaller($myCallerBack){
        //     echo $myCallerBack();
        // }
        // myCaller(function(){echo "Hello World Bro";});


        // $a = [1, 2, 3];
        // $squared = array_map(function($val)
        // {
        //     return $val * $val;
        // }, $a);
        // foreach ($squared as $v)
        //     echo $v; 


// Closures

        // $x=1; $y=2;

        // $myClosure = function($z) use ($x, $y){
        //     return $z + $x + $z;
        // };
        // echo $myClosure(3);


// Arrow Functions

        // $x = 1; $y = 2;
        // $myClosure = fn($z) => $x + $y + $z;
        // echo $myClosure(3);


//  Yield

        // function numGen(){
        //     for ($i= 0; $i < 5; $i++){
        //         yield $i;
        //     }
        // }
        // foreach (numGen() as $v){
        //     echo $v;
        // }


        // function countToFive(){
        //     yield 1;
        //     yield from [2,3,4];
        //     yield 5;
        // }
        // foreach (countToFive() as $v){
        //     echo $v;
        // }

// Classes

//         class Rectangle{
//                 public $x, $y;
//                 function newArea($a, $b){
//                         return $a * $b;
//                 }     
//                 function getArea(){
//                         return $this->newArea($this->x, $this->y);
//                 }
//        };
//        $r = new Rectangle();
//        $r->x = 10;
//        $r->y = 5;
//        $r->getArea();


        

     ?>
</body>
</html>