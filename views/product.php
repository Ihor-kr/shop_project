<?php include 'header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Каталог</h2>
                    <div class="panel-group category-products" id="accordian">
                        <?php foreach ($categories as $categoryItem): ?>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a href="/catalog/<?php echo $categoryItem['id']; ?>">
                                        <?php echo $categoryItem['name']; ?>
                                    </a>
                                </h4>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="product-details">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="#" alt="" />
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="product-information">
                                <img src="<?php echo $product['image_path']; ?>" class="newarrival" alt="" />
                                <h2><?php echo $product['name']; ?></h2>
                                <p><?php echo $product['code']; ?></p>
                                <span>
                                            <span><?php echo $product['price']; ?></span>
                                            <button type="button" class="btn btn-fefault cart">
                                                <i class="fa fa-shopping-cart"></i>
                                                В корзину
                                            </button>
                                        </span>
                                <p><b><?php echo $product['brand']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <h5>Опис товару</h5>
                            <?php echo $product['description']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>