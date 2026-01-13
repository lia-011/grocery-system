<?php
/**
 * @var \App\View\AppView $this
 */
?>

<?= $this->Html->css('shop') ?>

<div class="shop-container">

    <!-- Featured Slider -->
    <div class="featured-slider">
        <?php 
        $featuredProducts = [
            ['name' => 'Fresh Apple', 'price' => 2.50, 'image' => 'apple.jpg'],
            ['name' => 'Organic Banana', 'price' => 1.80, 'image' => 'banana.jpg'],
            ['name' => 'Juicy Orange', 'price' => 3.00, 'image' => 'orange.jpg'],
            ['name' => 'Strawberry Pack', 'price' => 4.00, 'image' => 'strawberry.jpg'],
            ['name' => 'Blueberries', 'price' => 5.50, 'image' => 'blueberries.jpg']
        ];
        ?>
        <?php foreach ($featuredProducts as $product): ?>
            <div class="slide">
                <img src="/img/shop/<?= $product['image'] ?>" alt="<?= h($product['name']) ?>">
                <div class="slide-info">
                    <h2><?= h($product['name']) ?></h2>
                    <p>$<?= h($product['price']) ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Categories Section -->
    <div class="categories">
        <h2>Shop by Category</h2>
        <div class="category-cards">
            <?php 
            $categories = [
                ['name' => 'Fruits', 'image' => 'fruits.jpg', 'desc' => 'Fresh and seasonal fruits for your healthy diet.'],
                ['name' => 'Vegetables', 'image' => 'vegetables.jpg', 'desc' => 'Green, organic vegetables for your meals.'],
                ['name' => 'Dairy', 'image' => 'dairy.jpg', 'desc' => 'Milk, cheese, and yogurt products.'],
                ['name' => 'Bakery', 'image' => 'bakery.jpg', 'desc' => 'Fresh bread, cakes, and pastries.'],
                ['name' => 'Beverages', 'image' => 'beverages.jpg', 'desc' => 'Juices, milkshakes, and drinks.']
            ];
            ?>
            <?php foreach ($categories as $category): ?>
                <div class="category-card">
                    <img src="/img/categories/<?= $category['image'] ?>" alt="<?= h($category['name']) ?>">
                    <h3><?= h($category['name']) ?></h3>
                    <p><?= h($category['desc']) ?></p>
                    <button class="btn-see-all">See All</button>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


    <!-- Products Section -->
    <div class="product-list">
        <h2>All Products</h2>
        <div class="product-cards">
            <?php 
            $products = [
                ['name' => 'Fresh Apple', 'price' => 2.50, 'desc' => 'Red and juicy apples.', 'image' => 'apple.jpg'],
                ['name' => 'Organic Banana', 'price' => 1.80, 'desc' => 'Sweet bananas full of energy.', 'image' => 'banana.jpg'],
                ['name' => 'Juicy Orange', 'price' => 3.00, 'desc' => 'Citrusy and refreshing.', 'image' => 'orange.jpg'],
                ['name' => 'Strawberry Pack', 'price' => 4.00, 'desc' => 'Fresh strawberries.', 'image' => 'strawberry.jpg'],
                ['name' => 'Blueberries', 'price' => 5.50, 'desc' => 'Delicious blueberries.', 'image' => 'blueberries.jpg'],
                ['name' => 'Milk', 'price' => 2.00, 'desc' => 'Fresh milk from local farms.', 'image' => 'milk.jpg'],
                ['name' => 'Cheese', 'price' => 4.50, 'desc' => 'Creamy cheddar cheese.', 'image' => 'cheese.jpg'],
                ['name' => 'Bread Loaf', 'price' => 2.20, 'desc' => 'Soft and fresh bread.', 'image' => 'bread.jpg'],
                ['name' => 'Cake', 'price' => 6.00, 'desc' => 'Delicious chocolate cake.', 'image' => 'cake.jpg'],
                ['name' => 'Orange Juice', 'price' => 3.50, 'desc' => 'Freshly squeezed orange juice.', 'image' => 'orange_juice.jpg'],
                ['name' => 'Apple Juice', 'price' => 3.50, 'desc' => 'Refreshing apple juice.', 'image' => 'apple_juice.jpg'],
                ['name' => 'Yogurt', 'price' => 2.80, 'desc' => 'Creamy yogurt cups.', 'image' => 'yogurt.jpg'],
                ['name' => 'Carrots', 'price' => 1.50, 'desc' => 'Organic carrots.', 'image' => 'carrots.jpg'],
                ['name' => 'Tomatoes', 'price' => 1.70, 'desc' => 'Fresh tomatoes.', 'image' => 'tomatoes.jpg'],
                ['name' => 'Spinach', 'price' => 2.00, 'desc' => 'Green spinach leaves.', 'image' => 'spinach.jpg'],
                ['name' => 'Butter', 'price' => 3.00, 'desc' => 'Creamy butter.', 'image' => 'butter.jpg'],
                ['name' => 'Coffee', 'price' => 5.00, 'desc' => 'Ground coffee beans.', 'image' => 'coffee.jpg'],
                ['name' => 'Tea', 'price' => 4.00, 'desc' => 'Refreshing herbal tea.', 'image' => 'tea.jpg'],
                ['name' => 'Muffin', 'price' => 2.50, 'desc' => 'Chocolate muffin.', 'image' => 'muffin.jpg'],
                ['name' => 'Cereal', 'price' => 3.20, 'desc' => 'Healthy breakfast cereal.', 'image' => 'cereal.jpg']
            ];
            ?>
            <?php foreach ($products as $product): ?>
                <div class="product-card">
                    <img src="/img/shop/<?= $product['image'] ?>" alt="<?= h($product['name']) ?>">
                    <h3><?= h($product['name']) ?></h3>
                    <p class="price">$<?= h($product['price']) ?></p>
                    <p class="desc"><?= h($product['desc']) ?></p>
                    <button class="add-to-cart">🛒 Add to Cart</button>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>

<?= $this->Html->script('shop') ?>
