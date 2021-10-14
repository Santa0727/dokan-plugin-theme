<?php

use WeDevs\Dokan\Vendor\Vendor;

function distance($lat1, $lon1, $lat2, $lon2)
{
    if (($lat1 == $lat2) && ($lon1 == $lon2)) {
        return 0;
    } else {
        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;

        return ($miles * 1.609344);
    }
}

function get_products_by_vendor($vendor_id, $max = 4)
{
    $products = get_posts(['post_type' => 'product', 'posts_per_page' => 1000]);

    $result = [];
    foreach ($products as $product) {
        if (count($result) >= $max) break;
        if ($vendor_id != $product->post_author) continue;
        $item = wc_get_product($product->ID);
        $item->image_url = wp_get_attachment_url($product->ID);
        array_push($result, $item);
    }
    return $result;
}

function get_filtered_stores()
{
    $distance = floatval($_GET['distance']);
    $name = $_GET['dokan_seller_search'];
    $latitude = $_GET['latitude'];
    $longitude = $_GET['longitude'];
    $dokan_sellers = dokan_get_sellers()['users'];

    $vendors = [];
    $users = get_users();
    foreach ($users as $user) {
        if (!in_array("seller", $user->roles)) continue;
        $vendor = (new Vendor($user->ID))->to_array();

        if (!empty($name) && strpos($vendor["store_name"], $name) === false) continue;
        if (isset($_GET['distance']) && $latitude && $longitude) {
            $locations = explode(',', $vendor['location']);
            if (count($locations) == 2) {
                $dist = distance($latitude, $longitude, $locations[0], $locations[1]);
                if ($dist > $distance) continue;
                $vendor['distance'] = round($dist, 2);
            }
        }
        $products = get_products_by_vendor($user->ID);
        if (count($products) <= 0) continue;
        $vendor['products'] = $products;
        $vendor['store_info'] = dokan_get_store_info($user->ID);
        foreach ($dokan_sellers as $seller) if ($seller->ID == $user->ID) break;
        $vendor['user'] = $seller;

        array_push($vendors, $vendor);
    }
    return $vendors;
}

?>

<div id="dokan-seller-listing-wrap" class="grid-view">
    <div class="seller-listing-content">
        <?php
        $stores = get_filtered_stores();
        uasort($stores, function ($a, $b) {
            if (isset($a["distance"]) && isset($b["distance"])) {
                if ($a["distance"] <  $b["distance"]) return -1;
                return 1;
            }
            return 0;
        });
        foreach ($stores as $store) { ?>
            <div class="seller-items">
                <h2>
                    <a href="<?php echo $store['shop_url']; ?>">
                        <?php echo ($store['store_name'] . " " . ($store['distance'] ? $store['distance'] . "km" :  '')) . ((" - ") . ($_GET['address'] ?? '')); ?>
                    </a>
                </h2>
                <ul class="products columns-4" style="display: inline-flex;">
                    <?php foreach ($store['products'] as $product) { ?>
                        <li class="product type-product post-<?php echo $product->id; ?> status-publish first instock product_cat-kakut has-post-thumbnail taxable shipping-taxable purchasable product-type-simple">
                            <a href="<?php echo ($product->get_permalink()); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                <?php echo $product->get_image('300px', '300px'); ?>
                                <h2 class="woocommerce-loop-product__title"><?php echo $product->get_title(); ?></h2>
                            </a>
                            <span class="item-bar dokan-clearfix">
                                <?php echo $product->get_price_html(); ?>
                                <span class="item-button">
                                    <a href="?add-to-cart=<?php echo $product->id; ?>" rel="nofollow" data-quantity="1" data-product_id="<?php echo $product->id; ?>" data-product_sku="" class="cat btn add_to_cart_button button product_type_simple add_to_cart_button ajax_add_to_cart" title="<?php echo $product->title; ?>"><i class="fa fa-shopping-cart"></i></a>
                                </span>
                            </span>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <?php do_action('dokan_seller_listing_footer_content', $store['user'], $store['store_info']); ?>
        <?php } ?>
    </div>
</div>