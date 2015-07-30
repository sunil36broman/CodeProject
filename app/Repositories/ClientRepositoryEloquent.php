<?php
/**
 * Created by PhpStorm.
 * User: edujr
 * Date: 7/28/15
 * Time: 22:59
 */

namespace CodeProject\Repositories;

use CodeProject\Entities\Client;
use Prettus\Repository\Eloquent\BaseRepository;

class ClientRepositoryEloquent extends BaseRepository implements ClientRepository {

    public function model() {
        return Client::class;
    }
}