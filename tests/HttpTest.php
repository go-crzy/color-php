<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;

require 'vendor/autoload.php';

final class HttpTest extends TestCase
{
	public function testPOST()
	{

		$client = new Client([
			'base_uri' => 'http://localhost:8080',
			'timeout'  => 2.0,
		]);
		$response = $client->request('GET', '/');
		$body = $response->getBody();
		$stringBody = (string) $body;

		$this->assertSame($stringBody, '{"color": "red"}');
	}
}
?>
