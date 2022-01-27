<?php

// Copyright (C) 2022 Ivan Stasiuk <ivan@stasi.uk>.
//
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this file,
// You can obtain one at https://mozilla.org/MPL/2.0/.

namespace BrokeYourBike\WesternUnion\Models;

use Spatie\DataTransferObject\DataTransferObject;

/**
 * @author Ivan Stasiuk <ivan@stasi.uk>
 */
class QuotedItem extends DataTransferObject
{
    public bool $isDirectRate;
    public float $rate;
    public float $rateInverted;
    public int $decimalsDirect;
    public int $decimalsIndirect;
    public int $tradeAmount;
    public int $settlementAmount;
    public string $tradeCurrency;
    public string $settlementCurrency;
}
