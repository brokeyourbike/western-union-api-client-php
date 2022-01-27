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
enum PaymentStatusEnum: string
{
    /**
     * Payment has been accepted by WUBS as part of a batch, but batch has not yet been committed.
     * For Dodd-Frank payments, this status is displayed during the 35-minute hold window in which payments can be cancelled.
     */
    case CREATED = 'Created';

    /**
     * Batch has been committed and payment amounts have been finalized.
     * We are actively processing the payments.
     */
    case PROCESSING = 'Processing';

    /**
     * Payments intentionally being held for data validation, sanctions review or other reasons.
     */
    case ON_HOLD = 'OnHold';

    /**
     * Payment has been released to a beneficiary.
     */
    case RELEASED = 'Released';

    /**
     * Payment was rejected by our payment processor.
     */
    case REJECTED = 'Rejected';

    /**
     * Payment is intentionally prohibited from being processed.
     */
    case PROHIBITED = 'Prohibited';

    /**
     * Payment was released by our payment processor but was returned by the beneficiary’s bank.
     */
    case RETURNED = 'Returned';

    /**
     * Payment has been cancelled.
     */
    case CANCELLED = 'Cancelled';

    /**
     * Payment was not accepted by WUBS due to validation error.
     * An errorCode field returns stating the validation reason and field in error.
     */
    case NOT_ACCEPTED = 'NotAccepted';

    /**
     * Notification from receiving bank to payment originator
     * that previously valid payment instructions are outdated or require a change.
     */
    case NOC = 'NOC';
}
