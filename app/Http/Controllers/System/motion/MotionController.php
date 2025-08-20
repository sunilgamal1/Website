<?php

namespace App\Http\Controllers\System\motion;

use App\Http\Controllers\System\ResourceController;
use App\Services\System\MotionService;
use Illuminate\Http\Request;

class MotionController extends ResourceController
{
    public function __construct(private readonly MotionService $motionService)
    {
        parent::__construct($motionService);
    }

    public function storeValidationRequest()
    {
        return 'App\Http\Requests\system\motionRequest';
    }

    public function moduleName()
    {
        return 'motion';
    }

    public function viewFolder()
    {
        return 'system.motion';
    }

    public function changeMotionStatus(Request $request)
    {
        $this->motionService->changeStatus($request);

        return redirect($this->getUrl())->withErrors(['success' => 'Status successfully updated.']);
    }

    public function viewMotionImageIndex($id)
    {
        $data['title'] = 'Motion Image';
        $data['indexUrl'] = $this->getUrl();
        $data['breadcrumbs'] = $this->breadcrumbForForm('Manage Motion Image');
        $data['imageLoc'] = 'motion';
        $data['motionId'] = $id;
        $data['images'] = $this->motionService->getMotionImages($id);
        return view('system.motion-image.index', $data);
    }

    public function storeMotionImage(Request $request, $id)
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
            
            $this->motionService->storeMotionImages($request->all(), $id);
            return redirect($this->getUrl())->withErrors(['success' => 'Motion images uploaded successfully.']);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()])->withInput();
        }
    }

    public function viewMotionInfoIndex($id)
    {
        $data['title'] = 'Motion Info';
        $data['indexUrl'] = $this->getUrl();
        $data['breadcrumbs'] = $this->breadcrumbForForm('Manage Motion Info');
        $data['motionId'] = $id;
        $data['infos'] = $this->motionService->getMotionInfos($id);
        return view('system.motion-info.index', $data);
    }

    public function storeMotionInfo(Request $request, $id)
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
            
            $this->motionService->storeMotionInfos($request->all(), $id);
            return redirect($this->getUrl())->withErrors(['success' => 'Motion infos uploaded successfully.']);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()])->withInput();
        }
    }
} 