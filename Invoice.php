<?php namespace Boutique\Invoice;

abstract class Invoice {

    /**
     * Invoice repository
     * @var Boutique\Invoice\InvoiceInterface
     */
    protected $invoice;

    /**
     * Class constructor
     * @param InvoiceInterface $invoice
     */
    public function __construct(InvoiceInterface $invoice)
    {
        $this->invoice = $invoice;
    }
}