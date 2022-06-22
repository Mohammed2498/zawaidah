@extends('layouts.dashboard.app')
@section('page_title', 'الطلبات')
@section('action')
    <a href="{{ route('orders.create') }}"> <button class="btn btn-primary-rgba">
            <i class="feather icon-plus mr-2"></i>اضافة طلب</button></a>
@endsection('action')
@section('content')
    <div class="col-lg-12">
        <div class="card m-b-30">
            <div class="card-header">
                <h5 class="card-title"> طلبات بلدية الزوايدة</h5>
            </div>
            <div class="card-body">
                <h6 class="card-subtitle"> طلبات بلدية الزوايدة</h6>
                {{-- Flash Message --}}
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                {{-- Flash Message --}}
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="edit-btn">
                        <thead>
                            <tr>
                                <th>الرقم</th>
                                <th>الاسم</th>
                                <th>الموضوع</th>
                                <th>رقم الجوال</th>
                                <th>رقم الهوية</th>
                                <th>رقم القسيمة</th>
                                <th>رقم القطعة</th>
                                <th>الأمر</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $key => $order)
                                <tr id="1">
                                    <td><span class="tabledit-span tabledit-identifier">{{ $key + 1 }}</span><input
                                            class="tabledit-input tabledit-identifier" type="hidden" name="id"></td>
                                    <td class="tabledit-view-mode"><span
                                            class="tabledit-span">{{ $order->name }}</span><input
                                            class="tabledit-input form-control input-sm" type="text" name="name"
                                            style="display: none;" disabled=""></td>
                                    <td class="tabledit-view-mode"><span
                                            class="tabledit-span">{{ $order->subject }}</span><input
                                            class="tabledit-input form-control input-sm" type="text" name="position"
                                            style="display: none;" disabled=""></td>
                                    <td class="tabledit-view-mode"><span
                                            class="tabledit-span">{{ $order->phone }}</span><input
                                            class="tabledit-input form-control input-sm" type="text" name="email"
                                            style="display: none;" disabled=""></td>
                                    <td class="tabledit-view-mode"><span
                                            class="tabledit-span">{{ $order->id_number }}</span><input
                                            class="tabledit-input form-control input-sm" type="text" name="phone"
                                            style="display: none;" disabled=""></td>
                                    <td class="tabledit-view-mode"><span
                                            class="tabledit-span">{{ $order->voucher_number }}</span><input
                                            class="tabledit-input form-control input-sm" type="text" name="phone"
                                            style="display: none;" disabled=""></td>
                                    <td class="tabledit-view-mode"><span
                                            class="tabledit-span">{{ $order->piece_number }}</span><input
                                            class="tabledit-input form-control input-sm" type="text" name="phone"
                                            style="display: none;" disabled=""></td>
                                    <td class="tabledit-view-mode">
                                        <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-primary">تعديل</a>
                                        <a href="{{ route('orders.show', $order->id) }}" class="btn btn-success">عرض</a>
                                        <form action="{{ route('orders.destroy', $order->id) }}" method='POST'
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">حذف</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection('content')
