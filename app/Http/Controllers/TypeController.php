<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use App\Models\ProductTypeImg;
use Illuminate\Http\Request;
use App\Services\FileService;

class TypeController extends Controller
{
    public function __construct(protected FileService $fileService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('product_type.typeList');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product_type.addTypeList');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $type = ProductType::create([
            'name' => $request->name,
            'desc' => $request->desc,
        ]);

        foreach ($request->image ?? [] as $value) {
            ProductTypeImg::create([
                'img_path' => $this->fileService->imgUpload($value, 'type-image'),
                'product_type_id' => $type->id,
            ]);
        }
        return redirect(route('type.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('product_type.editTypeList');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
