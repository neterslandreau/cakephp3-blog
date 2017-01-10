<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __d('CakeDC/Users', 'Add User') ?></legend>
        <?php
            echo $this->Form->input('username', ['label' => __('Username')]);
            echo $this->Form->input('email', ['label' => __('Email')]);
            echo $this->Form->input('password', ['label' => __('Password')]);
            echo $this->Form->input('password_confirm', [
                'type' => 'password',
                'label' => __('Confirm password')
            ]);
            echo $this->Form->input('first_name', ['label' => __('First name')]);
            echo $this->Form->input('last_name', ['label' => __('Last name')]);
            echo $this->Form->input('active', ['type' => 'checkbox']);
            echo $this->Form->input('is_superuser', ['type' => 'checkbox']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
