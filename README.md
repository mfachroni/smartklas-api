Smartklas API merupakan library untuk mengakses API Smartklas

## Installing Guzzle

Rokomendasi untuk install smartklas-api menggunakan composer
[Composer](https://getcomposer.org/).

```bash
composer require mfachroni/smartklas-api
```

## Contoh Penggunaan

** Mengirim data presensi PTK **

```php
use Smartklas\SmartklasApi;

$client = new SmartklasApi([
    'key' => 'API-KEY'
]);

$client->modul('presensi', 'ptk')->store([
    'lat' => '-7.305645503705854',
    'lng' => '112.73387993250381',
    'address' => 'Alamat Presensi',
    'datetime' => '2021-03-15 08:32:00',
    'nik' => 'NIK-PTK',
])->getBody();
```


** Mengirim data presensi Siswa **

```php
use Smartklas\SmartklasApi;

$client = new SmartklasApi([
    'key' => 'API-KEY'
]);

$client->modul('presensi', 'siswa')->store([
    'lat' => '-7.305645503705854',
    'lng' => '112.73387993250381',
    'address' => 'Alamat Presensi',
    'datetime' => '2021-03-15 08:32:00',
    'nisn' => 'NISN-PTK',
])->getBody();
```

