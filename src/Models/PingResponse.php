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
class PingResponse extends JsonResponse
{
    public bool $isSuccessful;
    public string $developerMessage;
    public string $serverUtcTime;
}
