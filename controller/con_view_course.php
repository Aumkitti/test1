<?php
include_once "../model/ConDB.php";
include_once "../model/Course.php";
$obj_name=new Course();
$rs2=$obj_name->getCourse();
?>
<table>
    <?php foreach($rs2 as $row){?>
    <tr style="boder: 1px;">
        <td><?=$row["cs_name"];?></td>
        <td><a href="con_del_course.php?id=<?=$row["cs_id"];?>">ลบ</a></td>
        <td>แก้ไข</td>
    </tr>
    <?php
    }
    ?>
</table