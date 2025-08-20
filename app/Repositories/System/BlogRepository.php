<?php

namespace App\Repositories\System;

use App\Interfaces\System\BlogRepositoryInterface;
use App\Model\Blog;
use App\Repositories\Repository;

class BlogRepository extends Repository implements BlogRepositoryInterface
{
    public function __construct(private readonly Blog $blog)
    {
        parent::__construct($blog);
    }

    public function getAllData($data, $selectedColumns = [], $pagination = true)
    {
        $query = $this->query();

        if (isset($data->keyword) && $data->keyword !== null) {
            $query->where(function ($q) use ($data) {
                $q->where('title', 'LIKE', '%' . $data->keyword . '%')
                  ->orWhere('sub_title', 'LIKE', '%' . $data->keyword . '%')
                  ->orWhere('author', 'LIKE', '%' . $data->keyword . '%')
                  ->orWhere('description', 'LIKE', '%' . $data->keyword . '%');
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
        $blog = $this->itemByIdentifier($id);
        return $blog->update($data);
    }

    public function delete($request, $id)
    {
        $item = $this->itemByIdentifier($id);
        return $item->delete();
    }

    public function changeStatus($request)
    {
        $blog = $this->itemByIdentifier($request->id);
        $blog->status = !$blog->status;
        $blog->save();
    }
} 