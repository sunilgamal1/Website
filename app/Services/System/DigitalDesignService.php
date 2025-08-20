<?php
namespace App\Services\System;
use App\Services\Service;
use App\Repositories\System\DigitalDesignRepository;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\File;

class DigitalDesignService extends Service
{
    use ImageTrait;

    protected $digitalDesignRepository;

    protected $bannerImgDir = '/uploads/digital-design/banner';
    protected $bannerImg2Dir = '/uploads/digital-design/banner2';
    protected $bannerImg3Dir = '/uploads/digital-design/banner3';
    protected $digitalDesignImageDir = '/uploads/digital-design/images';

    
    public function __construct(DigitalDesignRepository $digitalDesignRepository){
        $this->digitalDesignRepository = $digitalDesignRepository;
    }

    public function getAllData($data, $selectedColumns = [], $pagination = true)
    {
        return $this->digitalDesignRepository->getAllData($data);
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
            if (isset($data['banner_image_2'])) {
                $data['banner_image_2'] = $this->uploadImage($this->bannerImg2Dir, 'banner_image_2');
            }
            if (isset($data['banner_image_3'])) {
                $data['banner_image_3'] = $this->uploadImage($this->bannerImg3Dir, 'banner_image_3');
            }
            return $this->digitalDesignRepository->create($data);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function editPageData($request, $id)
    {
        $digitalDesign = $this->digitalDesignRepository->itemByIdentifier($id);
        return [
            'status' => $this->status(),    
            'digitalDesign' => $digitalDesign,
            'item' => $digitalDesign, // Add this for form action compatibility
        ];
    }

    public function update($request, $id)
    {
        try {
            $digitalDesign = $this->digitalDesignRepository->itemByIdentifier($id);
            $data = $request->except('_token');
            
            if (isset($data['banner_image'])) {
                // Remove old image if it exists
                if ($digitalDesign->banner_image) {
                    $this->removeImage($this->bannerImgDir, $digitalDesign->banner_image);
                }
                $data['banner_image'] = $this->uploadImage($this->bannerImgDir, 'banner_image');
            }
            
            if (isset($data['banner_image_2'])) {
                // Remove old image if it exists
                if ($digitalDesign->banner_image_2) {
                    $this->removeImage($this->bannerImg2Dir, $digitalDesign->banner_image_2);
                }
                $data['banner_image_2'] = $this->uploadImage($this->bannerImg2Dir, 'banner_image_2');
            }
            
            if (isset($data['banner_image_3'])) {
                // Remove old image if it exists
                if ($digitalDesign->banner_image_3) {
                    $this->removeImage($this->bannerImg3Dir, $digitalDesign->banner_image_3);
                }
                $data['banner_image_3'] = $this->uploadImage($this->bannerImg3Dir, 'banner_image_3');
            }
            
            return $this->digitalDesignRepository->update($id, $data);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function changeStatus($request)  
    {
        $this->digitalDesignRepository->changeStatus($request);
    }

    public function status()
    {   
        return [
            ['value' => 1, 'label' => 'Active'],
            ['value' => 0, 'label' => 'Inactive'],
        ];
    }

    public function delete($request, $id)
    {
        try {
            $digitalDesign = $this->digitalDesignRepository->itemByIdentifier($id);
            // Remove uploaded images if they exist
            if ($digitalDesign->banner_image) {
                $this->removeImage($this->bannerImgDir, $digitalDesign->banner_image);
            }
            if ($digitalDesign->banner_image_2) {
                $this->removeImage($this->bannerImg2Dir, $digitalDesign->banner_image_2);
            }
            if ($digitalDesign->banner_image_3) {
                $this->removeImage($this->bannerImg3Dir, $digitalDesign->banner_image_3);
            }
            
            // Remove digital design images
            $digitalDesignImages = $digitalDesign->images;
            foreach ($digitalDesignImages as $image) {
                $this->removeImage($this->digitalDesignImageDir, $image->image);
            }
            
            // Remove digital design infos
            $digitalDesignInfos = $digitalDesign->infos;
            foreach ($digitalDesignInfos as $info) {
                $info->delete();
            }
            
            return $this->digitalDesignRepository->delete($request, $id);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function storeDigitalDesignImages($request, $digitalDesignId)
    {
        try {
            // Check if at least one image is provided
            $hasImages = false;
            
            // Process existing images
            if (isset($request['existing_images']) && is_array($request['existing_images'])) {
                foreach ($request['existing_images'] as $index => $existingImageId) {
                    if ($existingImageId) {
                        $digitalDesignImage = \App\Model\DigitalDesignImage::find($existingImageId);
                        if ($digitalDesignImage) {
                            // Update image name if provided
                            if (isset($request['image_names'][$index])) {
                                $digitalDesignImage->image_name = $request['image_names'][$index];
                                $digitalDesignImage->save();
                            }
                            $hasImages = true;
                        }
                    }
                }
            }
            
            // Process new images
            if (isset($request['images']) && is_array($request['images'])) {
                foreach ($request['images'] as $index => $image) {
                    $imageName = isset($request['image_names'][$index]) ? $request['image_names'][$index] : '';
                    
                    // Check if this is an existing image being updated
                    $existingImageId = isset($request['existing_images'][$index]) ? $request['existing_images'][$index] : null;
                    
                    if ($existingImageId) {
                        $digitalDesignImage = \App\Model\DigitalDesignImage::find($existingImageId);
                        if ($digitalDesignImage && $image && $image->isValid()) {
                            // Remove old image
                            $this->removeImage($this->digitalDesignImageDir, $digitalDesignImage->image);
                            
                            // Upload new image
                            $uploadedImageName = $this->uploadSingleImage($this->digitalDesignImageDir, $image);
                            
                            // Update record
                            $digitalDesignImage->update([
                                'image' => $uploadedImageName,
                                'image_name' => $imageName
                            ]);
                            $hasImages = true;
                        }
                    } else {
                        // This is a new image
                        if ($image && $image->isValid()) {
                            // Upload the new image
                            $uploadedImageName = $this->uploadSingleImage($this->digitalDesignImageDir, $image);
                            
                            // Store in digital_design_images table
                            \App\Model\DigitalDesignImage::create([
                                'digital_design_id' => $digitalDesignId,
                                'image' => $uploadedImageName,
                                'image_name' => $imageName
                            ]);
                            $hasImages = true;
                        }
                    }
                }
            }
            
            // Process deletions
            if (isset($request['delete_images']) && is_array($request['delete_images'])) {
                foreach ($request['delete_images'] as $deleteImageId) {
                    $digitalDesignImage = \App\Model\DigitalDesignImage::find($deleteImageId);
                    if ($digitalDesignImage) {
                        $this->removeImage($this->digitalDesignImageDir, $digitalDesignImage->image);
                        $digitalDesignImage->delete();
                    }
                }
            }
            
            // If no images were processed, throw an error
            if (!$hasImages) {
                throw new \Exception('At least one image is required.');
            }
        } catch (\Exception $e) {
            throw new \Exception('Error uploading digital design images: ' . $e->getMessage());
        }
    }

    private function uploadSingleImage($dir, $file)
    {
        $directory = public_path() . $dir;
        if (!is_dir($directory)) {
            File::makeDirectory($directory, $mode = 0755, true);
        }

        $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move($directory, $fileName);
        
        return $fileName;
    }

    public function getDigitalDesignImages($digitalDesignId)
    {
        return \App\Model\DigitalDesignImage::where('digital_design_id', $digitalDesignId)->get();
    }

    public function storeDigitalDesignInfos($request, $digitalDesignId)
    {
        try {
            // Check if at least one info is provided
            $hasInfos = false;
            
            // Process existing infos
            if (isset($request['existing_infos']) && is_array($request['existing_infos'])) {
                foreach ($request['existing_infos'] as $index => $existingInfoId) {
                    if ($existingInfoId) {
                        $digitalDesignInfo = \App\Model\DigitalDesignInfo::find($existingInfoId);
                        if ($digitalDesignInfo) {
                            // Update title and info if provided
                            if (isset($request['titles'][$index])) {
                                $digitalDesignInfo->title = $request['titles'][$index];
                            }
                            if (isset($request['infos'][$index])) {
                                $digitalDesignInfo->info = $request['infos'][$index];
                            }
                            $digitalDesignInfo->save();
                            $hasInfos = true;
                        }
                    }
                }
            }
            
            // Process new infos
            if (isset($request['titles']) && is_array($request['titles'])) {
                foreach ($request['titles'] as $index => $title) {
                    $info = isset($request['infos'][$index]) ? $request['infos'][$index] : '';
                    
                    // Check if this is an existing info being updated
                    $existingInfoId = isset($request['existing_infos'][$index]) ? $request['existing_infos'][$index] : null;
                    
                    if ($existingInfoId) {
                        $digitalDesignInfo = \App\Model\DigitalDesignInfo::find($existingInfoId);
                        if ($digitalDesignInfo) {
                            // Update existing info
                            $digitalDesignInfo->update([
                                'title' => $title,
                                'info' => $info
                            ]);
                            $hasInfos = true;
                        }
                    } else {
                        // This is a new info
                        if ($title && $info) {
                            // Store in digital_design_infos table
                            \App\Model\DigitalDesignInfo::create([
                                'digital_design_id' => $digitalDesignId,
                                'title' => $title,
                                'info' => $info
                            ]);
                            $hasInfos = true;
                        }
                    }
                }
            }
            
            // Process deletions
            if (isset($request['delete_infos']) && is_array($request['delete_infos'])) {
                foreach ($request['delete_infos'] as $deleteInfoId) {
                    $digitalDesignInfo = \App\Model\DigitalDesignInfo::find($deleteInfoId);
                    if ($digitalDesignInfo) {
                        $digitalDesignInfo->delete();
                    }
                }
            }
            
            // If no infos were processed, throw an error
            if (!$hasInfos) {
                throw new \Exception('At least one info section is required.');
            }
        } catch (\Exception $e) {
            throw new \Exception('Error uploading digital design infos: ' . $e->getMessage());
        }
    }

    public function getDigitalDesignInfos($digitalDesignId)
    {
        return \App\Model\DigitalDesignInfo::where('digital_design_id', $digitalDesignId)->get();
    }
} 