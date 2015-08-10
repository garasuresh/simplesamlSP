<?php
/**
 * SAML 2.0 remote IdP metadata for simpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote 
 */

/*
 * Guest IdP. allows users to sign up and register. Great for testing!
 */
/*
$metadata['http://simplesamlidp:86'] = array(
	'name' => array(
		'en' => 'Feide OpenIdP - guest users',
		'no' => 'Feide Gjestebrukere',
	),
	'description'          => 'Here you can login with your account on Feide RnD OpenID. If you do not already have an account on this identity provider, you can create a new one by following the create new account link and follow the instructions.',

	'SingleSignOnService'  => 'http://simplesamlidp:86/simplesaml/saml2/idp/SSOService.php',
	'SingleLogoutService'  => 'http://simplesamlisp:85/simplesaml/module.php/saml/sp/saml2-logout.php/default-sp',
	'certFingerprint'      => 'c9ed4dfb07caf13fc21e0fec1572047eb8a7a4cb'
);
*/

$metadata['http://simplesamlidp:86/simplesaml/saml2/idp/metadata.php'] = array (
  'metadata-set' => 'saml20-idp-remote',
  'entityid' => 'http://simplesamlidp:86/simplesaml/saml2/idp/metadata.php',
  'SingleSignOnService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'http://simplesamlidp:86/simplesaml/saml2/idp/SSOService.php',
    ),
  ),
  'SingleLogoutService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'http://simplesamlidp:86/simplesaml/saml2/idp/SingleLogoutService.php',
    ),
  ),
  'certData' => 'MIID1zCCAr+gAwIBAgIJAI/pDBFW6QOuMA0GCSqGSIb3DQEBCwUAMIGBMQswCQYDVQQGEwJVSzELMAkGA1UECAwCU1AxITAfBgNVBAoMGEludGVybmV0IFdpZGdpdHMgUHR5IEx0ZDEPMA0GA1UEAwwGc3VyZXNoMTEwLwYJKoZIhvcNAQkBFiJzdXJlc2guZ0BkaWdpdGFsbGlmZXNjaWVuY2VzLmNvLnVrMB4XDTE1MDgxMDA3MTQ1M1oXDTI1MDgwOTA3MTQ1M1owgYExCzAJBgNVBAYTAlVLMQswCQYDVQQIDAJTUDEhMB8GA1UECgwYSW50ZXJuZXQgV2lkZ2l0cyBQdHkgTHRkMQ8wDQYDVQQDDAZzdXJlc2gxMTAvBgkqhkiG9w0BCQEWInN1cmVzaC5nQGRpZ2l0YWxsaWZlc2NpZW5jZXMuY28udWswggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQCvXQWo1lhYX2qIL98+WLtWpK5+Z7492q32MVGF2airSoGrsGJGReDN6KqWmV0LGtcScADmBya9XDplLEdvQr9r2gXhC93FjwQOFmyWyndlDBkwqYRaj3Ve1SVm1JmmPGZTgzCanqFjKw29bqzb5TZHaAzS4SvB89NS9QnD3zXFoVng8g1k7qWxZW4ISfgmnenClJVXef7xpIon0Q1O3oINpoEp+jPIGS0sTlNgSAuscOhGpcfKHYjK2jDkr0dHHdnsk5v3ant3Pg7oIa9fznYcnQuIKCp99W2tENBV6wWqheCvehhdtSEEuVWVJcT+KwyvuX9EdN2n2AJmXAZJoS9JAgMBAAGjUDBOMB0GA1UdDgQWBBRIPtxy+M+1ro5+uDExEUpDiZoywTAfBgNVHSMEGDAWgBRIPtxy+M+1ro5+uDExEUpDiZoywTAMBgNVHRMEBTADAQH/MA0GCSqGSIb3DQEBCwUAA4IBAQBuTz46LCDCO75bsRmOz77KN2uJ5ph3lNE0RGtnuEMqTDTFr/sLAcMR/sx+pwKxyL3YVtRYQdBdzBDRwau02ScBtY11chEEci0FOgkIst5TpmQsnjF4zGTCeo4S9B+r9fBgr6AXMTgyOWdsOInZ7pWAzDLdJKK3+RbTgvUz54hF4ZSKKZIXJmihXLrHI9rX6jL5CHL8FiJA57rXT7JyTK58KMS/jnXN31OxYCI2IRj/utzV3qxXdjURF+SPrioHc8zQA8blTOdpaJKg3litXWVYAfe4sLVqZ7apoksbIRjngRlxnlxr0s9Tbp/3kKHwK4FZYlIBHcOoNNlVMgHHzTd1',
  'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
);

