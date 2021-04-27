<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tweet $tweet
 */
?>
<div style="height: 85vh;">
    <div class="bg-light shadow-5 my-5 py-5" style="height: 60vh;">
        <h2 class="text-center">Add Tweet</h2>
        <div class="row">
            <div class="col-md-8 m-auto">
                <?= $this->Form->create($tweet,['class' => 'd-flex flex-column my-auto py-5']) ?>
                <?= $this->Form->label('Photo') ?>
                <?= $this->Form->input('photo',['class' => 'mb-4 pl-2', 'placeholder' => 'Photo URL']) ?>
                <?= $this->Form->input('user_id', ['type' => 'hidden', $tweet->user_id]) ?>
                <?= $this->Form->label('text') ?>
                <?= $this->Form->textarea('text', ['class' => 'pl-2', 'placeholder' => 'description...']) ?>
                <?= $this->Form->button(__('Post'),['class' => 'btn btn-danger btn-lg w-25 mx-auto mt-4']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
