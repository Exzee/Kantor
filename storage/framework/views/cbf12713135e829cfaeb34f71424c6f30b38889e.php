
                        
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Segment Sample</label></div>
                            <div class="col-12 col-md-9">
                              <select name="segment" id="segment" class="form-control" value="<?php echo e(old('segment',$model->segment)); ?>" required>
                                <option selected disabled value="">Pilih</option>
                                <option value="1">Domestic</option>
                                <option value="2">Export</option>
                              </select>
                              <small class="form-text text-muted">*Wajib diisi</small>
                            </div>
                          </div>                          

                          
                        <div class="row form-group">
                          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kode Sample</label></div>
                          <div class="col-12 col-md-9"><input type="text" id="text-input" name="id_sample" placeholder="Kode Sample : DOM-xx | EXP-xx" class="form-control" id="validationCustom02" value="<?php echo e(old('id_sample',$model->id_sample)); ?>" required><small class="form-text text-muted">*Domestic: DOM-xx | Export: EXP-xx</small></div>
                        </div>

                        
                        
                        <div class="row form-group">
                          <div class="col col-md-3"><label for="tgl-input" class=" form-control-label">Tanggal Terima</label></div>
                          <div class="col-12 col-md-9"><input type="date" id="tgllahir-input" name="tanggal_terima_sample" class="form-control" id="validationCustom05" value="<?php echo e(old('tanggal_terima_sample',$model->tanggal_terima_sample)); ?>" required><small class="form-text text-muted">*Wajib diisi</small></div>
                        </div>

                        
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pengirim Sample</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="pengirim_sample" placeholder="Pengirim" class="form-control" id="validationCustom10" value="<?php echo e(old('pengirim_sample',$model->pengirim_sample)); ?>" required></div>
                          </div>

                        
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Jenis Sample</label></div>
                            <div class="col-12 col-md-9">
                              <select name="jenis_sample" id="validationCustom06" class="form-control" value="<?php echo e(old('jenis_sample',$model->jenis_sample)); ?>" required>
                                <option selected disabled value="">Pilih</option>
                                <option value="1">Market</option>
                                <option value="2">Complaint</option>
                              </select>
                              <small class="form-text text-muted">*Wajib diisi</small>
                            </div>
                          </div>

                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tipe Benang</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="tipe_benang" placeholder="Tipe Benang" class="form-control" value="<?php echo e(old('tipe_benang',$model->tipe_benang)); ?>"></div>
                          </div>

                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Lot Number</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="lot_number" placeholder="Lot Number" class="form-control" value="<?php echo e(old('lot_number',$model->lot_number)); ?>"></div>
                          </div>

                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Problem</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="problem_sample" placeholder="Masalah?" class="form-control" value="<?php echo e(old('problem_sample',$model->problem_sample)); ?>"></div>
                          </div>

                           
                           <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Rincian Sample</label></div>
                            <div class="col-12 col-md-9"><textarea type="text" id="text-input" name="rincian_sample_masuk" placeholder="Rincian Sample Masuk" class="form-control" value="<?php echo e(old('rincian_sample_masuk',$model->rincian_sample_masuk)); ?>"><?php echo e(old('rincian_sample_masuk',$model->rincian_sample_masuk)); ?></textarea>
                            </div>
                          </div>
                          
                          
                        <div class="row form-group">
                          <div class="col col-md-3"><label for="file-input" class=" form-control-label">Foto Sample</label></div>
                          <div class="col-12 col-md-9"><input type="file" id="file-input" name="foto_sample" class="form-control-file">

                            <?php if(strlen($model->foto_sample)>0): ?>
                            <img class="img-thumbnail" width="300px" src="<?php echo e(asset('images/samplemasuk/'.$model->foto_sample)); ?>"/>
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


                  <?php /**PATH C:\xampp\htdocs\laravel\kantor\resources\views/samplemasuk/_FormCreate.blade.php ENDPATH**/ ?>