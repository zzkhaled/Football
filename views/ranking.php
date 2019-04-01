<table class="table">
<tr>
 <th>N°</th>
 <th>Équipe</th>
 <th>MJ</th>
 <th>G</th>
 <th>N</th>
 <th>P</th>
 <th>BP</th>
 <th>BC</th>
 <th>DB</th>
 <th>PTS</th>
</tr>
<?php $count=0 ?>
 <?php foreach ($ranking as $key =>$value){?>
<tr>
 <td> <?=$count=$count+1 ?> </td>
 <td><a href="?action=team&id=<?=$key?>"><?=$team_names[$key]?></a></td>
 <td><?=$value['played'] ?></td>
 <td><?=$value['won'] ?></td>
 <td><?=$value['drawn'] ?></td>
 <td><?=$value['lost'] ?></td>
 <td><?=$value['goals_for'] ?></td>
 <td><?=$value['goals_against'] ?></td>
 <td><?=$value['goal_difference'] ?></td>
 <td><?=$value['points'] ?></td>
</tr>
<?php } ?>
</table>