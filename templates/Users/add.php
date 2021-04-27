<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div style="height: 85vh;">
    <div class="bg-light shadow-5 my-5 py-5" style="height: 60vh;">
        <h2 class="text-center">Sign Up</h2>
        <div class="row">
            <div class="col-md-8 m-auto">
                <?= $this->Form->create($user,['class' => 'd-flex flex-column my-auto py-5']) ?>
                <?= $this->Form->label('Name') ?>
                <?= $this->Form->input('name',['class' => 'mb-4 pl-2', 'placeholder' => 'your name']) ?>
                <?= $this->Form->label('email') ?>
                <?= $this->Form->input('email', ['class' => 'mb-4 pl-2', 'placeholder' => 'tweet@cake.com']) ?>
                <?= $this->Form->label('Password') ?>
                <?= $this->Form->password('password', ['class' => 'pl-2']) ?>
                <?= $this->Form->button(__('Sign Up'),['class' => 'btn btn-danger btn-lg w-25 mx-auto mt-4']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
