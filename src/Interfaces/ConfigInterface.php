<?php

// Copyright (C) 2022 Ivan Stasiuk <ivan@stasi.uk>.
//
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this file,
// You can obtain one at https://mozilla.org/MPL/2.0/.

namespace BrokeYourBike\WesternUnion\Interfaces;

/**
 * @author Ivan Stasiuk <ivan@stasi.uk>
 */
interface ConfigInterface
{
    public function getUrl(): string;
    public function getCertificatePath(): string;
    public function getCertificatePassword(): string;
}
