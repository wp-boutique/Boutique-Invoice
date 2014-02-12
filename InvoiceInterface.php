<?php namespace Boutique\Invoice;

interface InvoiceInterface {

    /**
     * Set a invoice as precessable
     * @return boolean
     */
    public function process();

    /**
     * Set a invoice as refunded
     * @return boolean
     */
    public function refund();

    /**
     * Set a invoice as canceled
     * @return boolean
     */
    public function cancel();

    /**
     * Set a invoice as completed
     * @return booelan
     */
    public function completed();

}