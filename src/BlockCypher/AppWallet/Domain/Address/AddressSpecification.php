<?php

namespace BlockCypher\AppWallet\Domain\Address;

/**
 * Interface AddressSpecification.  Used for In memory repositories.
 * @package BlockCypher\AppWallet\Domain\Address
 */
interface AddressSpecification
{
    /**
     * @param Address $address
     * @return bool
     */
    public function specifies(Address $address);
}