<?php

namespace App\Repositories\System;

use App\Interfaces\System\MotionRepositoryInterface;
use App\Model\Motion;
use App\Repositories\Repository;

class MotionRepository extends Repository implements MotionRepositoryInterface
{
    public function __construct(private readonly Motion $motion)
    {
        parent::__construct($motion);
    }

    public function getAllData($data, $selectedColumns = [], $pagination = true)
    {
        $query = $this->query();

        if (isset($data->keyword) && $data->keyword !== null) {
            $query->where(function ($q) use ($data) {
                $q->where('title', 'LIKE', '%' . $data->keyword . '%')
                  ->orWhere('sub_title', 'LIKE', '%' . $data->keyword . '%')
                  ->orWhere('title_2', 'LIKE', '%' . $data->keyword . '%')
                  ->orWhere('sub_title_2', 'LIKE', '%' . $data->keyword . '%');
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
        $motion = $this->itemByIdentifier($id);
        return $motion->update($data);
    }

    public function delete($request, $id)
    {
        $item = $this->itemByIdentifier($id);
        return $item->delete();
    }

    public function changeStatus($request)
    {
        $motion = $this->itemByIdentifier($request->id);
        $motion->status = !$motion->status;
        $motion->save();
    }
} 