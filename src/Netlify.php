<?php
/**
 * Created by PhpStorm.
 * User: majeed
 * Date: 13/12/2021
 * Time: 23:13
 */

namespace Almukhalafi\NetlifyApi;


class Netlify
{
    public $access_token = '';
    public $base_url = 'https://api.netlify.com/api/v1';
    public function __construct()
    {
        $this->access_token = config('netlify.access_token');
    }
}