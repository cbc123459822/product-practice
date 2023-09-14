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
                        <span>付款資訊</span>
                    </div>
                    <div class="row">
                        <div class="col">
                            {{-- <div class="px-5"> --}}
                            <div class="card">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        臨櫃匯款
                                    </label>
                                </div>
                                <div class="ps-4">
                                    <p class="font-monospace">0000-123456789-123456</p>
                                    <p class="font-monospace">007-第一銀行</p>
                                    <p class="font-monospace">007-第一銀行</p>
                                    <p class="font-monospace">戶名:xxx</p>
                                    <p class="font-monospace">匯款後請聯繫洪先生09xxxxxxxx</p>
                                    <p class="font-monospace"> 請告知帳號末五碼以便對帳</p>
                                </div>
                            </div>
                            <div class="w-100 border-bottom pt-1">
                            </div>
                            <div class="w-100 border-bottom pt-1 mb-1">
                            </div>
                            <div class="card px-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        線上付款
                                    </label>
                                    <div class="ps-4">
                                        <p class="font-monospace">本站線上付款為緣界金流</p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between my-3">
                                <a href="{{route('delivery')}}">
                                    <button type="buutton" class="btn btn-secondary">上一步</button>
                                </a>
                                <a href="{{route('thankyou')}}">
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
