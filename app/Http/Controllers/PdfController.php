<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class PdfController extends Controller
{
    public function getSubDirectories($folder, Request $request)
    {
        $folder = Str::slug($folder);
        $path = 'pdfs/' . $folder;
        $subDirs = $request->input('subDirs');
        if (is_array($subDirs)) {
            foreach ((array) $subDirs as $subDirectorio) {
                $subDirectorio = Str::slug($subDirectorio);
                $path = $path . '/' . $subDirectorio;
            }
            if (File::exists($path) || File::isDirectory($path)) {
                $subDirectorios = File::directories($path);
                $subfolders = collect($subDirectorios)->map(function ($path) {
                    //Obtener el nombre de los subdirectorios, cambiar - por ' ' y capitalizar la primera letra
                    $nombre = basename($path);
                    $nombre = str_replace('-', ' ', $nombre);
                    $nombre = ucfirst($nombre);
                    return $nombre;
                });
                return response()->json($subfolders);
            } else {
                return response()->json([]);
            }
        }else{
            return response()->json([]);
        }
    }

    public function getArchivos($folder, Request $request)
    {

        $folder = Str::slug($folder);
        $path = 'pdfs/' . $folder;
        $subDirectorios = $request->input('subDirectorios');
        foreach ($subDirectorios as $subDirectorio) {
            $subDirectorio = Str::slug($subDirectorio);
            $path = $path . '/' . $subDirectorio;
        }
        if (File::exists($path) || File::isDirectory($path)) {
            $files = collect(File::files($path))->map(function ($file) use ($path) {
                $nombre = str_replace(['_', '-'], " ", $file->getFilename());
                return [
                    'name' => $nombre,
                    'url' => asset($path . '/' . $file->getFilename()),
                ];
            });
            return response()->json($files);
        } else {
            return response()->json([]);
        }
    }
}
