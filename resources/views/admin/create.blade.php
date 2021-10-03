@extends("admin.master")

@section('title', 'Buat Data Inventaris Tambahan')

@section("content")
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4>Tambah data perumahan</h4>
      </div>
      <div class="card-body">
        <form action="{{route('inventory.store')}}" method="POST">
          @csrf
          <div class="form-group">
            <div class="row">
              <div class="form-group col-6">
                <label>Pemerintah Daerah</label>
                <input required type="text" class="form-control" name="daerah">
              </div>
              <div class="form-group col-6">
                <label>Pengembang</label>
                <div class="input-group">
                  <input required type="text" class="form-control phone-number" name='pengembang'>
                </div>
              </div>
              <div class="form-group col-6">
                <label>Nama Perumahan</label>
                <input required type="text" class="form-control" name="perumahan">
              </div>
              <div class="form-group col-6">
                <label>Nama Asset</label>
                <input required type="text" class="form-control" name="asset">
              </div>
              <div class="form-group col-6">
                <label>Luas</label>
                <input required type="text" class="form-control" name="luas">
              </div>
              <div class="form-group col-6">
                <label>Nilai Perolehan</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      $
                    </div>
                  </div>
                  <input required type="text" class="form-control currency" name="nilai">
                </div>
              </div>
              <div class="form-group col-6">
                <label>Permasalahan</label>
                <input required type="text" class="form-control" name="permasalahan">
              </div>
              <div class="form-group col-6">
                <label>Progres</label>
                <input required type="text" class="form-control" name="progres">
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