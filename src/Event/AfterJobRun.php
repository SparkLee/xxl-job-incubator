<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace Hyperf\XxlJob\Event;

use Hyperf\XxlJob\Requests\RunRequest;

class AfterJobRun
{
    public function __construct(public RunRequest $request)
    {
    }
}
