<?php

namespace App\Http\Controllers\System\blog;

use App\Http\Controllers\System\ResourceController;
use App\Services\System\BlogService;
use Illuminate\Http\Request;

class BlogController extends ResourceController
{
    public function __construct(private readonly BlogService $blogService)
    {
        parent::__construct($blogService);
    }

    public function storeValidationRequest()
    {
        return 'App\Http\Requests\system\blogRequest';
    }

    public function updateValidationRequest()
    {
        return 'App\Http\Requests\system\blogRequest';
    }

    public function moduleName()
    {
        return 'blog';
    }

    public function viewFolder()
    {
        return 'system.blog';
    }

    public function changeBlogStatus(Request $request)
    {
        $this->blogService->changeStatus($request);

        return redirect($this->getUrl())->withErrors(['success' => 'Status successfully updated.']);
    }
} 