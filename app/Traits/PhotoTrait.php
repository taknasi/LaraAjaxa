<?php

namespace App\Traits;

use Illuminate\Support\Facades\File;

trait PhotoTrait
{
    function uploadP($dossier, $photo)
    {
        $photo->store('/', $dossier);
        $fileName = $photo->hashName();
        return $fileName;
    }

    function getPhoto($dossier, $val)
    {
        return $val !== null ? asset('assets/images/' . $dossier . '/' . $val) : "";
    }

    function deletePhoto($dossier, $val)
    {
        if (File::exists('assets/images/' . $dossier . '/' . $val)) {
            File::delete('assets/images/' . $dossier . '/' . $val);
        }
    }
}
