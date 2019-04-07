<?php

require(__DIR__ . "/vendor/autoload.php");

use Traits\Validation;
use Orm\DownloadLog;
use Controller\TraitClassTest;
$downloadLog = DownloadLog::create();

echo ($downloadLog->isModified() ? 'DownloadLog is modified'."</br>" : 'DownloadLog is not modified')."</br>";
$downloadLog->setFiledId(1000)->setUserId(2000);
echo ($downloadLog->isModified() ? 'DownloadLog is modified'."</br>" : 'DownloadLog is not modified'."</br>");
echo ("UserId is: " . $downloadLog->getUserId()."</br>");
$downloadLog->destroy();
