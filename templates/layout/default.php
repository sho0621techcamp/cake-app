<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'bootstrap.min.css', 'bootstrap-grid.min.css', 'jquery-3.4.1.min', 'bootstrap.min', 'cake']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <div class="header w-100">
        <nav class="navbar bg-danger">
            <div class="top-nav-title">
                <a href="<?= $this->Url->build('/') ?>" class="bg-light"><span>Cake</span>PHP</a>
            </div>
            <div class="top-nav-btn d-flex mx-3">
                <div class="nav-item mx-1">
                    <button class="btn-outline-danger" data-mdb-ripple-color="dark">
                        <i class="fab fa-twitter">
                            <?= $this->Html->link('Add Tweets', ['controller' => 'tweets', 'action' => 'add'])?>
                        </i>
                    </button>
                </div>
                <div class="nav-item mx-1">
                    <button class="btn btn-outline-light" data-mdb-ripple-color="dark">
                        <?= $this->Html->link('Signup', ['controller' => 'users', 'action' => 'add'],['class' => 'text-light'])?>
                    </button>
                </div>
                <div class="nav-item mx-1">
                    <button class="btn btn-outline-light" data-mdb-ripple-color="dark">
                        <?= $this->Html->link('Login', ['controller' => 'users', 'action' => 'login'], ['class' => 'text-light'])?>
                    </button>
                </div>
            </div>
        </nav>
    </div>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <div class="w-100 bg-danger text-center m-0 p-2">
        <p class="mt-2 pt-2"><?= $this->Html->image('cake-logo.png')?></p>
    </div>
</body>
</html>
