<?php

// Copyright (C) 2022 Ivan Stasiuk <ivan@stasi.uk>.
//
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this file,
// You can obtain one at https://mozilla.org/MPL/2.0/.

namespace BrokeYourBike\WesternUnion\Enums;

/**
 * @author Ivan Stasiuk <ivan@stasi.uk>
 */
enum QuoteStatusEnum: string
{
    /**
     * Quote has been created.
     */
    case CREATED = 'Created';

    /**
     * Quote has expired.
     */
    case EXPIRED = 'Expired';

    /**
     * Quote has been used for booking an order.
     */
    case COMMITTED = 'Committed';
}
