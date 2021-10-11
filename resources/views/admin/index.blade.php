@extends('admin.master')

@section('title', 'List Data Inventaris')

@section('content')
<div class="card p-3">

  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Semua</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Kuningan</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Cilimus</button>
    </li>
  </ul>
  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
      <div class="table-responsive">
        <table class="table table-striped table-md" id="table-1">
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
          <?php $i = 1 ?>
          @foreach($inventories as $inventory)
          <tr>
            <td>{{$i++}}</td>
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
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
      <div class="table-responsive">
        <table class="table table-striped table-md" id="table-1">
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
          <?php $i = 1 ?>
          @foreach($inventories as $inventory)
          @if($inventory->daerah== "Kuningan")
          <tr>
            <td>{{$i++}}</td>
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
          @endif
          @endforeach
        </table>
      </div>
    </div>
    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
      <div class="table-responsive">
        <table class="table table-striped table-md" id="table-1">
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
          <?php $i = 1 ?>
          @foreach($inventories as $inventory)
          @if($inventory->daerah== "Cilimus")
          <tr>
            <td>{{$i++}}</td>
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
          @endif
          @endforeach
        </table>
      </div>
    </div>
  </div>
</div>
@endsection