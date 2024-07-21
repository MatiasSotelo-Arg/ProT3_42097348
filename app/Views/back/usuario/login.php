<div class="container mt-5 mb-5 d-flex justify-content-center">
    <div class="card" style="width: 50%;">

        <div class="card-header text-center">
            <h3>Iniciar sesion</h3>
        </div>

        <div>
            <!-- mensaje error -->
            <?php if(session()->getFlashData('msg')):?>
            <div class="alert alert-warning">
                <?=session()->getFlashdata('msg')?>
            </div>
            <?php endif;?>
        </div>

        <form action="<?php echo base_url('/enviarlogin') ?>" method="post">
            <div class="card-body">
                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label">Correo</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="password" name="pass" class="form-control">
                </div>

                <input type="submit" value="Ingresar" class="btn btn-success">
                    <a href="<?php echo base_url('login'); ?>" class="btn btn-danger">Cancelar</a>
                    <br><span>¿Aun no se registro? <a href="<?php echo base_url('/registro'); ?>">Registrarse aqui </a></span>
                </a>
                
            </div>
        </form>
    </div>
</div>
