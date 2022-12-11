<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use App\Resolvers\ParserResolverTrait;
use GuzzleHttp\Exception\ClientException;
use App\Gateway\Interfaces\ApiGatewayInterface;

class DummyJsonApiService implements ApiGatewayInterface
{

    use  ParserResolverTrait;
    protected $client;

    protected $apiUrl;

    protected $resource;

    
    public function __construct(Client $client)
    {        
        $this->apiUrl = config('services.dummyjson.url');
        $this->resource = config('services.dummyjson.resource');
        $this->client = $client;

    }

   /**
     * @param string $uri
     * @return array
     * 
     * @todo Can be improved 
     */
    public function getResourceData()
    {        
        $query = [
            'page' => 1,
            'size' => 100,
            'sort' => 'name:-1',

        ];     
        
        try {
            $result = $this->client->request('GET', $this->apiUrl . '/'. $this->resource , [            
                'query' => $query
            ])->getBody()->getContents();

        } catch (ClientException $exception) {
            Log::error( $exception->getMessage());
        }
        
        return $this->toArray($result);
    }

}

