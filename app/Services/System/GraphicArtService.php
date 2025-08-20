<?php
namespace App\Services\System;
use App\Services\Service;
use App\Repositories\System\GraphicArtRepository;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\File;

class GraphicArtService extends Service
{
    use ImageTrait;

    protected $graphicArtRepository;

    protected $bannerImgDir = '/uploads/graphic_art/banner';
    protected $bannerImg2Dir = '/uploads/graphic_art/banner2';
    protected $graphicArtImageDir = '/uploads/graphic_art/images';

    
    public function __construct(GraphicArtRepository $graphicArtRepository){
        $this->graphicArtRepository = $graphicArtRepository;
    }

    public function getAllData($data, $selectedColumns = [], $pagination = true)
    {
        return $this->graphicArtRepository->getAllData($data);
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
            return $this->graphicArtRepository->create($data);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function editPageData($request, $id)
    {
        $graphicArt = $this->graphicArtRepository->itemByIdentifier($id);
        return [
            'status' => $this->status(),    
            'graphicArt' => $graphicArt,
            'item' => $graphicArt, // Add this for form action compatibility
        ];
    }

    public function update($request, $id)
    {
        try {
            $graphicArt = $this->graphicArtRepository->itemByIdentifier($id);
            $data = $request->except('_token');
            
            if (isset($data['banner_image'])) {
                // Remove old image if it exists
                if ($graphicArt->banner_image) {
                    $this->removeImage($this->bannerImgDir, $graphicArt->banner_image);
                }
                $data['banner_image'] = $this->uploadImage($this->bannerImgDir, 'banner_image');
            }
            
            if (isset($data['banner_image_2'])) {
                // Remove old image if it exists
                if ($graphicArt->banner_image_2) {
                    $this->removeImage($this->bannerImg2Dir, $graphicArt->banner_image_2);
                }
                $data['banner_image_2'] = $this->uploadImage($this->bannerImg2Dir, 'banner_image_2');
            }
            
            return $this->graphicArtRepository->update($id, $data);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function changeStatus($request)  
    {
        $this->graphicArtRepository->changeStatus($request);
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
            $graphicArt = $this->graphicArtRepository->itemByIdentifier($id);
            // Remove uploaded images if they exist
            if ($graphicArt->banner_image) {
                $this->removeImage($this->bannerImgDir, $graphicArt->banner_image);
            }
            if ($graphicArt->banner_image_2) {
                $this->removeImage($this->bannerImg2Dir, $graphicArt->banner_image_2);
            }
            
            // Remove graphic art images
            $graphicArtImages = $graphicArt->images;
            foreach ($graphicArtImages as $image) {
                $this->removeImage($this->graphicArtImageDir, $image->image);
            }
            
            return $this->graphicArtRepository->delete($request, $id);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function storeGraphicArtImages($request, $graphicArtId)
    {
        try {
            // Check if at least one image is provided
            $hasImages = false;
            
            // Handle deletion of existing images
            if (isset($request['delete_images']) && is_array($request['delete_images'])) {
                foreach ($request['delete_images'] as $imageId) {
                    $graphicArtImage = \App\Model\GraphicArtImage::find($imageId);
                    if ($graphicArtImage && $graphicArtImage->graphic_art_id == $graphicArtId) {
                        // Remove the file from storage
                        $this->removeImage($this->graphicArtImageDir, $graphicArtImage->image);
                        // Delete the database record
                        $graphicArtImage->delete();
                    }
                }
            }

            // Process all images (both existing and new)
            if (isset($request['images']) && is_array($request['images'])) {
                foreach ($request['images'] as $key => $image) {
                    $imageName = $request['image_names'][$key] ?? '';
                    
                    // Check if this is an existing image
                    if (isset($request['existing_images'][$key])) {
                        $imageId = $request['existing_images'][$key];
                        $graphicArtImage = \App\Model\GraphicArtImage::find($imageId);
                        
                        if ($graphicArtImage && $graphicArtImage->graphic_art_id == $graphicArtId) {
                            $updateData = ['image_name' => $imageName];
                            
                            // Check if a new file was uploaded for this existing image
                            if ($image && $image->isValid()) {
                                // Remove old image file
                                $this->removeImage($this->graphicArtImageDir, $graphicArtImage->image);
                                
                                // Upload new image file
                                $newImageName = $this->uploadSingleImage($this->graphicArtImageDir, $image);
                                $updateData['image'] = $newImageName;
                            }
                            
                            $graphicArtImage->update($updateData);
                            $hasImages = true;
                        }
                    } else {
                        // This is a new image
                        if ($image && $image->isValid()) {
                            // Upload the new image
                            $uploadedImageName = $this->uploadSingleImage($this->graphicArtImageDir, $image);
                            
                            // Store in graphic_art_images table
                            \App\Model\GraphicArtImage::create([
                                'graphic_art_id' => $graphicArtId,
                                'image' => $uploadedImageName,
                                'image_name' => $imageName
                            ]);
                            $hasImages = true;
                        }
                    }
                }
            }
            
            // If no images were processed, throw an error
            if (!$hasImages) {
                throw new \Exception('At least one image is required.');
            }
        } catch (\Exception $e) {
            throw new \Exception('Error uploading graphic art images: ' . $e->getMessage());
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

    public function getGraphicArtImages($graphicArtId)
    {
        return \App\Model\GraphicArtImage::where('graphic_art_id', $graphicArtId)->get();
    }
}