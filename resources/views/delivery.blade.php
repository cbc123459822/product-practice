@extends('templates.indexTemplate')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card border border-white">
                    <div>
                        <span>Home / Shop /Shop Checkout</span>
                    </div>
                    <div>
                        <h1 class="mt-4">Checkout</h1>
                        <span>Already have an account? Click here to Sign in.</span>
                    </div>
                    <div class="mt-4 mb-3">
                        <span>配送資訊</span>
                    </div>
                    <div class="row">
                        <div class="col">
                            {{-- <div class="px-5"> --}}
                            <div class="card p-3">
                                <input class="form-control" type="text" placeholder="收件者姓名" aria-label="default input example">
                                <input class="form-control" type="text" placeholder="收件者地址" aria-label="default input example">
                                <input class="form-control" type="date" aria-label="default input example">
                                <input class="form-control" type="text" placeholder="收件者連絡電話" aria-label="default input example">
                                <input class="form-control" type="text" placeholder="備註" aria-label="default input example">
                            </div>

                            <div class="d-flex justify-content-between my-3">
                                <a href="{{route('shop')}}">
                                    <button type="buutton" class="btn btn-secondary">上一步</button>
                                </a>
                                <a href="{{route('payment')}}">
                                    <button type="button" class="btn btn-secondary">下一步</button>
                                </a>
                            </div>
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
