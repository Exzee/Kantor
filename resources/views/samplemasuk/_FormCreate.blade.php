
                        {{-- Segment --}}
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Segment Sample</label></div>
                            <div class="col-12 col-md-9">
                              <select name="segment" id="segment" class="form-control" value="{{ old('segment',$model->segment) }}" required>
                                <option selected disabled value="">Pilih</option>
                                <option value="1">Domestic</option>
                                <option value="2">Export</option>
                              </select>
                              <small class="form-text text-muted">*Wajib diisi</small>
                            </div>
                          </div>                          

                          {{-- ID Sample --}}
                        <div class="row form-group">
                          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kode Sample</label></div>
                          <div class="col-12 col-md-9"><input type="text" id="text-input" name="id_sample" placeholder="Kode Sample : DOM-xx | EXP-xx" class="form-control" id="validationCustom02" value="{{ old('id_sample',$model->id_sample) }}" required><small class="form-text text-muted">*Domestic: DOM-xx | Export: EXP-xx</small></div>
                        </div>

                        
                        {{-- Tanggal Terima Sample --}}
                        <div class="row form-group">
                          <div class="col col-md-3"><label for="tgl-input" class=" form-control-label">Tanggal Terima</label></div>
                          <div class="col-12 col-md-9"><input type="date" id="tgllahir-input" name="tanggal_terima_sample" class="form-control" id="validationCustom05" value="{{ old('tanggal_terima_sample',$model->tanggal_terima_sample) }}" required><small class="form-text text-muted">*Wajib diisi</small></div>
                        </div>

                        {{-- Pengirim Sample --}}
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pengirim Sample</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="pengirim_sample" placeholder="Pengirim" class="form-control" id="validationCustom10" value="{{ old('pengirim_sample',$model->pengirim_sample) }}" required></div>
                          </div>

                        {{-- Jenis Sample --}}
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Jenis Sample</label></div>
                            <div class="col-12 col-md-9">
                              <select name="jenis_sample" id="validationCustom06" class="form-control" value="{{ old('jenis_sample',$model->jenis_sample) }}" required>
                                <option selected disabled value="">Pilih</option>
                                <option value="1">Market</option>
                                <option value="2">Complaint</option>
                              </select>
                              <small class="form-text text-muted">*Wajib diisi</small>
                            </div>
                          </div>

                          {{-- Tipe Benang --}}
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tipe Benang</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="tipe_benang" placeholder="Tipe Benang" class="form-control" value="{{ old('tipe_benang',$model->tipe_benang) }}"></div>
                          </div>

                          {{-- Lot Number --}}
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Lot Number</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="lot_number" placeholder="Lot Number" class="form-control" value="{{ old('lot_number',$model->lot_number) }}"></div>
                          </div>

                          {{-- Problem Sample --}}
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Problem</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="problem_sample" placeholder="Masalah?" class="form-control" value="{{ old('problem_sample',$model->problem_sample) }}"></div>
                          </div>

                           {{-- Rincian Sample Masuk --}}
                           <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Rincian Sample</label></div>
                            <div class="col-12 col-md-9"><textarea type="text" id="text-input" name="rincian_sample_masuk" placeholder="Rincian Sample Masuk" class="form-control" value="{{ old('rincian_sample_masuk',$model->rincian_sample_masuk) }}">{{ old('rincian_sample_masuk',$model->rincian_sample_masuk) }}</textarea>
                            </div>
                          </div>
                          
                          {{-- Upload Foto Sample --}}
                        <div class="row form-group">
                          <div class="col col-md-3"><label for="file-input" class=" form-control-label">Foto Sample</label></div>
                          <div class="col-12 col-md-9"><input type="file" id="file-input" name="foto_sample" class="form-control-file">

                            @if(strlen($model->foto_sample)>0)
                            <img class="img-thumbnail" width="300px" src="{{ asset('images/samplemasuk/'.$model->foto_sample) }}"/>
                            @endif
                            {{-- @if(strlen($model->foto_sample)<1)
                            <img class="img-thumbnail" width="300px" src="{{ asset('images/samplemasuk/picture_null.png') }}"/>
                            @endif --}}
                          </div>
                        </div>


                       {{-- footer form --}}
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                      </button>
                      <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
                      </button>
                    </div>


                  