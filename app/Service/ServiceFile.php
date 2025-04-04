<?php

namespace App\Service;

use Illuminate\Support\Facades\File;

class ServiceFile
{

    public function store($file, $name_file)
    {
        if ($file) {
            $file->move(public_path('images'), $name_file);
        }
    }


    public function delete($name_file)
    {

        $file_path = public_path('/images/' . $name_file);
        if (File::exists($file_path)) {
            File::delete($file_path);
        }
    }
}
