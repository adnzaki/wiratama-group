<div id="app">
    <div class="gallery-inner-section-area sp2 bg1">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="heading3 space-margin60">
                        <h5>Our Gallery</h5>
                        <div class="space20"></div>
                        <h2>Our Active Events!</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="gallery-inner-slider-area">
                        <div class="row">
                            <?php foreach ($galleryImages as $image): ?>
                                <?php $imageSrc = $img . 'all-images/about/' . $image['src'] . '.webp'; ?>
                                <div class="<?= $image['size'] ?> col-md-6">
                                    <div class="content-area">
                                        <a type="button" @click="openImageGallery({ image: '<?= $imageSrc ?>', text: '<?= $image['text'] ?>' })" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <div class="img1">
                                                <img src="<?= $imageSrc ?>" alt="Galeri Foto Wiratama">
                                            </div>
                                        </a>
                                        <div class="icons">
                                            <a type="button" @click="openImageGallery({ image: '<?= $imageSrc ?>', text: '<?= $image['text'] ?>' })" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade custom-modal-wrapper" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-fullscreen-sm-down modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content custom-modal gallery-modal">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">{{ imageGalleryText }}</h1>
                    <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <div class="modal-body">
                    <div class="img1">
                        <img style="width: 100%;" :src="selectedImageGallery" :alt="imageGalleryText">
                    </div>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
            </div>
        </div>
    </div>
</div>