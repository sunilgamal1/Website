<?php

namespace App\Services\System;

use App\Repositories\System\ContactRepository;
use App\Services\Service;

class ContactService extends Service
{
    public function __construct(ContactRepository $contactRepository)
    {
        parent::__construct($contactRepository);
    }

    public function getAllData($data, $selectedColumns = [], $pagination = true)
    {
        return $this->repository->getAllData($data);
    }

    public function indexPageData($data)
    {
        return [
            'items' => $this->getAllData($data),
        ];
    }
} 