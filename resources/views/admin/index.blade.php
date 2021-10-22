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
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#ciawigebang" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Ciawigebang</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#luragung" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Luragung</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#cigugur" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Cigugur</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#kramatmulya" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Kramatmulya</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#kadugede" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Kadugede</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#cigandamekar" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Cigandamekar</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#mandirancan" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Mandirancan</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#sindangagung" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Sindangagung</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#lebakwangi" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Lebakwangi</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#jalaksana" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Jalaksana</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#garawangi" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Garawangi</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#cidahu" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Cidahu</button>
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
            @if($inventory->daerah== "Kuningan" || $inventory->daerah== "Kab.Kuningan" || $inventory->daerah== "Kab. Kuningan" || $inventory->daerah== "kuningan")
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
            @if($inventory->daerah== "Cilimus" || $inventory->daerah== "Kab.Cilimus" || $inventory->daerah== "Kab. Cilimus" || $inventory->daerah== "cilimus")
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
    <div class="tab-pane fade" id="ciawigebang" role="tabpanel" aria-labelledby="pills-profile-tab">
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
            @if($inventory->daerah== "Ciawigebang" || $inventory->daerah== "Kab.Ciawigebang" || $inventory->daerah== "Kab. ciawigebang" || $inventory->daerah== "ciawigebang")
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
    <div class="tab-pane fade" id="luragung" role="tabpanel" aria-labelledby="pills-contact-tab">
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
            @if($inventory->daerah== "Luragung" || $inventory->daerah== "Kab.Luragung" || $inventory->daerah== "Kab. Luragung" || $inventory->daerah== "luragung")
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
    <div class="tab-pane fade" id="cigugur" role="tabpanel" aria-labelledby="pills-profile-tab">
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
            @if($inventory->daerah== "Cigugur" || $inventory->daerah== "Kab.Cigugur" || $inventory->daerah== "Kab. Cigugur" || $inventory->daerah== "cigugur")
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
    <div class="tab-pane fade" id="kramatmulya" role="tabpanel" aria-labelledby="pills-contact-tab">
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
            @if($inventory->daerah== "Kramatmulya" || $inventory->daerah== "Kab.Kramatmulya" || $inventory->daerah== "Kab. Kramatmulya" || $inventory->daerah== "kramatmulya")
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
    <div class="tab-pane fade" id="kadugede" role="tabpanel" aria-labelledby="pills-profile-tab">
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
            @if($inventory->daerah== "Kadugede" || $inventory->daerah== "Kab.Kadugede" || $inventory->daerah== "Kab. Kadugede" || $inventory->daerah== "kadugede")
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
    <div class="tab-pane fade" id="cigandamekar" role="tabpanel" aria-labelledby="pills-contact-tab">
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
            @if($inventory->daerah== "Cigandamekar" || $inventory->daerah== "Kab.Cigandamekar" || $inventory->daerah== "Kab. Cigandamekar" || $inventory->daerah== "cigandamekar")
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
    <div class="tab-pane fade" id="mandirancan" role="tabpanel" aria-labelledby="pills-profile-tab">
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
            @if($inventory->daerah== "Mandirancan" || $inventory->daerah== "Kab.Mandirancan" || $inventory->daerah== "Kab. Mandirancan" || $inventory->daerah== "mandirancan")
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
    <div class="tab-pane fade" id="sindangagung" role="tabpanel" aria-labelledby="pills-contact-tab">
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
            @if($inventory->daerah== "Sindangagung" || $inventory->daerah== "Kab.Sindangagung" || $inventory->daerah== "Kab. Sindangagung" || $inventory->daerah== "sindangagung")
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
    <div class="tab-pane fade" id="lebakwangi" role="tabpanel" aria-labelledby="pills-profile-tab">
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
            @if($inventory->daerah== "Lebakwangi" || $inventory->daerah== "Kab.Lebakwangi" || $inventory->daerah== "Kab. Lebakwangi" || $inventory->daerah== "Lebakwangi")
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
    <div class="tab-pane fade" id="jalaksana" role="tabpanel" aria-labelledby="pills-contact-tab">
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
            @if($inventory->daerah== "Jalaksana" || $inventory->daerah== "Kab.Jalaksana" || $inventory->daerah== "Kab. Jalaksana" || $inventory->daerah== "jalaksana")
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
    <div class="tab-pane fade" id="garawangi" role="tabpanel" aria-labelledby="pills-contact-tab">
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
            @if($inventory->daerah== "Garawangi" || $inventory->daerah== "Kab.Garawangi" || $inventory->daerah== "Kab. Garawangi" || $inventory->daerah== "garawangi")
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
    <div class="tab-pane fade" id="cidahu" role="tabpanel" aria-labelledby="pills-contact-tab">
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
            @if($inventory->daerah== "Cidahu" || $inventory->daerah== "Kab.Cidahu" || $inventory->daerah== "Kab. Cidahu" || $inventory->daerah== "cidahu")
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