
                        {{-- Segment --}}
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Segment Sample</label></div>
                            <div class="col-12 col-md-9">
                              <select name="segment" id="segment" class="form-control" value="{{ old('segment',$model->segment) }}" required>
                                <option selected disabled value="">Pilih</option>
                                <option value="1">Domestic</option>
                                <option value="2">Export</option>
                              </select>
                            </div>
                          </div>                          

                          {{-- ID Sample Keluar--}}
                        <div class="row form-group">
                          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kode Sample Keluar</label></div>
                          <div class="col-12 col-md-9"><input type="text" id="text-input" name="id_sample_keluar" placeholder="Kode Sample : DK-xx | EK-xx" class="form-control" id="validationCustom02" value="{{ old('id_sample_keluar',$model->id_sample_keluar) }}" required><small class="form-text text-muted">*Domestic: DK-xx | Export: EK-xx</small></div>
                        </div>

                        
                        {{-- Tanggal Kiirm Sample --}}
                        <div class="row form-group">
                          <div class="col col-md-3"><label for="tgl-input" class=" form-control-label">Tanggal Kirim</label></div>
                          <div class="col-12 col-md-9"><input type="date" id="tgl-input" name="tanggal_kirim_sample" class="form-control" id="validationCustom05" value="{{ old('tanggal_kirim_sample',$model->tanggal_kirim_sample) }}" required><small class="form-text text-muted">*Wajib diisi</small></div>
                        </div>

                        {{-- Pengirim Sample --}}
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pengirim Sample</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="pengirim_sample" placeholder="Pengirim" class="form-control" id="validationCustom10" value="{{ old('pengirim_sample',$model->pengirim_sample) }}" required></div>
                          </div>

                          {{-- Tujuan Sample --}}
                        <div class="row form-group">
                          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tujuan Sample</label></div>
                          <div class="col-12 col-md-9"><input type="text" id="text-input" name="tujuan_sample" placeholder="Tujuan" class="form-control" id="validationCustom10" value="{{ old('tujuan_sample',$model->tujuan_sample) }}" required></div>
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

                           {{-- Rincian Sample Keluar --}}
                           <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Rincian Sample</label></div>
                            <div class="col-12 col-md-9"><textarea type="text" id="text-input" name="rincian_sample_keluar" placeholder="Rincian Sample Keluar" class="form-control" value="{{ old('rincian_sample_keluar',$model->rincian_sample_keluar) }}">{{ old('rincian_sample_keluar',$model->rincian_sample_keluar) }}</textarea>
                            </div>
                          </div>
                          
                          {{-- Upload Foto Sample --}}
                        <div class="row form-group">
                          <div class="col col-md-3"><label for="file-input" class=" form-control-label">Foto Sample</label></div>
                          <div class="col-12 col-md-9"><input type="file" id="file-input" name="foto_sample" class="form-control-file">
                            @if(strlen($model->foto_sample_keluar)>0)
                            <img class="img-thumbnail" width="300px" src="{{ asset('images/samplekeluar/'.$model->foto_sample_keluar) }}"/>
                            @endif
                            @if(strlen($model->foto_sample_keluar)<1)
                            <img class="img-thumbnail" width="300px" src="{{ asset('images/samplekeluar/picture_null.png') }}"/>
                            @endif
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


                  