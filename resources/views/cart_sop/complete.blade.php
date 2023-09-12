@extends('templates.indexTemplate')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card border border-white">
                    <div>
                        <span>Home / Shop /Shop Checkout</span>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card px-5 py-5 border border-white">
                                <span>
                                    感謝你的購買~~~~
                                </span>
                            </div>
                            <div class="d-flex justify-content-between my-3">
                                <a href="{{route('front.index')}}">
                                    <button type="buutton" class="btn btn-secondary">回首頁</button>
                                </a>
                                <a href="">
                                    <button type="button" class="btn btn-secondary">查看訂單</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
