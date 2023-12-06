<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>
<div class="container mt-5">
    <h1 class="text-center">Frequently Asked Questions</h1>
    <div class="accordion" id="faqAccordion">
        <?php foreach ($faqItems as $index => $faqItem) : ?>
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading<?= $index + 1 ?>">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse<?= $index + 1 ?>" aria-expanded="false" aria-controls="faqCollapse<?= $index + 1 ?>">
                        <?= $faqItem['question'] ?>
                    </button>
                </h2>
                <div id="faqCollapse<?= $index + 1 ?>" class="accordion-collapse collapse" aria-labelledby="faqHeading<?= $index + 1 ?>" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <?= $faqItem['answer'] ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection(); ?>