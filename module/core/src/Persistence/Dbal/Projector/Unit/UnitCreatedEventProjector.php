<?php

/**
 * Copyright © Bold Brand Commerce Sp. z o.o. All rights reserved.
 * See LICENSE.txt for license details.
 */

declare(strict_types = 1);

namespace Ergonode\Core\Persistence\Dbal\Projector\Unit;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DBALException;
use Ergonode\Core\Domain\Event\UnitCreatedEvent;

/**
 */
class UnitCreatedEventProjector
{
    private const TABLE = 'public.unit';

    /**
     * @var Connection
     */
    private Connection $connection;

    /**
     * @param Connection $connection
     */
    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    /**
     * @param UnitCreatedEvent $event
     *
     * @throws DBALException
     */
    public function __invoke(UnitCreatedEvent $event): void
    {
        $this->connection->insert(
            self::TABLE,
            [
                'id' => $event->getAggregateId(),
                'name' => $event->getName(),
                'symbol' => $event->getSymbol(),
            ]
        );
    }
}
