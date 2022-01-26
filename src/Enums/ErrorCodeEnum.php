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
     * Generic Mass Payments Web Service Error.
     *
     * An unhandled exception has occurred.
     */
    case GENERIC_ERROR = '1000';

    /**
     * Access denied.
     *
     * Client Certificate can't be verified or an attempt has been made to use a resources that you do not have access to.
     */
    case ACCESS_DENIED = '1001';

    /**
     * Required Field Validation Error.
     *
     * A required data input field was either not included in the request or was included as a NULL or empty value.
     * This type of error could optionally include an indication as to what field was missing.
     * For example: 1003:paymentMethod - indicates that the payment method of a payment was not included in the request or had a NULL or empty value.
     */
    case REQUIRED_FIELD_VALIDATION_ERROR = '1003';

    /**
     * Conditional Field Validation Error.
     */
    case CONDITIONAL_FIELD_VALIDATION_ERROR = '1004';

    /**
     * Input Field Value Validation Error.
     */
    case INPUT_FIELD_VALIDATION_ERROR = '1005';

    /**
     * Unexpected Field Submitted.
     *
     * A partner's request payload contained a field that was unexpected as it is not defined as a part of the resource structure.
     */
    case UNEXPECTED_FIELD_SUBMITTED = '1006';

    /**
     * Defined Limit Exceeded.
     *
     * Some resources (such as webhooks) have a defined limit on how many of them can be added.
     */
    case DEFINED_LIMIT_EXCEEDED = '1007';

    /**
     * Resource Not Found.
     *
     * A resource was requested as part of a collection or as a nested resource and the requested resource was not found.
     */
    case RESOURCE_NOT_FOUND = '1101';

    /**
     * Invalid Quote.
     *
     * Partner request batch commit without valid quote (without calling quote API or due to any other reason quote is not associated with a batch commit.
     */
    case INVALID_QUOTE = '1102';

    /**
     * Quote Expired.
     *
     * The quote was created more than 60 seconds ago and is no longer valid.
     */
    case QUOTE_EXPIRED = '1103';
}
