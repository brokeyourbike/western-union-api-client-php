<?php

// Copyright (C) 2022 Ivan Stasiuk <ivan@stasi.uk>.
//
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this file,
// You can obtain one at https://mozilla.org/MPL/2.0/.

namespace BrokeYourBike\WesternUnion\Models;

use BrokeYourBike\DataTransferObject\JsonResponse;

/**
 * @author Ivan Stasiuk <ivan@stasi.uk>
 */
class QuoteResponse extends JsonResponse
{
    public ?string $id;
    public ?string $customerId;
    public ?string $partnerReference;
    public int $expirationIntervalInSec;
    public string $createdOn;
    public string $status;
    public string $lastUpdatedOn;
    public QuotedItem $quotedItems;
}
