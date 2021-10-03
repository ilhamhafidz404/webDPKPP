@extends("admin.master")

@section('title', 'Edit Data Perumahan')

@section("content")
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4>Edit data perumahan {{$inventory->perumahan}}</h4>
      </div>
      <div class="card-body">
        <form action="{{route('inventory.update', $inventory->id)}}" method="POST">
          @csrf
          @method('PUT')
          <div class="form-group">
            <div class="row">
              <div class="form-group col-6">
                <label>Pemerintah Daerah</label>
                <input required type="text" class="form-control" name="daerah" value="{{$inventory->daerah}}">
              </div>
              <div class="form-group col-6">
                <label>Pengembang</label>
                <div class="input-group">
                  <input required type="text" class="form-control phone-number" name='pengembang' value="{{$inventory->pengembang}}">
                </div>
              </div>
              <div class="form-group col-6">
                <label>Nama Perumahan</label>
                <input required type="text" class="form-control" name="perumahan" value="{{$inventory->perumahan}}">
              </div>
              <div class="form-group col-6">
                <label>Nama Asset</label>
                <input required type="text" class="form-control" name="asset" value="{{$inventory->asset}}">
              </div>
              <div class="form-group col-6">
                <label>Luas</label>
                <input required type="text" class="form-control" name="luas" value="{{$inventory->luas}}">
              </div>
              <div class="form-group col-6">
                <label>Nilai Perolehan</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      $
                    </div>
                  </div>
                  <input required type="text" class="form-control currency" name="nilai" value="{{$inventory->perolehan}}">
                </div>
              </div>
              <div class="form-group col-6">
                <label>Permasalahan</label>
                <input required type="text" class="form-control" name="permasalahan" value="{{$inventory->permasalahan}}">
              </div>
              <div class="form-group col-6">
                <label>Progres</label>
                <input required type="text" class="form-control" name="progres" value="{{$inventory->progres}}">
              </div>
              <div class="col-12">
                <div class="form-group text-right mt-3">
                  <button class="btn btn-danger me-3" type="reset">
                    Reset
                  </button>
                  <button class="btn btn-primary px-4">
                    <i class="fas fa-save mr-3"></i>
                    Submit
                  </button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection