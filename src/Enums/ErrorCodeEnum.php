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
enum ErrorCodeEnum: string
{
    /**
     * Transaction successful.
     */
    case SUCCESS = '00';

    /**
     * Transaction successful.
     * Same as `SUCCESS`, but different code.
     */
    case DOUBLE_SUCCESS = '000';

    /**
     * Invalid credentials.
     */
    case CREDENTIALS_ERROR = 'S1';

    /**
     * Invalid amount.
     */
    case AMOUNT_ERROR = 'S2';

    /**
     * Transaction not permitted to merchant.
     */
    case NOT_PERMITTED_ERROR = 'S3';

    /**
     * Invalid currency.
     */
    case CURRENCY_ERROR = 'S4';

    /**
     * Invalid/missing parameters.
     */
    case INVALID_PARAMS_ERROR = 'S5';

    /**
     * Invalid country.
     */
    case COUNTRY_ERROR = 'S6';

    /**
     * Generic error occurred.
     */
    case GENERIC_ERROR = 'S7';

    /**
     * Null/missing publickey.
     */
    case PUBLIC_KEY_ERROR = 'S8';

    /**
     * Null/missing authentication token.
     */
    case TOKEN_ERROR = 'S10';

    /**
     * Unable to connect to destination.
     */
    case DESTINATION_ERROR = 'S11';

    /**
     * Transaction failed.
     */
    case TRANSACTION_ERROR = 'S12';

    /**
     * Name enquiry error.
     */
    case NAME_ENQUIRY_ERROR = 'S12-01';

    /**
     * Invalid payout type.
     */
    case PAYOUT_TYPE_ERROR = 'S13';

    /**
     * Transaction reference must be unique.
     */
    case REFERENCE_ERROR = 'S14';

    /**
     * No data found.
     */
    case NOT_FOUND = 'S404';

    /**
     * Transaction is pending.
     */
    case PENDING = 'S20';

    /**
     * Transaction initiated.
     */
    case INITIATED = 'INI';

    /**
     * Transaction is in progress.
     */
    case IN_PROGRESS = 'INP';

    /**
     * Transaction has been locked for payout.
     */
    case LOCKED = 'LCK';

    /**
     * Transaction has been canceled.
     */
    case CANCELED = 'CANCEL';
}
