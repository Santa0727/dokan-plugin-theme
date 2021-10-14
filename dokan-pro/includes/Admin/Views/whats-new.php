<?php
$changelog = array(
    array(
        'version'  => 'Version 3.3.9',
        'released' => '2021-10-13',
        'changes'  => array(
            array(
                'title'       => '[Auction] Added auction activity feature for vendors',
                'type'        => 'Feat',
                'description' => 'An exciting feature added to the module is an auction activity feature for vendors, which lets them see all the bid items and price. This was an option previously only available to admins',
            ),
            array(
                'title'       => 'Added two new filter hooks named dokan_pro_scripts and dokan_load_settings_content_shipping so that some feature can be extended via theme authors',
                'type'        => 'New',
                'description' => '',
            ),
            array(
                'title'       => '[PayPal Marketplace] Added 60+ new country supports for Dokan PayPal Marketplace module.',
                'type'        => 'Improvement',
                'description' => '<a href="https://developer.paypal.com/docs/platforms/seller-onboarding/">Here</a> you’ll be able to find all the supported countries',
            ),
            array(
                'title'       => '[Geolocation] Detect user geo location automatically',
                'type'        => 'Improvement',
                'description' => 'Under Product/Store search page, user’s will be automatically asked for their current location and After the user approves the permission request, user geolocation will be automatically filled under the location field. Previously, users needed to manually click the location icon to get the current location.',
            ),
            array(
                'title'       => '[PayPal Marketplace] Vendors, previously, could not purchase any product if they are subscribed to a vendor subscription plan, which has now been fixed',
                'type'        => 'Fix',
                'description' => '',
            ),
            array(
                'title'       => '[Delivery Time] Vendor dashboard’s Store Settings form fields were not saving if delivery time module was enabled',
                'type'        => 'Fix',
                'description' => '',
            ),
            array(
                'title'       => '[Geolocation] Fixed search filter URL redirect issue.',
                'type'        => 'Fix',
                'description' => 'Previously, when a user submitted Dokan geolocation filter form, it was redirecting in the current page URL instead of the Store listing page.',
            ),
            array(
                'title'       => '[Product Inquiry] Vendor Contact form didn\'t contain “Reply To” email address',
                'type'        => 'Fix',
                'description' => 'Vendor Contact form didn\'t contain “Reply To” email address when a customer would contact a vendor via the product inquiry form. Issue has been resolved now.',
            ),
        ),
    ),
    array(
        'version'  => 'Version 3.3.8',
        'released' => '2021-10-04',
        'changes'  => array(
            array(
                'title'       => '[WPML] Multiple issue fixed in WPML integration with Dokan',
                'type'        => 'Fix',
                'description' => '',
            ),
        ),
    ),
    array(
        'version'  => 'Version 3.3.7',
        'released' => '2021-09-30',
        'changes'  => array(
            array(
                'title'       => '[Delivery Time] Store Location Pickup',
                'type'        => 'Feat',
                'description' => 'Customers no longer have to wait for their product\'s delivery but rather collect it at their preferable time. They can choose from vendor-provided single or multiple pickup locations during check out and grab their purchases conveniently.',
            ),
            array(
                'title'       => '[PayPal Marketplace] Vendor Subscription support added for Dokan PayPal Marketplace Payment Gateway',
                'type'        => 'Feat',
                'description' => '',
            ),array(
                'title'       => '[Vendor Subscription] filter subscription by package and by stores',
                'type'        => 'New',
                'description' => '',
            ),
            array(
                'title'       => '[Vendor Subscription] Sort subscription by start date',
                'type'        => 'New',
                'description' => '',
            ),
            array(
                'title'       => '[Vendor Subscription] Subscription Relation Type column added under WooCommerce order table',
                'type'        => 'New',
                'description' => 'support added only for Dokan PayPal Marketplace module',
            ),
            array(
                'title'       => '[Vendor Subscription] Subscription Related Orders meta box added under order details page',
                'type'        => 'New',
                'description' => 'support added only for Dokan PayPal Marketplace module',
            ),
            array(
                'title'       => '[Vendor Staff] Added export order permission for staffs, vendors and admins',
                'type'        => 'New',
                'description' => '',
            ),
            array(
                'title'       => 'Automatically process api refund for orders placed using non dokan payment gateways',
                'type'        => 'Improvement',
                'description' => 'Added a new settings under Dokan Selling Options',
            ),
            array(
                'title'       => '[Vendor Analytics] User readable Analytics chart data title added',
                'type'        => 'Improvement',
                'description' => '',
            ),
            array(
                'title'       => '[Import/Export] sample file download link added in Vendor product CSV import form',
                'type'        => 'Improvement',
                'description' => '',
            ),
            array(
                'title'       => 'Center map on location search in store listing geolocation',
                'type'        => 'Improvement',
                'description' => '',
            ),
            array(
                'title'       => 'Fixed js deprecated warnings on various pages',
                'type'        => 'Fix',
                'description' => '',
            ),
            array(
                'title'       => '[Elementor] multiple deprecated warning fixed',
                'type'        => 'Fix',
                'description' => '',
            ),
            array(
                'title'       => 'Refund amount and tax over refund check',
                'type'        => 'Fix',
                'description' => '',
            ),
            array(
                'title'       => 'Dokan Pro interference removed from WooCommerce Product Import',
                'type'        => 'Fix',
                'description' => '',
            ),
            array(
                'title'       => '[RMA] Fixed multiple warnings.',
                'type'        => 'Fix',
                'description' => '',
            ),
            array(
                'title'       => '[RMA] Only display correct/selected refund reason in new RMA request page.',
                'type'        => 'Fix',
                'description' => '',
            ),
            array(
                'title'       => '[RMA] RMA not working for variable product',
                'type'        => 'Fix',
                'description' => '',
            ),
            array(
                'title'       => 'Fixed product attribute value sanitization issue',
                'type'        => 'Fix',
                'description' => '',
            ),
            array(
                'title'       => '[Vendor Staff] Remove admin login url from vendor staff email',
                'type'        => 'Fix',
                'description' => '',
            ),
            array(
                'title'       => 'Hide dokan shipping setting after WPML activation',
                'type'        => 'Fix',
                'description' => '',
            ),
            array(
                'title'       => 'SKU not importing when ID field is blank',
                'type'        => 'Fix',
                'description' => '',
            ),
            array(
                'title'       => 'Export all button disabled when there is no data in vendor',
                'type'        => 'Fix',
                'description' => '',
            ),
            array(
                'title'       => 'Hide product addon settings when creating a grouped product',
                'type'        => 'Fix',
                'description' => '',
            ),
            array(
                'title'       => 'Post object and type check when change vendor support topic status',
                'type'        => 'Fix',
                'description' => '',
            ),
        ),
    ),
    array(
        'version'  => 'Version 3.3.6',
        'released' => '2021-08-31',
        'changes'  => array(
            array(
                'title'       => '[Booking] Added Manual Booking Support for Vendors',
                'type'        => 'New',
                'description' => '[Booking] Added manual booking support feature for vendors, now vendors can manual booking from their dashboard.',
            ),
            array(
                'title'       => 'Order Note for Suborder and Main Order Added When an Refund Request Canceled.',
                'type'        => 'New',
                'description' => 'Order note for Suborder and main order added when an refund request gets canceled.',
            ),
            array(
                'title'       => 'Added Net Sale Section Under Vendor Dashboard',
                'type'        => 'New',
                'description' => 'Added Net Sale section under vendor dashboard where Total order amount was deducted from the refunded amount.',
            ),
            array(
                'title'       => 'Dokan a New Button to Get Admin Setup Wizard',
                'type'        => 'New',
                'description' => 'Dokan a new button to get admin setup wizard on tools page',
            ),
            array(
                'title'       => 'Added Apple Signin Feature Under Dokan Social Login',
                'type'        => 'New',
                'description' => 'Added Apple Signin feature under Dokan Social Login ( https://wedevs.com/docs/dokan/settings/dokan-social-login/configuring-apple/ )',
            ),
            array(
                'title'       => 'Added Refund Request Canceled Notification Email',
                'type'        => 'New',
                'description' => 'Added refund request canceled notification email template for vendors.',
            ),
            array(
                'title'       => 'Implemented Sorting on Admin Refund Page',
                'type'        => 'New',
                'description' => 'Implemented sorting feature for admin Refund page.',
            ),
            array(
                'title'       => '[Booking] Fixed Dokan Booking Details Shows Wrong Order Information',
                'type'        => 'Fix',
                'description' => '[Booking] fixed Dokan booking details shows wrong order information after admin creates manual booking from WordPress admin panel.',
            ),
            array(
                'title'       => '[Elementor] Fixed Deprecated Warnings While Customising Store with Elementor',
                'type'        => 'Fix',
                'description' => '[Elementor] Fixed deprecated warning notice while customising store page with Elementor module.',
            ),
            array(
                'title'       => '[Elementor] Fixed WhatsApp Not Get Store Name and URL in Elementor',
                'type'        => 'Fix',
                'description' => '[Elementor] Fixed WhatsApp not get Store Name and URL in Elementor.',
            ),
            array(
                'title'       => 'Fixed Shipping Class Amount Adding with Other Shipping Class Amount',
                'type'        => 'Fix',
                'description' => 'Fixed Shipping class amount adding with other shipping class amount issue.',
            ),
            array(
                'title'       => 'Fixed Inconsistency on Sales Report for Refunded Order Due to Caching',
                'type'        => 'Fix',
                'description' => 'Fixed inconsistency on sales report for refunded order due to caching issue.',
            ),
            array(
                'title'       => '[Booking] Display Fatal Error After Deleting Booking Product',
                'type'        => 'Fix',
                'description' => '[Booking] Display fatal error, after deleting booking product which is associated with any customer.',
            ),
            array(
                'title'       => '[Wholesale] The Wholesale Price Digits Next to the Comma Removes While Saving by Admin',
                'type'        => 'Fix',
                'description' => '[Wholesale] The wholesale price digits next to the comma removes while saving variations from the admin screen.',
            ),
            array(
                'title'       => '[Vendor Subscription] Getting Error While Canceling the Vendor Subscription',
                'type'        => 'Fix',
                'description' => '[Vendor Subscription] Getting error while canceling the Vendor Subscription if subscription order gets deleted.',
            ),
            array(
                'title'       => '[Stripe] Fixed Last Used Card Number was Always Stored on Stripe Non 3ds Mode',
                'type'        => 'Fix',
                'description' => '[Stripe] Fixed last used card number was always stored on stripe non 3ds mode for non-subscription products.',
            ),
            array(
                'title'       => '[Product Addons] Vendor Addon Validation Applies to all Vendors Products',
                'type'        => 'Fix',
                'description' => '[Product Addons] vendor addon validation applies to all vendors products if add to cart url was accessing from browser address bar.',
            ),
            array(
                'title'       => '[Vendor Verification] Fixed WordPress Site Health Shows Critical Issues on the Vendor Verification',
                'type'        => 'Fix',
                'description' => '[Vendor Verification] Fixed WordPress site health shows critical issues when the vendor verification module is enabled (PHP Session).',
            ),
            array(
                'title'       => 'Fixed Social Login Style is Broken on the Checkout Page Login Form',
                'type'        => 'Fix',
                'description' => 'Fixed Social Login style is broken on the checkout page login form.',
            ),
            array(
                'title'       => 'Fixed Social API Logins has Session Deadlock Issues',
                'type'        => 'Fix',
                'description' => 'Fixed Social API Logins has session Deadlock issues by setting session time to 5 minutes',
            ),
            array(
                'title'       => 'Fixed Fatal Error While Changing Order Status',
                'type'        => 'Fix',
                'description' => 'Fixed fatal error while changing order status if product has been deleted.',
            ),
            array(
                'title'       => '[Product Subscription] Fixed Product Subscription Pagination on Vendor Dashboard',
                'type'        => 'Fix',
                'description' => '[Product Subscription] Fixed product subscription pagination problem under vendor dashboard.',
            ),
            array(
                'title'       => '[Vendor Subscription] Fixed Vendors Can Publish Their Pending Products',
                'type'        => 'Fix',
                'description' => '[Vendor Subscription] Fixed vendors can publish their products under review also.',
            ),
            array(
                'title'       => 'Admin Refund Page Search by Store Name was not Loading',
                'type'        => 'Fix',
                'description' => 'Admin Refund page search by store name was not loading refunded list items.',
            ),
        ),
    ),
    array(
        'version'  => 'Version 3.3.5',
        'released' => '2021-08-16',
        'changes'  => array(
            array(
                'title'       => 'Activating module(s) deactivating other active modules',
                'type'        => 'Fix',
                'description' => '',
            ),
        ),
    ),
    array(
        'version'  => 'Version 3.3.4',
        'released' => '2021-08-10',
        'changes'  => array(
            array(
                'title'       => 'Added New Store Support Email Templates.',
                'type'        => 'New',
                'description' => 'Added new Store Support email templates, now store support tickets email templates can overwride from theme folder.',
            ),
            array(
                'title'       => 'Coupons Automatic Apply for New Products Settings.',
                'type'        => 'New',
                'description' => 'Coupons automatic apply for new products settings on coupon create page in vendor dashboard area.',
            ),
            array(
                'title'       => 'Added translation support for text Back to add-on lists.',
                'type'        => 'New',
                'description' => 'Added translation support for text Back to add-on lists under html-global-admin-add.php file',
            ),
            array(
                'title'       => 'Vendor Subscription Pricing Table HTML Broken in German Translation.',
                'type'        => 'Fix',
                'description' => 'Vendor subscription pricing table html broken in german translation issue fixed',
            ),
            array(
                'title'       => 'Administrator User Role Added in User Search for ShipStation Auth Query.',
                'type'        => 'Fix',
                'description' => 'Administrator user role added in user search for ShipStation Auth query added',
            ),
            array(
                'title'       => 'Card is Not Saving While Purchasing WooCommerce Subscription Products [Dokan Stripe].',
                'type'        => 'Fix',
                'description' => '[Dokan Stripe] Card is not saving while purchasing WooCommerce Subscription products (3ds/non3ds)',
            ),
            array(
                'title'       => 'Fixed Pagination Error on Vendor Review Page',
                'type'        => 'Fix',
                'description' => 'Fixed pagination error on Vendor Review page',
            ),
            array(
                'title'       => 'Fixed Couple of Translation Issue for Booking Module.',
                'type'        => 'Fix',
                'description' => 'Fixed couple of translation issue for Booking module.',
            ),
            array(
                'title'       => 'Fixed Fatal error if admin downgrade dokan pro plan.',
                'type'        => 'Fix',
                'description' => 'Fixed Fatal error: Uncaught Error: Class DokanPro\Modules\Subscription\Helper not found.',
            ),
        ),
    ),
    array(
        'version'  => 'Version 3.3.3',
        'released' => '2021-08-02',
        'changes'  => array(
            array(
                'title'       => 'Pending request validation added in refund request validation.',
                'type'        => 'New',
                'description' => '',
            ),
            array(
                'title'       => 'Single validation error message will be displayed during refund request validation failure.',
                'type'        => 'New',
                'description' => '',
            ),
            array(
                'title'       => 'Dokan CSV exporter has rewritten to minimize product export errors.',
                'type'        => 'New',
                'description' => '',
            ),
            array(
                'title'       => 'Dokan CSV exporter has a new option called variation with variable product export.',
                'type'        => 'New',
                'description' => '',
            ),
            array(
                'title'       => 'Dokan CSV Importer has rewritten to minimize product import errors.',
                'type'        => 'New',
                'description' => '',
            ),
            array(
                'title'       => 'Dokan Import Export logic will not be imposed during product import export from WooCommerce product export importer.',
                'type'        => 'New',
                'description' => '',
            ),
            array(
                'title'       => 'Admin can add new vendor staff from wp-admin users add/edit page',
                'type'        => 'New',
                'description' => '',
            ),
            array(
                'title'       => '[Dokan Auction] Validation error feedback for auction product same SKU',
                'type'        => 'New',
                'description' => '',
            ),
            array(
                'title'       => '[PayPal Marketplace] added a settings fields to get bn code from admin',
                'type'        => 'New',
                'description' => '',
            ),
            array(
                'title'       => 'Pending request validation added in refund',
                'type'        => 'Improvement',
                'description' => '',
            ),
            array(
                'title'       => '[Vendor Review] Review date time display according to admin selected date time formato',
                'type'        => 'Improvement',
                'description' => '',
            ),
            array(
                'title'       => '[Wirecard] Dokan Wirecard module compatibility with WordPress version 5.8',
                'type'        => 'Improvement',
                'description' => '',
            ),
            array(
                'title'       => '[Delivery Time] JS error fix for fresh installation vendor info',
                'type'        => 'Fix',
                'description' => '',
            ),
            array(
                'title'       => '[Wholesale] Product addon and RMA addon not working with wholesale product fixes',
                'type'        => 'Fix',
                'description' => '',
            ),
            array(
                'title'       => 'New subscription order is being created for profile save is resolved',
                'type'        => 'Fix',
                'description' => '',
            ),
        ),
    ),
    array(
        'version'  => 'Version 3.3.2',
        'released' => '2021-07-15',
        'changes'  => array(
            array(
                'title'       => '[PayPal Marketplace]fixed PayPal Marketplace refund conflict with other payment gateway’s refund',
                'type'        => 'Fix',
                'description' => '',
            ),
            array(
                'title'       => '[Stripe] fixed deduct gateway fee from vendor balance table after a refund is approved via Stripe 3ds and non-3ds',
                'type'        => 'Fix',
                'description' => '',
            ),
            array(
                'title'       => '[Stripe] fixed Stripe non3ds refund is not working if admin commission is set to zero',
                'type'        => 'Fix',
                'description' => '',
            ),
            array(
                'title'       => 'fixed Order on Cash on delivery deducting money from Vendor balance while processing Refund',
                'type'        => 'Fix',
                'description' => '',
            ),
        ),
    ),
    array(
        'version'  => 'Version 3.3.1',
        'released' => '2021-07-12',
        'changes'  => array(
            array(
                'title'       => '[New Module] New Module Named EU Compliance Fields',
                'type'        => 'New Module',
                'description' => 'Added a new module named <strong>EU Compliance Fields</strong>. In this module, you\'l get Custom fields for vendors, Custom fields for customers, <strong>Germanized for WooCommerce</strong> plugin support for vendors and last but not least <strong>Individual PDF invoice numbers</strong> support for vendors.',
            ),
            array(
                'title'       => '[Vendor Subscription] Added Vendor Subscription Information Section',
                'type'        => 'New',
                'description' => 'Added  Vendor Subscription information section under single vendor edit page.',
            ),
            array(
                'title'       => '[Vendor Subscription] Hide Create and Add New Button if Only One Product Creation',
                'type'        => 'New',
                'description' => 'Hide Create and Add New button if only one product creation is allowed.',
            ),
            array(
                'title'       => '[Vendor Subscription] Create and Add New Product button redirect According to Subscription',
                'type'        => 'Fix',
                'description' => 'Fixed create and add new product button redirect according to subscription package allowed product',
            ),
            array(
                'title'       => '[Delivery Time] Fixed Theme Compatibility',
                'type'        => 'Fix',
                'description' => 'Fixed theme compatibility design issues on checkout page.',
            ),
            array(
                'title'       => 'Fixed Rewrite Rules Issues After Dokan Pro Plugin is Activated',
                'type'        => 'Fix',
                'description' => 'Fixed rewrite rules issues after Dokan Pro plugin is activated for Dokan Pro and all Modules',
            ),
            array(
                'title'       => '[Booking] Fixed Booking Calendar Styling Issue',
                'type'        => 'Fix',
                'description' => 'Fixed Booking calendar styling issue for all-day bookings',
            ),
            array(
                'title'       => '[Elementor] Fixed fatal Error on Elementor Store Social Profile',
                'type'        => 'Fix',
                'description' => 'Fixed fatal error on elementor StoreSocialProfile widget',
            ),
        ),
    ),
    array(
        'version'  => 'Version 3.3.0',
        'released' => '2021-07-01',
        'changes'  => array(
            array(
                'title'       => 'Introducing a new Payment Gateway Named Dokan PayPal Marketplace',
                'type'        => 'New Module',
                'description' => 'Added a new Payment Gateway named <strong>Dokan PayPal Marketplace</strong>. This module will enable PayPal Commerce Platform (PCP) features including split & Multi-seller payments, multiple disbursement method and <a href="https://wedevs.com/dokan/modules/dokan-paypal-marketplace">more</a>. This new module will be available only on Dokan Pro <strong>Business</strong> and <strong>Enterprise</strong> Plans due to a API restriction from PayPal. We will include this module with all Dokan Pro plans in near future.',
            ),
            array(
                'title'       => 'Introducing a new module named Delivery Time',
                'type'        => 'New Module',
                'description' => 'Added a new module named <strong>Delivery Time: Let customers choose their delivery date & time</strong> with all Dokan Pro Plans. Check out <a href="">module documentation</a> for more details.',
            ),
            array(
                'title'       => '[Elementor] Added product filtering options for Single Store Page',
                'type'        => 'New',
                'description' => 'If you are using Dokan Elementor module to design your single store page, now you will be able to add product filtering options in your single store page.',
            ),
            array(
                'title'       => '[Elementor] Added SPMV support for Single Store Page',
                'type'        => 'New',
                'description' => 'A new Elementor widget to display SPMV support in Single Store Page',
            ),
            array(
                'title'       => '[Elementor] Added Social widget support for Single Store Page',
                'type'        => 'New',
                'description' => 'A new Elementor widget to display Social details in Single Store Page',
            ),
            array(
                'title'       => '[Elementor] Added RMA module support for Singe Store Page Elementor widget',
                'type'        => 'New',
                'description' => 'A new Elementor widget to display RMA related fields on single store page',
            ),
            array(
                'title'       => 'Added a new settings to enable/disable Product shipping tab and optimised query for vendor available shipping listing',
                'type'        => 'New',
                'description' => '',
            ),
            array(
                'title'       => 'Added a Register button on login popup form',
                'type'        => 'New',
                'description' => '',
            ),
            array(
                'title'       => 'Removed existing role from an user while user become a vendor',
                'type'        => 'Fix',
                'description' => '',
            ),
            array(
                'title'       => 'Set admin default map address as Geolocation data when a new seller is registered',
                'type'        => 'Fix',
                'description' => '',
            ),
            array(
                'title'       => 'Shipping tax status from vendor shipping methods have no effect',
                'type'        => 'Fix',
                'description' => '',
            ),
            array(
                'title'       => 'Left/Right Map position redirect to the another page issue fixed',
                'type'        => 'Fix',
                'description' => '',
            ),
            array(
                'title'       => 'Subscription pack list broken when use language other than English',
                'type'        => 'Fix',
                'description' => '',
            ),
            array(
                'title'       => 'Unusual number of emails to the vendor staffs on a new order',
                'type'        => 'Fix',
                'description' => '',
            ),
            array(
                'title'       => 'Disabled shipping zone on single product tab if no shipping method is found',
                'type'        => 'Fix',
                'description' => '',
            ),
            array(
                'title'       => 'Become a vendor button not showing when user role is other than customer',
                'type'        => 'Fix',
                'description' => '',
            ),
            array(
                'title'       => 'Wrong direction for shipping status email templates',
                'type'        => 'Fix',
                'description' => '',
            ),
            array(
                'title'       => 'Disabled shop query when geo map turn off from dokan admin settings',
                'type'        => 'Fix',
                'description' => '',
            ),
            array(
                'title'       => '[SPMV] Sell this item not showing when vendors subscription module is enabled, but the subscription is disabled',
                'type'        => 'Fix',
                'description' => '',
            ),
            array(
                'title'       => '[Booking] Cancellation time gets changed from Weeks to Months after saving a Cancellable Booking Product',
                'type'        => 'Fix',
                'description' => '',
            ),
            array(
                'title'       => 'Return Request - Conversations issue for special characters',
                'type'        => 'Fix',
                'description' => '',
            ),
            array(
                'title'       => 'Store dropdown vendor name placeholder changed to Store Name in admin reports page',
                'type'        => 'Fix',
                'description' => '',
            ),
            array(
                'title'       => 'Login Popup css fixed for guest user',
                'type'        => 'Fix',
                'description' => '',
            ),
            array(
                'title'       => 'Email template override directory location corrected',
                'type'        => 'Fix',
                'description' => '',
            ),
            array(
                'title'       => 'RMA policy content format now saves correctly',
                'type'        => 'Fix',
                'description' => '',
            ),
        ),
    ),
    array(
        'version'  => 'Version 3.2.5',
        'released' => '2021-05-11',
        'changes'  => array(
            array(
                'title'       => 'Products not showing on vendor dashboard product listing page',
                'type'        => 'Fix',
                'description' => 'Fatal error on vendor dashboard product listing page when vacation module is disabled or doesn\'t installed.',
            ),
        ),
    ),
    array(
        'version'  => 'Version 3.2.4',
        'released' => '2021-05-08',
        'changes'  => array(
            array(
                'title'       => 'Shipping Status for Vendor Orders',
                'type'        => 'New',
                'description' => 'Shipping Status for vendor orders. Now vendors can manage thir shipments for customers.',
            ),
            array(
                'title'       => 'Attach Source to Customer Object First so That Payment Get Processed',
                'type'        => 'Improvement',
                'description' => 'Attach source to customer object first so that payment get processed successfully and then remove source if necessary: stripe non3ds.',
            ),
            array(
                'title'       => 'Live Search with Suggestion Set Default',
                'type'        => 'Improvement',
                'description' => 'Live search with suggestion set default, also make on dokan live search widgets.',
            ),
            array(
                'title'       => 'Vendor Variation Product Import Error',
                'type'        => 'Fix',
                'description' => 'Vendor variation product import error fixed.',
            ),
            array(
                'title'       => 'Store Category Not Saving from Setup Widget',
                'type'        => 'Fix',
                'description' => 'Store category not saving from setup widget issue fixed.',
            ),
            array(
                'title'       => 'Updating Product Details Quick Edit Resets Shipping Class',
                'type'        => 'Fix',
                'description' => 'Updating product details using Quick Edit resets the Shipping Class fixed.',
            ),
            array(
                'title'       => 'Does Not Reflect Today\'s Report in Sales by Day',
                'type'        => 'Fix',
                'description' => 'Does not reflect today\'s report in sales by day or overview.',
            ),
            array(
                'title'       => 'Product Doesn\'t Go Offline While Activating Vacation',
                'type'        => 'Fix',
                'description' => 'Product doesn\'t go offline while activating vacation mode issue fixed.',
            ),
            array(
                'title'       => 'All Log Table Filter in Translation',
                'type'        => 'Fix',
                'description' => 'All log table filter in translation for admin reports.',
            ),
            array(
                'title'       => 'Vendor Can Create Tag with Product Import',
                'type'        => 'Fix',
                'description' => 'Vendor can create tag in product import support.',
            ),
            array(
                'title'       => 'Product Live Search Not Work With Android',
                'type'        => 'Fix',
                'description' => 'Android product live search issues fixed.',
            ),
            array(
                'title'       => 'Vendor Store Page Title Replace with Store SEO Title',
                'type'        => 'Fix',
                'description' => 'Vendor store page title replace with store seo title.',
            ),
            array(
                'title'       => 'Store Follow Email Triggering Though Email is Disabled in WC Email',
                'type'        => 'Fix',
                'description' => 'Store follow email triggering though email is disabled in WC email.',
            ),
            array(
                'title'       => 'Update Store Progress When Stripe Connected',
                'type'        => 'Fix',
                'description' => 'Update store progress bar when stripe connected by vendor.',
            ),
            array(
                'title'       => 'Refund Amount and Tax Over Refund Check',
                'type'        => 'Fix',
                'description' => 'Refund amount and tax over refund check.',
            ),
            array(
                'title'       => 'Cannot Charge a Customer That Has no Active Card Error',
                'type'        => 'Fix',
                'description' => 'Cannot charge a customer that has no active card - error if trying to process payment from guest user with non-connected vendors.',
            ),
            array(
                'title'       => 'Set Newly Added Card as Default Payment Source',
                'type'        => 'Fix',
                'description' => 'Set newly added card as default payment source while updating a vendor subscription.',
            ),
            array(
                'title'       => 'Don\'t Save Card If Save Card Checkbox is Not Selected',
                'type'        => 'Fix',
                'description' => 'Don\'t save card if save card checkbox is not selected - Stripe 3DS.',
            ),
        ),
    ),
    array(
        'version'  => 'Version 3.2.3',
        'released' => '2021-04-30',
        'changes'  => array(
            array(
                'title'       => 'Digital and Physical Product Types Vendors',
                'type'        => 'New',
                'description' => 'Digital and Physical product types selling option for vendors.',
            ),
            array(
                'title'       => 'Verification Clickable Link Added Staff Notify Email',
                'type'        => 'Improvement',
                'description' => 'Verification clickable link added on new staff notify email body.',
            ),
            array(
                'title'       => 'IP and Agent Info Removed from Product Enquiry Email',
                'type'        => 'Improvement',
                'description' => 'IP and agent info removed from product enquiry email, which send by customer from single product page.',
            ),
            array(
                'title'       => 'Store Support for Customer Order Details Page',
                'type'        => 'Improvement',
                'description' => 'Store support for WooCommerce customer my account order details page.',
            ),
            array(
                'title'       => 'Product Shipping Tab Added Continent Countries and States Data',
                'type'        => 'Improvement',
                'description' => 'Product shipping tab added continent countries and states data.',
            ),
            array(
                'title'       => 'The Per Class calculation Type Option is Selected Flat Rate Shipping',
                'type'        => 'Improvement',
                'description' => 'The Per Class calculation type option is selected by default for flat rate shipping.',
            ),
            array(
                'title'       => 'Add New Filter Hook on Admin Vendor Report Order Status Filters',
                'type'        => 'Improvement',
                'description' => 'Add new filter hook on admin vendor report order status filters options.',
            ),
            array(
                'title'       => 'Rearranged Stripe API Credentials Fields on Stripe Connect Payment',
                'type'        => 'Improvement',
                'description' => 'Rearranged Stripe API Credentials Fields on Stripe Connect Payment Gateway Setting page.',
            ),
            array(
                'title'       => 'Vendor Category Box Hide When Outside Click',
                'type'        => 'Fix',
                'description' => 'Vendor category box hide when outside click on store listing page search filter area.',
            ),
            array(
                'title'       => 'Translation Issue Fixed on Store Support Modal',
                'type'        => 'Fix',
                'description' => 'Translation issue fixed on store support modal.',
            ),
            array(
                'title'       => 'Vendor Product Quick Edit Product Status Not Changing Resolved',
                'type'        => 'Fix',
                'description' => 'Vendor product quick edit product status not changing issue fixed.',
            ),
            array(
                'title'       => 'RMA Script Loading Issue Fixed',
                'type'        => 'Fix',
                'description' => 'RMA script loading issue on vendor product edit page.',
            ),
            array(
                'title'       => 'Variation Product Not Working with RMA',
                'type'        => 'Fix',
                'description' => 'Variation product not working with RMA issue fixed.',
            ),
            array(
                'title'       => 'Customer is Seeing the Default Refund Reasons Instead of the Selected Reasons [RMA]',
                'type'        => 'Fix',
                'description' => 'RMA: Customer is seeing the default Refund Reasons instead of the overridden refund reasons set in the edit product form.',
            ),
            array(
                'title'       => 'Store Support for Product Option Fully Disable When Disabled it from Admin',
                'type'        => 'Fix',
                'description' => 'Vendor setting page store support for product option fully disable when disabled it from admin.',
            ),
            array(
                'title'       => 'Wrong Instruction for the Map Zoom Level Dokan Admin Settings',
                'type'        => 'Fix',
                'description' => 'Wrong instruction for the map zoom level in the geolocation settings fixed now.',
            ),
            array(
                'title'       => 'Cannot Charge a Customer That has no Active Card, While Checking Out as Guest [Stripe]',
                'type'        => 'Fix',
                'description' => '[Stripe] Error: Cannot charge a customer that has no active card, while checking out as guest.',
            ),
            array(
                'title'       => 'Fix the dokan-hide Class Placement on the Store Settings',
                'type'        => 'Fix',
                'description' => 'Fix the dokan-hide class placement on the store settings.',
            ),
            array(
                'title'       => 'Germanized for WooCommerce and Email Verification conflict',
                'type'        => 'Fix',
                'description' => 'Germanized for WooCommerce and Email Verification conflict issue fixed.',
            ),
            array(
                'title'       => 'User Subscription Pagination Query',
                'type'        => 'Fix',
                'description' => 'User subscription pagination query issue fixed.',
            ),
            array(
                'title'       => 'Generate Shortcode Button Error',
                'type'        => 'Fix',
                'description' => 'Generate Shortcode Button doing_it_wrong error fixed now.',
            ),
            array(
                'title'       => 'Product Import Updating Another Vendor Product',
                'type'        => 'Fix',
                'description' => 'Product import updating another vendor product issue fixed now.',
            ),
        ),
    ),
    array(
        'version'  => 'Version 3.2.2',
        'released' => '2021-03-31',
        'changes'  => array(
            array(
                'title'       => 'Added 3DS Auth Flow for Changing Payment Method [Stripe]',
                'type'        => 'Improvement',
                'description' => 'Added 3DS auth flow for changing payment method from My Account -> Payment Methods page',
            ),
            array(
                'title'       => 'Added Change Payment Method for Subscriptions from My Account [Stripe]',
                'type'        => 'Improvement',
                'description' => 'Added Change payment method for subscriptions from My Account -> Subscriptions for Stripe 3ds mode.',
            ),
            array(
                'title'       => 'Added Failed Order Processing Feature [Stripe]',
                'type'        => 'Improvement',
                'description' => 'Added failed order processing feature for both Stripe 3ds and non3ds payment method.',
            ),
            array(
                'title'       => 'Added Metadata for Stripe Transactions for 3ds Mode [Stripe]',
                'type'        => 'Improvement',
                'description' => 'Added metadata for stripe transactions for 3ds mode, this will help track transfers made on vendors account and the vendors will also be able to track orders made on their account..',
            ),
            array(
                'title'       => 'Added Support for Renewing Subscription Via Modal [Stripe]',
                'type'        => 'Improvement',
                'description' => 'Added support for renewing subscription via modal for stripe 3ds mode.',
            ),
            array(
                'title'       => 'Implemented Automatic Refund for Stripe 3ds Mode [Stripe]',
                'type'        => 'Improvement',
                'description' => 'Implemented automatic refund for stripe 3ds mode (refund will be processed from admin stripe account, then the transferred amount from vendor account will be automatically reversed to admin account).',
            ),
            array(
                'title'       => 'Added Announcement Notice if Vendors Stripe Account is Not Connected [Stripe]',
                'type'        => 'Improvement',
                'description' => 'Added announcement notice if vendors stripe account is not connected with stripe (both 3ds and non-3ds). In 3ds mode, if vendor stripe currency is not similar to site currency they will also receive announcement notice. Added two new admin settings to control this behavior..',
            ),
            array(
                'title'       => 'New Action Hook Added - dokan_auction_before_general_options [Auction]',
                'type'        => 'Improvement',
                'description' => 'New action hook added - dokan_auction_before_general_options.',
            ),
            array(
                'title'       => 'Product Image Support Added for New Order Email Vendor Staff [Vendor Staff]',
                'type'        => 'Improvement',
                'description' => 'Product image support added for new order email vendor staff. Now can show the product image by using filter hooks which one support WooCommerce.',
            ),
            array(
                'title'       => 'Dokan Shipping Multiple Issues Fixed and Some Enhancements',
                'type'        => 'Improvement',
                'description' => 'Dokan shipping multiple issues fixed and some enhancements. Now delete vendor shipping data when main zone delete from admin area, if admin update any zone from admin then it will effect all vendor shipping methods, single product tab shipping info updated.',
            ),
            array(
                'title'       => 'Show Store Name Instead of Selected Vendors if Announcement Sent to a Single Vendor',
                'type'        => 'Improvement',
                'description' => 'Show store name instead of selected vendors if announcement sent to a single vendor in announcement listing page..',
            ),
            array(
                'title'       => 'Dokan Tools Page "Install Pages Button" Disabled',
                'type'        => 'Improvement',
                'description' => 'Dokan tools page "Install Pages Button" disabled after successful Installation of page',
            ),
            array(
                'title'       => 'Stock Unwanted Management Options Removed',
                'type'        => 'Improvement',
                'description' => 'Stock unwanted management options removed now.',
            ),
            array(
                'title'       => 'Fixes Non3ds Refund-related Issues Settings to Control This Behavior [Stripe]',
                'type'        => 'Fix',
                'description' => 'Fixes non3ds refund-related issues (refund doesn\'t work if a vendor is not connected with stripe.)settings to control this behavior [Stripe].',
            ),
            array(
                'title'       => 'Floating Point Error on Wirecard Integration [Wirecard]',
                'type'        => 'Fix',
                'description' => '[Wirecard] Floating point error on Wirecard integration.',
            ),
            array(
                'title'       => 'Dokan Seller XML File Returns Uncaught Error [Store SEO]',
                'type'        => 'Fix',
                'description' => '[Store SEO] dokan_sellers-sitemap.xml file returns uncaught error.',
            ),
            array(
                'title'       => 'Product Review List, Empty Bulk Action Error',
                'type'        => 'Fix',
                'description' => 'Product review list, empty bulk action error fixed now.',
            ),
            array(
                'title'       => 'Variable Subscription and Variable Product Conflict',
                'type'        => 'Fix',
                'description' => 'Variable subscription and variable product conflict issue fixed now.',
            ),
            array(
                'title'       => 'Sale Price is Not Working with the Variable Product.',
                'type'        => 'Fix',
                'description' => 'Sale Price: Sale price is not working with the variable product.',
            ),
            array(
                'title'       => 'Date Picker is Unavailable for Product Variations',
                'type'        => 'Fix',
                'description' => 'Products: Date Picker is unavailable for product variations.',
            ),
            array(
                'title'       => 'Store Email Sends an Email from the WordPress Email Instead of the Site Admin Email',
                'type'        => 'Fix',
                'description' => 'Store Email: The Store Email sends an email from the WordPress email instead of the site admin email.',
            ),
            array(
                'title'       => 'Booking Shows Order Number When the Booking Status is In Cart ',
                'type'        => 'Fix',
                'description' => 'Booking: Booking shows order number when the booking status is In Cart.',
            ),
            array(
                'title'       => 'Booking Resource Label Does not Display After Save',
                'type'        => 'Fix',
                'description' => 'Booking resource label does not display after save.',
            ),
            array(
                'title'       => 'Store Review Data Display and Pagination',
                'type'        => 'Fix',
                'description' => 'Store review data display and pagination.',
            ),
            array(
                'title'       => 'Loco Translate Strings Can Not be Translated',
                'type'        => 'Fix',
                'description' => 'Loco translate strings can not be translated issue fixed now.',
            ),
            array(
                'title'       => 'Featured Stores Elementor Widgets is Broken Issue Fixed',
                'type'        => 'Fix',
                'description' => 'Featured stores Elementor widget is broken issue fixed #1146.',
            ),
            array(
                'title'       => 'Reply to Custom Email Added on Product Inquiry Email',
                'type'        => 'Fix',
                'description' => 'Reply to custom email added on product inquiry email #1181.',
            ),
            array(
                'title'       => 'Store Support form Conflicting with Elementor',
                'type'        => 'Fix',
                'description' => 'Store support form conflicting with Elementor in the single store page.',
            ),
            array(
                'title'       => 'Fatal error on RMA Details Page Issue Fixed',
                'type'        => 'Fix',
                'description' => 'Fatal error on RMA details page when product somehow got deleted issue fixed.',
            ),
            array(
                'title'       => 'Pagination Not Working on Vendor Return Request Page',
                'type'        => 'Fix',
                'description' => 'Pagination not working on vendor return request page issue fixed.',
            ),
            array(
                'title'       => 'Store Link Added on RMA Request',
                'type'        => 'Fix',
                'description' => 'Store link added on RMA request page on store name.',
            ),
            array(
                'title'       => 'Vendor Search Filter form Widget Not Working Issue Fixed',
                'type'        => 'Fix',
                'description' => 'Vendor search filter form widget not working for vendor search issue fixed.',
            ),
            array(
                'title'       => 'Auto-zoom Set Minimum Zoom Label',
                'type'        => 'Fix',
                'description' => 'Auto-zoom set minimum zoom label check with admin option.',
            ),
            array(
                'title'       => 'The External Product Type Fields Show Permanently',
                'type'        => 'Fix',
                'description' => 'The external product type fields show permanently issue fixed now.',
            ),
            array(
                'title'       => 'Report Export and Filter Date Range in Different Language',
                'type'        => 'Fix',
                'description' => 'Report Export and filter date range in different language does not work fixed now.',
            ),
            array(
                'title'       => 'Germanized Plugin Support for Email Verification',
                'type'        => 'Fix',
                'description' => 'Germanized plugin support for email verification footer placement.',
            ),
        ),
    ),
    array(
        'version'  => 'Version 3.2.1',
        'released' => '2021-05-03',
        'changes'  => array(
            array(
                'title'       => 'External/Affiliate Product for Vendor [External/Affiliate Product]',
                'type'        => 'Improvement',
                'description' => 'External/Affiliate product support added for vendor',
            ),
            array(
                'title'       => 'Added Rest API Support for Follow Store [Follow Store]',
                'type'        => 'Improvement',
                'description' => 'Added rest api support for follow store module.',
            ),
            array(
                'title'       => 'Announcements 3 New Options Added for Vendors [Announcements]',
                'type'        => 'Improvement',
                'description' => 'Announcements 3 new options added enabled, disabled, featured sellers.',
            ),
            array(
                'title'       => 'Vendor Withdraw Individual Threshold Days Option Added [Store Withdraw]',
                'type'        => 'Improvement',
                'description' => 'Admin can set vendor individual threshold days from user edit page in admin area.',
            ),
            array(
                'title'       => 'Disable "Support Button" for Single Product Page [Store Support]',
                'type'        => 'Improvement',
                'description' => 'Disable "Support Button" for single product page in vendor settings page when Admin disable support from admin settings.',
            ),
            array(
                'title'       => 'Fixed PHP 8 Warnings',
                'type'        => 'Fix',
                'description' => 'Fixed some PHP 8 warnings.',
            ),
            array(
                'title'       => 'Vendor Report Date Filter Conflicts Issue Fixed',
                'type'        => 'Fix',
                'description' => 'Vendor report date filter conflicts with non english / local languages set as site language.',
            ),
            array(
                'title'       => 'Apply Product Lot Discount on Order',
                'type'        => 'Fix',
                'description' => 'Apply product lot discount on order issue fixed now.',
            ),
            array(
                'title'       => 'Typos in Edit Product Page and Subscription Page',
                'type'        => 'Fix',
                'description' => 'Typos in edit product page and subscription page fixed now.',
            ),
            array(
                'title'       => 'Whole Price is Not Stored as Decimal Issue Fixed',
                'type'        => 'Fix',
                'description' => 'Whole price is not stored as decimal when decimal separator is comma issue fixed now.',
            ),
            array(
                'title'       => 'Combine Commission Field is Missing on Setup Wizard',
                'type'        => 'Fix',
                'description' => 'Combine commission field is missing on setup wizard issue fixed now.',
            ),
            array(
                'title'       => 'Vendor Analytics Menu not Showing for Administrator',
                'type'        => 'Fix',
                'description' => 'Vendor analytics menu not showing for administrator dokandar issue fixed now.',
            ),
            array(
                'title'       => 'Turn Off Geolocation Autozoom for Product',
                'type'        => 'Fix',
                'description' => 'Turn off geolocation autozoom for single product page.',
            ),
            array(
                'title'       => 'Mapbox Zoom Icons Missing',
                'type'        => 'Fix',
                'description' => 'Mapbox zoom icons missing issue fixed now.',
            ),
            array(
                'title'       => 'Elementor Buttons Icon Missing',
                'type'        => 'Fix',
                'description' => 'Elementor buttons icon missing issue resolved.',
            ),
            array(
                'title'       => 'Error Showing in Store Support Ticket',
                'type'        => 'Fix',
                'description' => 'Error showing in store support ticket details if order remove somehow.',
            ),
            array(
                'title'       => 'Dokan Pages Duplicate Issue Fixed',
                'type'        => 'Fix',
                'description' => 'Dokan pages duplicate issue fixed when try to use tools from Dokan admin area.',
            ),
            array(
                'title'       => 'Parent SKU Not Saving on Variation Product',
                'type'        => 'Fix',
                'description' => 'Parent SKU not saving on variation product issue fixed now.',
            ),
            array(
                'title'       => 'Warning Showing Product Listing Page',
                'type'        => 'Fix',
                'description' => 'Warning showing product listing page when imported product on vendor dashboard area.',
            ),
            array(
                'title'       => 'Design Related Problem Fixed All Logs Report',
                'type'        => 'Fix',
                'description' => 'Design related problem in all logs issue report in Dokan admin area.',
            ),
            array(
                'title'       => 'Deprecated Gplus Cleanup',
                'type'        => 'Fix',
                'description' => 'Deprecated Gplus cleanup. Now Google Plus option totally removed from dokan.',
            ),
            array(
                'title'       => 'Booking Details Page Showing Index Error Warning',
                'type'        => 'Fix',
                'description' => 'Fixed an issue where booking details page showing index error warning.',
            ),
            array(
                'title'       => 'Booking SKU Not Saving',
                'type'        => 'Fix',
                'description' => 'Booking SKU not saving, hidden input problem fixed now.',
            ),
            array(
                'title'       => 'Some Filter Was Being Used as Action',
                'type'        => 'Fix',
                'description' => 'Some filter was being used as action, now resolved that issues.',
            ),
            array(
                'title'       => 'Product Discount Price is Not Updating Issue Fixed',
                'type'        => 'Fix',
                'description' => 'Product Discount price is not updating if vendor subscription module is active.',
            ),
            array(
                'title'       => 'Admin Dokandar Staff Module Access Issue',
                'type'        => 'Fix',
                'description' => 'Admin dokandar staff module access issue fixed now.',
            ),
            array(
                'title'       => 'Announcement Page Added and Pagination Issue Fixed',
                'type'        => 'Fix',
                'description' => 'Announcement page added for vendor and pagination issue fixed.',
            ),
        ),
    ),
    array(
        'version'  => 'Version 3.2.0',
        'released' => '2021-01-29',
        'changes'  => array(
            array(
                'title'       => 'Added WhatsApp Provider [Livechat]',
                'type'        => 'Improvement',
                'description' => 'Added WhatsApp provider for livechat [Livechat]',
            ),
            array(
                'title'       => 'Added Tawk.to Provider [Livechat] ',
                'type'        => 'Improvement',
                'description' => 'Added tawk.to provider for livechat [Livechat] ',
            ),
            array(
                'title'       => 'Added New Settings Where Admin Can Set Whether to Display the Map [Geolocation]',
                'type'        => 'Improvement',
                'description' => 'Added new settings where admin can set whether to display the map in shop or store listing page or both page.',
            ),
            array(
                'title'       => 'Added Store Support for Single Product [Store Support]',
                'type'        => 'Improvement',
                'description' => 'Added Store support form for single product page.',
            ),
            array(
                'title'       => 'Added Separate Email Subject and Body for Subscription Cancellation [Vendor Subscription]',
                'type'        => 'Improvement',
                'description' => 'Added separate email subject and body for subscription cancellation and alert emails.',
            ),
            array(
                'title'       => 'Added Dokan Upgrader to Move Existing Vendor Subscription [Vendor Subscription]',
                'type'        => 'Improvement',
                'description' => 'Added Dokan upgrader to move existing vendor subscription data to new keys.',
            ),
            array(
                'title'       => 'Update Billing Cycle Stops Fields [Vendor Subscription]',
                'type'        => 'Improvement',
                'description' => 'Update Billing Cycle Stops fields if Billing Cycle Type changes.',
            ),
            array(
                'title'       => 'Changed Product Pack Start Date and End Date Formate [Vendor Subscription]',
                'type'        => 'Improvement',
                'description' => 'Changed product_pack_startdate and product_pack_enddate value from date() to current_datetime(), this will fix timezone mismatch.',
            ),
            array(
                'title'       => 'Changed Some Meta Key in Subscription Data [Vendor Subscription]',
                'type'        => 'Improvement',
                'description' => 'Changed _subscription_period_interval, _subscription_period, _subscription_length into _dokan_subscription_period_interval, _dokan_subscription_period, _dokan_subscription_length. This was causing conflict with WooCommerce Subscription.',
            ),
            array(
                'title'       => 'Disable Email Verification If Subscription Module is Enabled [Vendor Subscription]',
                'type'        => 'Improvement',
                'description' => 'Disable email verification if subscription module is enabled in the registration form.',
            ),
            array(
                'title'       => 'All Metadata are Not Exporting [Import Export]',
                'type'        => 'Fix',
                'description' => 'All metadata are not exporting issue fixed.',
            ),
            array(
                'title'       => 'Dokan Auction Product Addons Are Not Saving [Auction]',
                'type'        => 'Fix',
                'description' => 'Dokan auction product addons are not saving issue fixed.',
            ),
            array(
                'title'       => 'Fixed Seller Can Clone Product Without a Subscription [SPMV]',
                'type'        => 'Fix',
                'description' => 'Fixed seller can clone product using sell this item without a subscription.',
            ),
            array(
                'title'       => 'Product Duplicate Button Based on Active Subscription [Vendor Subscription]',
                'type'        => 'Fix',
                'description' => 'Product duplicate button based on active subscription issue fixed.',
            ),
            array(
                'title'       => 'Booking Buffer Period Duration Label Translatable [Booking]',
                'type'        => 'Fix',
                'description' => 'Booking buffer period duration unit label is not translatable now fixed.',
            ),
            array(
                'title'       => 'Email Subscription Ending Soon Email is Never Sent [Vendor Subscription]',
                'type'        => 'Fix',
                'description' => 'Email Subscription Ending Soon email is never sent issue fixed.',
            ),
            array(
                'title'       => 'Recurring Payment is Not Canceling if Admin Assigns Non-recurring Subscription [Vendor Subscription]',
                'type'        => 'Fix',
                'description' => 'Recurring payment is not canceling if admin assigns non-recurring subscription from the admin dashboard.',
            ),
            array(
                'title'       => 'Subscription Purchased by PayPal was Canceled Immediately [Vendor Subscription]',
                'type'        => 'Fix',
                'description' => 'Subscription purchased by PayPal was canceled immediately if subscription pack is not recurring.',
            ),
            array(
                'title'       => 'Added Additional Fee if Commission Type is Combined for Non-dokan Payment [Vendor Subscription]',
                'type'        => 'Fix',
                'description' => 'Added additional fee if commission type is combined for non-dokan payment gateways issue fixed.',
            ),
            array(
                'title'       => 'Multiple Stripe Webhook Was Creating, Moved Webhook [Stripe]',
                'type'        => 'Fix',
                'description' => 'Multiple stripe webhook was creating, moved webhook creation code under activation/deactivation hooks, deactivate and active module to apply these changes.',
            ),
            array(
                'title'       => 'Fixed Fatal Error if the Source String is Empty if Users Try to Change Payment [Stripe]',
                'type'        => 'Fix',
                'description' => 'Fixed fatal error if the source string is empty if users try to change payment method from my account page.',
            ),
            array(
                'title'       => 'Fixed Fatal Error if the Order Value is Less Than or Equal to Zero for Stripe 3DS Mode [Stripe]',
                'type'        => 'Fix',
                'description' => 'Fixed fatal error if the order value is less than or equal to zero for Stripe 3DS mode, this was causing the whole payment to fail.',
            ),
            array(
                'title'       => 'Relist Feature is Unavailable on the Vendor Dashboard [Auction]',
                'type'        => 'Fix',
                'description' => 'Relist feature is unavailable on the vendor dashboard issue fixed.',
            ),
            array(
                'title'       => 'Vendors Can not Add & Save New Tags on Auction Type Products [Auction]',
                'type'        => 'Fix',
                'description' => 'Vendors can not add & save new tags on Auction type products issue fixed.',
            ),
            array(
                'title'       => 'Fixed Elementor Module Causing Issue with Support Ticket Mail [Elementor]',
                'type'        => 'Fix',
                'description' => 'Fixed Elementor module causing issue with support ticket mail issue fixed.',
            ),
            array(
                'title'       => 'Fixed Mapbox Issue with RTL Supported Language [Geolocation]',
                'type'        => 'Fix',
                'description' => 'Fixed Mapbox issue with RTL supported language.',
            ),
            array(
                'title'       => 'Fixed Geolocation Position Settings Left and Right [Geolocation]',
                'type'        => 'Fix',
                'description' => 'Fixed Geolocation position settings left and right area working proper.',
            ),
            array(
                'title'       => 'Geolocation Map Autozoom When Getting Long Distance [Geolocation]',
                'type'        => 'Fix',
                'description' => 'Geolocation map autozoom when getting long distance between multiples stores/products locations.',
            ),
            array(
                'title'       => 'Hide Export Button When no Product Found for That Author [Import Export]',
                'type'        => 'Fix',
                'description' => 'Hide export button when no product found for that author.',
            ),
            array(
                'title'       => 'Vendor Analytics Deprecated Warning [Vendor Analytics]',
                'type'        => 'Fix',
                'description' => 'Vendor analytics deprecated warning fixed now.',
            ),
            array(
                'title'       => 'Delete Recurring Subscription Key After a Subscription Has Been Deleted [Subscription]',
                'type'        => 'Fix',
                'description' => 'Delete recurring subscription key after a subscription has been deleted.',
            ),
            array(
                'title'       => 'Fixed Wrong Order Reference URL in Support Tickets [Store Support]',
                'type'        => 'Fix',
                'description' => 'Fixed wrong order reference URL in support tickets in WooCommerce my account and Dokan vendor dashboard area.',
            ),
            array(
                'title'       => 'Product Add pop-up Validation Error Message Style',
                'type'        => 'Fix',
                'description' => 'Product add pop-up validation error message style issue fixed.',
            ),
            array(
                'title'       => 'Fixed dokan_admin JS var Undefined Issue',
                'type'        => 'Fix',
                'description' => 'Fixed dokan_admin js var undefined issue at add/edit product page.',
            ),
            array(
                'title'       => 'Fixed Undefined ID Notice While Creating Products',
                'type'        => 'Fix',
                'description' => 'Fixed undefined ID notice while creating products from vendor dashboard.',
            ),
            array(
                'title'       => 'Downloadable Options Panel Not Showing',
                'type'        => 'Fix',
                'description' => 'Downloadable options panel not showing.',
            ),
            array(
                'title'       => 'Fixed Vendor Setting to Discount on Order Calculation Error',
                'type'        => 'Fix',
                'description' => 'Fixed Vendor Setting to discount on order calculation error fixed now.',
            ),
            array(
                'title'       => 'Fixed WPML Conflict with Menu and Widget Page',
                'type'        => 'Fix',
                'description' => 'Fixed WPML conflict with menu and widget page when users try to switch between language.',
            ),
        ),
    ),
    array(
        'version'  => 'Version 3.1.4',
        'released' => '2021-01-11',
        'changes'  => array(
            array(
                'title'       => 'Added Disconnect Button and Some Issues Fixed [Vendor Analytics]',
                'type'        => 'Improvement',
                'description' => 'Added disconnect button on dokan admin setting page, also fixed some issues.',
            ),
            array(
                'title'       => 'Product Add-on Module Template Override [Product Addon]',
                'type'        => 'Improvement',
                'description' => 'Product add-on module template override does not work with theme folder issue fixed.',
            ),
            array(
                'title'       => 'Changed Social Login Sign in URL Change [Vendor Social Login]',
                'type'        => 'Improvement',
                'description' => 'Changed social login sign in URL from dokan_reg to vendor_social_reg  on query param.',
            ),
            array(
                'title'       => 'Import Option Allows Vendors to Create Categories',
                'type'        => 'Fix',
                'description' => 'Import option allows vendors to create categories issue fixed, now vendor not able to create new category when import csv.',
            ),
            array(
                'title'       => 'If Admin Commission for Flat Type Commission is Set to Zero Was Showing Not Set [Vendor Commission]',
                'type'        => 'Fix',
                'description' => 'If admin commission for flat type commission is set to zero it was showing not set.',
            ),
            array(
                'title'       => 'Text-domain Missing on Confirmation Alert',
                'type'        => 'Fix',
                'description' => 'Text-domain missing on confirmation alert. Now it fixed all alert confirmation on vendor dashboard.',
            ),
            array(
                'title'       => 'Default Attribute Was Not Displaying [Vendor Product Update]',
                'type'        => 'Fix',
                'description' => 'Default attribute was not displaying when variation product edit from vendor dashboard issue fixed.',
            ),
            array(
                'title'       => 'Vendor Details Admin Commission Label Changed',
                'type'        => 'Fix',
                'description' => 'Vendor details admin commission label changed to commission rate on the admin area dokan vendor details page.',
            ),
            array(
                'title'       => 'Fixed Vendor Staff Was Not Receiving New Order Email [Vendor Staff]',
                'type'        => 'Fix',
                'description' => 'Fixed vendor staff was not receiving new order email issue fixed now.',
            ),
            array(
                'title'       => 'Fixed Variations Was Not Saving Correctly [Vendor Product]',
                'type'        => 'Fix',
                'description' => 'Fixed Variations was not saving correctly from vendor dashboard when try to use multiples attributes.',
            ),
            array(
                'title'       => 'Fixed Store Support Form Showing Wrong With Elementor [Elementor]',
                'type'        => 'Fix',
                'description' => 'Fixed store support form showing wrong with Elementor if still have logged out users.',
            ),
            array(
                'title'       => 'Replaced WP SEO Deprecated Functions [Product SEO]',
                'type'        => 'Fix',
                'description' => 'Replaced WP SEO deprecated functions, now product seo capable with latest wp seo plugin.',
            ),
            array(
                'title'       => 'Fixed Product Location Mismatch [Geolocation]',
                'type'        => 'Fix',
                'description' => 'Fixed product location mismatch if created from admin and try to reassign a vendor on a product.',
            ),
            array(
                'title'       => 'Auction Product SKU is Not Updating [Auction]',
                'type'        => 'Fix',
                'description' => 'Auction product SKU is not updating or saving now fixed.',
            ),
            array(
                'title'       => 'Single Product Multiple Vendor Redirection [Auction]',
                'type'        => 'Fix',
                'description' => 'Single Product Multiple Vendor redirection for auction and booking type product.',
            ),
            array(
                'title'       => 'Updated Stripe Codebase and Fixed Some Issues [Dokan Stripe]',
                'type'        => 'Fix',
                'description' => 'Updated stripe codebase and fixed some issues with Stripe modules.',
            ),
            array(
                'title'       => 'Responsive Dashboard Product and Order Table',
                'type'        => 'Fix',
                'description' => 'Responsive dashboard product and order table now fixed.',
            ),
            array(
                'title'       => 'Removed Addon Validation for Dokan Subscription [Dokan Subscription]',
                'type'        => 'Fix',
                'description' => 'Removed addon validation for Dokan Subscription product.',
            ),
            array(
                'title'       => 'Vendor Updates Other Vendor Product',
                'type'        => 'Fix',
                'description' => 'Vendor updates other vendor product if SKU/ID is same, instead of creating a new product for requesting vendor.',
            ),
            array(
                'title'       => 'Make Product Status Draft After a Vendor Cancels Their Subscriptions [Dokan Subscriptions]',
                'type'        => 'Fix',
                'description' => 'Make product status draft after a vendor/admin immediately cancels their subscriptions.',
            ),
        ),
    ),
    array(
        'version'  => 'Version 3.1.3',
        'released' => '2020-12-17',
        'changes'  => array(
            array(
                'title'       => 'Added Tax/Discount for Vendor Subscriptions [WireCard]',
                'type'        => 'Improvement',
                'description' => 'Added tax/discount for Vendor Subscriptions, previously only actual product price was sent to API.',
            ),
            array(
                'title'       => 'Added a New Exception if Vendor Account [WireCard]',
                'type'        => 'Improvement',
                'description' => 'Added a new exception if vendor account is not linked with wire card, now the user will get proper error messages instead of Something went wrong.',
            ),
            array(
                'title'       => 'Refund and Announcement Page Loading Problem [Dokan Admin]',
                'type'        => 'Fix',
                'description' => 'Refund and announcement listing loading problem and text-domain issue fixed.',
            ),
            array(
                'title'       => 'Booking Addon Options are Missing [Dokan Booking]',
                'type'        => 'Fix',
                'description' => 'Booking addon options are missing on the Booking type product edit panel.',
            ),
            array(
                'title'       => 'Variable Product Image Upload Issue with Yoast SEO [Vendor Product SEO]',
                'type'        => 'Fix',
                'description' => 'Variable product image upload when yoast seo plugin is active.',
            ),
            array(
                'title'       => 'Added Tax Fields for Vendor Subscription [Vendor Subscription Product]',
                'type'        => 'Fix',
                'description' => 'Added tax fields for vendor subscription type product.',
            ),
            array(
                'title'       => 'Booking Simple Product to Virtual Product [Dokan Booking]',
                'type'        => 'Fix',
                'description' => 'Booking simple product changes to virtual product when create a booking product from vendor area.',
            ),
            array(
                'title'       => 'Stripe Recurring Issue With 3ds [Dokan Stripe]',
                'type'        => 'Fix',
                'description' => 'Fixed Dokan Stripe 3ds recurring issue with vendor subscription products.',
            ),
            array(
                'title'       => 'Dokan Order Discount Mismatch When Recalculate',
                'type'        => 'Fix',
                'description' => 'Dokan order discount mismatch when recalculate from admin panel order details page.',
            ),
            array(
                'title'       => 'Fixed Cart Coupon Option Disabled Multi Vendors',
                'type'        => 'Fix',
                'description' => 'Fixed cart coupon option disabled for multi vendors, it will be work only when single seller mode enabled form dokan settings.',
            ),
            array(
                'title'       => 'Added Some New Exceptions to Display Formatted [WireCard]',
                'type'        => 'Fix',
                'description' => 'Added some new exceptions to display formatted errors to users.',
            ),
            array(
                'title'       => 'Fixed Product Pack End Date for Vendor Subscription [WireCard]',
                'type'        => 'Fix',
                'description' => 'Fixed product pack end date for vendor subscription, previously this was causing subscription to get canceled automatically before subscriptions actual end date.',
            ),
            array(
                'title'       => 'Fixed Decimal Issues on Product Price [WireCard]',
                'type'        => 'Fix',
                'description' => 'Fixed decimal issues on product price, this was causing API error due to mismatch order total.',
            ),
            array(
                'title'       => 'Removed rmccue/requests Library From Vendor Folder [WireCard]',
                'type'        => 'Fix',
                'description' => 'Removed rmccue/requests library from vendor folder, WordPress already has this library preinstalled. This was causing a fatal error on some installations.',
            ),
            array(
                'title'       => 'Fixed Limit Your Zone Selected by Default [Dokan Vendor Shipping]',
                'type'        => 'Fix',
                'description' => 'Limit your zone selected by default when zone created with a country.',
            ),
            array(
                'title'       => 'Vendor Verification Upload Documents Folder Disallow',
                'type'        => 'Fix',
                'description' => 'Disallow direct access vendor verification uploaded documents folder.',
            ),
            array(
                'title'       => 'Fixed Dokan Stripe Resource Missing API',
                'type'        => 'Fix',
                'description' => 'Fixed Dokan Stripe resource missing api error for empty source provided via api call.',
            ),
        ),
    ),
    array(
        'version'  => 'Version 3.1.2',
        'released' => '2020-12-01',
        'changes'  => array(
            array(
                'title'       => 'Vendor Gets Error With PayPal',
                'type'        => 'Fix',
                'description' => 'Vendor gets error while purchasing products if they purchased a vendor subscription product with PayPal in checkout page.',
            ),
            array(
                'title'       => 'Multi Vendor Product Showing Others Vendor',
                'type'        => 'Fix',
                'description' => 'Single product multi vendor products showing others vendor area issue when SPMV product duplicated.',
            ),
            array(
                'title'       => 'Admin Commission Set 0 by Default',
                'type'        => 'Fix',
                'description' => 'Admin commission set 0 by default when create/update vendor form admin area.',
            ),
            array(
                'title'       => 'Enabling Vacation Mode is Hiding Products',
                'type'        => 'Fix',
                'description' => 'Enabling vacation mode is hiding products from vendor dashboard, vendor is not able to see the products.',
            ),
            array(
                'title'       => 'Vendor Staff Is Not Able To Manage Product',
                'type'        => 'Fix',
                'description' => 'Vendor staff is not able to add/edit any product on vendor dashboard, also fixed capabilities issue.',
            ),
            array(
                'title'       => 'Vendor Shipping Settings Page Console Error',
                'type'        => 'Fix',
                'description' => 'Vendor shipping settings page showing js error issue when try to add/update any shipping zone.',
            ),
            array(
                'title'       => 'Update Vendor Review REST API',
                'type'        => 'Fix',
                'description' => 'Update vendor review REST API and fixed some errors.',
            ),
            array(
                'title'       => 'SMS verification Error Message Translation',
                'type'        => 'Fix',
                'description' => 'SMS verification error message translation was not available.',
            ),
            array(
                'title'       => 'SMS Verification Error Handling',
                'type'        => 'Fix',
                'description' => 'SMS verification error handling for vendors.',
            ),
            array(
                'title'       => 'Booking Product Virtual Option Not Saving',
                'type'        => 'Fix',
                'description' => 'Booking product virtual option not saving while 1st time create form vendor dashboard.',
            ),
            array(
                'title'       => 'Coupon Minimum Amount Not Working',
                'type'        => 'Fix',
                'description' => 'Coupon minimum amount not working with variation products issue fixed.',
            ),
            array(
                'title'       => 'Vendor Product Addon Appears on Other Vendors',
                'type'        => 'Fix',
                'description' => 'Vendor product addon appears in every product in marketplace when that vendor is logged in.',
            ),
            array(
                'title'       => 'Product Wise Commission Issue In Subscription Product',
                'type'        => 'Fix',
                'description' => 'Product wise Commission is not working in subscription product on admin area product edit page.',
            ),
            array(
                'title'       => 'Report CSV Header Mismatch',
                'type'        => 'Fix',
                'description' => 'Report csv header mismatch issue fixed.',
            ),
            array(
                'title'       => 'Stripe Dashboard Tax Issue',
                'type'        => 'Fix',
                'description' => 'Stripe Dashboard does not show the price including the tax for vendors.',
            ),
            array(
                'title'       => 'SKU Data Not importing with CSV',
                'type'        => 'Fix',
                'description' => 'SKU data not importing when CSV import on vendor dashboard.',
            ),
            array(
                'title'       => 'Booking Single Day Data Issue',
                'type'        => 'Fix',
                'description' => 'Booking single day no data showing, responsiveness issue fixes form vendor dashboard booking details page.',
            ),
            array(
                'title'       => 'Product Seo Default Meta Field Issue',
                'type'        => 'Fix',
                'description' => 'Product seo default meta description removed from vendor dashboard product edit page.',
            ),
            array(
                'title'       => 'Variable product gets extra fields of variable subscription product',
                'type'        => 'Fix',
                'description' => 'When a vendor wants to create a variable product, extra field added from the vendor subscription product.',
            ),
            array(
                'title'       => 'Check End Date Before Cancelling Vendor Subscriptions',
                'type'        => 'Fix',
                'description' => 'Check subscription product pack end date matched with stored end date before cancelling vendor subscriptions. If both value does not match, update end date value.',
            ),
            array(
                'title'       => 'Downloads files showing multiple entries when have suborder',
                'type'        => 'Fix',
                'description' => 'Downloads files showing multiple entries when have suborder.',
            ),
            array(
                'title'       => 'Gateway fee paid by admin if empty',
                'type'        => 'Fix',
                'description' => 'If the processing fee is not 0 and if the dokan_gateway_fee_paid_by meta is blank then the processing fee is paid by the admin.',
            ),
            array(
                'title'       => 'Booking by day view which is missing in Booking calendar',
                'type'        => 'Fix',
                'description' => 'Bookable Product: Booking by day view which is missing in Booking calender.',
            ),
        ),
    ),
    array(
        'version'  => 'Version 3.1.1',
        'released' => '2020-11-14',
        'changes'  => array(
            array(
                'title'       => 'Refactored Stripe Connect Module',
                'type'        => 'Fix',
                'description' => 'Refactored and fixed stripe connect module. Here fixed multiples dokan and vendor product subscription issues.',
            ),
            array(
                'title'       => 'Vendor Subscription Product Cancel Not Showing on Vendor Dashboard',
                'type'        => 'Fix',
                'description' => 'When a customer canceled their subscription then last status not showing vendor dashboard.',
            ),
            array(
                'title'       => 'Wholesale Product Checkbox Not Working',
                'type'        => 'Fix',
                'description' => 'Wholesale product checkbox not working when product status pending in vendor product edit page',
            ),
            array(
                'title'       => 'Product Wise Commission Not Working Comma Decimal',
                'type'        => 'Fix',
                'description' => 'Product wise commission not working when use comma decimal separator issue fixed',
            ),
            array(
                'title'       => 'Dokan Modules Section Active/Inactive Tab Issue',
                'type'        => 'Fix',
                'description' => 'Dokan modules section active/inactive tab section not work correctly',
            ),
            array(
                'title'       => 'Product Addon Select Field Options Issue with Price Field Blank',
                'type'        => 'Fix',
                'description' => 'When a vendor try to add a product addon select field with price field blank then the option not saving',
            ),
            array(
                'title'       => 'Required Minimum PHP Version Set to 7.0.0',
                'type'        => 'Fix',
                'description' => 'PHP 5.6 Compatibility, update required minimum php version is set to 7.0.0 on Dokan',
            ),
            array(
                'title'       => 'Vendor Not Able to Duplicate Product',
                'type'        => 'Fix',
                'description' => 'Duplicate product not working when try any product duplicate from vendor dashboard',
            ),
            array(
                'title'       => 'Fixed translation Issue for Dokan pro',
                'type'        => 'Fix',
                'description' => 'Fixed multiple translation issues for Dokan amdin settings pages',
            ),
            array(
                'title'       => 'Refactored Dokan Admin Modules Page',
                'type'        => 'Fix',
                'description' => 'Modules url changed on title and image in dokan admin modules page',
            ),
            array(
                'title'       => 'Dokan Booking Calendar Issue on Single day',
                'type'        => 'Fix',
                'description' => 'Dokan booking calendar only shows one booking on a single day on vendor dashboard booking details page',
            ),
        ),
    ),
    array(
        'version'  => 'Version 3.1',
        'released' => '2020-10-20',
        'changes'  => array(
            array(
                'title'       => 'Vendor Analytics',
                'type'        => 'New',
                'description' => 'Get more insights to vendor data and track store performances. Vendor will now get google analytics for his store and product pages.',
            ),
            array(
                'title'       => 'Live Search',
                'type'        => 'New',
                'description' => 'Refine your search results just like Google. Autocomplete will give you a better search experience than ever before.',
            ),
            array(
                'title'       => 'Refactored Stripe Connect Module',
                'type'        => 'Fix',
                'description' => 'Refactored and fixed stripe connect module. Updated stripe SDK version and stripe connect type.',
            ),
            array(
                'title'       => 'Gateway Fee on Admin Report Logs',
                'type'        => 'Fix',
                'description' => 'Added gateway fee payee indicator in admin report logs. Now the admin will have a proper view of the gateway fee amount and who is paying that.',
            ),
            array(
                'title'       => 'Booking Confirmation from the Booking List',
                'type'        => 'Fix',
                'description' => 'When the vendor tries to confirm booking from the booking list, it was not working properly and was not showing a thank you message.',
            ),
            array(
                'title'       => 'Activate Modules During Plugin Activation',
                'type'        => 'Fix',
                'description' => 'The modules will now be inactive by default after plugin installation, enable the modules you need.',
            ),
            array(
                'title'       => 'Product Grouped Type',
                'type'        => 'Fix',
                'description' => 'We have fixed the issue, product type was not changing to grouped product when trying to change.',
            ),
            array(
                'title'       => 'Branding Issue on Seller Search',
                'type'        => 'Fix',
                'description' => 'You can now have a proper search result of vendors by filtering them with brand on store listing page.',
            ),
            array(
                'title'       => 'Vendor Earning in Order Details',
                'type'        => 'Fix',
                'description' => 'Now your vendors will see accurate vendor earnings in order details after the refund.',
            ),
            array(
                'title'       => 'Vendor Export Report',
                'type'        => 'Fix',
                'description' => 'We have fixed the statement of your vendor\'s balance when they export the statement from their dashboard.',
            ),
            array(
                'title'       => 'Removed External Product Type',
                'type'        => 'Fix',
                'description' => 'Removed external product type from subscription allowed product types for vendor subscription product.',
            ),
            array(
                'title'       => 'Subscription Product Price Not Saving',
                'type'        => 'Fix',
                'description' => 'You can now save the subscription product price when WC auction plugin is active.',
            ),
            array(
                'title'       => 'Featured Seller limit',
                'type'        => 'Fix',
                'description' => 'On your store listing page, the featured sellers number was showing more than the limit. We have fixed that.',
            ),
            array(
                'title'       => 'Product Tags add on Quick Edit Area',
                'type'        => 'Fix',
                'description' => 'Product tags search experience improvement and fixed the issue of not working properly on quick edit area.',
            ),
            array(
                'title'       => 'Text Domain in JS end',
                'type'        => 'Fix',
                'description' => 'Text domain issue when report abuse delete in js end and translate not working properly.',
            ),
            array(
                'title'       => 'JS Console Error on Report Abuse',
                'type'        => 'Fix',
                'description' => 'JS console error fixed on report abuse module from admin area edit product page',
            ),
            array(
                'title'       => 'Subscription Plan Page Design',
                'type'        => 'Fix',
                'description' => 'Subscription plan page design will work properly now when different languages are used.',
            ),
            array(
                'title'       => 'Vendor Product Import',
                'type'        => 'Fix',
                'description' => 'When a vendor imports a product from the dashboard then the default advanced option shows automatically, it\'s not an expected behavior. So we fixed that UI.',
            ),
            array(
                'title'       => 'Dokan Pro Email Template',
                'type'        => 'Fix',
                'description' => 'Dokan Pro core email template locations updated, so now you can override the template file from theme.',
            ),
            array(
                'title'       => 'Store Default Geolocation',
                'type'        => 'Fix',
                'description' => 'When you try to create a new product from the vendor dashboard then store default geolocation was not set in the product.',
            ),
            array(
                'title'       => 'Coupon Product and Exclude Product Field Move',
                'type'        => 'Fix',
                'description' => 'Coupon product and exclude product field move to search select with variations.',
            ),
            array(
                'title'       => 'Product Variation Toggle',
                'type'        => 'Fix',
                'description' => 'Product variation toggle issue, variation downloadable file delete issue.',
            ),
            array(
                'title'       => 'Vendor Can Modify Other Product',
                'type'        => 'Fix',
                'description' => 'There was a permission issue with vendor product edit. ‘Vendors can modify other vendor products’ are now restricted and not possible from this version.',
            ),
            array(
                'title'       => 'Multi Vendor Duplicate SKU',
                'type'        => 'Fix',
                'description' => 'When someone was trying to create a product from another product, then the SKU will not conflict with the existing one.',
            ),
            array(
                'title'       => 'Vendor Confirmation Email',
                'type'        => 'Fix',
                'description' => 'When some purchased a booking and the vendor did not get a booking confirmation email. That issue is fixed now.',
            ),
            array(
                'title'       => 'Quick Update Products',
                'type'        => 'Fix',
                'description' => 'Can not quick update products when product limit reached form vendor dashboard.',
            ),
            array(
                'title'       => 'CSV Import Feature Column',
                'type'        => 'Fix',
                'description' => 'When vendors import CSV from vendor dashboard and feature column make false, here checking CSV import vendor or admin.',
            ),
            array(
                'title'       => 'Export Wholesale Column Missing',
                'type'        => 'Fix',
                'description' => 'The vendor will now see the export wholesale column when you export product from vendor dashboard.',
            ),
            array(
                'title'       => 'Product Add-on Type File not Showed on Order',
                'type'        => 'Fix',
                'description' => 'Product add-on type File upload does not show the file on vendor order.',
            ),
            array(
                'title'       => 'Auction Start End Field',
                'type'        => 'Fix',
                'description' => 'Auction start, end field disable from keyboard.',
            ),
            array(
                'title'       => 'Announcements Week',
                'type'        => 'Fix',
                'description' => 'You will get all the announcements in time regardless of the timezone.',
            ),
            array(
                'title'       => 'Product Discount Scheduled',
                'type'        => 'Fix',
                'description' => 'Your vendor had problems setting schedule discounts for their products in the previous version. Dokan new version has the fix for this issue. Your vendor  can now schedule the discounts to their products.',
            ),
            array(
                'title'       => 'Import Restriction with Subscription ',
                'type'        => 'Fix',
                'description' => 'When someone imports product with category name by using the import tool, now validation for subscription category restricted if found will be applied.',
            ),
            array(
                'title'       => 'Wholesale Customer Registration Email',
                'type'        => 'Fix',
                'description' => 'Wholesale customer registration email to the admin did not contain proper information. This version has the proper template and data.',
            ),
            array(
                'title'       => 'Report Select Date not Working',
                'type'        => 'Fix',
                'description' => 'Report custom date not working for daily sales & statements are fixed now. You can now use a custom date as you want.',
            ),
            array(
                'title'       => 'New Refund Request Email',
                'type'        => 'Fix',
                'description' => 'You can now easily send a refund request email and it will reach the admin.',
            ),
            array(
                'title'       => 'WooCommerce Deprecated Functions',
                'type'        => 'Fix',
                'description' => 'Dokan has updated the list of WooCommerce deprecated functions. Outdated or previous versions templates and functions are not used without proper documentation from this version.',
            ),
            array(
                'title'       => 'Refund Issue with Decimal Number',
                'type'        => 'Fix',
                'description' => 'When the vendor sends a refund request from the order details page then the total and refund amount were not compared correctly.',
            ),
        ),
    ),
    array(
        'version'  => 'Version 3.0.8',
        'released' => '2020-09-04',
        'changes'  => array(
            array(
                'title'       => 'Shipping data updater',
                'type'        => 'Fix',
                'description' => 'Shipping data updater is not showing some situations',
            ),
            array(
                'title'       => 'Product type allowed in Vendor subsction product',
                'type'        => 'Fix',
                'description' => 'Default subscription type product is not showing in vendor subscription type product module',
            ),
        ),
    ),
    array(
        'version'  => 'Version 3.0.7',
        'released' => '2020-09-01',
        'changes'  => array(
            array(
                'title'       => 'Refactor Product SEO',
                'type'        => 'Fix',
                'description' => 'Vendor product SEO refactor codes where improve performance',
            ),
            array(
                'title'       => 'Shipping Continent Issue (Shipping)',
                'type'        => 'Fix',
                'description' => 'When try to add shipping with a continent then it not working properly',
            ),
            array(
                'title'       => 'Global Multiple Zone Conflict (Shipping)',
                'type'        => 'Fix',
                'description' => 'Global multiple zone conflict issue in shipping',
            ),
            array(
                'title'       => 'Paypal Gateway Fee not Showing on All Logs (PayPal)',
                'type'        => 'Fix',
                'description' => 'Paypal gateway fee not showing on all logs when products purchase by multi vendors',
            ),
            array(
                'title'       => 'CSV Import Not Working with WordPress v5.5 (Import/Export Tool)',
                'type'        => 'Fix',
                'description' => 'CSV import not working cause of JS error',
            ),
            array(
                'title'       => 'Product Addon Conflicting with WooCommerce Booking (Product Addon)',
                'type'        => 'Fix',
                'description' => 'Product addon conflicting with WooCommerce booking when try to add new addon fields',
            ),
            array(
                'title'       => 'Tags List Loading Problem',
                'type'        => 'Fix',
                'description' => 'Long tags listing issue fixed on product quick edit area',
            ),
            array(
                'title'       => 'Duplicate Booking Email',
                'type'        => 'Fix',
                'description' => 'Vendor getting duplicate booking email when new customer booking',
            ),
            array(
                'title'       => 'Store Review Author Name (Store Review)',
                'type'        => 'Fix',
                'description' => 'Store review author name show display name if exits',
            ),
            array(
                'title'       => 'Yoast SEO Hooks Changed',
                'type'        => 'Fix',
                'description' => 'Yoast SEO plugin some hooks changed on latest version',
            ),
            array(
                'title'       => 'Update Vendor Analytics Logo and Key (Vendor Analytics)',
                'type'        => 'Fix',
                'description' => 'Update Vendor Analytics module logo and primary metrics key',
            ),
            array(
                'title'       => 'Store Category Resets',
                'type'        => 'Fix',
                'description' => 'Store category resets after updating store Payment details',
            ),
            array(
                'title'       => 'Automatic Save Zone Location Data (Shipping)',
                'type'        => 'Fix',
                'description' => 'Automatic save zone location data during method add, edit and delete',
            ),
            array(
                'title'       => 'Product Type not Saving',
                'type'        => 'Fix',
                'description' => 'Product type not saving when product addon module active with WooCommerce product addon',
            ),
            array(
                'title'       => 'RMA Request Delete by Vendor',
                'type'        => 'Fix',
                'description' => 'RMA request delete by vendor and change text-domain',
            ),
            array(
                'title'       => 'Add Missing Permission Callback in REST Routes',
                'type'        => 'Fix',
                'description' => 'Add missing permission callback in REST routes to make WordPress 5.5 compatible',
            ),
        ),
    ),
    array(
        'version'  => 'Version 3.0.6',
        'released' => '2020-07-23',
        'changes'  => array(
            array(
                'title'       => 'Shipping Issue with Same zone Multiple postcode (Shipping)',
                'type'        => 'Fix',
                'description' => 'Full Shipping system revamped our codes structure and make performance improvement where allowing same country multiple zones',
            ),
        ),
    ),
    array(
        'version'  => 'Version 3.0.5',
        'released' => '2020-07-23',
        'changes'  => array(
            array(
                'title'       => 'Decimal and Thousand Separator with Comma',
                'type'        => 'New',
                'description' => 'Now allowing decimal and thousand separator with comma sign in every where',
            ),
            array(
                'title'       => 'New 3 Columns Added on All Logs (Vendor Subscription Module)',
                'type'        => 'New',
                'description' => 'Gateway Fee, Total Shipping and Total Tax 3 new columns added on all logs',
            ),
            array(
                'title'       => 'Gallery Image Restriction (Vendor Subscription Module)',
                'type'        => 'New',
                'description' => 'Gallery image restriction count for vendor subscription module',
            ),
            array(
                'title'       => 'Token Issue with Dokan Stripe Module',
                'type'        => 'Fix',
                'description' => 'Stripe token issue come when try to payment with stripe for logged and guest use',
            ),
            array(
                'title'       => 'Shipping Issue with Same Country Multiple Zones (Shipping)',
                'type'        => 'Fix',
                'description' => 'Full Shipping system revamped our codes structure and make performance improvement where allowing same country multiple zones',
            ),
            array(
                'title'       => 'Vendor Subscriptions Product not Allow with Dokan Stripe (Vendor Subscriptions Product)',
                'type'        => 'Fix',
                'description' => 'When try to payment with stripe on Vendor Subscription Product then it not worked',
            ),
            array(
                'title'       => 'After Payment Completed Order Status Not Change (Vendor Subscriptions Product)',
                'type'        => 'Fix',
                'description' => 'Vendor Subscription Products after payment completed order status not changed',
            ),
            array(
                'title'       => 'Gateway Fee Subtract from Admin Commission',
                'type'        => 'Fix',
                'description' => 'Now gateway fee subtract from admin commission value and make it separate column on all logs',
            ),
            array(
                'title'       => 'Products Addon Fields Not Worked for Vendor Staff (Products Addon)',
                'type'        => 'Fix',
                'description' => 'Products Addon fields manage by vendor staff and fields showing on product page',
            ),
            array(
                'title'       => 'Add New Card Not Worked on My Account Page',
                'type'        => 'Fix',
                'description' => 'When try to add new card number in my account page on payment methods tab then it not worked',
            ),
        ),
    ),
    array(
        'version'  => 'Version 3.0.4',
        'released' => '2020-06-19',
        'changes'  => array(
            array(
                'title'       => 'Stripe Module add 2 Requires Options (Stripe Connect)',
                'type'        => 'Fix',
                'description' => 'Stripe Module add 2 requires options must need to add stripe credential and SSL',
            ),
            array(
                'title'       => 'Stripe Module Added 2 Notices (Stripe Connect)',
                'type'        => 'Fix',
                'description' => 'Stripe Module added 2 notices for add stripe credentials and another for SSL activation',
            ),
            array(
                'title'       => 'Geolocation Auto Set Same as Store (Geolocation)',
                'type'        => 'Fix',
                'description' => 'Geolocation auto set same as store when product update from admin',
            ),
            array(
                'title'       => 'Add Text Shipping Policies Link on Shipping Setting Page',
                'type'        => 'Fix',
                'description' => 'Add text Shipping Policies link after gear icon on vendor shipping setting page',
            ),
        ),
    ),
    array(
        'version'  => 'Version 3.0.3',
        'released' => '2020-06-11',
        'changes'  => array(
            array(
                'title'       => 'Add Facebook Messenger to Dokan live chat (Live Chat)',
                'type'        => 'New',
                'description' => 'The Facebook Messenger is new Dokan live chat for vendor single page and product page like as TalkJS',
            ),
            array(
                'title'       => 'Stripe Connect Module Revamped (Stripe Connect)',
                'type'        => 'Improvement',
                'description' => 'Full Stripe Connect Module revamped our codes structure and make performance improvement',
            ),
            array(
                'title'       => 'Vendor Subscription Module Revamped (Vendor Subscription)',
                'type'        => 'Improvement',
                'description' => 'Full Vendor Subscription Module revamped our codes structure and make performance improvement',
            ),
            array(
                'title'       => 'Minimum Amount for Discount Coupon',
                'type'        => 'Fix',
                'description' => 'The minimum amount for discount coupon not working on checkout which amount added by vendor',
            ),
            array(
                'title'       => 'Store Review Not Working for Verified Owner',
                'type'        => 'Fix',
                'description' => 'Store review not working if verified owner option is checked (Store Reviews)',
            ),
            array(
                'title'       => 'Sellers Sitemap XML',
                'type'        => 'Fix',
                'description' => 'Dokan Sellers Sitemap XML file showing 404 when visit it from SEO XML file',
            ),
            array(
                'title'       => 'Shipping Tax Calculates',
                'type'        => 'Fix',
                'description' => 'Shipping tax calculates wrong for sub orders',
            ),
            array(
                'title'       => 'Vendor Subscription Product Error with get_current_screen Function',
                'type'        => 'Fix',
                'description' => 'Remove get_current_screen function from vendor subscription product module (Vendor Subscription Product)',
            ),
            array(
                'title'       => 'Vendor Subscription Product Variation Product Price Not Saving',
                'type'        => 'Fix',
                'description' => 'Variation product price not saving when vendor subscription product module enable issue fixed (Vendor Subscription Product)',
            ),
        ),
    ),
    array(
        'version'  => 'Version 3.0.2',
        'released' => '2020-04-22',
        'changes'  => array(
            array(
                'title'       => 'Vendor Subscription Product Module',
                'type'        => 'New',
                'description' => 'The new Vendor Subscription Product module is a WooCommerce Subscription integration(VSP)',
            ),
            array(
                'title'       => 'JS error in backend report abuse page (Report Abuse)',
                'type'        => 'Fix',
                'description' => 'There was a warning JS error in backend report abuse page, which has been resolved',
            ),
            array(
                'title'       => 'Live chat with elementor issue',
                'type'        => 'Fix',
                'description' => 'Live chat showing fatal error when using with elementor (Elementor)',
            ),
            array(
                'title'       => 'Fatal Error on Booking',
                'type'        => 'Fix',
                'description' => 'Fatal error and calendar issue in frontend booking page (Booking)',
            ),
            array(
                'title'       => 'Vendor Biography Tab Not Showing',
                'type'        => 'Fix',
                'description' => 'Vendor biography tab not showing in store page which is designed with elementor',
            ),
            array(
                'title'       => 'Vendor email issues',
                'type'        => 'Fix',
                'description' => 'Vendor disable email does not work and the vendor enables email is send twice',
            ),
            array(
                'title'       => 'Category Search Issue on Frontpage',
                'type'        => 'Fix',
                'description' => 'When store listing page set as frontpage, category search does not work',
            ),
            array(
                'title'       => 'Unable to create refund from both backend and frontend',
                'type'        => 'Fix',
                'description' => 'Unable to refund order from both backend and frontend if item total is not set',
            ),
        ),
    ),
    array(
        'version'  => 'Version 3.0.0',
        'released' => '2020-03-25',
        'changes'  => array(
            array(
                'title'       => 'Brand Support for Single Product Multivendor',
                'type'        => 'New',
                'description' => 'Brand support for single product multivendor and normal clone products (SPMV)',
            ),
            array(
                'title'       => 'Outdated Template Warning on Vendor Migration Page',
                'type'        => 'Fix',
                'description' => 'There was a warning regarding outdated template in vendor migration page, which has been resolved',
            ),
            array(
                'title'       => 'Store Progressbar Issue',
                'type'        => 'Fix',
                'description' => 'Store progressbar was\'t updating when vendor save stripe or wirecard payment method (Stipre & Wirecard)',
            ),
            array(
                'title'       => 'Seller Vacation Issue',
                'type'        => 'Fix',
                'description' => 'Customer was able to place order from sellers who are on vacation (Seller Vacation)',
            ),
            array(
                'title'       => 'Vendor Staff Permissions Label',
                'type'        => 'Fix',
                'description' => 'Make vendor staff permissions label translatable (Vendor Staff)',
            ),
            array(
                'title'       => 'Product Review Pagination',
                'type'        => 'Fix',
                'description' => 'Product review pagination is not working correctly',
            ),
            array(
                'title'       => 'Geolocation Map Issue',
                'type'        => 'Fix',
                'description' => 'MAP on the store listing page is not showing if Google API key field is empty but Mapbox (Geolocation)',
            ),
            array(
                'title'       => 'Geolocation Product Update Issue',
                'type'        => 'Fix',
                'description' => 'Modifying the product from the Admin backend reverts the product location to `same as store` (Geolocation)',
            ),
            array(
                'title'       => 'Stripe Refund Issue',
                'type'        => 'Fix',
                'description' => 'If admin has earning from an order, only then refund application fee (Stripe)',
            ),
            array(
                'title'       => 'Module Documention',
                'type'        => 'Improvement',
                'description' => 'Added documentation link for modules in admin module page',
            ),
            array(
                'title'       => 'Code Structure and Performance Improvement',
                'type'        => 'Improvement',
                'description' => 'We have revamped our code structure and make performance improvement',
            ),
        ),
    ),
    array(
        'version'  => 'Version 2.9.13',
        'released' => '2019-08-29',
        'changes'  => array(
            array(
                'title'         => 'Scheduled Announcement',
                'type'          => 'New',
                'description'   => 'Add scheduled announcement option for admin.',
            ),
            array(
                'title'         => 'Identity Verification in Live Chat',
                'type'          => 'New',
                'description'   => 'Add identity verification and unread message count in live chat (Live Chat Module).',
            ),
            array(
                'title'         => 'Admin Defined Default Geolocation',
                'type'          => 'New',
                'description'   => 'Add admin defined location on Geolocation map to be shown instead of default `Dhaka, Bangladesh` when there is no vendor or product found (Geolocation Module).',
            ),
            array(
                'title'         => 'Guest User Checkout',
                'type'          => 'fix',
                'description'   => 'Guest user is unable to checkout with stripe (Stripe Module).',
            ),
            array(
                'title'         => 'Stripe Certificate Missing Issue',
                'type'          => 'Fix',
                'description'   => 'Add ca-certificate file to allow certificate verification of stripe SSL (Stripe Module).',
            ),
            array(
                'title'         => 'Shipping doesn\'t Work on Variable Product',
                'type'          => 'Fix',
                'description'   => 'If variable product is created by admin for a vendor, vendor shipping method doesn\'t work.',
            ),
            array(
                'title'         => 'Payment Fields are Missing in Edit Vendor Page',
                'type'          => 'Fix',
                'description'   => 'Set default bank payment object if it\'s not found from the API response.',
            ),
            array(
                'title'         => 'Product Lot Discount on Sub Orders',
                'type'          => 'Fix',
                'description'   => 'Product lot discount is getting applied on sub-orders even though discount is disabled.',
            ),
        ),
    ),
    array(
        'version'  => 'Version 2.9.12',
        'released' => '2019-08-09',
        'changes'  => array(
            array(
                'title'         => 'Stripe 3D Secure and Authentication',
                'type'          => 'New',
                'description'   => 'Add stripe 3D secure and strong customer authentication (Stripe Connect Module).',
            ),
            array(
                'title'         => 'Subscription Upgrade Downgrade',
                'type'          => 'New',
                'description'   => 'Add subscription pack upgrade downgrade option for vendors (Subscription Module).',
            ),
            array(
                'title'         => 'Wholesale Options in Backend',
                'type'          => 'New',
                'description'   => 'Add wholesale options in the admin backend (Wholesale Module).',
            ),
            array(
                'title'         => 'Elementor Vendor Verification Widget',
                'type'          => 'New',
                'description'   => 'Add support for vendor verification widget (Elementor Module).',
            ),
            array(
                'title'         => 'Product Discount',
                'type'          => 'Fix',
                'description'   => 'Attach product discount in order details.',
            ),
            array(
                'title'         => 'Coupon Type Changes',
                'type'          => 'Fix',
                'description'   => 'Coupon discount type changes on coupon edit. This issue has been fixed in this release.',
            ),
            array(
                'title'         => 'Order Refund from Admin Backend',
                'type'          => 'Fix',
                'description'   => 'Refund calculation was wrong when it\'s done from the admin backend. It\'s been fixed in this release.',
            ),
            array(
                'title'         => 'Dokan Admin Settings',
                'type'          => 'Improvement',
                'description'   => 'Dokan admin settings rearrange and refactor.',
            ),
        ),
    ),
    array(
        'version'  => 'Version 2.9.11',
        'released' => '2019-07-02',
        'changes'  => array(
            array(
                'title'         => 'Elementor Module',
                'type'          => 'New',
                'description'   => 'Add elementor page builder widgets for Dokan.',
            ),
            array(
                'title'         => 'Single Product Multi Vendor',
                'type'          => 'Improvement',
                'description'   => 'Single product multiple vendor hide duplicates based on admin settings.',
            ),
            array(
                'title'         => 'Zone Wise Vendor Shipping',
                'type'          => 'Fix',
                'description'   => 'Limit your zone location by default was enabled, which is incorrect. It should only be enabled when admin limit the zone.',
            ),
            array(
                'title'         => 'Vendor Biography Tab',
                'type'          => 'Fix',
                'description'   => 'Line break and youtube video was not working in vendor biography tab. We have fixed the issue in this update.',
            ),
        ),
    ),
    array(
        'version'  => 'Version 2.9.10',
        'released' => '2019-06-19',
        'changes'  => array(
            array(
                'title'         => 'Vendor Biography Tab',
                'type'          => 'New',
                'description'   => 'Add vendor biography tab in dokan store page',
            ),
            array(
                'title'         => 'Filtering and Searching Options',
                'type'          => 'New',
                'description'   => 'Add filtering and searching option in admin report logs area',
            ),
            array(
                'title'         => 'Vendor Vacation',
                'type'          => 'New',
                'description'   => 'Add multiple vacation date system for vendor',
            ),
            array(
                'title'         => 'Refund Request Validation',
                'type'          => 'Fix',
                'description'   => 'Validate refund request in seller dashboard',
            ),
            array(
                'title'         => 'Coupon Validation',
                'type'          => 'Fix',
                'description'   => 'Ensure coupon works on vendors product not the cart',
            ),
            array(
                'title'         => 'Best Selling and Top Rated Widget',
                'type'          => 'Fix',
                'description'   => 'Remove subscription product from best selling and top rated product widget',
            ),
            array(
                'title'         => 'Subscription Renew and Cancellation',
                'type'          => 'Fix',
                'description'   => 'Subscription renew and cancellation with PayPal',
            ),
            array(
                'title'         => 'Store Progressbar',
                'type'          => 'Improvement',
                'description'   => 'Store progress serialization and congrats message on 100% profile completenes',
            ),
        ),
    ),
    array(
        'version'  => 'Version 2.9.9',
        'released' => '2019-05-15',
        'changes'  => array(
            array(
                'title'         => 'Translation issue',
                'type'          => 'Fix',
                'description'   => 'Make coupon strings translatable',
            ),
            array(
                'title'         => 'Report Abuse Module thumbnail',
                'type'          => 'Improvement',
                'description'   => 'Add thumbnail and description of report abuse module',
            ),
            array(
                'title'         => 'Social login and vendor verification',
                'type'          => 'Improvement',
                'description'   => 'Refactor social login and vendor verification module',
            ),
            array(
                'title'         => 'Change Moip brand to wirecard',
                'type'          => 'Improvement',
                'description'   => 'Rename Moip to Wirecard payment gateway',
            ),
        ),
    ),
    array(
        'version'  => 'Version 2.9.8',
        'released' => '2019-05-07',
        'changes'  => array(
            array(
                'title'         => 'Report Abuse',
                'type'          => 'New',
                'description'   => 'Customer will be able to report againts product.',
            ),
            array(
                'title'         => 'Vendor Add Edit',
                'type'          => 'New',
                'description'   => 'Admin will be able to create new Vendor from the backend',
            ),
            array(
                'title'         => 'Dokan Booking',
                'type'          => 'New',
                'description'   => 'Add restricted days functionality in dokan booking module',
            ),
            array(
                'title'         => 'Single Product Multi Vendor',
                'type'          => 'New',
                'description'   => 'Enable SPMV for admins to duplicate products from admin panel',
            ),
            array(
                'title'         => 'Store Category',
                'type'          => 'Fix',
                'description'   => 'Fix store category list table search form',
            ),
            array(
                'title'         => 'Duplicate Subscription Form',
                'type'          => 'Fix',
                'description'   => 'Subscription form is rendering twice in registration form',
            ),
            array(
                'title'         => 'Subscription Cancellation',
                'type'          => 'Fix',
                'description'   => 'Cancel subscription doesn\'t work for manually assigned subscription',
            ),
            array(
                'title'         => 'Vendor Shipping',
                'type'          => 'new',
                'description'   => 'Add wilecard and range matching for vendor shipping zone',
            ),
            array(
                'title'         => 'Depricated Functions',
                'type'          => 'Improvement',
                'description'   => 'Replace get_woocommerce_term_meta with get_term_meta as it was deprecated',
            ),
        ),
    ),
    array(
        'version'  => 'Version 2.9.7',
        'released' => '2019-03-25',
        'changes'  => array(
            array(
                'title'         => 'Store Category',
                'type'          => 'New',
                'description'   => 'Vendor will be able to register under specefic cateogry. ei(Furniture, Mobile)',
            ),
            array(
                'title'         => 'YITH WC Brand Compatible',
                'type'          => 'New',
                'description'   => 'Make Dokan YITH WC Brand add-on compatible',
            ),
            array(
                'title'         => 'Date and refund column in admin logs area',
                'type'          => 'New',
                'description'   => 'Add date and refund column in admin logs area to get more detaild overview.',
            ),
            array(
                'title'         => 'Product Status',
                'type'          => 'New',
                'description'   => 'Change product status according to subscription status',
            ),
            array(
                'title'         => 'Show button for non logged-in user',
                'type'          => 'Fix',
                'description'   => 'Show button for non logged-in user',
            ),
            array(
                'title'         => 'Refund Calculation Issue',
                'type'          => 'Fix',
                'description'   => 'Send refund admin commission to customer',
            ),
            array(
                'title'         => 'Error on subscription cancellation email',
                'type'          => 'Fix',
                'description'   => 'There was an error on subscription cancellation, which has been fixed in this release.',
            ),
            array(
                'title'         => 'Trial Subscription',
                'type'          => 'Improvement',
                'description'   => 'When a vendor subscribe to a trial subscription, make all other trial to non-trial subscription for that vendor',
            ),
            array(
                'title'         => 'Social Login Issue',
                'type'          => 'Fix',
                'description'   => 'Update social login and vendor verification API',
            ),
        ),
    ),
    array(
        'version'  => 'Version 2.9.5',
        'released' => '2019-02-18',
        'changes'  => array(
            array(
                'title'         => 'Automate order refund process via stripe',
                'type'          => 'New',
                'description'   => 'Vendor can now send automatic refund to their customer from vendor order dashboard',
            ),
            array(
                'title'         => 'Add trial subscription (Subscription Module)',
                'type'          => 'New',
                'description'   => 'Admin can now offer trail subscription for vendors',
            ),
            array(
                'title'         => 'Product type & gallery image restriction',
                'type'          => 'New',
                'description'   => 'Admin can now restrict product type & gallery image upload for vendor subscription',
            ),
            array(
                'title'         => 'Privacy and Policy',
                'type'          => 'New',
                'description'   => 'Admin can configure privacy policy info for frontend product enquiry form',
            ),
            array(
                'title'         => 'Email notification for store follow',
                'type'          => 'Fix',
                'description'   => 'Now vendor can get email notification on store follows and unfollows',
            ),
            array(
                'title'         => 'Unable to select country or state in vendor shipping',
                'type'          => 'Fix',
                'description'   => 'Country dropdown not working in shipping and announcement',
            ),
            array(
                'title'         => 'Admin report logs calculation issue is fixed in admin dashboard',
                'type'          => 'Fix',
                'description'   => 'Some calculation issue fixed in admin reports',
            ),
        ),
    ),
    array(
        'version'  => 'Version 2.9.4',
        'released' => '2019-01-23',
        'changes'  => array(
            array(
                'title'         => 'Wholesale Module(Business, Enterprise Package)',
                'type'          => 'New',
                'description'   => 'Added new Wholesale module. Vendor can offer wholesale price for his/her products.',
            ),
            array(
                'title'         => 'Return and Warranty Module(Professional, Business, Enterprise Package)',
                'type'          => 'New',
                'description'   => 'Vendor can offer warranty and return system for their products and customer can take this warranty offers',
            ),
            array(
                'title'         => 'Subscription cancellation email',
                'type'          => 'New',
                'description'   => 'Now admin can get email if any subscription is cancelled by vendor',
            ),
            array(
                'title'         => 'Subscription Unlimited pack',
                'type'          => 'New',
                'description'   => 'Admin can offer unlimited package for vendor subscription',
            ),
            array(
                'title'         => 'MOIP Gateway connection issue',
                'type'          => 'Fix',
                'description'   => 'Change some gateway api params for connection moip gateway',
            ),
        ),
    ),
    array(
        'version'  => 'Version 2.9.3',
        'released' => '2018-12-18',
        'changes'  => array(
            array(
                'title'         => 'ShipStation Module(Business, Enterprise Package)',
                'type'          => 'New',
                'description'   => 'Added new ShipStation module',
            ),
            array(
                'title'         => 'Follow Store Module(Professional, Business, Enterprise Package)',
                'type'          => 'New',
                'description'   => 'Added Follow Store module',
            ),
            array(
                'title'         => 'Product Quick Edit',
                'type'          => 'New',
                'description'   => 'Added Quick edit option for product in vendor dashboard.',
            ),
            array(
                'title'         => 'Searching Option',
                'type'          => 'New',
                'description'   => 'Add searching option in dokan vendor and refund page',
            ),
            array(
                'title'         => 'Admin Tools & Subscription Page Improvement',
                'type'          => 'Improvement',
                'description'   => 'Rewrite admin tools & subscription page in vue js',
            ),
            array(
                'title'         => 'Filter form & Map in Category Page',
                'type'          => 'Fix',
                'description'   => 'Show filter form and map in product category pages (geolocation module)',
            ),
            array(
                'title'         => 'Bookable Product Commission',
                'type'          => 'Fix',
                'description'   => 'Add per product commission option for bookable product',
            ),
            array(
                'title'         => 'Refund Calculation Issue',
                'type'          => 'Fix',
                'description'   => 'Refund calculation is wrong when shipping fee recipient is set to vendor',
            ),
            array(
                'title'         => 'Bulk Refund is Not Working',
                'type'          => 'Fix',
                'description'   => 'Approving batch refund is not working in admin backend',
            ),
            array(
                'title'         => 'Product Stock Issue on Refund',
                'type'          => 'Fix',
                'description'   => 'Increase stock ammount if the product is refunded',
            ),
            array(
                'title'         => 'Category Restriction Issue',
                'type'          => 'Fix',
                'description'   => 'Booking product category restriction for subscription pack is not working',
            ),
        ),
    ),
    array(
        'version'  => 'Version 2.9.2',
        'released' => '2018-11-09',
        'changes'  => array(
            array(
                'title'         => 'Geolocation Module',
                'type'          => 'New',
                'description'   => 'Added zoom level settings in geolocation module.',
            ),
            array(
                'title'         => 'Zone Wise Shipping',
                'type'          => 'New',
                'description'   => 'Added shipping policy and processing time settings in zone wise shipping.',
            ),
            array(
                'title'         => 'Rest API for Store Reviews',
                'type'          => 'New',
                'description'   => 'Added rest API support for store review post type.',
            ),
            array(
                'title'         => 'Show Tax on Bookable Product',
                'type'          => 'Fix',
                'description'   => 'Show tax on bookable product for vendor',
            ),

            array(
                'title'         => 'Product Importing Issue for Subscribed Vendor',
                'type'          => 'Fix',
                'description'   => 'Allow vendor to import only allowed number of products.',
            ),
            array(
                'title'         => 'Product and Order Discount Issue',
                'type'          => 'Fix',
                'description'   => 'Product and order discount for vendor is not working.',
            ),
            array(
                'title'         => 'Shipping Class Issue',
                'type'          => 'Fix',
                'description'   => 'Shipping class is not saving for bookable product.',
            ),
        ),
    ),
    array(
        'version'  => 'Version 2.9.0',
        'released' => '2018-10-03',
        'changes'  => array(
            array(
                'title'         => 'Geolocation Module',
                'type'          => 'New',
                'description'   => 'Enable this module to let the customers search for a specific product or vendor using any location they want.',
            ),
            array(
                'title'         => 'Moip Payment Gateway',
                'type'          => 'New',
                'description'   => 'Use one of the most popular payment system known for it\'s efficiency with Dokan.',
            ),
            array(
                'title'         => 'Allow Vendor to crate tags',
                'type'          => 'New',
                'description'   => 'Your vendors don\'t need to rely on prebuilt tags anymore. Now they can create their own in seconds',
            ),
            array(
                'title'         => 'Responsive Admin Pages',
                'type'          => 'New',
                'description'   => 'All the admin backend pages is now responsive for all devices',
            ),
            array(
                'title'         => 'Staff email for New Order',
                'type'          => 'New',
                'description'   => 'Staff will able to get all emails for new order from customer',
            ),
        ),
    ),
    array(
        'version'  => 'Version 2.8.3',
        'released' => '2018-07-19',
        'changes'  => array(
            array(
                'title'         => 'Live Chat Module',
                'type'          => 'Fix',
                'description'   => 'Right now the chat box is available in customer myaccount page and also make responsive chat box window',
            ),
            array(
                'title'         => 'Statement and Refund',
                'type'          => 'Fix',
                'description'   => 'Change core table structure for refund and statements. Now its easy to understand for vendor to check her statements. Also fixed statement exporting problem',
            ),
            array(
                'title'         => 'Zonewise Shipping',
                'type'          => 'Fix',
                'description'   => 'Shipping state rendering issue fixed. If any country have no states then states not showing undefine problem',
            ),
            array(
                'title'         => 'Stripe Module',
                'type'          => 'Fix',
                'description'   => 'Card is automatically saved if customer does not want to save his/her card info during checkout',
            ),
        ),
    ),
    array(
        'version'  => 'Version 2.8.2',
        'released' => '2018-06-29',
        'changes'  => array(
            array(
                'title'         => 'Live Chat Module',
                'type'          => 'New',
                'description'   => 'Vendors will now be able to provide live chat support to visitors and customers through this TalkJS integration. Talk from anywhere in your store, add attachments, get desktop notifications, enable email notifications, and store all your messages safely in Vendor Inbox.<br><iframe width="560" height="315" src="https://www.youtube.com/embed/BHuTLjY78cY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>',
            ),
            array(
                'title'         => 'Added Refund and Announcement REST API',
                'type'          => 'New',
                'description'   => 'Admins can now modify refund and announcement section of Dokan easily through the Rest API',
            ),
            array(
                'title'         => 'Local pickup is visible when the cost is set to zero',
                'type'          => 'Fix',
                'description'   => 'When local pickup cost in Dokan Zone-wise shipping is set to zero it will show on the cart/checkout page',
            ),
            array(
                'title'         => 'Store Support ticket is visible in customer dashboard support menu',
                'type'          => 'Fix',
                'description'   => 'Now customers can view the support tickets they create in My Account> support ticket area',
            ),
            array(
                'title'         => 'Added tax and shipping functionalities in auction product',
                'type'          => 'Fix',
                'description'   => 'Now admins can add shipping and tax rates for auctionable product',
            ),
            array(
                'title'         => 'Appearance module for admins',
                'type'          => 'Fix',
                'description'   => 'Now Admins can view Color Customizer settings in backend without any problem',
            ),
            array(
                'title'         => 'Unable to delete vendor form admin panel',
                'type'          => 'Fix',
                'description'   => 'Admin was unable to delete a vendor from admin panel',
            ),
        ),
    ),
    array(
        'version'  => 'Version 2.8.0',
        'released' => '2018-05-01',
        'changes'  => array(
            array(
                'title'         => 'Introduction of REST APIs',
                'type'          => 'New',
                'description'   => 'We have introduced REST APIs in dokan',
            ),
            array(
                'title'         => 'Zone wize shipping',
                'type'          => 'New',
                'description'   => 'We have introduced zone wize shipping functionality similar to WooCommerce in dokan. <img src="https://wedevs-com-wedevs.netdna-ssl.com/wp-content/uploads/2018/04/dokan-vendor-dashboard-settings-shipping-method-settings.gif">',
            ),
            array(
                'title'         => 'Earning suggestion for variable product',
                'type'          => 'New',
                'description'   => 'As like simple product, vendor will get to see the earning suggestion for variable product as well',
            ),
            array(
                'title'         => 'Confirmation on subscription cancellation',
                'type'          => 'New',
                'description'   => 'Cancellation of a subscription pack will ask for confirmation',
            ),
            array(
                'title'         => 'Unable to login with social media',
                'type'          => 'Fix',
                'description'   => 'Customer, Seller was unable to login with social media',
            ),
            array(
                'title'         => 'CSV earning report exporting',
                'type'          => 'Fix',
                'description'   => 'There were an issue with CSV report exporting from back end',
            ),
            array(
                'title'         => 'Unable to delete vendor form admin panel',
                'type'          => 'Fix',
                'description'   => 'Admin was unable to delete a vendor from admin panel',
            ),
            array(
                'title'         => 'Seller setup wizard is missing during email verification',
                'type'          => 'Fix',
                'description'   => 'Seller setup wizard after a seller is verified by email was missing',
            ),
            array(
                'title'         => 'Subscription Free pack visibility',
                'type'          => 'Fix',
                'description'   => 'Hide subscription product type from back end when a seller can access the back end',
            ),
            array(
                'title'         => 'Disable back end access for vendor staff',
                'type'          => 'Improvement',
                'description'   => 'Disable back end access for vendor staff for security perpose',
            ),
            array(
                'title'         => 'Updated deprecated functions',
                'type'          => 'Improvement',
                'description'   => 'Updated some deprecated functions',
            ),
            array(
                'title'         => 'Statement calculation',
                'type'          => 'Improvement',
                'description'   => 'Statement calculation',
            ),
            array(
                'title'         => 'Reduction of \'dokan\' text from staff permission',
                'type'          => 'Improvement',
                'description'   => 'Reduction of \'dokan\' text from staff permission',
            ),
            array(
                'title'         => 'Various UI, UX improvement',
                'type'          => 'Improvement',
                'description'   => 'Various UI, UX improvement',
            ),
        ),
    ),
);

function _dokan_changelog_content( $content ) {
    $content = wpautop( $content, true );

    return $content;
}
?>

<div class="wrap dokan-whats-new">
    <h1>What's New in Dokan?</h1>

    <div class="wedevs-changelog-wrapper">

        <?php foreach ( $changelog as $release ) { ?>
            <div class="wedevs-changelog">
                <div class="wedevs-changelog-version">
                    <h3><?php echo esc_html( $release['version'] ); ?></h3>
                    <p class="released">
                        (<?php echo human_time_diff( time(), strtotime( $release['released'] ) ); ?> ago)
                    </p>
                </div>
                <div class="wedevs-changelog-history">
                    <ul>
                        <?php foreach ( $release['changes'] as $change ) { ?>
                            <li>
                                <h4>
                                    <span class="title"><?php echo esc_html( $change['title'] ); ?></span>
                                    <span class="label <?php echo strtolower( $change['type'] ); ?>"><?php echo esc_html( $change['type'] ); ?></span>
                                </h4>

                                <div class="description">
                                    <?php echo _dokan_changelog_content( $change['description'] ); ?>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        <?php } ?>
    </div>

</div>
<?php
$versions = get_option( 'dokan_whats_new_versions', array() );

if ( ! in_array( DOKAN_PRO_PLUGIN_VERSION, $versions, true ) ) {
    $versions[] = DOKAN_PRO_PLUGIN_VERSION;
}

update_option( 'dokan_whats_new_versions', $versions );
?>
<style type="text/css">

.error, .udpated, .info, .notice {
    display: none;
}

.dokan-whats-new h1 {
    text-align: center;
    margin-top: 20px;
    font-size: 30px;
}

.wedevs-changelog {
    display: flex;
    max-width: 920px;
    border: 1px solid #e5e5e5;
    padding: 12px 20px 20px 20px;
    margin: 20px auto;
    background: #fff;
    box-shadow: 0 1px 1px rgba(0,0,0,0.04);
}

.wedevs-changelog-wrapper .wedevs-support-help {

}

.wedevs-changelog .wedevs-changelog-version {
    width: 360px;
}

.wedevs-changelog .wedevs-changelog-version .released {
    font-style: italic;
}

.wedevs-changelog .wedevs-changelog-history {
    width: 100%;
    font-size: 14px;
}

.wedevs-changelog .wedevs-changelog-history li {
    margin-bottom: 30px;
}

.wedevs-changelog .wedevs-changelog-history h4 {
    margin: 0 0 10px 0;
    font-size: 1.3em;
    line-height: 26px;
}

.wedevs-changelog .wedevs-changelog-history p {
    font-size: 14px;
    line-height: 1.5;
}

.wedevs-changelog .wedevs-changelog-history img,
.wedevs-changelog .wedevs-changelog-history iframe {
    margin-top: 30px;
    max-width: 100%;
}

.wedevs-changelog-history span.label {
    margin-left: 10px;
    position: relative;
    color: #fff;
    border-radius: 20px;
    padding: 0 8px;
    font-size: 12px;
    height: 20px;
    line-height: 19px;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    font-weight: normal;
}

span.label.new {
    background: #3778ff;
    border: 1px solid #3778ff;
}

span.label.improvement {
    background: #3aaa55;
    border: 1px solid #3aaa
}

span.label.fix {
    background: #ff4772;
    border: 1px solid #ff4772;
}

</style>
