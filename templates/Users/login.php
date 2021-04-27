<!-- /templates/Users/login.php -->
<div style="height: 85vh;">
    <div class="bg-light shadow-5 my-5 py-5" style="height: 60vh;">
        <h2 class="text-center">Login</h2>
        <div class="flex-column pt-5 text-center">
            <div class="col-md-8 m-auto">
                <?= $this->Form->create() ?>
                <div class="email">
                    <?= $this->Form->label('email') ?>
                    <?= $this->Form->input('email',['class' => 'mb-4 pl-2', 'placeholder' => 'tweet@cake.com']) ?>
                </div>
                <div class="password">
                    <?= $this->Form->label('password') ?>
                    <?= $this->Form->password('password', ['class' => 'pl-2', 'required' => true]) ?>
                </div>
                <?= $this->Form->submit(__('Login'),['class' => 'btn btn-danger btn-lg w-25 mx-auto mt-4']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
