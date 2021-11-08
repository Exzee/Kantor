
                        
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="validationCustom01" class=" form-control-label">NIK</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="input-badge" name="nik" placeholder="Masukkan NIK" class="form-control" id="validationCustom01" value="<?php echo e(old('nik',$model->nik)); ?>" required><small class="form-text text-muted">*Wajib diisi</small>
                          </div>
                          </div>

                          
                        <div class="row form-group">
                          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Pegawai</label></div>
                          <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama" placeholder="Nama Pegawai" class="form-control" id="validationCustom02" value="<?php echo e(old('nama',$model->nama)); ?>" required><small class="form-text text-muted">*Wajib diisi</small></div>
                        </div>

                        
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Jenis Kelamin</label></div>
                            <div class="col-12 col-md-9">
                              <select name="jenis_kelamin" id="validationCustom03" class="form-control" value="<?php echo e(old('jenis_kelamin',$model->jenis_kelamin)); ?>" required>
                                <option selected disabled value="">Pilih</option>
                                <option value="1">Laki-Laki</option>
                                <option value="2">Perempuan</option>
                              </select>
                              <small class="form-text text-muted">*Wajib diisi</small>
                            </div>
                          </div>

                          
                        <div class="row form-group">
                          <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email</label></div>
                          <div class="col-12 col-md-9"><input type="email" id="email-input" name="email" placeholder="Masukkan Email" class="form-control" id="validationCustom04" value="<?php echo e(old('email',$model->email)); ?>" required><small class="form-text text-muted">*Wajib diisi</small></div>
                        </div>

                        
                        <div class="row form-group">
                          <div class="col col-md-3"><label for="tgllahir-input" class=" form-control-label">Tanggal Lahir</label></div>
                          <div class="col-12 col-md-9"><input type="date" id="tgllahir-input" name="tanggal_lahir" class="form-control" id="validationCustom05" value="<?php echo e(old('tanggal_lahir',$model->tanggal_lahir)); ?>" required><small class="form-text text-muted">*Wajib diisi</small></div>
                        </div>

                        
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Status Pernikahan</label></div>
                            <div class="col-12 col-md-9">
                              <select name="status_pernikahan" id="validationCustom06" class="form-control" value="<?php echo e(old('status_pernikahan',$model->status_pernikahan)); ?>" required>
                                <option selected disabled value="">Pilih</option>
                                <option value="1">Menikah</option>
                                <option value="2">Belum Menikah</option>
                              </select>
                              <small class="form-text text-muted">*Wajib diisi</small>
                            </div>
                          </div>

                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jumlah Anak</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="jumlah_anak" placeholder="Jumlah Anak" class="form-control" value="<?php echo e(old('jumlah_anak',$model->jumlah_anak)); ?>"></div>
                          </div>

                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Agama</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="agama" placeholder="Agama" class="form-control" value="<?php echo e(old('agama',$model->agama)); ?>"></div>
                          </div>

                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tahun Masuk Kerja</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="tahun_masuk" placeholder="Tahun Masuk Kerja" class="form-control" value="<?php echo e(old('tahun_masuk',$model->tahun_masuk)); ?>"></div>
                          </div>

                           
                           <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jabatan</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="jabatan" placeholder="Jabatan" class="form-control" value="<?php echo e(old('jabatan',$model->jabatan)); ?>"></div>
                          </div>
                          
                          
                        <div class="row form-group">
                          <div class="col col-md-3"><label for="file-input" class=" form-control-label">Foto Pegawai</label></div>
                          <div class="col-12 col-md-9"><input type="file" id="file-input" name="foto_pegawai" class="form-control-file">
                            <?php if(strlen($model->foto_pegawai)>0): ?>
                            <img src="<?php echo e(asset('images/pegawai'.$model->foto_pegawai)); ?>">
                            <?php endif; ?>
                        </div>
                        </div>


                       
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                      </button>
                      <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
                      </button>
                    </div>


                  <?php /**PATH C:\xampp\htdocs\laravel\kantor\resources\views/pegawai/_cr.blade.php ENDPATH**/ ?>