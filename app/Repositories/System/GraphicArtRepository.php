<?php

namespace App\Repositories\System;

use App\Interfaces\System\GraphicArtRepositoryInterface;
use App\Model\GraphicArt;
use App\Repositories\Repository;

class GraphicArtRepository extends Repository implements GraphicArtRepositoryInterface
{
    public function __construct(private readonly GraphicArt $graphicArt)
    {
        parent::__construct($graphicArt);
    }

    public function getAllData($data, $selectedColumns = [], $pagination = true)
    {
        $query = $this->query();

        if (isset($data->keyword) && $data->keyword !== null) {
            $query->where(function ($q) use ($data) {
                $q->where('title', 'LIKE', '%' . $data->keyword . '%')
                  ->orWhere('sub_title', 'LIKE', '%' . $data->keyword . '%')
                  ->orWhere('client', 'LIKE', '%' . $data->keyword . '%')
                  ->orWhere('role', 'LIKE', '%' . $data->keyword . '%');
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
        $graphicArt = $this->itemByIdentifier($id);
        return $graphicArt->update($data);
    }

    public function delete($request, $id)
    {
        $item = $this->itemByIdentifier($id);
        return $item->delete();
    }

    public function changeStatus($request)
    {
        $graphicArt = $this->itemByIdentifier($request->id);
        $graphicArt->status = !$graphicArt->status;
        $graphicArt->save();
    }
}