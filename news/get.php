<?php
// 新着情報CMS
require_once '../admin/model/news/display.php';
$newsCms = new newsDisplay();
$listHtml = $newsCms->getListHtml('./news/list.tpl');
echo $listHtml;