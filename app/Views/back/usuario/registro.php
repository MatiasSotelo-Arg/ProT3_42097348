<div class="container mt-5 mb-5 d-flex justify-content-center">
    <div class="card" style="width: 70%;">

        <div class="card-header text-center">
            <h2>Registrate</h2>
        </div>

        <?php $validation = \Config\Services::validation(); ?>
    

        <form method="post" action="<?php echo base_url('/enviar-form')?>" class="row g-3 m-5">
            <?= csrf_field(); ?>
    
                <!-- mensajes de errores -->
                <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                  <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                <?php endif; ?>
                
                <?php if (!empty(session()->getFlashdata('success'))) : ?>
                    <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                <?php endif; ?>

            <div class="card-body">
                <!-- Nombre -->
                <div class="col-12">
                    <label for="validationDefault01" class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control <?= ($validation->hasError('nombre')) ? 'is-invalid' : ''; ?>" id="validationDefault01" value="<?= old('nombre') ?>">
                    <!-- error -->
                     <?php if($validation->getError('nombre')) {?>
                        <div class="alert alert-danger mt-2">
                            <?= $error = $validation->getError('nombre'); ?>
                        </div>
                    <?php }?>
                </div>

                <!-- Apellido -->
                <div class="col-12">
                    <label for="validationDefault01" class="form-label">Apellido</label>
                    <input type="text" name="apellido" class="form-control <?= ($validation->hasError('apellido')) ? 'is-invalid' : ''; ?>" id="validationDefault01" value="<?= old('apellido') ?>">
                    <!-- error -->
                     <?php if($validation->getError('apellido')) {?>
                        <div class="alert alert-danger mt-2">
                            <?= $error = $validation->getError('apellido'); ?>
                        </div>
                    <?php }?>
                </div>

                <!-- Email -->
                <div class="col-12">
                    <label for="validationDefault01" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="validationDefault01" value="<?= old('email') ?>">
                    <!-- error -->
                     <?php if($validation->getError('email')) {?>
                        <div class="alert alert-danger mt-2">
                            <?= $error = $validation->getError('email'); ?>
                        </div>
                    <?php }?>
                </div>

                <!-- Usuario -->
                <div class="col-12">
                    <label for="validationDefault01" class="form-label">Usuario</label>
                    <input type="text" name="usuario" class="form-control <?= ($validation->hasError('usuario')) ? 'is-invalid' : ''; ?>" id="validationDefault01" value="<?= old('usuario') ?>">
                    <!-- error -->
                     <?php if($validation->getError('usuario')) {?>
                        <div class="alert alert-danger mt-2">
                            <?= $error = $validation->getError('usuario'); ?>
                        </div>
                    <?php }?>
                </div>

                <!-- Password -->
                <div class="col-12">
                    <label for="validationDefault01" class="form-label">Password</label>
                    <input type="password" name="pass" class="form-control <?= ($validation->hasError('pass')) ? 'is-invalid' : ''; ?>" id="validationDefault01" value="<?= old('pass') ?>">
                    <!-- error -->
                     <?php if($validation->getError('pass')) {?>
                        <div class="alert alert-danger mt-2">
                            <?= $error = $validation->getError('pass'); ?>
                        </div>
                    <?php }?>
                </div>

                
            </div>
            
            <div>
                <input type="submit" value="Guardar" class="btn btn-success">
                <input type="reset" value="Cancelar" class="btn btn-danger">
            </div>

            <br><span>¿Ya estas registrado? <a href="<?php echo base_url('/login'); ?>">Ingresa aqui</a></span>
        </a>
        </form>
    </div>
</div>

