<?php
	header('Access-Control-Allow-Origin:*');
	header("Content-Type: application/json");
echo <<<eof
{
	"statusCode"" 200,
	"resolvedTokens": [
		{
			"token":"token1@tokentest.com",
			"tokenValue":"yyamada@salesforce.com"
		}
	],
	"unresolvedTokens":[
		{
			"token":"abc",
			"message":"Invalid token; token does not exist."
		}
	],
	"unresolvedTokenCount":1,
	"resolvedTokenCount":1
}
eof;
?>