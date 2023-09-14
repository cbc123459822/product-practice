@extends('templates.fontTemplete')
@section('main-content')
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
                        <div class="card">
                            <h3>order Details</h3>
                        </div>
                        <div class="card d-flex flex-row justify-content-between align-items-center">
                            <div>
                                <img src="{{ asset('assets/images/avatar/avatar-1.jpg') }}" class="card-img"
                                    alt="..." style="width: 80px;">
                            </div>
                            <div>
                                <span>產品名稱</span>
                                <p>123</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <button type="button" class="btn btn-secondary btn-adds" style="height: 30px">+</button>
                                <input type="number" class="inputs" value="0">
                                <button type="button" class="btn btn-secondary btn-subtracts"
                                    style="height: 30px">-</button>
                            </div>0
                            <div class="me-2">
                                <span>價格$</span>
                            </div>
                        </div>
                        <div class="card">
                            <span>subtotal</span>
                        </div>

                        <div class="d-flex justify-content-end my-3">
                            <a href="{{route('delivery')}}">
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
    <script>
        let btnAdd = document.querySelectorAll('.btn-adds');
        let btnSubtract = document.querySelectorAll('.btn-subtracts');
        let inputs = document.querySelectorAll('.inputs');

        btnAdd.forEach(function(button, index) {
            console.log(button, index);
            // console.log(123);
            button.addEventListener('click', function() {
                let currentValue = parseInt(inputs[index].value);
                currentValue += 1;
                inputs[index].value = currentValue;
                // console.log(123);
            });
        });

        btnSubtract.forEach(function(button, index) {
            button.addEventListener('click', function() {
                console.log(inputs[index + 1]);
                let currentValue = parseInt(inputs[index].value);
                currentValue -= 1;
                if (currentValue < 0) {
                    currentValue = 0;
                }
                inputs[index].value = currentValue;
            });
        });
    </script>
@endsection
