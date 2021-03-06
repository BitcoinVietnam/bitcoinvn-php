<?php
/**
 * Copyright (c) 2017 Bitcoin Viet Nam Co., Ltd.
 *
 *  Permission is hereby granted, free of charge, to any person obtaining a copy of this software
 *  and associated documentation files (the "Software"), to deal in the Software without restriction,
 *  including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense,
 *  and/or sell copies of the Software, and to permit persons to whom the Software is furnished to
 *  do so, subject to the following conditions:
 *
 *  The above copyright notice and this permission notice shall be included in all copies or substantial
 *  portions of the Software.
 *
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
 *  INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A
 *  PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 *  COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN
 *  ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH
 *  THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace BitcoinVietnam\BitcoinVietnam\Response\Account\GetAccount\Account;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Tier
 * @package BitcoinVietnam\BitcoinVietnam\Response\Account\GetAccount\Account
 */
class Tier
{
    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("number")
     */
    private $number;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("feeRate")
     */
    private $feeRate;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("tradingLimit")
     */
    private $tradingLimit;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("orderLimit")
     */
    private $orderLimit;

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @return float
     */
    public function getFeeRate()
    {
        return $this->feeRate;
    }

    /**
     * @return float
     */
    public function getTradingLimit()
    {
        return $this->tradingLimit;
    }

    /**
     * @return float
     */
    public function getOrderLimit()
    {
        return $this->orderLimit;
    }
}