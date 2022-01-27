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
enum OrderStatusEnum: string
{
    /**
     * Order has been booked, settlement initiated
     */
    case COMMITTED = 'Committed';

    /**
     * Order's settlement payment has been received but not cleared yet
     */
    case RECEIVED = 'Received';

    /**
     * Order's settlement payment is cleared and funds are available
     */
    case FUNDED = 'Funded';
}
