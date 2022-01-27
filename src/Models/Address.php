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
class Address extends DataTransferObject
{
    public string $line1;
    public string $line2;
    public string $line3;
    public string $city;
    public string $stateOrProv;
    public string $zipOrPostal;
    public string $countryCode;
}
