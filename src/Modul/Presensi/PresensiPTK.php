<?php

namespace Smartklas\Modul\Presensi;

class PresensiPTK
{

    private $client;

    public function __construct($client)
    {
        $this->client = $client;
    }

    public function get()
    {
        return $this->client->get('/api/sync/presensi/ptk');
    }

    public function store($params = [])
    {
        return $this->client->post('/api/sync/presensi/ptk', [
            'form_params' => $params,
        ]);
    }
}
