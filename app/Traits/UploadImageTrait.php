<?php

namespace App\Traits;

trait UploadImageTrait{

    private function upload($image){
        //Get file name
        $fileNameWithExt = $image->getClientOriginalName();
        //Get filename
        $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        //Get extension
        $ext = $image->getClientOriginalExtension();
        $fileNameToStore = $filename.".".$ext;
        $path = $image->storeAs('public/logos',$fileNameToStore);
        return $fileNameToStore;
    }
}
