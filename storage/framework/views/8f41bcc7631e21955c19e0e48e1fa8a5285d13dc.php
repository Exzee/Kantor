                        
                        <div class="row form-group">
                          <div class="col col-md-3"><label for="id-database" class=" form-control-label">ID Database</label></div>
                          <div class="col-12 col-md-9"><input type="text" id="input-badge" name="id" placeholder="ID Database" class="form-control" value="<?php echo e(old('id',$model->id)); ?>" disabled="">
                        </div>
                        </div>

                        
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="no_badge" class=" form-control-label">NIK</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="input-badge" name="nik" placeholder="Masukkan NIK" class="form-control" value="<?php echo e(old('nik',$model->nik)); ?>" disabled="">
                          </div>
                          </div>

                          
                        <div class="row form-group">
                          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Pegawai</label></div>
                          <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama" placeholder="Nama Pegawai" class="form-control" value="<?php echo e(old('nama',$model->nama)); ?>" disabled=""></div>
                        </div>

                         
                         <div class="row form-group">
                          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat Pegawai</label></div>
                          <div class="col-12 col-md-9"><input type="text" id="text-input" name="alamat" placeholder="Alamat" class="form-control" value="<?php echo e(old('alamat',$model->alamat)); ?>" disabled=""></div>
                        </div>

                        
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Jenis Kelamin</label></div>
                            <div class="col-12 col-md-9">
                              <select name="jenis_kelamin" class="form-control" disabled="">
                                
                                <option value="<?php echo e(old('jenis_kelamin',$model->jenis_kelamin)); ?>"><?php echo e(old('jenis_kelamin',$model->jenis_kelamin)); ?></option>
                              </select>
                            </div>
                          </div>

                          
                        <div class="row form-group">
                          <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email</label></div>
                          <div class="col-12 col-md-9"><input type="email" id="email-input" name="email" placeholder="Masukkan Email" class="form-control" value="<?php echo e(old('email',$model->email)); ?>" disabled=""></div>
                        </div>

                        
                        <div class="row form-group">
                          <div class="col col-md-3"><label for="tanggal_lahir" class=" form-control-label">Tanggal Lahir</label></div>
                          <div class="col-12 col-md-9"><input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" value="<?php echo e(old('tanggal_lahir',$model->tanggal_lahir)); ?>" disabled=""></div>
                        </div>

                        
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Status Pernikahan</label></div>
                            <div class="col-12 col-md-9">
                              <select name="status_pernikahan" class="form-control" disabled="">
                                
                                <option value="<?php echo e(old('status_pernikahan',$model->status_pernikahan)); ?>""><?php echo e(old('status_pernikahan',$model->status_pernikahan)); ?></option>
                              </select>
                            </div>
                          </div>

                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jumlah Anak</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="jumlah_anak" placeholder="Jumlah Anak" class="form-control" value="<?php echo e(old('jumlah_anak',$model->jumlah_anak)); ?>" disabled=""></div>
                          </div>

                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Agama</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="agama" placeholder="Agama" class="form-control" value="<?php echo e(old('agama',$model->agama)); ?>" disabled=""></div>
                          </div>

                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tahun Masuk Kerja</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="tahun_masuk" placeholder="Tahun Masuk Kerja" class="form-control" value="<?php echo e(old('tahun_masuk',$model->tahun_masuk)); ?>" disabled=""></div>
                          </div>

                           
                           <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jabatan</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="jabatan" placeholder="Jabatan" class="form-control" value="<?php echo e(old('jabatan',$model->jabatan)); ?>" disabled=""></div>
                          </div>
                          
                          
                        <div class="row form-group">
                          <div class="col col-md-3"><label for="file-input" class=" form-control-label">Foto Pegawai</label></div>
                          <div class="col-12 col-md-9">
                            <?php if(strlen($model->foto_pegawai)>0): ?>
                            <img class="img-thumbnail" width="300px" src="<?php echo e(asset('images/pegawai/'.$model->foto_pegawai)); ?>"/>
                            <?php endif; ?>
                            <?php if(strlen($model->foto_pegawai)<1): ?>
                            <img class="img-thumbnail" width="300px" src="<?php echo e(asset('images/pegawai/picture_null.png')); ?>"/>
                            <?php endif; ?>
                        </div>
                        </div>


                       
                    <div class="card-footer">
                      <a href="<?php echo e(url('pegawai/'.$model->id.'/cetak/'.$model->nik)); ?>" class="btn btn-primary btn-sm" target="_blank">
                        <i class="ti ti-printer"></i>  Cetak
                      </a>
                    </div>


                  <?php /**PATH C:\xampp\htdocs\kantor\resources\views/pegawai/_FormShow.blade.php ENDPATH**/ ?>