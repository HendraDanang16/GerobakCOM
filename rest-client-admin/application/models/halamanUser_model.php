<?php

    use GuzzleHttp\Client;

    defined('BASEPATH') OR exit('No direct script access allowed');

    class wisata_model extends CI_Model {
        // public $image="default.jpg";
        // public $id_user;

        public function getAll() {
            $client = new Client();

            $response = $client->request('GET', 'http://localhost/rest-server-wisata/rest-server/api/wisata', [
                'auth' => ['sheva','1234'],
                'query' => [
                    'X-API-KEY' => 'wpu123'
                ]
            ]);
            $result = json_decode($response->getBody()->getContents(),true);
            return $result['data'];
        }
    }
?>