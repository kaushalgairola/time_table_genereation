<?php
include_once "includes/db.php";
//$ts1=1;
//$ts2=2;
//$ts3=3;
//$ts4=4;
//$ts5=5;
//$ts6=6;
//$ts7=7;
//$n = 5;
//$day = 1;
//$timeslot_count = 0; 
//if($daycount>$n)
//echo "end";
$day = array("Monday","Tuesday","Wednesday","Thurseday","Friday");
$sub[5][6] = array();
$teach[5][6] = array();
//echo !empty($teach);
//for($day = 1; $day<=5; $day++)
//{
//$timeslot_count = 1;    
for($i = 0; $i < 5; $i++)
{
$branch = "cse";
$sql1 = "SELECT sub_name from subject where b_name = '".$branch."'";
            $res1 = mysql_query($sql1);
            $subject = array();
            while ($row1 = mysql_fetch_array($res1))
            {
	            $data = $row1['sub_name'];
                array_push($subject, $data);     
            }
            $cs = count($subject);    
            
            for($j = 0; $j < $cs; $j++)
            {
                $teacher = array(); 
                $sql2 = "SELECT * from teacher_sub where sub_name='".$subject[$j]."'";
                $res2 = mysql_query($sql2);
                $row2  = mysql_fetch_array($res2);
                
                $data1 = $row2['teacher_name'];
                $sub[$i][$j] = $subject[$j];
                $teach[$i][$j] = $data1;        //array_push($teacher, $data1);
            }
            
            //$sql2 = "SELECT * from teacher_sub where sub_name='".$subject[$i]."'";
            //$res2 = mysql_query($sql2);
            //while ($row2  = mysql_fetch_array($res2))
            	//{
            	//	$data1 = $row2['teacher_name'];
            	//	array_push($teacher, $data1);
            	//}
}

?>
<p>computer science</p><br></br>
<div>
    <table border="1" cellspacing="1">
    
        <tr>
            <td>Day/Time</td>
            <td>9:15am-10:15am</td>
            <td>10:15am-11:15am</td>
            <td>11:15am-12:15pm</td>
            <td>1pm-2pm</td>
            <td>2pm-3pm</td>
            <td>3pm-4pm</td>
        </tr>
        <?php
        for($a = 0; $a < 5; $a++)
            {
          ?> 
          <tr>
            <td><?php echo $day[$a];?></td>
            <?php
               for($b = 0; $b < 6; $b++)
                {
            ?>
                <td><?php echo $sub[$a][$b]."/".$teach[$a][$b];?></td>
                <?php
                }
            }    
        ?>        
    </table>

</div>                
<?php

$day1 = array("Monday","Tuesday","Wednesday","Thurseday","Friday");
$sub1[5][6] = array();
$teach1[5][6] = array();
//$clash[5][6] = array();
//echo !empty($teach);
//for($day = 1; $day<=5; $day++)
//{
//$timeslot_count = 1;    
for($i1 = 0; $i1 < 5; $i1++)
{
$branch = "it";
$sql3 = "SELECT sub_name from subject where b_name = '".$branch."'";
            $res3 = mysql_query($sql3);
            $subject1 = array();
            while ($row3 = mysql_fetch_array($res3))
            {
                $data3 = $row3['sub_name'];
                array_push($subject1, $data3);     
            }
            $cs3 = count($subject1);    
            
            for($j1 = 0; $j1 < $cs3; $j1++)
            {
                $teacher1 = array(); 
                $sql4 = "SELECT * from teacher_sub where sub_name='".$subject1[$j1]."'";
                $res4 = mysql_query($sql4);
                $row4  = mysql_fetch_array($res4);
                
                $data4 = $row4['teacher_name'];
                if($teach[$i1][$j1]==$data4)
                {
                    $teach1[$i1][$j1+1] = $data4;
                    $sub1[$i1][$j1+1] = $subject1[$j1];
                }
                else
                {
                 $teach1[$i1][$j1] = $data4;
                    $sub1[$i1][$j1] = $subject1[$j1];   
                }
                if($j1==6)
                {
                    $teach1[0][0] = $data4;
                    $sub1[0][0] = $subject[0];
                }
                //$teach[$i][$j] = $data1;        //array_push($teacher, $data1);
            }
            
            //$sql2 = "SELECT * from teacher_sub where sub_name='".$subject[$i]."'";
            //$res2 = mysql_query($sql2);
            //while ($row2  = mysql_fetch_array($res2))
                //{
                //  $data1 = $row2['teacher_name'];
                //  array_push($teacher, $data1);
                //}
}

?>
<p>Information Technology<p><br></br>
<div>
    <table border="1" cellspacing="1">
    
        <tr>
            <td>Day/Time</td>
            <td>9:15am-10:15am</td>
            <td>10:15am-11:15am</td>
            <td>11:15am-12:15pm</td>
            <td>1pm-2pm</td>
            <td>2pm-3pm</td>
            <td>3pm-4pm</td>
        </tr>
        <?php
        for($a1 = 0; $a1 < 5; $a1++)
            {
          ?> 
          <tr>
            <td><?php echo $day1[$a1];?></td>
            <?php
               for($b1 = 0; $b1 < 6; $b1++)
                {
            ?>
                <td><?php echo $sub1[$a1][$b1]."/".$teach1[$a1][$b1];?></td>
                <?php
                }
            }    
        ?>        
    </table>

</div>                