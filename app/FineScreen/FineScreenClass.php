<?php

namespace App\FineScreen;



class FineScreenClass
{

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function Stocks()
    {


        $client = new \GuzzleHttp\Client([
            'verify' => false
        ]);
        $response = $client->get('https://www.finscreener.org/engine/ws/pokrocilefiltre/service.php');


        $ids = json_decode($response->getBody(), true);
        $id_array = [];
        foreach ($ids as $val) {
            $id_array[] = $val['idcp'];
        }
        $headers = [
            'Origin' => 'https://www.finscreener.org',
            'Content-Type' => 'application/json',
        ];

        $json = array(
            'typTabulky' => 'OverBought',
            'zoradenie' =>
            array(
                'idStlpca' => '4',
                'vzostupne' => false,
            ),
            'idcps' => $id_array,
            'idu' => -1,
            'strankovanie' =>
            array(
                'cisloStranky' => 1,
                'pocetZaznamovNaStranku' => 100,
            ),
        );

        $client = new \GuzzleHttp\Client([
            'verify' => false
        ]);
        $response = $client->post('https://ws.finscreener.org:8443/overstocks/get', [
            'headers' => $headers,
            'json' => $json,
        ]);


        return json_decode($response->getBody(), true);
    }
}
