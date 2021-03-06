<?php

/**
 * Copyright © Bold Brand Commerce Sp. z o.o. All rights reserved.
 * See license.txt for license details.
 */

declare(strict_types = 1);

namespace Ergonode\Api\Infrastructure\Normalizer;

/**
 */
interface ExceptionNormalizerInterface
{
    /**
     * @param \Exception  $exception
     * @param string|null $code
     * @param string|null $message
     *
     * @return array
     */
    public function normalize(\Exception $exception, ?string $code = null, ?string $message = null): array;
}
