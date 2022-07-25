<h5><?=$data->url;?></h5>
Частота: <?=$data->frequency;?> (мин)<br/>
Попыток: <?=$data->repeat;?><br/>
Дата добавления: <?=$data->date_add;?><br/>
<hr/>

<table border="1" width="100%">
    <tr>
        <th>Дата проверки</th>
        <th>Результат</th>
    </tr>
    <?php foreach($codes as $c): ?>
        <tr>
            <td><?=$c->date_check;?></td>
            <td><?=$c->code;?></td>
        </tr>
    <?php endforeach; ?>
</table>

<hr/>
<h5>Текущее состояние: </h5>

<pre>
<?php
print_r($code);
?>
</pre>
