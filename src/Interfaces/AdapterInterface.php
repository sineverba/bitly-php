<?php
/**
 * Created by PhpStorm.
 * User: aless
 * Date: 13/03/2019
 * Time: 12:38
 */

namespace Bitlywrap\Interfaces;

interface AdapterInterface
{
    /**
     * Prepare the headers for successive implementations
     *
     * @return array
     */
    public function getHeaders(): array;
}
