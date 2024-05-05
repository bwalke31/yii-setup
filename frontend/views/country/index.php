<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Countries</h1>
<table class="table table-bordered table-hover table-striped">
    <caption>CC: Country Code</caption>
        <thead>
            <tr>
                <th class="col">CC</th>
                <th class="col">Name</th>
                <th class="col">Population</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($countries as $country): ?>
                <tr>
                    <td class="col"><?= Html::encode($country->code) ?></td>
                    <td class="col"><?= Html::encode($country->name) ?></td>
                    <td class="col"><?= Html::encode($country->population) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

<?= LinkPager::widget(['pagination' => $pagination]) ?>