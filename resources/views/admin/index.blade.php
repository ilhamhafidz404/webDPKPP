@extends('admin.master')

@section('title', 'List Data Inventaris')

@section('content')
<div class="card p-3">
  <div class="table-responsive">
    <table class="table table-bordered table-striped table-md" id="table-1">
      <tr class="text-center fw-bold bg-success text-white">
        <th>#</th>
        <th>Pemerintah Daerah</th>
        <th>Nama Pengembang(PT/CV)</th>
        <th>Nama Perumahan</th>
        <th>Nama Asset</th>
        <th>Luas</th>
        <th>Nilai Peroleh</th>
        <th>Permasalahan</th>
        <th>Progres</th>
        <th>Action</th>
      </tr>
      @foreach($inventories as $inventory)
      <tr>
        <td>1</td>
        <td>{{$inventory->daerah}}</td>
        <td>{{$inventory->pengembang}}</td>
        <td>{{$inventory->perumahan}}</td>
        <td>{{$inventory->asset}}</td>
        <td>{{$inventory->luas}}</td>
        <td>{{$inventory->perolehan}}</td>
        <td>{{$inventory->permasalahan}}</td>
        <td>{{$inventory->progres}}</td>
        <td class="d-flex">
          <form action="{{route('inventory.destroy', $inventory->id)}}" class="d-inline mr-2" method="POST">
            @csrf
            @method("DELETE")
            <button class="btn btn-danger btn-sm" onclick="return confirm('apakah yakin ingin menghapus data ini?')"><i class="fas fa-trash-alt"></i></button>
          </form>
          <a href="{{route('inventory.edit', $inventory->id)}}" class="btn btn-sm btn-primary">
            <i class="fas fa-pencil-alt"></i>
          </a>
        </td>
      </tr>
      @endforeach
    </table>
  </div>
</div>
@endsection