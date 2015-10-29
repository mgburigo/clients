<?php
/**
 * Created by PhpStorm.
 * User: Michel
 * Date: 28/10/2015
 * Time: 22:20
 */

namespace CodeProject\Repositories;


use CodeProject\Entities\Client;
use Prettus\Repository\Eloquent\BaseRepository;

class ClientRepositoryEloquent extends BaseRepository implements ClientRepository
{
    public function model()
    {
        return Client::class;
    }
}