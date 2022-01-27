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
class PaymentResponse extends JsonResponse
{
    public string $id;
    public ?string $customerId;
    public string $status;
    public ?string $errorCode;
    public ?string $partnerReference;
    public ?string $createdOn;
    public ?string $lastUpdatedOn;
    public ?string $paymentMethod;
    public ?string $paymentReference;
    public ?string $paymentVersion;
    public ?int $amount;
    public ?string $currencyCode;
    public ?int $settlementAmount;
    public ?string $settlementCurrencyCode;
    public ?bool $isFixedAmountInSettlementCurrency;
    public ?string $chargeType;
    public ?int $amountReturned;
    public ?string $amountReturnedCurrency;
    public ?string $purposeOfPayment;
    public ?string $instructionForBank;
    public ?string $instructionCodeForBank;
    public ?string $remittanceType;
    public ?string $updateErrorCode;
    public ?string $updateErrorOn;
    public ?Beneficiary $beneficiary;
    public ?BankAccount $bankAccount;
    public ?ThirdPartyRemitter $thirdPartyRemitter;
}
