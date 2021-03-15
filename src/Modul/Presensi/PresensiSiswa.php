<?php

namespace Smartklas\Modul\Presensi;

class PresensiSiswa
{

    private $client;

    public function __construct($client)
    {
        $this->client = $client;
    }

    public function get()
    {
        return $this->client->get('/api/sync/presensi/siswa')->getBody();
    }

    public function store($params = [])
    {
        return $this->client->post('/api/sync/presensi/siswa', [
            'form_params' => $params,
        ])->getBody();
    }
}
