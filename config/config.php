<?php

return [
    /*
     |--------------------------------------------------------------------------
     | Default Phone Column
     |--------------------------------------------------------------------------
     |
     | Here you should specify name of your column (in users table) which user
     | phone number reside in.
     |
     */
    'phone_column' => 'phone',

    /*
     |--------------------------------------------------------------------------
     | SMS Gateway (REQUIRED)
     |--------------------------------------------------------------------------
     |
     | Here you should specify your implemented "SMS Gateway" class. This class is
     | responsible for sending SMS to users.
     |
     */
    'sms_gateway' => '',
];
