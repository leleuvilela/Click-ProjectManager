<?php

namespace App\Repositories;

use App\Entities\Client;
use App\Presenters\ClientPresenter;
use Prettus\Repository\Eloquent\BaseRepository;

class ClientRepositoryEloquent extends BaseRepository implements ClientRepository
{
    public function model(){
        return Client::class;
    }

    public function presenter()
    {
        return ClientPresenter::class;
    }
}