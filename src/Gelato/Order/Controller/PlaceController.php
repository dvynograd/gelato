<?php

namespace App\Gelato\Order\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use GuzzleHttp\Client;

class PlaceController
{
    /**
     * @Route("/order/place/{cartId}", name="gelato_order_place", requirements={"cartId"="\d+"})
     * @return JsonResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Exception
     */
    public function index(string $cartId)
    {
        $client = new Client();
        $response = $client->request('GET', 'http://localhost:8000/api/shipments');
        if (!$response->getStatusCode() == '200') {
            throw new \Exception('Could not reach remote shipping service');
        }

        return new JsonResponse([$cartId]);
    }
}