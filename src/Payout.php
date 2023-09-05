<?php

namespace Moneroo;

final class Payout extends Moneroo
{
    /**
     * Initialize a payout.
     *
     * @param array $data - Array of data to be sent
     *
     * @see https://docs.moneroo.io/sdks/php#initialize-payout
     */
    public function init(array $data)
    {
        return $this->sendRequest('post', $data, 'payouts/initialize');
    }

    /**
     * Verify a payout.
     *
     * @param string $payoutTransactionId - Payout transaction id
     *
     * @see https://docs.moneroo.io/sdks/php#verify-payout
     */
    public function verify(string $payoutTransactionId)
    {
        return $this->sendRequest('get', [], 'payouts/' . $payoutTransactionId . '/verify');
    }

    /**
     * Retrieve payout details.
     *
     * @param string $payoutTransactionId - Payout transaction id
     *
     * @see https://docs.moneroo.io/sdks/php#retrieve-payout
     */
    public function get(string $payoutTransactionId)
    {
        return $this->sendRequest('get', [], 'payouts/' . $payoutTransactionId);
    }
}
