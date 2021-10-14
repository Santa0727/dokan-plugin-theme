<?php
namespace WeDevs\DokanPro\Modules\Germanized\CustomFields;

use WeDevs\DokanPro\Modules\Germanized\Helper;

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Class Billing
 *
 * @package WeDevs\DokanPro\Modules\Germanized\CustomFields
 *
 * @since 3.3.1
 */
class Billing {
    /**
     * Billing constructor.
     */
    public function __construct() {
        // add custom fields under customer billing details
        add_filter( 'woocommerce_billing_fields', [ $this, 'custom_billing_checkout_fields' ], 10, 1 );
    }

    /**
     * Add custom fields under customer billing details
     *
     * @param array $fields
     *
     * @since 3.3.1
     * @return array
     */
    public function custom_billing_checkout_fields( $fields ) {
        $new_fields = [];
        // get enabled fields for customer
        $endabled_fileds = Helper::is_fields_enabled_for_customer();

        if ( $endabled_fileds['billing_dokan_company_id_number'] ) {
            $new_fields['billing_dokan_company_id_number'] = [
                'type'      => 'text',
                'label'     => Helper::get_customer_company_id_label(),
                'required'  => false,
                'class'     => [ 'form-row-wide' ],
            ];
        }

        if ( $endabled_fileds['billing_dokan_vat_number'] ) {
            $new_fields['billing_dokan_vat_number'] = [
                'label'     => Helper::get_customer_vat_number_label(),
                'required'  => false,
                'class'     => [ 'form-row-wide' ],
            ];
        }

        if ( $endabled_fileds['billing_dokan_bank_name'] ) {
            $class = $endabled_fileds['billing_dokan_bank_name'] && $endabled_fileds['billing_dokan_bank_iban'] ? 'form-row-first' : 'form-row-wide';
            $new_fields['billing_dokan_bank_name'] = [
                'label'     => Helper::get_customer_bank_name_label(),
                'required'  => false,
                'class'     => [ $class ],
            ];
        }

        if ( $endabled_fileds['billing_dokan_bank_iban'] ) {
            $class = $endabled_fileds['billing_dokan_bank_name'] && $endabled_fileds['billing_dokan_bank_iban'] ? 'form-row-last' : 'form-row-wide';
            $new_fields['billing_dokan_bank_iban'] = [
                'label'     => Helper::get_customer_bank_iban_label(),
                'required'  => false,
                'class'     => [ $class ],
            ];
        }

        $fields = Helper::array_insert_after( $fields, 'billing_company', $new_fields );

        return $fields;
    }
}
