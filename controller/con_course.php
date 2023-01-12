
<?php

    if(isset($_POST["cs_name"])){

    $course=array();
    $course["cs_img"] = $_POST["cs_img"];
    $course["cs_name"] = $_POST["cs_name"];
    $course["cs_date"] = $_POST["cs_date"];
    $course["cs_wallet"] = $_POST["cs_wallet"];
    print_r($course);
    };
?>

<?php
include_once "../model/ConDB.php";
include_once "../model/Course.php";
$obj_name=new Course();
echo $rs2= $obj_name->addCourse($course);
?>

<?php
//include "../view/view_course_card.php";
?>
