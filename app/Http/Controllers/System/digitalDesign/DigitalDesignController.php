<?php

namespace App\Http\Controllers\System\digitalDesign;

use App\Http\Controllers\System\ResourceController;
use App\Services\System\DigitalDesignService;
use Illuminate\Http\Request;

class DigitalDesignController extends ResourceController
{
    public function __construct(private readonly DigitalDesignService $digitalDesignService)
    {
        parent::__construct($digitalDesignService);
    }

    public function storeValidationRequest()
    {
        return 'App\Http\Requests\system\digitalDesignRequest';
    }

    public function updateValidationRequest()
    {
        return 'App\Http\Requests\system\digitalDesignRequest';
    }

    public function moduleName()
    {
        return 'digital-design';
    }

    public function viewFolder()
    {
        return 'system.digital-design';
    }

    public function changeDigitalDesignStatus(Request $request)
    {
        $this->digitalDesignService->changeStatus($request);

        return redirect($this->getUrl())->withErrors(['success' => 'Status successfully updated.']);
    }

    public function viewDigitalDesignImageIndex($id)
    {
        $data['title'] = 'Digital Design Image';
        $data['indexUrl'] = $this->getUrl();
        $data['breadcrumbs'] = $this->breadcrumbForForm('Manage Digital Design Image');
        $data['imageLoc'] = 'digital-design';
        $data['digitalDesignId'] = $id;
        $data['images'] = $this->digitalDesignService->getDigitalDesignImages($id);
        return view('system.digital-design-image.index', $data);
    }

    public function storeDigitalDesignImage(Request $request, $id)
    {
        try {
            // Validate the request using the rules from the FormRequest
            $rules = [
                'image_names.*' => 'nullable|string|max:255',
                'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'existing_images.*' => 'nullable|integer',
                'delete_images.*' => 'nullable|integer',
            ];
            
            $validatedData = $request->validate($rules);
            
            $this->digitalDesignService->storeDigitalDesignImages($request->all(), $id);
            return redirect($this->getUrl())->withErrors(['success' => 'Digital design images uploaded successfully.']);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()])->withInput();
        }
    }

    public function viewDigitalDesignInfoIndex($id)
    {
        $data['title'] = 'Digital Design Info';
        $data['indexUrl'] = $this->getUrl();
        $data['breadcrumbs'] = $this->breadcrumbForForm('Manage Digital Design Info');
        $data['digitalDesignId'] = $id;
        $data['infos'] = $this->digitalDesignService->getDigitalDesignInfos($id);
        return view('system.digital-design-info.index', $data);
    }

    public function storeDigitalDesignInfo(Request $request, $id)
    {
        try {
            // Validate the request
            $rules = [
                'titles.*' => 'nullable|string|max:255',
                'infos.*' => 'nullable|string',
                'existing_infos.*' => 'nullable|integer',
                'delete_infos.*' => 'nullable|integer',
            ];
            
            $validatedData = $request->validate($rules);
            
            $this->digitalDesignService->storeDigitalDesignInfos($request->all(), $id);
            return redirect($this->getUrl())->withErrors(['success' => 'Digital design infos uploaded successfully.']);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()])->withInput();
        }
    }
} 