<?php

// Copyright (C) 2022 Ivan Stasiuk <ivan@stasi.uk>.
//
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this file,
// You can obtain one at https://mozilla.org/MPL/2.0/.

namespace BrokeYourBike\WesternUnion\Models;

use Spatie\DataTransferObject\Casters\ArrayCaster;
use Spatie\DataTransferObject\Attributes\CastWith;
use BrokeYourBike\DataTransferObject\JsonResponse;

/**
 * @author Ivan Stasiuk <ivan@stasi.uk>
 */
class BatchResponse extends JsonResponse
{
    public string $id;
    public string $reference;
    public string $createdOn;
    public string $lastUpdatedOn;
    public int $numberOfReceivedPayments;
    public int $numberOfAcceptedPayments;

    /** @var AggregateAmount[] */
    #[CastWith(ArrayCaster::class, itemType: AggregateAmount::class)]
    public array $aggregateAmounts;
}
