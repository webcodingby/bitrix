<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if (!empty($arResult["PRODUCTS"])): ?>
    <ul>
        <?php foreach ($arResult["PRODUCTS"] as $arProduct): ?>
            <li>ID товара: <?= $arProduct["ID"] ?>, Название товара: <?= $arProduct["NAME"] ?></li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Товары не найдены.</p>
<?php endif; ?>
