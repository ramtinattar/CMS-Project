<?php use Core\FH; ?>
<?php $this->start('content'); ?>
<div class="row">
    <div class="col-md-8 offset-md-2 poster">
        <h2><?= $this->header ?></h2>

        <form action="" method="POST">
            <?= FH::csrfField();?>
            <div class="row">
                <?= FH::inputBlock('Prenom', 'fname', $this->user->fname, ['class' => 'form-control'], ['class' => 'form-group col-md-6'], $this->errors); ?>
                <?= FH::inputBlock('Nom', 'lname', $this->user->lname, ['class' => 'form-control'], ['class' => 'form-group col-md-6'], $this->errors); ?>
                <?= FH::inputBlock('Email', 'email', $this->user->email, ['class' => 'form-control', 'type' => 'email'], ['class' => 'form-group col-md-6'], $this->errors); ?>
                <?= FH::selectBlock('Rôle', 'acl', $this->user->acl, $this->role_options, ['class' => 'form-control'], ['class' => 'form-group col-md-6'], $this->errors); ?>
            </div>

            <div class="row">
                <?= FH::inputBlock('Password', 'password', '', ['class' => 'form-control', 'type' => 'password'], ['class' => 'form-group col-md-6'], $this->errors); ?>
                <?= FH::inputBlock('Confirmer Password', 'confirm', '', ['class' => 'form-control', 'type' => 'password'], ['class' => 'form-group col-md-6'], $this->errors); ?>
            </div>

            <div class="text-right">
                <a href="<?=ROOT?>admin/users" class="btn btn-secondary">Annuler</a>
                <input class="btn btn-primary" value="Sauvegarder" type="submit" />
            </div>
        </form>
    </div>
</div>
<?php $this->end(); ?>