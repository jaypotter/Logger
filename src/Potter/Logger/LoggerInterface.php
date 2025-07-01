<?php

declare(strict_types=1);

namespace Potter\Logger;

interface LoggerInterface
    extends \Psr\Log\LoggerInterface,
            \Potter\Resettable\ResettableInterface
{ }
