<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
About
<?= $this->endSection() ?>

<?= $this->section('header') ?>
<?= $this->include('templates/frontend/header') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<h1>About Page</h1>
<?= $this->endSection() ?>

<?= $this->section('footer') ?>
<?= $this->include('templates/frontend/footer') ?>
<?= $this->endSection() ?>