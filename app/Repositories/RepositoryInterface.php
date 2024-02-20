<?php

namespace App\Repositories;

interface RepositoryInterface
{
    public function all();
    public function searchData($data);
    public function getData($id);
}
