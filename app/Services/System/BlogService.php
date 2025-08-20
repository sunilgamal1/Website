<?php
namespace App\Services\System;
use App\Services\Service;
use App\Repositories\System\BlogRepository;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\File;

class BlogService extends Service
{
    use ImageTrait;

    protected $blogRepository;

    protected $bannerImgDir = '/uploads/blog/banner';
    protected $imageDir = '/uploads/blog/images';

    
    public function __construct(BlogRepository $blogRepository){
        $this->blogRepository = $blogRepository;
    }

    public function getAllData($data, $selectedColumns = [], $pagination = true)
    {
        return $this->blogRepository->getAllData($data);
    }

    public function indexPageData($request)
    {
        return [
            'items' => $this->getAllData($request),
        ];
    }

    public function createPageData($request)
    {
        return [
            'status' => $this->status(),
        ];
    }

    public function store($request)
    {
        try {
            $data = $request->except('_token');
            if (isset($data['banner_image'])) {
                $data['banner_image'] = $this->uploadImage($this->bannerImgDir, 'banner_image');
            }
            if (isset($data['image'])) {
                $data['image'] = $this->uploadImage($this->imageDir, 'image');
            }
            return $this->blogRepository->create($data);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function editPageData($request, $id)
    {
        $blog = $this->blogRepository->itemByIdentifier($id);
        return [
            'status' => $this->status(),    
            'blog' => $blog,
            'item' => $blog, // Add this for form action compatibility
        ];
    }

    public function update($request, $id)
    {
        try {
            $data = $request->except('_token');
            if (isset($data['banner_image'])) {
                $data['banner_image'] = $this->uploadImage($this->bannerImgDir, 'banner_image');
            }
            if (isset($data['image'])) {
                $data['image'] = $this->uploadImage($this->imageDir, 'image');
            }
            return $this->blogRepository->update($id, $data);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function delete($request, $id)
    {
        try {
            return $this->blogRepository->delete($request, $id);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function changeStatus($request)
    {
        return $this->blogRepository->changeStatus($request);
    }
} 