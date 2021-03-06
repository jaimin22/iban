<?php

/**
 * IBAN API
 * An API to perform operations on IBAN and SWIFT/BIC numbers. This source of this document is an OpenAPI 3 document which lives at https://github.com/theAPIfox/ibanfox
 *
 * The version of the OpenAPI document: 1.0
 * Contact: hello@ibanfox.com
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

/**
 * IBAN API
 * @version 1.0
 */

$router->get('/', function () use ($router) {
    return $router->app->version();
});

/**
 * get getIbansIban
 * Summary: Get details for an IBAN
 * Notes: Given a valid IBAN, returns its component parts.  Example:  &#x60;&#x60;&#x60;bash curl --request GET \\ --url &#39;https://api.ibanfox.com/v1/ibans/DE89370400440532013000?apiKey&#x3D;46w4e65e4q54e6&#39;  &#x60;&#x60;&#x60;
 */
$router->get('/v1/ibans/{iban}', 'IbansApi@getIbansIban');
/**
 * get validateIBAN
 * Summary: Validate an IBAN
 * Notes: Given a candidate IBAN, returns the result of a validation, along with a suite of validation checks.  Example:  &#x60;&#x60;&#x60;bash curl --request GET \\ --url &#39;https://api.ibanfox.com/v1/ibans/DE89370400440532013000/validity?apiKey&#x3D;46w4e65e4q54e6&#39;  &#x60;&#x60;&#x60;
 */
$router->get('/v1/ibans/{iban}/validity', 'IbansApi@validateIBAN');

