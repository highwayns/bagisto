<?php

return [
    'security-warning' => '不審活動が見つかりました!!!',
    'nothing-to-delete' => '削除しません',

    'layouts' => [
        'my-account' => 'まいアカウント',
        'profile' => 'プロファイル',
        'address' => 'アドレス',
        'reviews' => 'レビュー一覧',
        'wishlist' => '要望リスト',
        'orders' => '注文一覧',
        'downloadable-products' => 'ダウンロード可能商品一覧',
    ],

    'common' => [
        'error' => 'エラー発生しました、後ほど試してください.',
        'no-result-found' => 'レコードが見つかりません.'
    ],

    'home' => [
        'page-title' => config('app.name') . ' - ホーム',
        'featured-products' => '商品特集',
        'new-products' => '新商品一覧',
        'verify-email' => 'Eメールを確認してください',
        'resend-verify-email' => '確認メール再送信'
    ],

    'header' => [
        'title' => 'アカウント',
        'dropdown-text' => 'カート, 注文 & 要望を管理する',
        'sign-in' => 'ログイン',
        'sign-up' => '登録',
        'account' => 'アカウント',
        'cart' => 'カート',
        'profile' => 'プロファイル',
        'wishlist' => '要望',
        'cart' => 'カート',
        'logout' => 'ログアウト',
        'search-text' => '商品検索'
    ],

    'minicart' => [
        'view-cart' => 'カートを見る',
        'checkout' => 'お会計',
        'cart' => 'カート',
        'zero' => '0'
    ],

    'footer' => [
        'subscribe-newsletter' => 'ニュースサブスクリプト',
        'subscribe' => 'サブスクリプト',
        'locale' => 'ローカル',
        'currency' => '通貨',
    ],

    'subscription' => [
        'unsubscribe' => 'サブスクリプト取消',
        'subscribe' => 'サブスクリプト',
        'subscribed' => 'サブスクリプトが成功しました.',
        'not-subscribed' => 'サブスクリプトが失敗しました,後ほど試してください.',
        'already' => 'すでにサブスクリプトしました.',
        'unsubscribed' => 'サブスクリプト取消成功しました.',
        'already-unsub' => 'すでにサブスクリプト取消しました.',
        'not-subscribed' => 'エラー! メール送信エラーが発生しました, 後ほど試してください.'
    ],

    'search' => [
        'no-results' => '検索結果なし',
        'page-title' => config('app.name') . ' - 検索',
        'found-results' => '検索結果一覧',
        'found-result' => '検索結果'
    ],

    'reviews' => [
        'title' => 'タイトル',
        'add-review-page-title' => 'レビュー追加',
        'write-review' => 'レビュー作成',
        'review-title' => 'レビュータイトル',
        'product-review-page-title' => '商品レビュー',
        'rating-reviews' => '評価 & レビュー',
        'submit' => '提出',
        'delete-all' => 'すべてレビューを削除しました',
        'ratingreviews' => ':rating 評価 & :review レビュー',
        'star' => '★',
        'percentage' => ':percentage %',
        'id-star' => '★',
        'name' => '名前'
    ],

    'customer' => [
        'signup-text' => [
            'account_exists' => 'アカウントすでに存在している',
            'title' => 'ログイン'
        ],

        'signup-form' => [
            'page-title' => '顧客 - 新規登録',
            'title' => '新規登録',
            'firstname' => '姓',
            'lastname' => '名',
            'email' => 'Eメール',
            'password' => 'パスワード',
            'confirm_pass' => 'パスワード（確認）',
            'button_title' => '登録',
            'agree' => '同意',
            'terms' => '利用規約',
            'conditions' => '条件',
            'using' => 'このウェブサイト使用には',
            'agreement' => '同意',
            'success' => 'アカウント作成成功.',
            'success-verify' => 'アカウント作成成功, 確認メールをご覧ください。.',
            'success-verify-email-unsent' => 'アカウント作成成功, 確認メール送信しません.',
            'failed' => 'エラー! アカウント作成失敗, 後ほど試してください.',
            'already-verified' => 'Your account is already verified Or please try sending a new verification email again.',
            'verification-not-sent' => 'Error! Problem in sending verification email, please try again later.',
            'verification-sent' => 'Verification email sent',
            'verified' => 'Your account has been verified, try to login now.',
            'verify-failed' => 'We cannot verify your mail account.',
            'dont-have-account' => 'You do not have account with us.',
            'success' => 'Account Created Successfully',
            'success-verify' => 'Account Created Successfully, an e-mail has been sent for verification.',
            'success-verify-email-unsent' => 'Account created successfully, but verification e-mail unsent',
            'failed' => 'Error! Cannot Create Your Account, Try Again Later',
            'already-verified' => 'Your Account is already verified Or Please Try Sending A New Verification Email Again',
            'verification-not-sent' => 'Error! Problem In Sending Verification Email, Try Again Later',
            'verification-sent' => 'Verification Email Sent',
            'verified' => 'Your Account Has Been Verified, Try To Login Now',
            'verify-failed' => 'We Cannot Verify Your Mail Account',
            'dont-have-account' => 'You Do Not Have Account With Us',
            'customer-registration' => 'Customer Registered Successfully'
        ],

        'login-text' => [
            'no_account' => 'Do not have account',
            'title' => 'Sign Up',
        ],

        'login-form' => [
            'page-title' => 'Customer - Login',
            'title' => 'Sign In',
            'email' => 'Email',
            'password' => 'Password',
            'forgot_pass' => 'Forgot Password?',
            'button_title' => 'Sign In',
            'remember' => 'Remember Me',
            'footer' => '© Copyright :year Webkul Software, All rights reserved',
            'invalid-creds' => 'Please check your credentials and try again.',
            'verify-first' => 'Verify your email account first.',
            'not-activated' => 'Your activation seeks admin approval',
            'resend-verification' => 'Resend verification mail again'
        ],

        'forgot-password' => [
            'title' => 'パスワードが忘れ',
            'email' => 'Eメール',
            'submit' => 'パスワード再設定メール送信',
            'page_title' => '顧客 - パスワードが忘れ'
        ],

        'reset-password' => [
            'title' => 'パスワード再設定',
            'email' => 'Eメール',
            'password' => 'パスワード',
            'confirm-password' => 'パスワード（確認）',
            'back-link-title' => 'ログインへ',
            'submit-btn-title' => 'パスワード再設定'
        ],

        'account' => [
            'dashboard' => '顧客 - プロファイル編集',
            'menu' => 'メニュー',

            'profile' => [
                'index' => [
                    'page-title' => '顧客 - プロファイル',
                    'title' => 'プロファイル',
                    'edit' => '編集',
                ],

                'edit-success' => 'プロファイル更新成功.',
                'edit-fail' => 'プロファイル更新失敗, 後ほど試してください.',
                'unmatch' => '元パスワードと一致しません.',

                'fname' => '姓',
                'lname' => '名',
                'gender' => '性別',
                'dob' => '生年月日',
                'phone' => '電話',
                'email' => 'Eメール',
                'opassword' => '元パスワード',
                'password' => 'パスワード',
                'cpassword' => 'パスワード（確認）',
                'submit' => 'プロファイル更新',

                'edit-profile' => [
                    'title' => 'プロファイル編集',
                    'page-title' => '顧客 - プロファイル更新'
                ]
            ],

            'address' => [
                'index' => [
                    'page-title' => '顧客 - アドレス',
                    'title' => 'アドレス',
                    'add' => 'アドレス追加',
                    'edit' => '編集',
                    'empty' => 'アドレスがありません, アドレスを追加しましょう。',
                    'create' => 'アドレス作成',
                    'delete' => '削除',
                    'make-default' => '初期に設定',
                    'default' => '初期',
                    'contact' => '宛先',
                    'confirm-delete' =>  'すべてアドレス削除してよろしいでしょうか。?',
                    'default-delete' => '初期アドレス変更ができません.',
                    'enter-password' => 'パスワードを入力してください.',
                ],

                'create' => [
                    'page-title' => '顧客 - アドレス',
                    'title' => 'アドレス追加',
                    'street-address' => '市区町村',
                    'country' => '国',
                    'state' => '都道府県',
                    'select-state' => '都道府県を選択してください',
                    'city' => '城市',
                    'postcode' => '郵便番号',
                    'phone' => '電話',
                    'submit' => 'アドレス保存',
                    'success' => 'アドレス保存成功.',
                    'error' => 'アドレス保存失敗.'
                ],

                'edit' => [
                    'page-title' => '顧客 - アドレス編集',
                    'title' => 'アドレス編集',
                    'street-address' => '市区町村',
                    'submit' => 'アドレス保存',
                    'success' => 'アドレス更新成功.',
                ],
                'delete' => [
                    'success' => 'アドレス削除成功',
                    'failure' => 'アドレス削除失敗',
                    'wrong-password' => 'パスワードが不正 !'
                ]
            ],

            'order' => [
                'index' => [
                    'page-title' => 'Customer - Orders',
                    'title' => 'Orders',
                    'order_id' => 'Order ID',
                    'date' => 'Date',
                    'status' => 'Status',
                    'total' => 'Total',
                    'order_number' => 'Order Number'
                ],

                'view' => [
                    'page-tile' => 'Order #:order_id',
                    'info' => 'Information',
                    'placed-on' => 'Placed On',
                    'products-ordered' => 'Products Ordered',
                    'invoices' => 'Invoices',
                    'shipments' => 'Shipments',
                    'SKU' => 'SKU',
                    'product-name' => 'Name',
                    'qty' => 'Qty',
                    'item-status' => 'Item Status',
                    'item-ordered' => 'Ordered (:qty_ordered)',
                    'item-invoice' => 'Invoiced (:qty_invoiced)',
                    'item-shipped' => 'shipped (:qty_shipped)',
                    'item-canceled' => 'Canceled (:qty_canceled)',
                    'item-refunded' => 'Refunded (:qty_refunded)',
                    'price' => 'Price',
                    'total' => 'Total',
                    'subtotal' => 'Subtotal',
                    'shipping-handling' => 'Shipping & Handling',
                    'tax' => 'Tax',
                    'discount' => 'Discount',
                    'tax-percent' => 'Tax Percent',
                    'tax-amount' => 'Tax Amount',
                    'discount-amount' => 'Discount Amount',
                    'grand-total' => 'Grand Total',
                    'total-paid' => 'Total Paid',
                    'total-refunded' => 'Total Refunded',
                    'total-due' => 'Total Due',
                    'shipping-address' => 'Shipping Address',
                    'billing-address' => 'Billing Address',
                    'shipping-method' => 'Shipping Method',
                    'payment-method' => 'Payment Method',
                    'individual-invoice' => 'Invoice #:invoice_id',
                    'individual-shipment' => 'Shipment #:shipment_id',
                    'print' => 'Print',
                    'invoice-id' => 'Invoice Id',
                    'order-id' => 'Order Id',
                    'order-date' => 'Order Date',
                    'bill-to' => 'Bill to',
                    'ship-to' => 'Ship to',
                    'contact' => 'Contact',
                    'refunds' => 'Refunds',
                    'individual-refund' => 'Refund #:refund_id',
                    'adjustment-refund' => 'Adjustment Refund',
                    'adjustment-fee' => 'Adjustment Fee',
                ]
            ],

            'wishlist' => [
                'page-title' => 'Customer - Wishlist',
                'title' => 'Wishlist',
                'deleteall' => 'Delete All',
                'moveall' => 'Move All Products To Cart',
                'move-to-cart' => 'Move To Cart',
                'error' => 'Cannot add product to wishlist due to unknown problems, please checkback later',
                'add' => 'Item successfully added to wishlist',
                'remove' => 'Item successfully removed from wishlist',
                'moved' => 'Item successfully moved To cart',
                'option-missing' => 'Product options are missing, so item can not be moved to the wishlist.',
                'move-error' => 'Item cannot be moved to wishlist, Please try again later',
                'success' => 'Item successfully added to wishlist',
                'failure' => 'Item cannot be added to wishlist, Please try again later',
                'already' => 'Item already present in your wishlist',
                'removed' => 'Item successfully removed from wishlist',
                'remove-fail' => 'Item cannot Be removed from wishlist, Please try again later',
                'empty' => 'You do not have any items in your wishlist',
                'remove-all-success' => 'All the items from your wishlist have been removed',
            ],

            'downloadable_products' => [
                'title' => 'Downloadable Products',
                'order-id' => 'Order Id',
                'date' => 'Date',
                'name' => 'Title',
                'status' => 'Status',
                'pending' => 'Pending',
                'available' => 'Available',
                'expired' => 'Expired',
                'remaining-downloads' => 'Remaining Downloads',
                'unlimited' => 'Unlimited',
                'download-error' => 'Download link has been expired.'
            ],

            'review' => [
                'index' => [
                    'title' => 'Reviews',
                    'page-title' => 'Customer - Reviews'
                ],

                'view' => [
                    'page-tile' => 'Review #:id',
                ]
            ]
        ]
    ],

    'products' => [
        'layered-nav-title' => 'Shop By',
        'price-label' => 'As low as',
        'remove-filter-link-title' => 'Clear All',
        'sort-by' => 'Sort By',
        'from-a-z' => 'From A-Z',
        'from-z-a' => 'From Z-A',
        'newest-first' => 'Newest First',
        'oldest-first' => 'Oldest First',
        'cheapest-first' => 'Cheapest First',
        'expensive-first' => 'Expensive First',
        'show' => 'Show',
        'pager-info' => 'Showing :showing of :total Items',
        'description' => 'Description',
        'specification' => 'Specification',
        'total-reviews' => ':total Reviews',
        'total-rating' => ':total_rating Ratings & :total_reviews Reviews',
        'by' => 'By :name',
        'up-sell-title' => 'We found other products you might like!',
        'related-product-title' => 'Related Products',
        'cross-sell-title' => 'More choices',
        'reviews-title' => 'Ratings & Reviews',
        'write-review-btn' => 'Write Review',
        'choose-option' => 'Choose an option',
        'sale' => 'Sale',
        'new' => 'New',
        'empty' => 'No products available in this category',
        'add-to-cart' => 'Add To Cart',
        'buy-now' => 'Buy Now',
        'whoops' => 'Whoops!',
        'quantity' => 'Quantity',
        'in-stock' => 'In Stock',
        'out-of-stock' => 'Out Of Stock',
        'view-all' => 'View All',
        'select-above-options' => 'Please select above options first.',
        'less-quantity' => 'Quantity can not be less than one.',
        'samples' => 'Samples',
        'links' => 'Links',
        'sample' => 'Sample',
        'name' => 'Name',
        'qty' => 'Qty',
        'starting-at' => 'Starting at',
        'customize-options' => 'Customize Options',
        'choose-selection' => 'Choose a selection',
        'your-customization' => 'Your Customization',
        'total-amount' => 'Total Amount',
        'none' => 'None'
    ],

    // 'reviews' => [
    //     'empty' => 'You Have Not Reviewed Any Of Product Yet'
    // ]

    'buynow' => [
        'no-options' => 'Please select options before buying this product.'
    ],

    'checkout' => [
        'cart' => [
            'integrity' => [
                'missing_fields' => 'Some required fields missing for this product.',
                'missing_options' => 'Options are missing for this product.',
                'missing_links' => 'Downloadable links are missing for this product.',
                'qty_missing' => 'Atleast one product should have more than 1 quantity.'
            ],
            'create-error' => 'Encountered some issue while making cart instance.',
            'title' => 'Shopping Cart',
            'empty' => 'Your shopping cart is empty',
            'update-cart' => 'Update Cart',
            'continue-shopping' => 'Continue Shopping',
            'proceed-to-checkout' => 'Proceed To Checkout',
            'remove' => 'Remove',
            'remove-link' => 'Remove',
            'move-to-wishlist' => 'Move to Wishlist',
            'move-to-wishlist-success' => 'Item moved to wishlist.',
            'move-to-wishlist-error' => 'Cannot move item to wishlist, please try again later.',
            'add-config-warning' => 'Please select option before adding to cart.',
            'quantity' => [
                'quantity' => 'Quantity',
                'success' => 'Cart Item(s) successfully updated.',
                'illegal' => 'Quantity cannot be lesser than one.',
                'inventory_warning' => 'The requested quantity is not available, please try again later.',
                'error' => 'Cannot update the item(s) at the moment, please try again later.'
            ],

            'item' => [
                'error_remove' => 'No items to remove from the cart.',
                'success' => 'Item was successfully added to cart.',
                'success-remove' => 'Item was removed successfully from the cart.',
                'error-add' => 'Item cannot be added to cart, please try again later.',
            ],
            'quantity-error' => 'Requested quantity is not available.',
            'cart-subtotal' => 'Cart Subtotal',
            'cart-remove-action' => 'Do you really want to do this ?',
            'partial-cart-update' => 'Only some of the product(s) were updated',
            'link-missing' => ''
        ],

        'onepage' => [
            'title' => 'Checkout',
            'information' => 'Information',
            'shipping' => 'Shipping',
            'payment' => 'Payment',
            'complete' => 'Complete',
            'billing-address' => 'Billing Address',
            'sign-in' => 'Sign In',
            'first-name' => 'First Name',
            'last-name' => 'Last Name',
            'email' => 'Email',
            'address1' => 'Street Address',
            'city' => 'City',
            'state' => 'State',
            'select-state' => 'Select a region, state or province',
            'postcode' => 'Zip/Postcode',
            'phone' => 'Telephone',
            'country' => 'Country',
            'order-summary' => 'Order Summary',
            'shipping-address' => 'Shipping Address',
            'use_for_shipping' => 'Ship to this address',
            'continue' => 'Continue',
            'shipping-method' => 'Select Shipping Method',
            'payment-methods' => 'Select Payment Method',
            'payment-method' => 'Payment Method',
            'summary' => 'Order Summary',
            'price' => 'Price',
            'quantity' => 'Quantity',
            'billing-address' => 'Billing Address',
            'shipping-address' => 'Shipping Address',
            'contact' => 'Contact',
            'place-order' => 'Place Order',
            'new-address' => 'Add New Address',
            'save_as_address' => 'Save as Address',
            'apply-coupon' => 'Apply Coupon',
            'amt-payable' => 'Amount Payable',
            'got' => 'Got',
            'free' => 'Free',
            'coupon-used' => 'Coupon Used',
            'applied' => 'Applied',
            'back' => 'Back',
            'cash-desc' => 'Cash On Delivery',
            'money-desc' => 'Money Transfer',
            'paypal-desc' => 'Paypal Standard',
            'free-desc' => 'This is a free shipping',
            'flat-desc' => 'This is a flat rate',
            'password' => 'Password',
            'login-exist-message' => 'You already have an account with us, Sign in or continue as guest.'
        ],

        'total' => [
            'order-summary' => 'Order Summary',
            'sub-total' => 'Items',
            'grand-total' => 'Grand Total',
            'delivery-charges' => 'Delivery Charges',
            'tax' => 'Tax',
            'discount' => 'Discount',
            'price' => 'price',
            'disc-amount' => 'Amount discounted',
            'new-grand-total' => 'New Grand Total',
            'coupon' => 'Coupon',
            'coupon-applied' => 'Coupon Applied',
            'remove-coupon' => 'Remove Coupon',
            'cannot-apply-coupon' => 'Cannot Apply Coupon'
        ],

        'success' => [
            'title' => 'Order successfully placed',
            'thanks' => 'Thank you for your order!',
            'order-id-info' => 'Your order id is #:order_id',
            'info' => 'We will email you, your order details and tracking information'
        ]
    ],

    'mail' => [
        'order' => [
            'subject' => 'New Order Confirmation',
            'heading' => 'Order Confirmation!',
            'dear' => 'Dear :customer_name',
            'dear-admin' => 'Dear :admin_name',
            'greeting' => 'Thanks for your Order :order_id placed on :created_at',
            'greeting-admin' => 'Order Id :order_id placed on :created_at',
            'summary' => 'Summary of Order',
            'shipping-address' => 'Shipping Address',
            'billing-address' => 'Billing Address',
            'contact' => 'Contact',
            'shipping' => 'Shipping Method',
            'payment' => 'Payment Method',
            'price' => 'Price',
            'quantity' => 'Quantity',
            'subtotal' => 'Subtotal',
            'shipping-handling' => 'Shipping & Handling',
            'tax' => 'Tax',
            'discount' => 'Discount',
            'grand-total' => 'Grand Total',
            'final-summary' => 'Thanks for showing your interest in our store we will send you tracking number once it shipped',
            'help' => 'If you need any kind of help please contact us at :support_email',
            'thanks' => 'Thanks!',
            'cancel' => [
                'subject' => 'Order Cancel Confirmation',
                'heading' => 'Order Cancelled',
                'dear' => 'Dear :customer_name',
                'greeting' => 'You Order with order id #:order_id placed on :created_at has been cancelled',
                'summary' => 'Summary of Order',
                'shipping-address' => 'Shipping Address',
                'billing-address' => 'Billing Address',
                'contact' => 'Contact',
                'shipping' => 'Shipping Method',
                'payment' => 'Payment Method',
                'subtotal' => 'Subtotal',
                'shipping-handling' => 'Shipping & Handling',
                'tax' => 'Tax',
                'discount' => 'Discount',
                'grand-total' => 'Grand Total',
                'final-summary' => 'Thanks for showing your interest in our store',
                'help' => 'If you need any kind of help please contact us at :support_email',
                'thanks' => 'Thanks!',
            ]
        ],

        'invoice' => [
            'heading' => 'Your invoice #:invoice_id for Order #:order_id',
            'subject' => 'Invoice for your order #:order_id',
            'summary' => 'Summary of Invoice',
        ],

        'shipment' => [
            'heading' => 'Shipment #:shipment_id  has been generated for Order #:order_id',
            'inventory-heading' => 'New shipment #:shipment_id had been generated for Order #:order_id',
            'subject' => 'Shipment for your order #:order_id',
            'inventory-subject' => 'New shipment had been generated for Order #:order_id',
            'summary' => 'Summary of Shipment',
            'carrier' => 'Carrier',
            'tracking-number' => 'Tracking Number',
            'greeting' => 'An order :order_id has been placed on :created_at',
        ],

        'refund' => [
            'heading' => 'Your Refund #:refund_id for Order #:order_id',
            'subject' => 'Refund for your order #:order_id',
            'summary' => 'Summary of Refund',
            'adjustment-refund' => 'Adjustment Refund',
            'adjustment-fee' => 'Adjustment Fee'
        ],

        'forget-password' => [
            'subject' => 'Customer Reset Password',
            'dear' => 'Dear :name',
            'info' => 'You are receiving this email because we received a password reset request for your account',
            'reset-password' => 'Reset Password',
            'final-summary' => 'If you did not request a password reset, no further action is required',
            'thanks' => 'Thanks!'
        ],

        'customer' => [
            'new' => [
                'dear' => 'Dear :customer_name',
                'username-email' => 'UserName/Email',
                'subject' => 'New Customer Registration',
                'password' => 'Password',
                'summary' => 'Your account has been created.
                Your account details are below: ',
                'thanks' => 'Thanks!',
            ],

            'registration' => [
                'subject' => 'New Customer Registration',
                'customer-registration' => 'Customer Registered Successfully',
                'dear' => 'Dear :customer_name',
                'greeting' => 'Welcome and thank you for registering with us!',
                'summary' => 'Your account has now been created successfully and you can login using your email address and password credentials. Upon logging in, you will be able to access other services including reviewing past orders, wishlists and editing your account information.',
                'thanks' => 'Thanks!',
            ],

            'verification' => [
                'heading' => config('app.name') . ' - Email Verification',
                'subject' => 'Verification Mail',
                'verify' => 'Verify Your Account',
                'summary' => 'This is the mail to verify that the email address you entered is yours.
                Kindly click the Verify Your Account button below to verify your account.'
            ],

            'subscription' => [
                'subject' => 'サブスクリプトメール',
                'greeting' => ' よこそ ' . config('app.name') . ' - Eメールサブスクリプト',
                'unsubscribe' => 'サブスクリプト取消',
                'summary' => 'Thanks for putting me into your inbox. It’s been a while since you’ve read ' . config('app.name') . ' email, and we don’t want to overwhelm your inbox. If you still do not want to receive
                the latest email marketing news then for sure click the button below.'
            ]
        ]
    ],

    'webkul' => [
        'copy-right' => '© Copyright :year Webkul Software, All rights reserved',
    ],

    'response' => [
        'create-success' => ':name 作成成功.',
        'update-success' => ':name 更新成功.',
        'delete-success' => ':name 削除成功.',
        'submit-success' => ':name サブミット成功.'
    ],
];
