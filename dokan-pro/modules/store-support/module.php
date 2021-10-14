<?php

namespace WeDevs\DokanPro\Modules\StoreSupport;

use WP_Query;

class Module {
    private $post_type = 'dokan_store_support';

    private $per_page = 15;

    /**
     * Constructor for the Dokan_Store_Support class
     *
     * Sets up all the appropriate hooks and actions
     * within our plugin.
     *
     * @uses register_activation_hook()
     * @uses register_deactivation_hook()
     * @uses is_admin()
     * @uses add_action()
     */
    public function __construct() {
        define( 'DOKAN_STORE_SUPPORT_PLUGIN_VERSION', '1.3.6' );
        define( 'DOKAN_STORE_SUPPORT_DIR', __DIR__ );
        define( 'DOKAN_STORE_SUPPORT_INC_DIR', DOKAN_STORE_SUPPORT_DIR . '/includes' );
        define( 'DOKAN_STORE_SUPPORT_PLUGIN_ASSEST', plugins_url( 'assets', __FILE__ ) );

        add_filter( 'dokan_get_all_cap', [ $this, 'add_capabilities' ], 10 );
        add_filter( 'dokan_get_all_cap', [ $this, 'add_capabilities' ] );
        add_filter( 'dokan_get_all_cap_labels', [ $this, 'add_caps_labels' ] );
        add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_scripts' ] );

        $this->init_hooks();

        require_once DOKAN_STORE_SUPPORT_DIR . '/support-widget.php';

        add_action( 'dokan_activated_module_store_support', [ $this, 'activate' ] );
    }

    /**
     * Initialize all hooks and filters
     *
     * @since  1.0.0
     *
     * @return void
     */
    public function init_hooks() {
        add_action( 'init', [ $this, 'register_dokan_store_support' ], 50 );
        add_action( 'init', [ $this, 'register_dokan_support_topic_status' ], 50 );

        add_action( 'template_redirect', [ $this, 'change_topic_status' ] );

        add_filter( 'dokan_settings_sections', array( $this, 'render_store_support_section' ) );
        add_filter( 'dokan_settings_fields', array( $this, 'render_store_support_settings' ) );

        add_action( 'dokan_after_store_tabs', [ $this, 'generate_support_button' ] );
        add_action( 'woocommerce_after_add_to_cart_button', [ $this, 'generate_support_button_product_page' ] );
        add_action( 'dokan_product_seller_tab_end', [ $this, 'generate_support_button_product_page_inner_tab' ], 10, 2 );
        add_action( 'dokan_after_load_script', [ $this, 'include_scripts' ] );
        add_action( 'dokan_enqueue_scripts', [ $this, 'include_scripts' ] );

        add_action( 'wp_ajax_dokan_support_ajax_handler', [ $this, 'ajax_handler' ] );
        add_action( 'wp_ajax_nopriv_dokan_support_ajax_handler', [ $this, 'ajax_handler' ] );

        add_filter( 'dokan_query_var_filter', [ $this, 'register_support_queryvar' ], 20 );
        add_filter( 'dokan_get_dashboard_nav', [ $this, 'add_store_support_page' ], 20, 1 );
        add_filter( 'dokan_set_template_path', [ $this, 'load_store_support_templates' ], 11, 3 );
        add_action( 'dokan_load_custom_template', [ $this, 'load_template_from_plugin' ], 20 );

        add_filter( 'comment_post_redirect', [ $this, 'redirect_after_comment' ], 15, 2 );
        add_filter( 'edit_comment_link', [ $this, 'remove_comment_edit_link' ], 15, 3 );

        add_action( 'wp_insert_comment', [ $this, 'change_topic_status_on_comment' ], 13, 2 );
        add_action( 'woocommerce_account_menu_items', [ $this, 'place_support_menu' ] );

        add_action( 'dokan_settings_form_bottom', [ $this, 'add_support_btn_title_input' ], 13, 2 );
        add_action( 'dokan_store_profile_saved', [ $this, 'save_supoort_btn_title' ], 13 );

        add_filter( 'dokan_widgets', [ $this, 'register_widgets' ] );
        add_action( 'init', [ $this, 'register_support_tickets_endpoint' ] );
        add_action( 'woocommerce_account_support-tickets_endpoint', [ $this, 'support_tickets_content' ] );
        add_action( 'woocommerce_order_details_after_order_table', [ $this, 'generate_support_button_customer_order_page' ], 11 );

        // flush rewrite rules
        add_action( 'woocommerce_flush_rewrite_rules', [ $this, 'flush_rewrite_rules' ] );

        add_filter( 'woocommerce_email_classes', [ $this, 'load_support_ticekt_emails' ] );
        add_filter( 'dokan_email_list', [ $this, 'set_email_template_directory' ] );
        add_filter( 'dokan_email_actions', [ $this, 'register_email_actions' ] );
    }

    /**
     * Add store support section in Dokan Settings
     *
     * @since 3.2.0
     *
     * @param array $sections
     *
     * @return array
     */
    public function render_store_support_section( $sections ) {
        $sections[] = array(
            'id'    => 'dokan_store_support_setting',
            'title' => __( 'Store Support', 'dokan' ),
            'icon'  => 'dashicons-format-status',
        );

        return $sections;
    }

    /**
     * Add store support options on Dokan Settings under General section
     *
     * @since 3.2.0
     *
     * @param array $settings_fields
     *
     * @return array
     */
    public function render_store_support_settings( $settings_fields ) {
        $settings_fields['dokan_store_support_setting'] = array(
            'enabled_for_customer_order' => array(
                'name'  => 'enabled_for_customer_order',
                'label' => __( 'Display on Order Details', 'dokan' ),
                'type'  => 'checkbox',
                'desc'  => __( 'Display Store Support button on the order details page for customer', 'dokan' ),
            ),
            'store_support_product_page' => array(
                'name'    => 'store_support_product_page',
                'label'   => __( 'Display on Single Product Page', 'dokan' ),
                'desc'    => __( 'Display Store Support button on single product page', 'dokan' ),
                'type'    => 'select',
                'default' => 'above_tab',
                'options' => array(
                    'above_tab'  => __( 'Above Product Tab', 'dokan' ),
                    'inside_tab' => __( 'Inside Vendor Info Product Tab', 'dokan' ),
                    'dont_show'  => __( 'Don\'t Show', 'dokan' ),
                ),
            ),
            'support_button_label' => array(
                'name'    => 'support_button_label',
                'label'   => __( 'Support Buttton Label', 'dokan' ),
                'desc'    => __( 'Default Store Support Button Label', 'dokan' ),
                'default' => __( 'Get Support', 'dokan' ),
                'type'    => 'text',
            ),
        );

        return $settings_fields;
    }

    /**
     * Placeholder for activation function
     *
     * Nothing being called here yet.
     */
    public function activate() {
        global $wp_roles;

        if ( class_exists( 'WP_Roles' ) && ! isset( $wp_roles ) ) {
            $wp_roles = new \WP_Roles();
        }

        $all_cap = [
            'dokan_manage_support_tickets',
        ];

        foreach ( $all_cap as $key => $cap ) {
            $wp_roles->add_cap( 'seller', $cap );
            $wp_roles->add_cap( 'administrator', $cap );
            $wp_roles->add_cap( 'shop_manager', $cap );
        }

        $support_url = dokan_get_page_url( 'myaccount', 'woocommerce', 'support-tickets/' );
        add_option( 'dokan-customer-support', $support_url );

        // flush rewrite rules after plugin is activate
        $this->flush_rewrite_rules();
    }

    /**
     * Flush rewrite rules
     *
     * @since 3.3.1
     *
     * @return void
     */
    public function flush_rewrite_rules() {
        add_filter( 'dokan_query_var_filter', [ $this, 'register_support_queryvar' ], 20 );
        dokan()->rewrite->register_rule();
        flush_rewrite_rules( true );
    }

    /**
     * Enqueue admin scripts
     *
     * Allows plugin assets to be loaded.
     *
     * @uses wp_enqueue_script()
     * @uses wp_localize_script()
     * @uses wp_enqueue_style
     */
    public function enqueue_scripts() {
        wp_enqueue_style( 'dokan-store-support-styles', plugins_url( 'assets/css/style.css', __FILE__ ), false, gmdate( 'Ymd' ) );
        wp_enqueue_script( 'dokan-store-support-scripts', plugins_url( 'assets/js/script.js', __FILE__ ), [ 'jquery' ], gmdate( 'Ymd' ), true );
        wp_localize_script( 'dokan-store-support-scripts', 'wait_string', [ 'wait' => __( 'wait...', 'dokan' ) ] );
    }

    /**
     * Initialize scripts after dokan script loaded
     *
     * @since  1.3.4
     *
     * @return void
     */
    public function include_scripts() {
        wp_enqueue_style( 'dokan-magnific-popup' );
        wp_enqueue_script( 'dokan-popup' );
    }

    /**
     * Set per page value
     *
     * @since 1.3.5
     *
     * @param type $val
     */
    public function set_per_page( $val ) {
        $this->per_page = $val;
    }

    /**
     * Register Custom Post type for support
     *
     * @since 1.0
     *
     * @return void
     */
    public function register_dokan_store_support() {
        $labels = [
            'name'               => _x( 'Topics', 'Post Type General Name', 'dokan' ),
            'singular_name'      => _x( 'Topic', 'Post Type Singular Name', 'dokan' ),
            'menu_name'          => __( 'Support', 'dokan' ),
            'name_admin_bar'     => __( 'Support', 'dokan' ),
            'parent_item_colon'  => __( 'Parent Item', 'dokan' ),
            'all_items'          => __( 'All Topics', 'dokan' ),
            'add_new_item'       => __( 'Add New Topic', 'dokan' ),
            'add_new'            => __( 'Add New', 'dokan' ),
            'new_item'           => __( 'New Topic', 'dokan' ),
            'edit_item'          => __( 'Edit Topic', 'dokan' ),
            'update_item'        => __( 'Update Topic', 'dokan' ),
            'view_item'          => __( 'View Topic', 'dokan' ),
            'search_items'       => __( 'Search Topic', 'dokan' ),
            'not_found'          => __( 'Not found', 'dokan' ),
            'not_found_in_trash' => __( 'Not found in Trash', 'dokan' ),
        ];
        $args   = [
            'label'             => __( 'Store Support', 'dokan' ),
            'description'       => __( 'Support Topics by customer', 'dokan' ),
            'labels'            => $labels,
            'supports'          => [ 'title', 'author', 'comments', 'editor' ],
            'hierarchical'      => false,
            'public'            => false,
            'show_ui'           => false,
            'show_in_menu'      => false,
            'menu_position'     => 5,
            'show_in_admin_bar' => false,
            'show_in_nav_menus' => false,
            'rewrite'           => [ 'slug' => '' ],
            'can_export'        => true,
            'has_archive'       => true,
        ];
        register_post_type( $this->post_type, $args );
    }

    public function register_dokan_support_topic_status() {
        register_post_status(
            'open', [
                'label'                     => __( 'Open', 'dokan' ),
                'public'                    => true,
                'exclude_from_search'       => false,
                'show_in_admin_all_list'    => true,
                'show_in_admin_status_list' => true,
                // translators: %s: total open count
                'label_count'               => _n_noop( 'Open <span class="count">(%s)</span>', 'Open <span class="count">(%s)</span>', 'dokan' ),
            ]
        );

        register_post_status(
            'closed', [
                'label'                     => __( 'Closed', 'dokan' ),
                'public'                    => true,
                'exclude_from_search'       => false,
                'show_in_admin_all_list'    => true,
                'show_in_admin_status_list' => true,
                // translators: %s: total closed count
                'label_count'               => _n_noop( 'Closed <span class="count">(%s)</span>', 'Closed <span class="count">(%s)</span>', 'dokan' ),
            ]
        );
    }

    /**
     * Get store support button
     *
     * @since 2.9.7
     *
     * @param int $store_id
     *
     * @return array
     */
    public function get_support_button( $store_id ) {
        $button = [
            'show'  => false,
            'class' => 'user_logged_out',
            'text'  => '',
        ];

        if ( is_user_logged_in() ) {
            $button['class'] = 'user_logged';
        }

        $store_info = dokan_get_store_info( $store_id );

        if ( isset( $store_info['show_support_btn'] ) && 'yes' === $store_info['show_support_btn'] || isset( $store_info['show_support_btn_product'] ) && 'yes' === $store_info['show_support_btn_product'] ) {
            $button['show'] = true;
        }

        $get_support_default_text = dokan_get_option( 'support_button_label', 'dokan_store_support_setting', __( 'Get Support', 'dokan' ) );

        $button['text'] = ! empty( $store_info['support_btn_name'] ) ? $store_info['support_btn_name'] : $get_support_default_text;

        return $button;
    }

    /**
     * Prints Get support button on store page
     *
     * @since 1.0
     *
     * @param int store_id
     */
    public function generate_support_button( $store_id ) {
        $button = $this->get_support_button( $store_id );

        if ( ! $button['show'] ) {
            return;
        } ?>
        <li class="dokan-store-support-btn-wrap dokan-right">
            <button data-store_id="<?php echo esc_attr( $store_id ); ?>" class="dokan-store-support-btn dokan-btn dokan-btn-theme dokan-btn-sm <?php echo esc_attr( $button['class'] ); ?>"><?php echo esc_html( $button['text'] ); ?></button>
        </li>
        <?php
    }

    /**
     * Prints Get support button on above tab
     *
     * @since 3.2.0
     */
    public function generate_support_button_product_page() {
        $store_support_show = dokan_get_option( 'store_support_product_page', 'dokan_store_support_setting', 'above_tab' );

        if ( 'above_tab' !== $store_support_show ) {
            return;
        }

        $product_id = get_the_ID();
        $store_id   = get_post_field( 'post_author', $product_id );
        $store_info = dokan_get_store_info( $store_id );

        if ( isset( $store_info['show_support_btn_product'] ) && 'no' === $store_info['show_support_btn_product'] ) {
            return;
        }

        $button = $this->get_support_button( $store_id );

        if ( ! $button['show'] ) {
            return;
        }
        ?>
            <button data-store_id="<?php echo esc_attr( $store_id ); ?>" class="dokan-store-support-btn-product dokan-store-support-btn button alt <?php echo esc_attr( $button['class'] ); ?>"><?php echo esc_html( $button['text'] ); ?></button>
        <?php
    }

    /**
     * Prints Get support button on product page inner tab
     *
     * @since 3.2.0
     *
     * @param obj $author
     * @param obj $store
     */
    public function generate_support_button_product_page_inner_tab( $author, $store ) {
        $store_support_show = dokan_get_option( 'store_support_product_page', 'dokan_store_support_setting', 'above_tab' );

        if ( 'inside_tab' !== $store_support_show ) {
            return;
        }

        $store_info = dokan_get_store_info( $author->ID );

        if ( isset( $store_info['show_support_btn_product'] ) && 'no' === $store_info['show_support_btn_product'] ) {
            return;
        }

        $button = $this->get_support_button( $author->ID );

        if ( ! $button['show'] ) {
            return;
        }
        ?>
            <button data-store_id="<?php echo esc_attr( $author->ID ); ?>" class="dokan-store-support-btn-product dokan-store-support-btn button alt <?php echo esc_attr( $button['class'] ); ?>"><?php echo esc_html( $button['text'] ); ?></button>
        <?php
    }

    /**
     * Prints Get support button on order details page for customers
     *
     * @since 3.2.3
     *
     * @param obj $order
     */
    public function generate_support_button_customer_order_page( $order ) {
        $allow_for_order = dokan_get_option( 'enabled_for_customer_order', 'dokan_store_support_setting', 'off' );

        if ( 'on' !== $allow_for_order ) {
            return;
        }

        if ( empty( $order ) ) {
            return;
        }

        if ( $order->get_meta( 'has_sub_order' ) ) {
            return;
        }

        $order_id   = $order->get_id();
        $store_id   = dokan_get_seller_id_by_order( $order_id );
        $store_info = dokan_get_store_info( $store_id );

        if ( isset( $store_info['show_support_btn_product'] ) && 'no' === $store_info['show_support_btn_product'] ) {
            return;
        }

        $button = $this->get_support_button( $store_id );

        if ( ! $button['show'] ) {
            return;
        }
        ?>
            <button data-order_id="<?php echo esc_attr( $order_id ); ?>" data-store_id="<?php echo esc_attr( $store_id ); ?>" class="dokan-store-support-btn-product dokan-store-support-btn button alt <?php echo esc_attr( $button['class'] ); ?>"><?php echo esc_html( $button['text'] ); ?></button>
        <?php
    }

    /**
     * Ajax handler for all frontend Ajax submits
     *
     * @since 1.0
     *
     * @return void
     */
    public function ajax_handler() {
        $get_data = sanitize_text_field( wp_unslash( $_POST['data'] ) );

        if ( is_user_logged_in() && 'login_form' === $get_data ) {
            $get_data = 'get_support_form';
        }

        if ( ! is_user_logged_in() && 'get_support_form' === $get_data ) {
            $get_data = 'login_form';
        }

        switch ( $get_data ) {
            case 'login_form':
                wp_send_json_success( $this->login_form() );
                break;

            case 'get_support_form':
                wp_send_json_success( $this->get_support_form() );
                break;

            case 'login_data_submit':
                $this->login_data_submit();
                break;

            case 'support_msg_submit':
                $this->support_msg_submit();
                break;

            default:
                wp_send_json_success( '<div>Error!! try again!</div>' );
                break;
        }
    }

    /**
     * Generate login form
     *
     * @since 1.0
     *
     * @return string Login form Html
     */
    public function login_form() {
        ob_start();
        $login_url = apply_filters( 'dokan_redirect_login', dokan_get_page_url( 'myaccount', 'woocommerce' ) );
        ?>

        <h2><?php esc_html_e( 'Please Login to Continue', 'dokan' ); ?></h2>

        <form class="dokan-form-container" id="dokan-support-login">
            <div class="dokan-form-group">
                <label class="dokan-form-label" for="login-name"><?php esc_html_e( 'Username :', 'dokan' ); ?></label>
                <input required class="dokan-form-control" type="text" name='login-name' id='login-name'/>
            </div>
            <div class="dokan-form-group">
                <label class="dokan-form-label" for="login-password"><?php esc_html_e( 'Password :', 'dokan' ); ?></label>
                <input required class="dokan-form-control" type="password" name='login-password' id='login-password'/>
            </div>
            <?php wp_nonce_field( 'dokan-support-login-action', 'dokan-support-login-nonce' ); ?>
            <div class="dokan-form-group">
                <input id='support-submit-btn' type="submit" value="<?php esc_html_e( 'Login', 'dokan' ); ?>" class="dokan-w5 dokan-btn dokan-btn-theme"/>
            </div>
            <p class="dokan-popup-create-an-account">
                &nbsp;&nbsp; <?php esc_html_e( 'or', 'dokan' ); ?> &nbsp;&nbsp; <a href="<?php echo esc_url( $login_url ); ?>" class="dokan-btn dokan-btn-theme"><?php esc_html_e( 'Create an account', 'dokan' ); ?></a>
            </p>
        </form>
        <div class="dokan-clearfix"></div>
        <?php
        return ob_get_clean();
    }

    /**
     * Generate Support form
     *
     * @since 1.0
     *
     * @return string support form html
     */
    public function get_support_form( $seller_id = '' ) {
        global $user_login;

        $seller_id = $seller_id == '' ? ( ( isset( $_POST['store_id'] ) ) ? $_POST['store_id'] : 0 ) : $seller_id;
        $order_id  = isset( $_POST['order_id'] ) ? (int) $_POST['order_id'] : 0;

        $customer_orders = apply_filters( 'dokan_store_support_order_id_select_in_form', dokan_get_customer_orders_by_seller( dokan_get_current_user_id(), $seller_id ) );

        ob_start();
        ?>
        <div class="dokan-support-intro-user"><strong><?php printf( __( 'Hi, %s', 'dokan' ), $user_login ); ?></strong></div>
        <div class="dokan-support-intro-text"><?php esc_html_e( 'Create a new support topic', 'dokan' ); ?></div>
        <form class="dokan-form-container" id="dokan-support-form">
            <div class="dokan-form-group">
                <label class="dokan-form-label" for="dokan-support-subject"><?php esc_html_e( 'Subject :', 'dokan' ); ?></label>
                <input required class="dokan-form-control" type="text" name='dokan-support-subject' id='dokan-support-subject'/>
            </div>
            <div class="dokan-form-group">
                <?php if ( ! empty( $customer_orders ) ) { ?>
                    <select class="dokan-form-control dokan-select" name="order_id">
                        <option><?php esc_html_e( 'Select Order ID', 'dokan' ); ?></option>
                        <?php
                            foreach ( $customer_orders as $order ) :
                            $selected = $order_id && ( $order === $order_id ) ? 'selected' : '';
                        ?>
                            <option value='<?php echo esc_attr( $order ); ?>' <?php echo esc_attr( $selected ); ?>><?php esc_html_e( 'Order', 'dokan' ); ?> #<?php echo esc_html( $order ); ?></option>
                        <?php endforeach; ?>
                    </select>
                <?php } ?>
            </div>

            <div class="dokan-form-group">
                <label class="dokan-form-label" for="dokan-support-msg"><?php esc_html_e( 'Message :', 'dokan' ); ?></label>
                <textarea required class="dokan-form-control" name='dokan-support-msg' rows="5" id='dokan-support-msg'></textarea>
            </div>
            <input type="hidden" name='store_id' value="<?php echo $seller_id; ?>" />

            <?php wp_nonce_field( 'dokan-support-form-action', 'dokan-support-form-nonce' ); ?>
            <div class="dokan-form-group">
                <input id='support-submit-btn' type="submit" value="<?php esc_html_e( 'Submit', 'dokan' ); ?>" class="dokan-w5 dokan-btn dokan-btn-theme"/>
            </div>
        </form>
        <div class="dokan-clearfix"></div>
        <?php
        return ob_get_clean();
    }

    /**
     * Handles login data and signs in user
     *
     * @since 1.0
     *
     * @return string success|failed
     */
    public function login_data_submit() {
        parse_str( $_POST['form_data'], $postdata );

        if ( ! wp_verify_nonce( $postdata['dokan-support-login-nonce'], 'dokan-support-login-action' ) ) {
            wp_send_json_error( __( 'Are you cheating?', 'dokan' ) );
        }
        $info                  = [];
        $info['user_login']    = $postdata['login-name'];
        $info['user_password'] = $postdata['login-password'];
        $user_signon           = wp_signon( $info, false );

        if ( is_wp_error( $user_signon ) ) {
            wp_send_json(
                [
                    'success' => false,
                    'msg'     => __( 'Invalid Username or Password', 'dokan' ),
                ]
            );
        } else {
            wp_send_json(
                [
                    'success' => true,
                    'msg'     => __( 'Logged in', 'dokan' ),
                ]
            );
        }
    }

    /**
     * Create post from fronend AJAX data
     *
     * @since 1.0
     *
     * @return string success | failed
     */
    public function support_msg_submit( $postdata = [] ) {
        if ( empty( $postdata ) ) {
            parse_str( $_POST['form_data'], $postdata );

            if ( ! wp_verify_nonce( $postdata['dokan-support-form-nonce'], 'dokan-support-form-action' ) ) {
                wp_send_json_error( __( 'Are you cheating?', 'dokan' ) );
            }
        }

        $my_post = [
            'post_title'     => sanitize_text_field( $postdata['dokan-support-subject'] ),
            'post_content'   => wp_kses_post( $postdata['dokan-support-msg'] ),
            'post_status'    => 'open',
            'post_author'    => dokan_get_current_user_id(),
            'post_type'      => 'dokan_store_support',
            'comment_status' => 'open',
        ];

        $post_id = wp_insert_post( apply_filters( 'dss_new_ticket_insert_args', $my_post ) );

        if ( $post_id ) {
            update_post_meta( $post_id, 'store_id', $postdata['store_id'] );
            update_post_meta( $post_id, 'order_id', $postdata['order_id'] );

            $mailer = WC()->mailer();
            do_action( 'dokan_new_ticket_created_notify', $postdata['store_id'], $post_id );

            $success_msg = __( 'Thank you. Your ticket has been submitted!', 'dokan' );

            do_action( 'dss_new_ticket_created', $post_id, $postdata['store_id'] );

            wp_send_json(
                [
                    'success' => true,
                    'msg'     => apply_filters( 'dss_ticket_submission_msg', $success_msg ),
                ]
            );
        } else {
            $error_msg = __( 'Sorry, something went wrong! Couldn\'t create the ticket.', 'dokan' );
            wp_send_json(
                [
                    'success' => false,
                    'msg'     => apply_filters( 'dss_ticket_submission_error_msg', $error_msg ),
                ]
            );
        }
    }

    /**
     * Load new support ticket email class
     *
     * @param  array $emails
     *
     * @return array
     */
    public function load_support_ticekt_emails( $emails ) {

        require_once DOKAN_STORE_SUPPORT_INC_DIR . '/class-new-support-ticket-email.php';
        require_once DOKAN_STORE_SUPPORT_INC_DIR . '/class-reply-to-store-support-ticket-email.php';
        require_once DOKAN_STORE_SUPPORT_INC_DIR . '/class-reply-to-user-support-ticket-email.php';

        $emails['Dokan_New_Support_Ticket']            = new \Dokan_New_Support_Ticket();
        $emails['Dokan_Reply_To_Store_Support_Ticket'] = new \Dokan_Reply_To_Store_Support_Ticket();
        $emails['Dokan_Reply_To_User_Support_Ticket']  = new \Dokan_Reply_To_User_Support_Ticket();

        return $emails;
    }

    /**
     * Set Proper template directory.
     *
     * @param array $template_array
     *
     * @return array
     */
    public function set_email_template_directory( $template_array ) {
        array_push( $template_array, 'new-support-ticket.php', 'reply-to-store-support-ticket.php', 'reply-to-user-support-ticket.php' );

        return $template_array;
    }

    /**
     * Register Dokan Email actions for WC
     *
     * @since 3.3.4
     *
     * @param array $actions
     *
     * @return $actions
     */
    public function register_email_actions( $actions ) {
        $actions[] = 'dokan_new_ticket_created_notify';
        $actions[] = 'dokan_reply_to_store_ticket_created_notify';
        $actions[] = 'dokan_reply_to_user_ticket_created_notify';

        return $actions;
    }

    /**
     * Register dokan query vars
     *
     * @since 1.0
     *
     * @param array $vars
     *
     * @return array new $vars
     */
    public function register_support_queryvar( $vars ) {
        $vars[] = 'support';
        $vars[] = 'support-tickets';

        return $vars;
    }

    /**
     * Add menu on seller dashboard
     *
     * @since 1.0
     *
     * @param array $urls
     *
     * @return array $urls
     */
    public function add_store_support_page( $urls ) {
        if ( ! current_user_can( 'dokan_manage_support_tickets' ) ) {
            return $urls;
        }

        if ( dokan_is_seller_enabled( get_current_user_id() ) ) {
            $counts = $this->topic_count( dokan_get_current_user_id() );
            $count  = 0;

            if ( $counts ) {
                $count = wp_list_pluck( $counts, 'count', 'post_status' );
            }

            $defaults = [
                'open'   => 0,
                'closed' => 0,
            ];

            $count = wp_parse_args( $count, $defaults );

            $open       = $count['open'];
            $closed     = $count['closed'];
            $count_text = $open ? ' (' . $open . ')' : '';

            $urls['support'] = [
                'title' => __( 'Support', 'dokan' ) . $count_text,
                'icon'  => '<i class="fa fa-life-ring"></i>',
                'url'   => dokan_get_navigation_url( 'support' ),
                'pos'   => 199,
            ];
        }

        return $urls;
    }

    /**
     * Get plugin path
     *
     * @since 2.8
     *
     * @return void
     **/
    public function plugin_path() {
        return untrailingslashit( plugin_dir_path( __FILE__ ) );
    }

    /**
     * Load Dokan Store support templates
     *
     * @since 2.8
     *
     * @return void
     **/
    public function load_store_support_templates( $template_path, $template, $args ) {
        if ( isset( $args['is_store_support'] ) && $args['is_store_support'] ) {
            return $this->plugin_path() . '/templates';
        }

        return $template_path;
    }

    /**
     * Register page templates
     *
     * @since 1.0
     *
     * @param array $query_vars
     *
     * @return array $query_vars
     */
    public function load_template_from_plugin( $query_vars ) {
        if ( isset( $query_vars['support'] ) ) {
            if ( ! current_user_can( 'dokan_manage_support_tickets' ) ) {
                dokan_get_template_part(
                    'global/dokan-error', '', [
                        'deleted' => false,
                        'message' => __( 'You have no permission to view this page', 'dokan' ),
                    ]
                );
            } else {
                dokan_get_template_part( 'store-support/support', '', [ 'is_store_support' => true ] );
            }
        }

        if ( isset( $query_vars['support-tickets'] ) ) {
            dokan_get_template_part( 'store-support/support-tickets', '', [ 'is_store_support' => true ] );
        }
    }

    /**
     * Query for support topics using seller id
     *
     * @since 1.0
     *
     * @param int $seller_id
     *
     * @return WP_Query $query
     */
    public function get_support_topics_by_seller( $seller_id ) {
        $pagenum = isset( $_GET['pagenum'] ) ? absint( $_GET['pagenum'] ) : 1;
        $offset  = ( $pagenum - 1 ) * $this->per_page;
        $paged   = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        // WP_Query arguments

        $args = [
            'post_type'      => 'dokan_store_support',
            'posts_per_page' => $this->per_page,
            'offset'         => $offset,
            'paged'          => $paged,
            'meta_query'     => [
                [
                    'key'     => 'store_id',
                    'value'   => $seller_id,
                    'compare' => '=',
                    'type'    => 'NUMERIC',
                ],
            ],
        ];

        $args = apply_filters( 'dokan_get_topic_by_seller_qry_args', $args );

        $args['post_status'] = 'open';

        if ( isset( $_GET['ticket_status'] ) ) {
            $args['post_status'] = $_GET['ticket_status'];
        }

        // The Query
        $query = new WP_Query( $args );

        $this->total_query_result = $query->found_posts;

        return $query;
    }

    /**
     * Print html of all topics for given seller
     *
     * @since 1.0
     *
     * @param int $seller_id
     *
     * @return void
     */
    public function print_support_topics_by_seller( $seller_id ) {
        $query = $this->get_support_topics_by_seller( $seller_id );
        ?>
        <div class="dokan-support-topics-list">
            <?php
                if ( $query->posts ) {
                    ?>
            <table class="dokan-table dokan-support-table">
                <thead>
                    <tr>
                        <th><?php esc_html_e( 'Topic', 'dokan' ); ?></th>
                        <th><?php esc_html_e( 'Title', 'dokan' ); ?></th>
                        <th><?php esc_html_e( 'Customer', 'dokan' ); ?></th>
                        <th><?php esc_html_e( 'Status', 'dokan' ); ?></th>
                        <th><?php esc_html_e( 'Date', 'dokan' ); ?></th>
                        <th><?php esc_html_e( 'Action', 'dokan' ); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ( $query->posts as $topic ) {
                        $topic_url = trailingslashit( dokan_get_navigation_url( 'support' ) . '' . $topic->ID );
                        ?>
                        <tr>
                            <td>
                                <a href="<?php echo $topic_url; ?>"
                                    <strong>
                                        <?php echo '#' . $topic->ID; ?>
                                    </strong>
                                </a>
                            </td>
                            <td class="column-primary">
                                <a href="<?php echo $topic_url; ?>">
                                    <?php echo $topic->post_title; ?>
                                </a>

                                <button type="button" class="toggle-row"></button>
                            </td>
                            <td data-title="<?php esc_html_e( 'Customer', 'dokan' ); ?>">
                                <div class="dokan-support-customer-name">
                                    <?php echo get_avatar( $topic->post_author, 50 ); ?>
                                    <strong><?php echo get_user_meta( $topic->post_author, 'nickname', true ); ?></strong>
                                </div>
                            </td>
                            <?php
                                switch ( $topic->post_status ) {
                                    case 'open':
                                        $c_status     = __( 'closed', 'dokan' );
                                        $btn_icon     = 'fa-close';
                                        $topic_status = 'dokan-label-success';
                                        $btn_title    = __( 'close topic', 'dokan' );
                                        break;

                                    case 'closed':
                                        $c_status     = __( 'open', 'dokan' );
                                        $btn_icon     = 'fa-file-o';
                                        $topic_status = 'dokan-label-danger';
                                        $btn_title    = __( 're-open topic', 'dokan' );
                                        break;

                                    default:
                                        $c_status     = __( 'closed', 'dokan' );
                                        $btn_icon     = 'fa-close';
                                        $topic_status = 'dokan-label-success';
                                        $btn_title    = __( 'close topic', 'dokan' );
                                        break;
                                }
                            ?>
                            <td data-title="<?php esc_attr_e( 'Status', 'dokan' ); ?>"><span class="dokan-label <?php echo $topic_status; ?>"><?php echo 'open' === $topic->post_status ? __( 'Open', 'dokan' ) : __( 'Close', 'dokan' ); ?></span></td>
                            <td class="dokan-order-date" data-title="<?php esc_attr_e( 'Date', 'dokan' ); ?>"><span><?php echo get_the_date( 'F j, Y \a\t g:i a', $topic->ID ); ?></span></td>
                            <td data-title="<?php esc_attr_e( 'Action', 'dokan' ); ?>">
                                <a class="dokan-btn dokan-btn-default dokan-btn-sm tips dokan-support-status-change" onclick="return confirm('<?php esc_attr_e( 'Are you sure?', 'dokan' ); ?>');" href="<?php echo wp_nonce_url( add_query_arg( [ 'action' => 'dokan-support-topic-status', 'topic_id' => $topic->ID, 'ticket_status' => $c_status ], dokan_get_navigation_url( 'support' ) ), 'dokan-change-topic-status' ); ?>" title="" data-changing_post_id="<?php echo $topic->ID; ?>" data-original-title="<?php echo $btn_title; ?>"><i class="fa <?php echo $btn_icon; ?>">&nbsp;</i></a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                <?php } else { ?>
                    <div class="dokan-error">
                        <?php esc_html_e( 'No tickets found!', 'dokan' ); ?>
                    </div>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <?php
        $this->topics_pagination( 'support' );
        wp_reset_postdata();
    }

    /**
     * Query single topic for given seller id
     *
     * @since 1.0
     *
     * @param int $topic_id
     * @param int $seller_id
     *
     * @return WP_Query $query_dss
     */
    public function get_single_topic( $topic_id, $seller_id ) {
        $args_t = [
            'p'          => $topic_id,
            'post_type'  => $this->post_type,
            'meta_query' => [
                [
                    'key'     => 'store_id',
                    'value'   => $seller_id,
                    'compare' => '=',
                    'type'    => 'NUMERIC',
                ],
            ],
        ];

        $args_t = apply_filters( 'dokan_support_get_single_topic_args', $args_t );

        $query_dss = new WP_Query( $args_t );

        return $query_dss;
    }

    /**
     * Query single topic for given customer id
     *
     * @since 1.0
     *
     * @param int $topic_id
     * @param int $customer_id
     *
     * @return WP_Query $query_dss
     */
    public function get_single_topic_by_customer( $topic_id, $customer_id ) {
        $args_t = [
            'p'         => $topic_id,
            'post_type' => $this->post_type,
            'author'    => $customer_id,
        ];

        $query_dss = new WP_Query( $args_t );

        return $query_dss;
    }

    /**
     * Print Html for single topic with given topic object
     *
     * @since 1.0
     *
     * @param object $topic Custom post type 'dokan_store_support' object
     *
     * @return void
     */
    public function print_single_topic( $topic ) {
        global $wp;

        $is_customer         = 0;
        $back_url            = dokan_get_navigation_url( 'support' );
        $is_seller_dashboard = dokan_is_seller_dashboard() ? 1 : 0;

        if ( isset( $wp->query_vars['support-tickets'] ) ) {
            $is_customer = 1;
            $back_url    = trailingslashit( dokan_get_page_url( 'myaccount', 'woocommerce', 'support-tickets/' ) );
        }

        if ( $topic->have_posts() ) {
            while ( $topic->have_posts() ) {
                $topic->the_post();
                ?>

                <a href="<?php echo $back_url; ?>">&larr; <?php esc_html_e( 'Back to Tickets', 'dokan' ); ?></a>

                <div class="dokan-support-single-title">
                    <h1><?php the_title(); ?></h1>
                    <?php
                    $order_id = get_post_meta( get_the_ID(), 'order_id', true );

                    if ( $order_id && ( $order = wc_get_order( $order_id ) ) ) {
                        $ticket_ref_url = $order->get_view_order_url();

                        if ( $is_seller_dashboard ) {
                            $ticket_ref_url = wp_nonce_url( add_query_arg( array( 'order_id' => $order_id ), dokan_get_navigation_url( 'orders' ) ), 'dokan_view_order' );
                        }

                        ?>
                        <span class="order-reference" >
                            <h3>
                                <?php echo '<a href="' . esc_url( $ticket_ref_url ) . '"><strong>' . sprintf( __( 'Referenced Order #%s', 'dokan' ), esc_attr( $order_id ) ) . '</strong></a>'; ?>
                            </h3>
                        </span>
                        <?php
                    }
                    ?>
                </div>
                <div class="dokan-suppport-topic-body dokan-clearfix">
                    <div class="dokan-support-user-image dokan-w3">
                        <?php echo get_avatar( get_the_author_meta( 'ID' ), 90 ); ?>

                        <div class="dokan-support-user-name">
                            <h4><?php the_author(); ?></h4>
                            <p class="dokan-support-date-time"><?php the_date( 'F j, Y \a\t g:i a' ); ?></p>
                        </div>
                    </div>
                    <div class="dokan-support-reply dokan-w9">
                        <p><?php the_content(); ?></p>
                    </div>
                </div>

                <ul class="dokan-support-commentlist">
                    <?php
                    $ticket_status = get_post_status( get_the_ID() );
                    // Gather comments for a specific page/post
                    $comments = get_comments(
                        [
                            'post_id' => get_the_ID(),
                            'status'  => 'approve', //Change this to the type of comments to be displayed
                        ]
                    );

                    // Display the list of comments
                    wp_list_comments(
                        [
                            'max_depth'         => 0,
                            'page'              => 1,
                            'per_page'          => 100, //Allow comment pagination
                            'reverse_top_level' => true, //Show the latest comments at the top of the list
                            'format'            => 'html5',
                            'callback'          => [ $this, 'support_comment_format' ],
                        ],
                        $comments
                    );
                    ?>
                </ul>
                <?php
            }
            ?>

            <div class="dokan-panel dokan-panel-default">
                <div class="dokan-panel-heading">
                    <?php
                    $heading = $ticket_status == 'open' ? __( 'Add Reply', 'dokan' ) : __( 'Ticket Closed', 'dokan' );
                    ?>
                    <strong><?php echo $heading; ?></strong>

                    <?php
                    if ( ! $is_customer && $ticket_status == 'closed' ) {
                        echo '<em>' . __( '(Adding reply will re-open the ticket)', 'dokan' ) . '</em>';
                    }
                    ?>
                </div>

                <div class="dokan-panel-body dokan-support-reply-form">
                    <?php
                    if ( $ticket_status === 'open' || ! $is_customer ) {
                        $comment_textarea = '<p class="comment-form-comment"><label for="Reply ">' . //_x( 'Give Reply ', 'dokan' ) .
                                            '</label><textarea class="comment-textarea" required="required" id="comment" name="comment" rows="3" aria-required="true">' . ' ' .
                                            '</textarea></p>';
                        $select_topic_status = '<select class="dokan-support-topic-select dokan-form-control dokan-w3" name="dokan-topic-status-change">
                                                    <option value="0">' . __( '-- Change Status --', 'dokan' ) . '</option>
                                                    <option value="1">' . __( 'Close Ticket', 'dokan' ) . '</option>
                                                </select>';

                        $comment_field = $comment_textarea;

                        if ( ! $is_customer ) {
                            $comment_field = $comment_textarea . $select_topic_status . '<div class="clearfix"></div>';
                        }

                        $comment_args = [
                            'id_form'              => 'dokan-support-commentform',
                            'id_submit'            => 'submit',
                            'class_submit'         => 'submit dokan-btn dokan-btn-theme',
                            'name_submit'          => 'submit',
                            'title_reply'          => __( 'Leave a Reply', 'dokan' ),
                            'title_reply_to'       => '',
                            'cancel_reply_link'    => __( 'Cancel Reply', 'dokan' ),
                            'label_submit'         => __( 'Submit Reply', 'dokan' ),
                            'format'               => 'html5',
                            'comment_field'        => $comment_field,
                            'must_log_in'          => '<p class="must-log-in">' .
                                sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.' ), wp_login_url( apply_filters( 'the_permalink', get_permalink() ) ) ) . '</p>',
                            'logged_in_as'         => '',
                            'comment_notes_before' => '',
                            'comment_notes_after'  => '',
                        ];
                        comment_form( $comment_args, get_the_ID() );
                    } else {
                        ?>
                        <div class="dokan-alert dokan-alert-warning">
                            <?php esc_html_e( 'This ticket has been closed. Open a new support ticket if you have any further query.', 'dokan' ); ?>
                        </div>
                        <?php
                    }

                    wp_reset_query();
                    ?>
                </div>
            </div>
            <?php
        } else {
            ?>
            <div class="dokan-error">
                <?php esc_html_e( 'Topic not found', 'dokan' ); ?>
            </div>
            <?php
        }
    }

    /**
     * Redirect users to same topic after a comment is submitted if it is dokan_store_support post type
     *
     * @since 1.0
     *
     * @param string $location
     * @param object $comment
     *
     * @return string location
     */
    public function redirect_after_comment( $location, $comment ) {
        if ( get_post_type( $comment->comment_post_ID ) == $this->post_type ) {
            return $_SERVER['HTTP_REFERER'];
        }

        return $location;
    }

    /**
     * Print support topics on customer my account page
     *
     * @since 1.0
     *
     * @return void
     */
    public function my_account_support_topics() {
        ?>
        <h2><?php esc_html_e( 'Support Tickets', 'dokan' ); ?></h2>
        <div class="dokan-support-topics">
            <a href="<?php echo dokan_get_page_url( 'myaccount', 'woocommerce', 'support-tickets/' ); ?>"><button class="dokan-btn dokan-btn-theme"><?php esc_html_e( 'View Support Tickets', 'dokan' ); ?></button></a>
        </div>
        <?php
    }

    /**
     * Prints html of all topics for given customer
     *
     * @since 1.0
     *
     * @param int $customer_id
     *
     * @return void
     */
    public function print_support_topics_by_customer( $customer_id ) {
        $query = $this->get_topics_by_customer( $customer_id );
        ?>
        <div class="dokan-support-topics-list">
            <?php if ( $query->posts ) { ?>
            <table class="dokan-table dokan-support-table">
                <thead>
                    <tr>
                        <th><?php esc_html_e( 'Topic', 'dokan' ); ?></th>
                        <th><?php esc_html_e( 'Store Name', 'dokan' ); ?></th>
                        <th><?php esc_html_e( 'Title', 'dokan' ); ?></th>
                        <th><?php esc_html_e( 'Status', 'dokan' ); ?></th>
                        <th><?php esc_html_e( 'Date', 'dokan' ); ?></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach ( $query->posts as $topic ) {
                    $topic_url = trailingslashit( dokan_get_page_url( 'myaccount', 'woocommerce', 'support-tickets/' . '' . $topic->ID ) );
                    ?>
                    <tr>
                        <td>
                            <a href="<?php echo $topic_url; ?>"
                               <strong>
                                   <?php echo '#' . $topic->ID; ?>
                                </strong>
                            </a>
                        </td>
                        <td>
                            <div class="dokan-support-customer-name">
                                <?php
                                    $store_info = dokan_get_store_info( $topic->store_id );
                                    $store_name = isset( $store_info['store_name'] ) ? $store_info['store_name'] : get_user_meta( $topic->store_id, 'nickname', true );
                                    $store_url  = dokan_get_store_url( $topic->store_id );
                                ?>
                                <strong><a href="<?php echo esc_url( $store_url ); ?>" target="_blank"><?php echo esc_html( $store_name ); ?></a></strong>
                            </div>
                        </td>
                        <td>
                            <a href="<?php echo $topic_url; ?>">
                                <?php echo $topic->post_title; ?>
                            </a>
                        </td>
                        <?php
                        switch ( $topic->post_status ) {
                            case 'open':
                                $c_status     = __( 'closed', 'dokan' );
                                $btn_icon     = 'fa-close';
                                $topic_status = 'dokan-label-success';
                                $btn_title    = __( 'close topic', 'dokan' );
                                break;

                            case 'closed':
                                $c_status     = __( 'open', 'dokan' );
                                $btn_icon     = 'fa-file-o';
                                $topic_status = 'dokan-label-danger';
                                $btn_title    = __( 're-open topic', 'dokan' );
                                break;

                            default:
                                $c_status     = __( 'closed', 'dokan' );
                                $btn_icon     = 'fa-close';
                                $topic_status = 'dokan-label-success';
                                $btn_title    = __( 'close topic', 'dokan' );
                                break;
                        }
                        ?>
                        <td><span class="dokan-label <?php echo $topic_status; ?>"><?php echo $topic->post_status; ?></span></td>

                        <td class="dokan-order-date"> <span><?php echo $topic->post_date; ?></span></td>
                    </tr>
                    <?php
                }
                ?>
                <?php } else { ?>
                    <div class="dokan-error">
                        <?php esc_html_e( 'No tickets found!', 'dokan' ); ?>
                    </div>
                <?php } ?>
                </tbody>
            </table>

        </div>
        <?php
        $this->topics_pagination( 'support-tickets' );
        wp_reset_postdata();
    }

    /**
     * Query all topics by given customer
     *
     * @since 1.0
     *
     * @param int $customer_id
     *
     * @return WP_Query $topic_query
     */
    public function get_topics_by_customer( $customer_id ) {
        $pagenum = isset( $_GET['pagenum'] ) ? absint( $_GET['pagenum'] ) : 1;
        $offset  = ( $pagenum - 1 ) * $this->per_page;
        $paged   = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

        $args_c = [
            'author'         => $customer_id,
            'post_type'      => 'dokan_store_support',
            'posts_per_page' => $this->per_page,
            'offset'         => $offset,
            'paged'          => $paged,
            'orderby'        => 'post_date',
            'order'          => 'DESC',
        ];
        $args_c['post_status'] = 'open';

        if ( isset( $_GET['ticket_status'] ) ) {
            $args_c['post_status'] = $_GET['ticket_status'];
        }

        $topic_query = new WP_Query( $args_c );

        $this->total_query_result = $topic_query->found_posts;

        return $topic_query;
    }

    /**
     * Disable edit of comments on comment listing
     *
     * @since 1.0
     *
     * @return string
     */
    public function remove_comment_edit_link( $link, $comment_id, $text ) {
        $comment = get_comment( $comment_id );

        if ( get_post_type( $comment->comment_post_ID ) == $this->post_type ) {
            $link = '';

            return $link;
        }

        return $link;
    }

    /**
     * Show pagination on support listing
     *
     * @since 1.0
     *
     * @param array $query_var
     *
     * @return void
     */
    public function topics_pagination( $query_var ) {
        $pagenum      = isset( $_GET['pagenum'] ) ? absint( $_GET['pagenum'] ) : 1;
        $num_of_pages = ceil( $this->total_query_result / $this->per_page );

        if ( is_account_page() ) {
            $base_url = home_url( 'my-account/support-tickets/' );
        } else {
            $base_url = dokan_get_navigation_url( $query_var );
        }

        $page_links = paginate_links(
            [
                'base'      => $base_url . '%_%',
                'format'    => '?pagenum=%#%',
                'add_args'  => false,
                'prev_text' => __( '&laquo;', 'dokan' ),
                'next_text' => __( '&raquo;', 'dokan' ),
                'total'     => $num_of_pages,
                'current'   => $pagenum,
                'type'      => 'array',
            ]
        );

        if ( $page_links ) {
            echo "<ul class='pagination'>\n\t<li>";
            echo join( "</li>\n\t<li>", $page_links );
            echo "</li>\n</ul>\n";
        }
    }

    /**
     * Print comments into formatted html, callback for wp_comment_list function
     *
     * @since 1.0
     */
    public function support_comment_format( $comment, $args, $depth ) {
        $GLOBALS['comment'] = $comment;
        ?>

        <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">

            <div class="dokan-suppport-topic-body">
                <div class="dokan-support-user-image dokan-w3">
                    <?php echo get_avatar( $comment, 50 ); ?>
                    <div class="dokan-support-user-name">
                        <h4> <?php comment_author(); ?> </h4>
                        <p class="dokan-support-date-time">
                            <time>
                                <?php echo get_comment_time() . '<span class="human-diff"> ( ' . human_time_diff( time(), get_comment_time( 'U', true ) ) . ' )</span>'; ?>
                            </time>
                        </p>
                    </div>
                </div>
                <div class="dokan-support-reply dokan-w8">
                    <p><?php comment_text(); ?></p>
                </div>
                <div class="dokan-clearfix"></div>
            </div>
        <?php
    }

    /**
     * Change status of topic from support list action
     *
     * @since 1.0
     *
     * @return void
     */
    public function change_topic_status() {
        if ( ! is_user_logged_in() ) {
            return;
        }

        if ( ! dokan_is_user_seller( dokan_get_current_user_id() ) ) {
            return;
        }

        $defaults = [
            'topic_id'      => 0,
            'ticket_status' => '',
        ];

        $defaults = wp_parse_args( $_GET, $defaults );

        if ( $defaults['topic_id'] != 0 && $defaults['ticket_status'] != '' ) {
            $post_id = $defaults['topic_id'];
            $status  = $defaults['ticket_status'];

            $my_post = [
                'ID'          => $post_id,
                'post_status' => $status,
            ];
            wp_update_post( $my_post );

            $status = $status == 'open' ? 'closed' : 'open';

            wp_redirect( dokan_get_navigation_url( 'support' ) . "?ticket_status=$status" );
        }
    }

    /**
     * Change topic status from comment section
     *
     * @param int $comment_id
     * @param obj $comment
     *
     * @return void
     */
    public function change_topic_status_on_comment( $comment_id, $comment ) {
        $post_id     = (int) $comment->comment_post_ID;
        $parent_post = get_post( $post_id );

        if ( empty( $parent_post ) || $parent_post->post_type !== $this->post_type ) {
            return;
        }

        $store_id = get_post_meta( $post_id, 'store_id', true );

        do_action( 'dss_new_comment_inserted', $post_id, $store_id );

        if ( ! isset( $_POST['dokan-topic-status-change'] ) ) {
            $this->notify_ticket_author( $comment, $parent_post, true );

            return;
        }

        // override default comment notification
        add_filter( 'comment_notification_recipients', '__return_empty_array', PHP_INT_MAX );
        $this->notify_ticket_author( $comment, $parent_post );

        // if a new comment is on a closed topic by seller, it should re-open
        if ( $parent_post->post_status == 'closed' ) {
            wp_update_post(
                [
                    'ID'          => $post_id,
                    'post_status' => 'open',
                ]
            );

            return;
        }

        if ( $_POST['dokan-topic-status-change'] == 1 || $_POST['dokan-topic-status-change'] == 2 ) {
            $status = $_POST['dokan-topic-status-change'] == 1 ? 'closed' : 'open';

            $my_post = [
                'ID'          => $post_id,
                'post_status' => $status,
            ];

            wp_update_post( $my_post );
        }
    }

    /**
     * Send email notification on a new reply
     *
     * @param object   $comment
     * @param \WP_Post $ticket
     * @param bool     $to_store
     *
     * @return void
     */
    public function notify_ticket_author( $comment, $ticket, $to_store = false ) {
        $mailer             = WC()->mailer();
        $store_id           = get_post_meta( $ticket->ID, 'store_id', true );
        $store              = dokan_get_store_info( $store_id );
        $store_name         = $store['store_name'];
        $store_email        = get_userdata( $store_id )->user_email;
        $url                = dokan_get_navigation_url( 'support' ) . $ticket->ID;
        $account_ticket_url = trailingslashit( dokan_get_page_url( 'myaccount', 'woocommerce', 'support-tickets/' . $ticket->ID ) );

        $email_data = array(
            'ticket_title'       => $ticket->post_title,
            'account_ticket_url' => $account_ticket_url,
            'store_name'         => $store_name,
            'store_url'          => dokan_get_store_url( $store_id ),
            'ticket_url'         => $url,
            'ticket_id'          => $ticket->ID,
            'to_email'           => $to_store ? $store_email : get_userdata( $ticket->post_author )->user_email,
        );

        if ( $to_store ) {
            do_action( 'dokan_reply_to_store_ticket_created_notify', $store_id, $email_data );
        } else {
            do_action( 'dokan_reply_to_user_ticket_created_notify', $store_id, $email_data );
        }
    }

    /**
     * Support button text input field generator
     *
     * @param int   $current_user
     * @param array $profile_info
     *
     * @return void
     */
    public function add_support_btn_title_input( $current_user, $profile_info ) {
        $support_text           = isset( $profile_info['support_btn_name'] ) ? $profile_info['support_btn_name'] : '';
        $enable_support         = isset( $profile_info['show_support_btn'] ) ? $profile_info['show_support_btn'] : 'yes';
        $enable_support_product = isset( $profile_info['show_support_btn_product'] ) ? $profile_info['show_support_btn_product'] : 'yes';
        $store_support_product_page = dokan_get_option( 'store_support_product_page', 'dokan_store_support_setting', 'dont_show' );
        ?>
            <div class="dokan-form-group">
                <label class="dokan-w3 dokan-control-label"><?php esc_html_e( 'Enable Support', 'dokan' ); ?></label>
                <div class="dokan-w5 dokan-text-left">
                    <div class="checkbox">
                        <label>
                            <input type="hidden" name="support_checkbox" value="no">
                            <input type="checkbox" id="support_checkbox" name="support_checkbox" value="yes" <?php checked( $enable_support, 'yes' ); ?>> <?php esc_html_e( 'Show support button in store', 'dokan' ); ?>
                        </label>
                        <?php if ( 'dont_show' !== $store_support_product_page ) : ?>
                        <label>
                            <input type="hidden" name="support_checkbox_product" value="no">
                            <input type="checkbox" id="support_checkbox_product" name="support_checkbox_product" value="yes" <?php checked( $enable_support_product, 'yes' ); ?>> <?php esc_html_e( 'Show support button in single product', 'dokan' ); ?>
                        </label>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="dokan-form-group support-enable-check">
                <label class="dokan-w3 dokan-control-label" for="dokan_support_btn_name"><?php esc_html_e( 'Support Button text', 'dokan' ); ?></label>

                <div class="dokan-w5 dokan-text-left">
                    <input id="dokan_support_btn_name" value="<?php echo $support_text; ?>" name="dokan_support_btn_name" placeholder="<?php esc_html_e( 'Get Support', 'dokan' ); ?>" class="dokan-form-control" type="text">
                </div>
            </div>
        <?php
    }

    /**
     * Save support button text on store settings
     *
     * @param int   $user_id
     * @param array $profile_info
     */
    public function save_supoort_btn_title( $user_id ) {
        $profile_info = dokan_get_store_info( $user_id );

        $get_post = wp_unslash( $_POST );

        if ( isset( $get_post['dokan_support_btn_name'] ) && isset( $get_post['support_checkbox_product'] ) ) {
            $profile_info['show_support_btn_product'] = sanitize_text_field( $get_post['support_checkbox_product'] );

            update_user_meta( $user_id, 'dokan_profile_settings', $profile_info );
        }

        if ( isset( $get_post['dokan_support_btn_name'] ) && isset( $get_post['support_checkbox'] ) ) {
            $profile_info['support_btn_name'] = sanitize_text_field( $get_post['dokan_support_btn_name'] );
            $profile_info['show_support_btn'] = sanitize_text_field( $get_post['support_checkbox'] );

            update_user_meta( $user_id, 'dokan_profile_settings', $profile_info );
        }
    }

    /**
     * Return counts for all topic status count
     *
     * @since 1.0
     *
     * @global $wpdb
     *
     * @param int $store_id
     *
     * @return object|bool $result
     */
    public function topic_count( $store_id ) {
        global $wpdb;

        $where = apply_filters(
            'dss_topic_count_where_clause',
            "WHERE tpm.meta_key ='store_id'
                                AND tpm.meta_value = $store_id"
        );

        $sql = "SELECT `post_status`, count(`ID`) as count
                FROM {$wpdb->posts} as tp
                LEFT JOIN {$wpdb->postmeta} as tpm
                ON tp.ID = tpm.post_id
                $where
                GROUP BY tp.post_status";
        $results = $wpdb->get_results( $sql );

        if ( $results ) {
            return $results;
        }

        return false;
    }

    /**
     * Return counts for all ticket status count for customer
     *
     * @since 1.0
     *
     * @global $wpdb
     *
     * @param int $customer_id
     *
     * @return object|bool $result
     */
    public function topic_count_by_customer( $customer_id ) {
        global $wpdb;

        $sql = "SELECT tp.post_status, count( tp.ID ) AS count FROM {$wpdb->posts} AS tp
                WHERE tp.post_author = '$customer_id' AND tp.post_type = '$this->post_type'
                GROUP BY tp.post_status";
        $results = $wpdb->get_results( $sql );

        if ( $results ) {
            return $results;
        }

        return false;
    }

    /**
     * Generate support topic status list with count
     *
     * @since 1.0
     *
     * @return void
     */
    public function support_topic_status_list( $seller = true ) {
        if ( $seller ) {
            $counts    = $this->topic_count( dokan_get_current_user_id() );
            $redir_url = dokan_get_navigation_url( 'support' );
        } else {
            $counts    = $this->topic_count_by_customer( dokan_get_current_user_id() );
            $redir_url = get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) . 'support-tickets';
        }

        $count = 0;

        if ( $counts ) {
            $count = wp_list_pluck( $counts, 'count', 'post_status' );
        }

        $defaults = [
            'open'   => 0,
            'closed' => 0,
        ];

        $count  = wp_parse_args( $count, $defaults );
        $open   = $count['open'];
        $closed = $count['closed'];
        $all    = $open + $closed;

        $current_status = isset( $_GET['ticket_status'] ) ? sanitize_text_field( wp_unslash( $_GET['ticket_status'] ) ) : 'open';
        ?>
        <ul class="dokan-support-topic-counts subsubsub">
            <li <?php echo $current_status === 'all' ? 'class = "active"' : ''; ?>>
                <a href="<?php echo $redir_url . '?ticket_status=all'; ?>"><?php echo __( 'All Tickets', 'dokan' ) . ' (' . $all . ') |'; ?></a>
            </li>
            <li <?php echo $current_status === 'open' ? 'class = "active"' : ''; ?>>
                <a href="<?php echo $redir_url . '?ticket_status=open'; ?>"><?php echo __( 'Open Tickets', 'dokan' ) . ' (' . $open . ') |'; ?></a>
            </li>
            <li <?php echo $current_status === 'closed' ? 'class = "active"' : ''; ?>>
                <a href="<?php echo $redir_url . '?ticket_status=closed'; ?>"><?php echo __( 'Closed Tickets', 'dokan' ) . ' (' . $closed . ')'; ?></a>
            </li>
        </ul>
        <?php
    }

    /**
     * Add Support ticket in My Account Menu
     *
     * @since 1.3.3
     *
     * @param arrat $items
     *
     * @return $items
     */
    public function place_support_menu( $items ) {
        unset( $items['customer-logout'] );
        $items['support-tickets']   = __( 'Seller Support Tickets', 'dokan' );
        $items['customer-logout']   = __( 'Logout', 'dokan' );

        return $items;
    }

    /**
     * Add capabilities
     *
     * @return void
     */
    public function add_capabilities( $capabilities ) {
        $capabilities['store_support'] = [
            'dokan_manage_support_tickets' => __( 'Manage support ticket', 'dokan' ),
        ];

        return $capabilities;
    }

    /**
     * Add caps labels
     *
     * @since 3.0.0
     *
     * @param string $caps
     *
     * @return array
     */
    public function add_caps_labels( $caps ) {
        $caps['store_support'] = __( 'Store Support', 'dokan' );

        return $caps;
    }

    /**
     * Register widgets
     *
     * @since 2.8
     *
     * @return void
     */
    public function register_widgets( $widgets ) {
        $widgets['store_support'] = 'Dokan_Store_Support_Widget';

        return $widgets;
    }

    /**
     * Register store support endpoint on my-account page
     *
     * @since 2.9.17
     *
     * @return void
     */
    public function register_support_tickets_endpoint() {
        add_rewrite_endpoint( 'support-tickets', EP_PAGES );
    }

    /**
     * Load support tickets content
     *
     * @since 2.9.17
     *
     * @return void
     */
    public function support_tickets_content() {
        dokan_get_template_part( 'store-support/support-tickets', '', [ 'is_store_support' => true ] );
    }
}