<?php if ( ! defined( 'ABSPATH' ) || ! class_exists( 'NF_Abstracts_Action' )) exit;
/*
 * Plugin Name: Ninja Forms - MailChimp Multi Referral 
 * Plugin URI: https://github.com/PixelPowerLLC/NinjaForms---Addon-MailChimp-Multi-Referral
 * Description: Splits a Ninja Form submission with multiple referral contacts into individual MailChimp contacts
 * Version: 3.0.0
 * Author: Malachi Witt - Pixel Power LLC
 * Author URI: https://pixelpowercle.com
 * Text Domain: ninja-forms-mailchimp-multi-referral-
 *
 * Copyright 2020 Malachi Witt - Pixel Power LLC.
 */

/**
 * Class NF_Action_MailChimpMultiReferralAction
 */
final class NF_MailChimpMultiReferral_Actions_MailChimpMultiReferralAction extends NF_Abstracts_Action
{
    /**
     * @var string
     */
    protected $_name  = 'mailchimp-multi-referral-';

    /**
     * @var array
     */
    protected $_tags = array();

    /**
     * @var string
     */
    protected $_timing = 'normal';

    /**
     * @var int
     */
    protected $_priority = '10';

    /**
     * Constructor
     */
    public function __construct()
{
    parent::__construct();

    $this->_nicename = __( 'MailChimp Multi Referral Action', 'ninja-forms' );
}

    /*
    * PUBLIC METHODS
    */

    public function save( $action_settings )
    {
    
    }

    public function process( $action_settings, $form_id, $data )
    {
         $form_fields   =  $form_data[ 'fields' ];
    
         foreach( $form_fields as $field ){

            $field_id    = $field[ 'id' ];
            $field_key   = $field[ 'key' ];
            $field_value = $field[ 'value' ];
        
            // Example Field Key comparison
            if( 'customer_full_name' == $field[ 'key' ] ){
                $customer_name = $field_value;
            }

            if( 'referral_full_name_1' == $field[ 'key' ] ){
                $referral_name_1 = $field_value;
            }

            if( 'referral_full_name_2' == $field[ 'key' ] ){
                $referral_name_2 = $field_value;
            }

            if( 'referral_full_name_3' == $field[ 'key' ] ){
                $referral_name_3 = $field_value;
            }

            if( 'referral_phone_1' == $field[ 'key' ] ){
                $referral_phone_1 = $field_value;
            }

            if( 'referral_phone_2' == $field[ 'key' ] ){
                $referral_phone_2 = $field_value;
            }

            if( 'referral_phone_3' == $field[ 'key' ] ){
                $referral_phone_3 = $field_value;
            }

            if( 'referral_address_1' == $field[ 'key' ] ){
                $referral_address_1 = $field_value;
            }

            if( 'referral_address_2' == $field[ 'key' ] ){
                $referral_address_2 = $field_value;
            }

            if( 'referral_address_3' == $field[ 'key' ] ){
                $referral_address_3 = $field_value;
            }
           
            if( 'referral_city_1' == $field[ 'key' ] ){
                $referral_city_1 = $field_value;
            }

            if( 'referral_city_2' == $field[ 'key' ] ){
                $referral_city_2 = $field_value;
            }

            if( 'referral_city_3' == $field[ 'key' ] ){
                $referral_city_3 = $field_value;
            }

            if( 'referral_state_1' == $field[ 'key' ] ){
                $referral_state_1 = $field_value;
            }

            if( 'referral_state_2' == $field[ 'key' ] ){
                $referral_state_2 = $field_value;
            }

            if( 'referral_state_3' == $field[ 'key' ] ){
                $referral_state_3 = $field_value;
            }

            if( 'referral_zip_1' == $field[ 'key' ] ){
                $referral_zip_1 = $field_value;
            }

            if( 'referral_zip_2' == $field[ 'key' ] ){
                $referral_zip_2 = $field_value;
            }

            if( 'referral_zip_3' == $field[ 'key' ] ){
                $referral_zip_3 = $field_value;
            }

            if( 'referral_email_1' == $field[ 'key' ] ){
                $referral_email_1 = $field_value;
            }

            if( 'referral_email_2' == $field[ 'key' ] ){
                $referral_email_2 = $field_value;
            }

            if( 'referral_email_3' == $field[ 'key' ] ){
                $referral_email_3 = $field_value;
            }
        }

            $referral_data_1 = array(
                'email_address' => $referral_email_1,
                'status' => 'subscribed',
                'merge_fields' => array(
                   'FULLNAME' => $referral_full_name_1,
                   'ADDRESS' => $referral_address_1,
                   'PHONE' => $referral_phone_1,
                   'ZIPCODE' => $referral_zip_1,
                   'CITY' => $referral_city_1,
                   'STATE' => $referral_state_1,
                   'TYPE' => 'Potential Customer'
                )
            );

            $referral_data_2 = array(
                'email_address' => $referral_email_2,
                'status' => 'subscribed',
                'merge_fields' => array(
                   'FULLNAME' => $referral_full_name_2,
                   'ADDRESS' => $referral_address_2,
                   'PHONE' => $referral_phone_2,
                   'ZIPCODE' => $referral_zip_2,
                   'CITY' => $referral_city_2,
                   'STATE' => $referral_state_2,
                   'TYPE' => 'Potential Customer'
                )
            );

            $referral_data_3 = array(
                'email_address' => $referral_email_3,
                'status' => 'subscribed',
                'merge_fields' => array(
                   'FULLNAME' => $referral_full_name_3,
                   'ADDRESS' => $referral_address_3,
                   'PHONE' => $referral_phone_3,
                   'ZIPCODE' => $referral_zip_3,
                   'CITY' => $referral_city_3,
                   'STATE' => $referral_state_3,
                   'TYPE' => 'Potential Customer'
                )
            );

            $referral_data_2 = array(
                'username' => 'codexworld',
                'password' => '123456'
            );

            $referral_data_3 = array(
                'username' => 'codexworld',
                'password' => '123456'
            );
        
            $payload_1 = json_encode(array("user" => $referral_data_1));

            postContact($payload_1);

            $payload_2 = json_encode(array("user" => $referral_data_2));

            postContact($payload_2);

            $payload_3 = json_encode(array("user" => $referral_data_3));

            postContact($payload_3);


        return $data;
    }

    private function postContact($payload)
    {
        // MailChimp URL
        // Add member to static segment
        // /lists/{list_id}/segments/{segment_id}/members
        $url = 'https://andersenreferral.com/lists/652797/segments/1999181/members';

        // Create a new cURL resource
        $ch = curl_init($url);

        // Attach encoded JSON string to the POST fields
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

        // Set the content type to application/json
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        // Return response instead of outputting
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Execute the POST request
        $result = curl_exec($ch);

        // Close cURL resource
        curl_close($ch);

    }
}
