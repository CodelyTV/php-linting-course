<?php

use CodelyTv\CodingStyle;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return function (ECSConfig $ecsConfig): void {
	$ecsConfig->paths([__DIR__ . '/src',]);

	$ecsConfig->sets([CodingStyle::DEFAULT]);
};
