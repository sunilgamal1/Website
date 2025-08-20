<?php

namespace App\Repositories\System;

use App\Interfaces\System\ContactInterface;
use App\Model\Contact;
use App\Repositories\Repository;
use Carbon\Carbon;
use Config;

class ContactRepository extends Repository implements ContactInterface
{
    public function __construct(private readonly Contact $contact)
    {
        parent::__construct($contact);
    }

    public function getAllData($data, $selectedColumns = [], $pagination = true)
    {
        $query = $this->query();
        if (count($selectedColumns) > 0) {
            $query->select($selectedColumns);
        }

        if (isset($data->keyword)) {
            $query->where(function ($q) use ($data) {
                $q->orwhere('name', 'ILIKE', '%' . $data->keyword . '%')
                    ->orwhere('email', 'ILIKE', '%' . $data->keyword . '%')
                    ->orwhere('option', 'ILIKE', '%' . $data->keyword . '%')
                    ->orwhere('message', 'ILIKE', '%' . $data->keyword . '%');
            });
        }

        if (isset($data->from) && isset($data->to)) {
            $from = Carbon::createFromFormat('Y-m-d H:i:s', $data->from . ' 00:00:00');
            $to = Carbon::createFromFormat('Y-m-d H:i:s', $data->to . ' 23:59:00');
            $query->whereBetween('created_at', [$from, $to]);
        }

        if ($pagination) {
            return $query->orderBy('id', 'DESC')->paginate(Config::get('constants.PAGINATION'));
        } else {
            return $query->get();
        }
    }
} 