<?php

namespace App\Interfaces\System;

use App\Interfaces\OpenInterface;

interface ContactInterface extends OpenInterface
{
    public function getAllData($data, $selectedColumns = [], $pagination = true);
} 