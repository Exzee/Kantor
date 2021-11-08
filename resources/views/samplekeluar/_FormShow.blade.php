
                        {{-- Segment --}}
                        <div class="row form-group">
                          <div class="col col-md-3"><label for="select" class=" form-control-label">Segment Sample</label></div>
                          <div class="col-12 col-md-9">
                            <select name="segment" id="segment" class="form-control" disabled="">
                              {{-- <option selected disabled value="">Pilih</option> --}}
                              <option value="{{ old('segment',$model->segment) }}">{{ old('segment',$model->segment) }}</option>
                            </select>
                          </div>
                        </div>                          

                        {{-- ID Sample Keluar--}}
                      <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kode Sample Keluar</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="id_sample_keluar" placeholder="Kode Sample : DK-xx | EK-xx" class="form-control" value="{{ old('id_sample_keluar',$model->id_sample_keluar) }}" disabled=""></div>
                      </div>

                      
                      {{-- Tanggal Kiirm Sample --}}
                      <div class="row form-group">
                        <div class="col col-md-3"><label for="tgl-input" class=" form-control-label">Tanggal Kirim</label></div>
                        <div class="col-12 col-md-9"><input type="date" id="tgl-input" name="tanggal_kirim_sample" class="form-control" id="validationCustom05" value="{{ old('tanggal_kirim_sample',$model->tanggal_kirim_sample) }}" disabled=""></div>
                      </div>

                      {{-- Pengirim Sample --}}
                      <div class="row form-group">
                          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pengirim Sample</label></div>
                          <div class="col-12 col-md-9"><input type="text" id="text-input" name="pengirim_sample" placeholder="Pengirim" class="form-control" value="{{ old('pengirim_sample',$model->pengirim_sample) }}" disabled=""></div>
                        </div>

                        {{-- Tujuan Sample --}}
                      <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tujuan Sample</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="tujuan_sample" placeholder="Tujuan" class="form-control" value="{{ old('tujuan_sample',$model->tujuan_sample) }}" disabled=""></div>
                      </div>

                      {{-- Jenis Sample --}}
                      <div class="row form-group">
                          <div class="col col-md-3"><label for="select" class=" form-control-label">Jenis Sample</label></div>
                          <div class="col-12 col-md-9">
                            <select name="jenis_sample" id="validationCustom06" class="form-control" disabled="">
                              {{-- <option selected disabled value="">Pilih</option> --}}
                              <option value="{{ old('jenis_sample',$model->jenis_sample) }}">{{ old('jenis_sample',$model->jenis_sample) }}</option>
                            </select>
                          </div>
                        </div>

                        {{-- Tipe Benang --}}
                        <div class="row form-group">
                          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tipe Benang</label></div>
                          <div class="col-12 col-md-9"><input type="text" id="text-input" name="tipe_benang" placeholder="Tipe Benang" class="form-control" value="{{ old('tipe_benang',$model->tipe_benang) }}" disabled=""></div>
                        </div>

                        {{-- Lot Number --}}
                        <div class="row form-group">
                          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Lot Number</label></div>
                          <div class="col-12 col-md-9"><input type="text" id="text-input" name="lot_number" placeholder="Lot Number" class="form-control" value="{{ old('lot_number',$model->lot_number) }}" disabled=""></div>
                        </div>

                         {{-- Rincian Sample Keluar --}}
                         <div class="row form-group">
                          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Rincian Sample</label></div>
                          <div class="col-12 col-md-9"><textarea type="text" id="text-input" name="rincian_sample_keluar" placeholder="Rincian Sample Keluar" class="form-control" value="{{ old('rincian_sample_keluar',$model->rincian_sample_keluar) }}" disabled="">{{ old('rincian_sample_keluar',$model->rincian_sample_keluar) }}</textarea>
                          </div>
                        </div>
                        
                        {{-- Upload Foto Sample --}}
                      <div class="row form-group">
                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Foto Sample</label></div>
                        <div class="col-12 col-md-9">
                          @if(strlen($model->foto_sample_keluar)>0)
                          <img class="img-thumbnail" width="300px" src="{{ asset('images/samplekeluar/'.$model->foto_sample_keluar) }}"/>
                          @endif
                          @if(strlen($model->foto_sample_keluar)<1)
                          <img class="img-thumbnail" width="300px" src="{{ asset('images/samplekeluar/blank-img.jpg') }}"/>
                          @endif
                        </div>
                      </div>


                    {{-- footer form --}}
                    <div class="card-footer">
                      <a href="{{ url('samplekeluar/'.$model->id.'/cetak/'.$model->id_sample_keluar) }}" class="btn btn-primary btn-sm" target="_blank">
                        <i class="ti ti-printer"></i>  Cetak
                      </a>
                    </div>