<?php

namespace Config;

use CodeIgniter\Config\Services as CoreServices;

/**
 * Services Configuration file.
 *
 * Services are simply other classes/libraries that the system uses
 * to do its job. This is used by CodeIgniter to allow the core of the
 * framework to be swapped out easily without affecting the usage within
 * the rest of your application.
 *
 * This file holds any application-specific services, or service overrides
 * that you might need. An example has been included with the general
 * method format you should use for your service methods. For more examples,
 * see the core Services file at system/Config/Services.php.
 */
class Services extends CoreServices
{

	//    public static function example($getShared = true)
	//    {
	//        if ($getShared)
	//        {
	//            return static::getSharedInstance('example');
	//        }
	//
	//        return new \CodeIgniter\Example();
	//    }

	public static function getPrivateKey()
	{
		$privateKey = "<<<EOD 
		-----BEGIN RSA PRIVATE KEY-----
		Proc-Type: 4,ENCRYPTED
		DEK-Info: AES-128-CBC,27183E34B0D9CDB118627FD51DCC3CA5
		
		B3j5viaV1GJP/DImKbzUgYGZNQewAbfeAMoDIdNtqsX2zs0zZV0MYo55gWdVL7TV
		a0oS/G0rYJzxKpglmwU2Fhbilb7FyXKVLq3hJR3GujdkfAxTcnCUVnOWZ3KIpixP
		MAdIfwfjeI8NDUIPMnSJMdlxOLK1amdGb2SkDIJQBoiFxyJT5wum32ENP7bHgjR/
		kXX5it1zAQOx8En+wEVblBNNE3+hMnu7i/EhQUf3wC+2wf0bnraO+Nwq0eUCmpey
		GRu4/Xe18+UlujJVQHotYaoq5habo1J4qeoKfY6qz4KUVPaTeolhg2eSMFa1vb7l
		XJG3pUDAqrwHlYcynGf94nI44Dgsboq7eUtF7M08J6K/9tjFf8oNmXymZyTWGKF2
		qi3tUL6fTRLuRk7trKncEVec7RXO4Hd8623WPdbX0qMbZCloojbBZ+rF0aPP7uXH
		i+qluWIUZ4+cHzNUazaAiRU6Kh3xZmijzK54jUn85fD78hVtzJJilSOhTK+wP5GP
		huIF3AhIQMzE4Ylz/PGvrKAkVhcXTTorDHQkxOCoZ9R0ol0QsZxE/m778Ld1YH76
		2jCEk14e4QoKyQAhlgClW+ch49+N2vtUBZ0bONyqsg65MXlHQu8rE4s9AJq1cYz3
		xwrEWfgGBaRe7BAh6gg2CXYsAyEvcTl7tm4gUO7QRBdNvvyDMSGFnsma1B+a8Cz2
		92M52OccCYid3W6hU5hIQjIXYPD1a7Q79YWqC6VtLh4tQN4qbWG+5KWR3yI4u8bK
		y8qfAHXqjvIf1S2bjG09CJLlwUodVdtz2+TWOj6JVaaZqHKT1c3mGPmv4OV/Dq14
		0BVYElzxYf0GlNJeSFEDHgNWJBglSgS61kBeru7xqKb9lEXXo2ZbvyTUhEP0Uk5w
		wwWElm+FVUtUdtsiXKOy2j/DewrHSfMzI4tQJfj+eYcg2cLtHJR9c6Ltg5iMBuOc
		mQvY3QahdxeRaWU/bhEZb7f8TBevNLCXUG5/QT1Tk3McqeQKpKah+iIpms7i94wG
		K1uCuece/lJvyh3nLvG2P/VPmKyem7YSpN+WdUTS+W/C26eIlikXsDW+r4hGSRTP
		T4rCcYZSGormcPK1t32tvZBTCksVHTkLkhEIBxbN26SoSpUYWqBepjkEat/ScW1k
		ZakIpJ7lwFpdFwSLPwKSoadf838e9YGj9cGmx6oJx2x5XgqrZZIhvL8ujiYmSZ+i
		rs4OP1WL4N0pYwooAWVEDgdV0V9T+aAuWaE7xMPjw8K8LIF4FQgDEnFboVNs+PSN
		0uw/KGtENAQgehBxmPiEQr7Q8pf44ls5et65iiqNidjnMhQm7pt+E2CTIVTIWDxF
		GvTgflYDSVdiE9x+rebtR2rQvDp88M6eKHVnIfn13qwXLBnRrin74Ok82TuxR3xC
		ollcE9QajwC2RHTw+b+3ajxN4Q4M6v/qvvhrf24qeXjTDqfzeihOJKaa1DvjKRio
		N9gQJXulEFwTHVX9QwZ5pq/A3amEY4KDsOBeUpiZS94ZG02Qe0gEW8SjLos1QjAw
		4LHv6YA8zU5FgQFSg4UNCA/Ra+eowMfGyihzNPAX585XRkNkUjV5e+Cvr63Miwh0
		-----END RSA PRIVATE KEY-----
		EOD";

		return $privateKey;
	}
}
