<?php

namespace App\Http\Controllers\System\graphicArt;

use App\Http\Controllers\System\ResourceController;
use App\Services\System\GraphicArtService;
use Illuminate\Http\Request;

class GraphicArtController extends ResourceController
{
    public function __construct(private readonly GraphicArtService $graphicArtService)
    {
        parent::__construct($graphicArtService);
    }

    public function storeValidationRequest()
    {
        return 'App\Http\Requests\system\graphicArtRequest';
    }

    public function moduleName()
    {
        return 'graphic-art';
    }

    public function viewFolder()
    {
        return 'system.graphic-art';
    }

    public function changeGraphicArtStatus(Request $request)
    {
        $this->graphicArtService->changeStatus($request);

        return redirect($this->getUrl())->withErrors(['success' => 'Status successfully updated.']);
    }

    public function viewGraphicArtImageIndex($id)
    {
        $data['title'] = 'Graphic Art Image';
        $data['indexUrl'] = $this->getUrl();
        $data['breadcrumbs'] = $this->breadcrumbForForm('Manage Graphic Art Image');
        $data['imageLoc'] = 'graphic-art';
        $data['graphicArtId'] = $id;
        $data['images'] = $this->graphicArtService->getGraphicArtImages($id);
        return view('system.graphic-art-image.index', $data);
    }

    public function storeGraphicArtImage(Request $request, $id)
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
            
            $this->graphicArtService->storeGraphicArtImages($request->all(), $id);
            return redirect($this->getUrl())->withErrors(['success' => 'Graphic art images uploaded successfully.']);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()])->withInput();
        }
    }
}
