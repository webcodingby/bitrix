<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if (!\Bitrix\Main\Loader::includeModule('iblock')) {
    ShowError('Module "iblock" is not installed');
    return;
}

$arFilter = array('IBLOCK_ID' => YOUR_IBLOCK_ID, 'SECTION_ID' => YOUR_SECTION_ID, 'ACTIVE' => 'Y');
$arSelect = array('ID', 'NAME');
$resProducts = \CIBlockElement::GetList(array(), $arFilter, false, false, $arSelect);

while($arProduct = $resProducts->GetNext()) {
    $arResult["PRODUCTS"][] = $arProduct;
}

$this->IncludeComponentTemplate();
