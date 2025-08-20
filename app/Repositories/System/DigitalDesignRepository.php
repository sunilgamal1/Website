<?php

namespace App\Repositories\System;

use App\Interfaces\System\DigitalDesignRepositoryInterface;
use App\Model\DigitalDesign;
use App\Repositories\Repository;

class DigitalDesignRepository extends Repository implements DigitalDesignRepositoryInterface
{
    public function __construct(private readonly DigitalDesign $digitalDesign)
    {
        parent::__construct($digitalDesign);
    }

    public function getAllData($data, $selectedColumns = [], $pagination = true)
    {
        $query = $this->query();

        if (isset($data->keyword) && $data->keyword !== null) {
            $query->where(function ($q) use ($data) {
                $q->where('title', 'LIKE', '%' . $data->keyword . '%')
                  ->orWhere('sub_title', 'LIKE', '%' . $data->keyword . '%')
                  ->orWhere('section_title_1', 'LIKE', '%' . $data->keyword . '%')
                  ->orWhere('section_title_2', 'LIKE', '%' . $data->keyword . '%');
            });
        }
        
        if (count($selectedColumns) > 0) {
            $query->select($selectedColumns);
        }
        
        if ($pagination) {
            return $query->orderBy('id', 'DESC')->paginate(paginate());
        }

        return $query->orderBy('id', 'DESC')->get();
    }

    public function create($request)
    {
        return $this->model->create($request);
    }

    public function update($id, $data)
    {
        $digitalDesign = $this->itemByIdentifier($id);
        return $digitalDesign->update($data);
    }

    public function delete($request, $id)
    {
        $item = $this->itemByIdentifier($id);
        return $item->delete();
    }

    public function changeStatus($request)
    {
        $digitalDesign = $this->itemByIdentifier($request->id);
        $digitalDesign->status = !$digitalDesign->status;
        $digitalDesign->save();
    }
} 