<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\ProductPhoto;

class ProductPhotoController extends Controller
{
    //A remoção é feita pelo nome, pois o nome é um hash gerado automaticamente pelo laravel
    public function removePhoto(Request $request)
    {
        $photoName = $request->get('photoName');

        //Remover dos arquivos
        if(Storage::disk('public')->exists($photoName)){
            Storage::disk('public')->delete($photoName);
        }

        //Remover a imagem do banco
        $removePhoto = ProductPhoto::where('image', $photoName);
        $productId = $removePhoto->first()->product_id;
        $removePhoto->delete();

        flash('Imagem removida com sucesso!')->success();
        return redirect()->route('admin.products.edit', ['product' => $productId]);

    }
}
