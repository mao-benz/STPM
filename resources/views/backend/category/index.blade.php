@extends('layouts.admin')

@section('head')
<h1 class="m-0 text-dark">จัดการหมวดพัสดุ</h1>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
             <div class="card-header">
             <h3 class="card-title">หมวดพัสดุทั้งหมด {{ $countRow }} รายการ</h3>
                <div class="float-right">
                    <a href=" {{ route('category.create') }}" class="link">
                    <button type="button" class="btn btn-success ">
                        <i class="nav-icon fa fa-plus"></i> เพิ่มหมวดพัสดุ</button>
                    </a>
                </div>
             </div>
                <div class="card-body">

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col" width="10%">รหัส</th>
                            <th scope="col" width="70%">หมวดพัสดุ</th>
                            <th scope="col" width="10%"><i class="fa fa-pencil fa-fw"></i> แก้ไข</th>
                            <th scope="col" width="10%"><i class="fa fa-trash-o fa-fw" style="color:red"></i> ลบ</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($category as $c)
                          <tr>
                            <th scope="row">{{ $c->id }}</th>
                            <td>{{ $c->name }}</td>
                            <td><i class="fa fa-pencil fa-fw"></i></td>
                            <td><i class="fa fa-trash-o fa-fw" style="color:red"></i></td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
