<?php
use yii\helpers\Url;
?>
<table border="1" width="100%">
    <tr>
        <th>Url</th>
        <th>Частота</th>
        <th>Повторы</th>
        <th>Дата добавления</th>
    </tr>
    <?php foreach($data as $d): ?>
        <tr>
            <td>
            <a href="<?=Yii::$app->urlManager->createUrl(['admin/check', 'id' => $d->id])?>">
                <?=$d->url;?>
            </a>    
            </td>
            <td><?=$d->frequency;?> (мин)</td>
            <td><?=$d->repeat;?></td>
            <td><?=$d->date_add;?></td>
        </tr>
    <?php endforeach; ?>
</table>
