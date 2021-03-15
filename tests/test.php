<?php

include('../vendor/autoload.php');

use Smartklas\SmartklasApi;

$client = new SmartklasApi([
    // 'key' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIyIiwianRpIjoiNjg1MjMxNmMyZWQxNGUwNjlmZjRiYzc4YThhNDRkZmQwMTQ0NzQ0YmJmYTJiMDcyMjcwYzI5NGQ0MGFkMzdkY2NiMjM1NzRhNzIxZDQ2NjUiLCJpYXQiOiIxNjE1MTcyODQyLjYxMjA4NCIsIm5iZiI6IjE2MTUxNzI4NDIuNjEyMDg3IiwiZXhwIjoiMTY0NjcwODg0Mi42MDQwNjkiLCJzdWIiOiI5ODViMGMyNi1jNWEyLTQxZDItYjNjMS04OTRhMGRiMGRkY2YiLCJzY29wZXMiOlsiYXBpLWtleSJdfQ.fcPnxWEfi_5BlMeLob1KN1yzPXn8VLkFFn57SrcbgJfMzXYdbB1KBUQnywEM783J_osWkFuSJHQZSO7_YDnFSoQeqPKOZTWyhWxuJ4g72pn2jPGxC-qphWq7XSntRvnPEnxFEIuxsysuaRM6Ym4wYop1ho8WCZ37EMgn_KcD9EgPfiHImQ5ghWDQ1dkeH96pAcYOvO1QYgBIZK-Dew2roEPYZ-p4LH_J1NuEwMn8ipfliFff1WFfku_6p-sxC_X4pyiRN0os4jSPzB7arEoqS94uAKw37fhudZiiOJTHZ550d6BOoNmcAjMmynmi-VRyIaoL4KbwTZ_l0i9bF1ZVPyDktislsl3mBmQaSdYOVewXXQgMjUTCNUkT_1s_Grf9fzcvv4m8YeaYimpF317D8U3hjslC8bw4k1S5VF0fZ8U-jxYVflL--6Ce_WXQ0n-bn9Hx8Z5H2nccSZvlVR2oILNOWTJULFwyhmn6RP3chLHv0VbQqzR9gOzFrI95_dxcV85uAQ0ESEOYptoK1HVBdA0eJ5C9WB_bARodqqcifdrpaDaqqSYRzqDjThPxbFqZEtZ_ddNqH9UZ4M5XdoFatW2mgLeTxzeSg5LAwrlC_wDFXE3TCTdOuDC3nN0UQ1KM3ksCP9_O3VoVaAPI3niF1mmwvzq3J2jCwrH_Y-23YoU'
]);

echo $client->modul('presensi', 'ptk')->store([
    'lat' => '-7.305645503705854',
    'lng' => '112.73387993250381',
    'address' => 'Jl. Smea No 4 Surabaya',
    'datetime' => '2021-03-15 08:32:00',
    'nik' => '3578242905950001',
])->getBody();