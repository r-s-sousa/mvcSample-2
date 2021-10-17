<?php $this->layout('_theme', ['title' => $title]); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>Página da HOME</h1>
        </div>
    </div>
</div>

<?php $this->start('scripts'); ?>

<script>
    $(document).ready(function() {
        document.getElementById('home').classList.add('active');
    });
</script>

<?php $this->stop(); ?>