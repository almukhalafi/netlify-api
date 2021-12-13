<?php
/**
 * Created by PhpStorm.
 * User: majeed
 * Date: 13/12/2021
 * Time: 22:46
 */

namespace Almukhalafi\NetlifyApi;
use Illuminate\Support\Facades\Http;


class NetlifySites extends Netlify
{
    public function getSites(){
        $response = Http::accept('application/json')
            ->withToken($this->access_token)
            ->get($this->base_url.'/sites');
        if($response->successful()){
            return $response->json();
        } else {
            return $response->throw();
        }
    }


    public function getSite($site_id){
        $response = Http::accept('application/json')
            ->withToken($this->access_token)
            ->get($this->base_url.'/sites/'.$site_id);
        if($response->successful()){
            return $response->json();
        } else {
            return $response->throw();
        }
    }

}