<?php
/**
 * Created by PhpStorm.
 * User: Korisnik
 * Date: 30.3.2018
 * Time: 22:45
 */

function getTrainingData()
{
    global $conn;
    $sql = $conn->prepare("select td.id, td.first_name, td.last_name, td.birth_year, td.player_id, pt.status, td.start_time
from
(
select t.id id, p.first_name, p.last_name, p.birth_year, p.id as player_id, t.start_time
from tranings t, player_groups pg, players p
where t.group_id = pg.group_id
and pg.player_id = p.id
and t.start_time between sysdate() - interval '1' day and sysdate() + interval '4' day
) td
left join player_training pt on td.id = pt.training_id and td.player_id = pt.player_id
order by td.start_time, td.first_name");
    $sql->execute();
    return $sql->fetchAll(PDO::FETCH_OBJ);
}