<?php

declare(strict_types=1);

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Flex\Response;

class ApiContext extends MinkContext implements Context
{
    /**
     * @var KernelInterface
     */
    private $kernel;

    /**
     * @var Response|null
     */
    private $response;

    public function __construct(KernelInterface $kernel)
    {
        $this->kernel = $kernel;
    }

    /**
     * @When I send a :method request to :path with data:
     * @throws Exception
     */
    public function iSendARequestToWithData(string $method, string $path, PyStringNode $json)
    {
        $this->response = $this->kernel->handle(Request::create($path, $method, json_decode($json->getRaw(), true)));
    }

    /**
     * @Then the response should be received
     */
    public function theResponseShouldBeReceived()
    {
        if ($this->response === null) {
            throw new \RuntimeException('No response received');
        }
    }

    /**
     * @Then the JSON response should contain:
     */
    public function theJSONResponseShouldContain(TableNode $table)
    {
        $data = $table->getColumnsHash();

    }
}
