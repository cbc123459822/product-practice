@extends('templates.template')


@section('main')
  <div>step02</div>
  <div>電話:{{ $phone }}</div>
  <a href="{{ route('test.step1') }}">回上一步</a>
@endsection

@section('js')
@endsection