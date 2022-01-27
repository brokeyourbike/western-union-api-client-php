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
class Beneficiary extends DataTransferObject
{
    public string $id;
    public string $versionedOn;
    public string $email;
    public string $type;
    public string $taxId;
    public string $firstName;
    public string $middleName;
    public string $lastName;
    public string $phoneNumber;
    public string $cellNumber;
    public string $dateOfBirth;
    public string $gender;
    public string $businessName;
    public string $businessRegistrationNumber;
    public string $businessRegistrationCountry;
    public string $businessRegistrationStateProv;
    public string $industry;
    public Address $address;
}
