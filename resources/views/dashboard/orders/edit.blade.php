@extends('layouts.dashboard.app')
@section('page_title', 'اضافة طلب')
@section('action')
    <a href="{{ route('orders.create') }}"> <button class="btn btn-primary-rgba">
            <i class="feather icon-plus mr-2"></i>اضافة طلب</button></a>
@endsection('action')
@section('content')
    <div class="col-lg-12">
        <div class="card m-b-30">
            <div class="card-body">
                <form action="{{ route('orders.update', $order->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @include('dashboard.orders.form')
                    <button type="submit" class="btn btn-primary">اضافة الطلب</button>
            </div>
        </div>
    </div>
    </form>
@endsection('content')
