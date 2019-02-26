<?php

namespace CMPayments\OrderApi\Requests\Elements;

/**
 * Class PaymentRequest
 *
 * @package CMPayments\OrderApi\Requests\Elements
 * @author  Michel Westerink <michel.westerink@cmtelecom.com>
 */
class PaymentRequest
{
    /** @var PaymentPreference */
    private $initialPaymentReference;

    /**
     * @return PaymentPreference
     */
    public function getInitialPaymentReference()
    {
        return $this->initialPaymentReference;
    }

    /**
     * @param PaymentPreference $initialPaymentReference
     *
     * @return $this
     */
    public function setInitialPaymentReference($initialPaymentReference)
    {
        $this->initialPaymentReference = $initialPaymentReference;

        return $this;
    }
}
