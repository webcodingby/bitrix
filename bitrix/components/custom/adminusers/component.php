<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;

if (!Loader::includeModule('main')) {
    ShowError('Module "main" is not installed');
    return;
}

$resUsers = CUser::GetList(($by="id"), ($order="asc"), ["GROUPS_ID" => [1]]); // Получение пользователей из группы "Администратор"

while($arUser = $resUsers->Fetch()) {
    $arResult["USERS"][] = $arUser;
}

$this->IncludeComponentTemplate();
