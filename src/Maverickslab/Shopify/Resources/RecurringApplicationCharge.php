<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 3/17/15
 * Time: 12:31 AM
 */

namespace Maverickslab\Shopify\Resources;


use Maverickslab\Shopify\ApiRequestor;
use Maverickslab\Shopify\Exceptions\ShopifyException;

class RecurringApplicationCharge extends BaseResource{


    public function __construct( ApiRequestor $requester){
        $this->requester = $requester;
        $this->requester->resource = '/admin/recurring_application_charges';
    }

    public function activate($charge_id)
    {
        $this->requester->resource = '/admin/recurring_application_charges/'.$charge_id.'/activate';

        return $this->requester->post();
    }
}