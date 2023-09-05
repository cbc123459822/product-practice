@extends('Layout.template')

@section('main')
    <div class="container">
        <!-- row -->
        <div class="row mb-8">
            <div class="col-md-12">
                <!-- page header -->
                <div>
                    <h2>編輯類別</h2>
                    <!-- breacrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Order List</li>
                        </ol>
                    </nav>

                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-12 mb-5">
                <!-- card -->
                <div class="card h-100 card-lg">
                    {{-- <form action="{{ route('type.update', ['id' => $product->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body p-0">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <label class="form-check-label fs-1" for="firstCheckbox">產品名稱</label>
                                    <input name="name" class="form-check-input me-1 fs-1 w-75" type="text" value="{{ $product->name }}" required>
                                </li>
                                <li class="list-group-item" style="height: 150px;">
                                    <img style="width: 80px;" src="{{ asset($product->img_path) }}" alt="">
                                    <label class="form-check-label fs-1" for="secondCheckbox">產品圖片</label>
                                    <input class="form-check-input me-1 fs-1 w-75" type="file" name="image" value=""
                                        style="height: 100px;" accept="image/*">
                                </li>
                                <li class="list-group-item">
                                    <label class="form-check-label fs-1" for="thirdCheckbox">產品價格</label>
                                    <input class="form-check-input me-1 fs-1 w-75" name="price" type="number" value="{{ $product->price }}" required>
                                </li>
                                <li class="list-group-item">
                                    <label class="form-check-label fs-1" for="fourthCheckbox">顯示狀態</label>
                                    <label class="fs-1">
                                        <input
                                            type="radio"
                                            id="appear"
                                            name="status"
                                            value="1"
                                            @if ($product->status === 1)
                                                checked
                                            @endif
                                        />
                                        要顯示
                                    </label>
                                    <label class="fs-1">
                                        <input
                                            type="radio"
                                            id="no-appear"
                                            name="status"
                                            value="2"
                                            @if ($product->status === 2)
                                                checked
                                            @endif
                                        />
                                        不顯示
                                    </label>

                                </li>
                                <li class="list-group-item" style="height: 300px">
                                    <label class="form-check-label fs-1" for="thirdCheckbox">產品描述</label>
                                    <hr>
                                    <textarea name="desc" class="w-100" style="resize: none; min-height: 150px;">{{ $product->desc }}</textarea>
                                </li>
                            </ul>
                            <div class="btn-group justify-content-center d-flex">
                                <a href="{{ route('type.index') }}" class="btn btn-primary m-3">取消按鈕</a>
                                <button type="submit" class="btn btn-primary m-3">儲存按鈕</button>
                            </div>
                        </div>
                    </form> --}}
                    <!-- card body -->
                </div>

            </div>

        </div>
    </div>
@endsection
