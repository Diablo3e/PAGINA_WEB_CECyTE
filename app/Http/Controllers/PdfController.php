<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class PdfController extends Controller
{
    public function getSubDirectories($folder, $subDir)
    {
        $folder = Str::slug($folder);
        $subDir = Str::slug($subDir);
        $path = 'pdfs/' . $folder . '/' . $subDir;

        if (File::exists($path) || File::isDirectory($path)) {
            $subDirectorios = File::directories($path);
            $subfolders = collect($subDirectorios)->map(function ($path) {
                //Obtener el nombre de los subdirectorios, cambiar - por ' ' y capitalizar la primera letra
                $nombre = basename($path);
                $nombre = str_replace('-', ' ', $nombre);
                $nombre = ucfirst($nombre);
                return $nombre;
            });
            return $subfolders;
        }else{
            return [];
        }
    }

    public function getArchivos($folder, $Directorio, $subDir){
        $folder = Str::slug($folder);
        $Directorio = Str::slug($Directorio);
        $subDir = Str::slug($subDir);
        $path = 'pdfs/' . $folder . '/' . $Directorio . '/' . $subDir;
        if (File::exists($path) || File::isDirectory($path)) {
            $files = collect(File::files($path))->map(function ($file) use ($path) {
                return [
                    'name' => $file->getFilename(),
                    'url' => asset( $path . '/' . $file->getFilename()),
                ];
            });
            return response()->json($files);
        }else{
            return response()->json([]);
        }
    }
}
