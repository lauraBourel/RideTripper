<section id="<?= $idModal ?>" class="modal">
    <button class="close-bg closeModal" target-modal="<?= $idModal ?>"></button>
    <div>
        <button class="close closeModal" target-modal="<?= $idModal ?>"><ion-icon name="close-outline"></ion-icon></button>
        <h2><?= $title ?></h2>
        <div class="modal__content">
            <?= $content ?>
        </div>
        <?php if (isset($actions)) { ?>
            <div class="action">
                <?= $actions ?>
            </div>
        <?php } ?>
    </div>
</section>