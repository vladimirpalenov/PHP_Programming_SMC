<html>
<head>
    <title>Count Your Visits</title>
</head>
<body>
<?php
// variable to store count of visits
$cookie = 0;
// if global variable $_COOKIE['count'] is not set
// this block is executed
if (!isset($_COOKIE['count'])){
    //incrementing the $cookie variable
    $cookie++;
    // displaying the message
    echo "Number of views: ".$cookie;
    // setting 'count' cookie to 1
    setcookie("count", $cookie);
}
// if global variable $_COOKIE['count'} is set this block is executed
else{
    // assigning the value stored in the global variable $_COOKIE['count'] to the var $cookie
    $cookie = ++$_COOKIE['count'];
    // displaying messages and setting cookie based on the value
    if ($cookie === 5){
        echo "Number of views: five";
        setcookie("count", $cookie);
    } else if($cookie === 10){
        echo "Number of views: ten";
        setcookie("count", $cookie);
    } else if($cookie === 15){
        echo "Number of views: fifteen";
        setcookie("count", $cookie);
    } else if($cookie === 20){
        echo "Number of views: ".$cookie;
        setcookie("count", 0);
    } else{
        echo "Number of views: ".$cookie;
        setcookie("count", $cookie);
    }
}
?>
</body>
</html>