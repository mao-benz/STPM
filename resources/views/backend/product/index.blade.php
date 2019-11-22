@extends('layouts.admin')

@section('head')
<h1 class="m-0 text-dark">จัดการพัสดุ</h1>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
             <div class="card-header">
             <h3 class="card-title">พัสดุทั้งหมด {{ $product->total() }} รายการ</h3>
                <div class="float-right">
                    <a href=" {{ route('product.index') }}" class="link">
                    <button type="button" class="btn btn-success ">
                        <i class="nav-icon fa fa-plus"></i> เพิ่มพัสดุ</button>
                    </a>
                </div>
             </div>
                <div class="card-body">

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col" width="5%">รหัส</th>
                            <th scope="col">รายการพัสดุ</th>
                            <th scope="col">ขนาดบรรจุ</th>
                            <th scope="col">ประเภท</th>
                            <th scope="col">รูปภาพ</th>
                            <th scope="col" width="8%"><i class="fa fa-pencil fa-fw"></i> แก้ไข</th>
                            <th scope="col" width="8%"><i class="fa fa-trash-o fa-fw" style="color:red"></i> ลบ</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($product as $p)
                          <tr>
                            <th scope="row">{{ $p->id }}</th>
                            <td>{{ $p->name }}</td>
                            <td>{{ $p->contain }} ต่อ {{ $p->unit->name  }}</td>
                            <td>{{ $p->category->name }}</td>
                            <td>{{ $p->picture }}</td>
                            <td><i class="fa fa-pencil fa-fw"></i></td>
                            <td><i class="fa fa-trash-o fa-fw" style="color:red"></i></td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>

                      <br>
                        {{ $product->links() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
