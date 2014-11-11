<?php
$sql = "INSERT INTO aisha_msg (aisha_alert_id,msg_title,msg_content) VALUES ";
foreach( range(1,30) as $i){
    $sql .= sprintf("(%s,'Title %s', 'Content %s'),", 3,$i,$i);
}

echo $sql;