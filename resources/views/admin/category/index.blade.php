@extends('layouts.backend')
@section('css')

@endsection
@section('js')
<script src="{{asset('/assets/js/components/datatables-init.js')}}"></script>
@endsection
@section('header')
<nav class="breadcrumb-wrapper" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/admin')}}"><i class="icon dripicons-home"></i></a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">category</a></li>
    </ol>
</nav>
@endsection
@section('content')
<div class="col-12">
        <center>
            <button type="button" class="btn btn-primary btn-rounded btn-floating btn-outline" data-toggle="modal" data-target=".bd-example-modal-lg">
                Tambah Data
            </button>
        </center><br><br>
        @include('admin.category.create')
    <div class="card">
        <h5 class="card-header">
        category
        </h5>
        <div class="card-body">
            <table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>category</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @php $no =1; @endphp
                @foreach($category as $data)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$data->nama_category}}</td>
                    <td>
                        <form method="post" action="{{ route('admin.category.destroy',$data->id) }}" class="form">
                        {{-- <a href="{{ route('admin.category.edit',$data->id) }}" class="btn btn-warning btn-outline">Edit</a> --}}
                        <button type="button" class="btn btn-warning btn-rounded btn-outline" data-toggle="modal" data-target=".category{{ $data->id }}">
                            Edit
                        </button>
                        		<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger btn-rounded btn-floating btn-outline js-submit-confirm">Delete</button>
                        </form>
                    </td>
                </tr>
                @include('admin.category.edit')
                @endforeach

                </tbody>

            </table>


        </div>
    </div>
</div>
@push('scripts')
@endpush
@endsection

