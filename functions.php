/*
 * Ninja Forms - MailChimp Multi Referral
 * Plugin URI: https://github.com/PixelPowerLLC/NinjaForms---Addon-MailChimp-Multi-Referral
 * Description: Splits a Ninja Form submission with multiple referral contacts into individual MailChimp contacts
 * Author: Malachi Witt - Pixel Power LLC
 * Author URI: https://pixelpowercle.com
 * Text Domain: ninja-forms-mailchimp-multi-referral-
 *
 * Copyright 2020 Malachi Witt - Pixel Power LLC.
 */

add_action( 'multi_referral', 'call_back_multi_referral' );

function call_back_multi_referral( $data ) {
	
    foreach ($data[ 'fields_by_key' ] as $id => $field) {

        $field_key   = $field[ 'key' ];
        $field_value = $field[ 'value' ];
        
        //Referring Information
        if ('rba_name' == $field[ 'key' ]) {
            $rba_name = $field_value;
        }
        
        if ('referring_name' == $field[ 'key' ]) {
            $referring_name = $field_value;
        }
        
        if ('referring_phone' == $field[ 'key' ]) {
            $referring_phone = $field_value;
        }
        
        if ('referring_email' == $field[ 'key' ]) {
            $referring_email = $field_value;
        }
        
        //Referral Information
        if ('customer_full_name' == $field[ 'key' ]) {
            $customer_name = $field_value;
        }
        
        if ('referral_full_name_1' == $field[ 'key' ]) {
            $referral_name_1 = $field_value;
        }
        
        if ('referral_full_name_2' == $field[ 'key' ]) {
            $referral_name_2 = $field_value;
        }
        
        if ('referral_full_name_3' == $field[ 'key' ]) {
            $referral_name_3 = $field_value;
        }
        
        if ('referral_phone_1' == $field[ 'key' ]) {
            $referral_phone_1 = $field_value;
        }
        
        if ('referral_phone_2' == $field[ 'key' ]) {
            $referral_phone_2 = $field_value;
        }
        
        if ('referral_phone_3' == $field[ 'key' ]) {
            $referral_phone_3 = $field_value;
        }
        
        if ('referral_address_1' == $field[ 'key' ]) {
            $referral_address_1 = $field_value;
        }
        
        if ('referral_address_2' == $field[ 'key' ]) {
            $referral_address_2 = $field_value;
        }
        
        if ('referral_address_3' == $field[ 'key' ]) {
            $referral_address_3 = $field_value;
        }
        
        if ('referral_city_1' == $field[ 'key' ]) {
            $referral_city_1 = $field_value;
        }
        
        if ('referral_city_2' == $field[ 'key' ]) {
            $referral_city_2 = $field_value;
        }
        
        if ('referral_city_3' == $field[ 'key' ]) {
            $referral_city_3 = $field_value;
        }
        
        if ('referral_state_1' == $field[ 'key' ]) {
            $referral_state_1 = $field_value;
        }
        
        if ('referral_state_2' == $field[ 'key' ]) {
            $referral_state_2 = $field_value;
        }
        
        if ('referral_state_3' == $field[ 'key' ]) {
            $referral_state_3 = $field_value;
        }
        
        if ('referral_zip_1' == $field[ 'key' ]) {
            $referral_zip_1 = $field_value;
        }
        
        if ('referral_zip_2' == $field[ 'key' ]) {
            $referral_zip_2 = $field_value;
        }
        
        if ('referral_zip_3' == $field[ 'key' ]) {
            $referral_zip_3 = $field_value;
        }
        
        if ('referral_email_1' == $field[ 'key' ]) {
            $referral_email_1 = $field_value;
        }
        
        if ('referral_email_2' == $field[ 'key' ]) {
            $referral_email_2 = $field_value;
        }
        
        if ('referral_email_3' == $field[ 'key' ]) {
            $referral_email_3 = $field_value;
        }
    }
		
        $referral_data = array(
			'status' => 'subscribed',
            'email_address' => $referral_email_1,   
            'merge_fields' => array(
                'REFEMAIL' => $referring_email,
                'RBANAME' => $rba_name,
                'REFNAME' => $referring_name,
                'REFPHONE' => $referring_phone,
                'FULLNAME' => $referral_name_1,
				'PHONE' => $referral_phone_1,
				'TYPE' => 'Potential Customer',
                'ADDRESS' => array(
					'addr1' => $referral_address_1,
					'addr2' => '',
					'city' => $referral_city_1,
					'state' => $referral_state_1,
					'zip' => $referral_zip_1,
					'country' => 'US'
				)
			)
            );
		
        error_log(print_r($referral_data, TRUE));    
        $payload = json_encode($referral_data);
        error_log(print_r($payload, TRUE));
		postContact($payload);
    
        $referral_data = array(
			'status' => 'subscribed',
            'email_address' => $referral_email_2,   
            'merge_fields' => array(
                'REFEMAIL' => $referring_email,
                'RBANAME' => $rba_name,
                'REFNAME' => $referring_name,
                'REFPHONE' => $referring_phone,
                'FULLNAME' => $referral_name_2,
				'PHONE' => $referral_phone_2,
				'TYPE' => 'Potential Customer',
                'ADDRESS' => array(
					'addr1' => $referral_address_2,
					'addr2' => '',
					'city' => $referral_city_2,
					'state' => $referral_state_2,
					'zip' => $referral_zip_2,
					'country' => 'US'
				)
			)
            );

        $payload = json_encode($referral_data);
        postContact($payload);
	
        $referral_data = array(
			'status' => 'subscribed',
            'email_address' => $referral_email_3,   
            'merge_fields' => array(
                'REFEMAIL' => $referring_email,
                'RBANAME' => $rba_name,
                'REFNAME' => $referring_name,
                'REFPHONE' => $referring_phone,
                'FULLNAME' => $referral_name_3,
				'PHONE' => $referral_phone_3,
				'TYPE' => 'Potential Customer',
                'ADDRESS' => array(
					'addr1' => $referral_address_3,
					'addr2' => '',
					'city' => $referral_city_3,
					'state' => $referral_state_3,
					'zip' => $referral_zip_3,
					'country' => 'US'
				)
			)
            );

        $payload = json_encode($referral_data);
        postContact($payload);
}

function postContact($payload)
{
        // MailChimp URL
        // Add member to static segment
        // /lists/{list_id}/segments/{segment_id}/members
        $url = 'Your MailChimp URL Here';
        
        //Can be any text
        $username = 'Your Username Here';

        //API Key
        $password = 'Your API Key HERE';

        // Create a new cURL resource
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
        
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

        // Attach encoded JSON string to the POST fields
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

        // Set the content type to application/json
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        // Return response instead of outputting
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Execute the POST request
        $result = curl_exec($ch);
        error_log(print_r($result, TRUE));
        // Close cURL resource
        curl_close($ch);
    }
