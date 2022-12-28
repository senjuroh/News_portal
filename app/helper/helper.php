<?php
// Upload Image function
function UploadImage($request, $object, $filename){
     if($request->hasFile($filename)){
        $file = $request->$filename;
        $newName = time() . '.' . $file->getClientOriginalExtension();
        $file->move('images', $newName);
        $object->logo = "images/$newName";
    }
}
