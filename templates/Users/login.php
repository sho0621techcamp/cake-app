<!-- /templates/Users/login.php -->
<div class="users form">
    <?= $this->Flash->render() ?>
    <h3>Login</h3>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Please enter your email and password') ?></legend>
        <?= $this->Form->control('email', ['required' => true]) ?>
        <?= $this->Form->control('password', ['required' => true]) ?>
    </fieldset>
    <?= $this->Form->submit(__('Login'),['class' => 'btn btn-danger btn-lg w-25 mx-auto mt-4']) ?>
    <?= $this->Form->end() ?>

    <?= $this->Html->link('Sign Up', ['action' => 'add']) ?>
</div>