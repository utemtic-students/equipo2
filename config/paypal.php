<?php
return array(
    // set your paypal credential
    'client_id' => 'AZS5fT28dn0eVbWkKS46-Dd-QGMCXEINbPnXH4cwG_1rL1-0rMirEfzWDFDMRqgTZrgf_bZzXw7RVSun',
    'secret' => 'EF788642j_F4kFKWGvAyJWcBv0vAWrJfMdjz65kkDCuOV15wW50-dpo8XREFbIaSiBG3QwYYpBZ6sdOR',
    //estos de aqui no los toques 

    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);