<?php
namespace App\Services\System;
use App\Services\Service;
use App\Repositories\System\MotionRepository;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\File;

class MotionService extends Service
{
    use ImageTrait;

    protected $motionRepository;

    protected $bannerImgDir = '/uploads/motion/banner';
    protected $bannerImg2Dir = '/uploads/motion/banner2';
    protected $motionImageDir = '/uploads/motion/images';
    protected $videoDir = '/uploads/motion/videos';

    
    public function __construct(MotionRepository $motionRepository){
        $this->motionRepository = $motionRepository;
    }

    public function getAllData($data, $selectedColumns = [], $pagination = true)
    {
        return $this->motionRepository->getAllData($data);
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
            if (isset($data['video_1'])) {
                $data['video_1'] = $this->uploadVideo($this->videoDir, 'video_1');
            }
            return $this->motionRepository->create($data);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function editPageData($request, $id)
    {
        $motion = $this->motionRepository->itemByIdentifier($id);
        return [
            'status' => $this->status(),    
            'motion' => $motion,
            'item' => $motion, // Add this for form action compatibility
        ];
    }

    public function update($request, $id)
    {
        try {
            $motion = $this->motionRepository->itemByIdentifier($id);
            $data = $request->except('_token');
            
            if (isset($data['banner_image'])) {
                // Remove old image if it exists
                if ($motion->banner_image) {
                    $this->removeImage($this->bannerImgDir, $motion->banner_image);
                }
                $data['banner_image'] = $this->uploadImage($this->bannerImgDir, 'banner_image');
            }
            
            if (isset($data['banner_image_2'])) {
                // Remove old image if it exists
                if ($motion->banner_image_2) {
                    $this->removeImage($this->bannerImg2Dir, $motion->banner_image_2);
                }
                $data['banner_image_2'] = $this->uploadImage($this->bannerImg2Dir, 'banner_image_2');
            }

            if (isset($data['video_1'])) {
                // Remove old video if it exists
                if ($motion->video_1) {
                    $this->removeVideo($this->videoDir, $motion->video_1);
                }
                $data['video_1'] = $this->uploadVideo($this->videoDir, 'video_1');
            }
            
            return $this->motionRepository->update($id, $data);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function changeStatus($request)  
    {
        $this->motionRepository->changeStatus($request);
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
            $motion = $this->motionRepository->itemByIdentifier($id);
            // Remove uploaded images if they exist
            if ($motion->banner_image) {
                $this->removeImage($this->bannerImgDir, $motion->banner_image);
            }
            if ($motion->banner_image_2) {
                $this->removeImage($this->bannerImg2Dir, $motion->banner_image_2);
            }
            if ($motion->video_1) {
                $this->removeVideo($this->videoDir, $motion->video_1);
            }
            
            // Remove motion images
            $motionImages = $motion->images;
            foreach ($motionImages as $image) {
                $this->removeImage($this->motionImageDir, $image->image);
            }
            
            // Remove motion infos
            $motionInfos = $motion->infos;
            foreach ($motionInfos as $info) {
                $info->delete();
            }
            
            return $this->motionRepository->delete($request, $id);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function storeMotionImages($request, $motionId)
    {
        try {
            // Check if at least one image is provided
            $hasImages = false;
            
            // Process existing images
            if (isset($request['existing_images']) && is_array($request['existing_images'])) {
                foreach ($request['existing_images'] as $index => $existingImageId) {
                    if ($existingImageId) {
                        $motionImage = \App\Model\MotionImage::find($existingImageId);
                        if ($motionImage) {
                            // Update image name if provided
                            if (isset($request['image_names'][$index])) {
                                $motionImage->image_name = $request['image_names'][$index];
                                $motionImage->save();
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
                        $motionImage = \App\Model\MotionImage::find($existingImageId);
                        if ($motionImage && $image && $image->isValid()) {
                            // Remove old image
                            $this->removeImage($this->motionImageDir, $motionImage->image);
                            
                            // Upload new image
                            $uploadedImageName = $this->uploadSingleImage($this->motionImageDir, $image);
                            
                            // Update record
                            $motionImage->update([
                                'image' => $uploadedImageName,
                                'image_name' => $imageName
                            ]);
                            $hasImages = true;
                        }
                    } else {
                        // This is a new image
                        if ($image && $image->isValid()) {
                            // Upload the new image
                            $uploadedImageName = $this->uploadSingleImage($this->motionImageDir, $image);
                            
                            // Store in motion_images table
                            \App\Model\MotionImage::create([
                                'motion_id' => $motionId,
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
                    $motionImage = \App\Model\MotionImage::find($deleteImageId);
                    if ($motionImage) {
                        $this->removeImage($this->motionImageDir, $motionImage->image);
                        $motionImage->delete();
                    }
                }
            }
            
            // If no images were processed, throw an error
            if (!$hasImages) {
                throw new \Exception('At least one image is required.');
            }
        } catch (\Exception $e) {
            throw new \Exception('Error uploading motion images: ' . $e->getMessage());
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

    private function uploadVideo($dir, $input)
    {
        $directory = public_path() . $dir;
        if (!is_dir($directory)) {
            File::makeDirectory($directory, $mode = 0755, true);
        }

        $fileName = uniqid() . '.' . request()->file($input)->getClientOriginalExtension();
        request()->file($input)->move($directory, $fileName);
        
        return $fileName;
    }

    private function removeVideo($dir, $video)
    {
        $f1 = public_path() . $dir . '/' . $video;
        File::delete($f1);
    }

    public function getMotionImages($motionId)
    {
        return \App\Model\MotionImage::where('motion_id', $motionId)->get();
    }

    public function storeMotionInfos($request, $motionId)
    {
        try {
            // Check if at least one info is provided
            $hasInfos = false;
            
            // Process existing infos
            if (isset($request['existing_infos']) && is_array($request['existing_infos'])) {
                foreach ($request['existing_infos'] as $index => $existingInfoId) {
                    if ($existingInfoId) {
                        $motionInfo = \App\Model\MotionInfo::find($existingInfoId);
                        if ($motionInfo) {
                            // Update title and info if provided
                            if (isset($request['titles'][$index])) {
                                $motionInfo->title = $request['titles'][$index];
                            }
                            if (isset($request['infos'][$index])) {
                                $motionInfo->info = $request['infos'][$index];
                            }
                            $motionInfo->save();
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
                        $motionInfo = \App\Model\MotionInfo::find($existingInfoId);
                        if ($motionInfo) {
                            // Update existing info
                            $motionInfo->update([
                                'title' => $title,
                                'info' => $info
                            ]);
                            $hasInfos = true;
                        }
                    } else {
                        // This is a new info
                        if ($title && $info) {
                            // Store in motion_infos table
                            \App\Model\MotionInfo::create([
                                'motion_id' => $motionId,
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
                    $motionInfo = \App\Model\MotionInfo::find($deleteInfoId);
                    if ($motionInfo) {
                        $motionInfo->delete();
                    }
                }
            }
            
            // If no infos were processed, throw an error
            if (!$hasInfos) {
                throw new \Exception('At least one info section is required.');
            }
        } catch (\Exception $e) {
            throw new \Exception('Error uploading motion infos: ' . $e->getMessage());
        }
    }

    public function getMotionInfos($motionId)
    {
        return \App\Model\MotionInfo::where('motion_id', $motionId)->get();
    }
} 