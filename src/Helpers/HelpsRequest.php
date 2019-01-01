<?php

/*
 * This file is part of the Laravel Paystack package.
 *
 * (c) Prosper Otemuyiwa <prosperotemuyiwa@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Unicodeveloper\Paystack\Helpers;

trait HelpsRequest {

	/**
	 * Helps to populate a request with an array of key value pairs required by the Package
	 * @param array $args
	 */
    public function addRequestData(array $args)
    {
        foreach ($args as $key => $data) {
            request()->request->add([$key => $data]);
        }
    }
}
