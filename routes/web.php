<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Pages\HomePageController;
use App\Http\Controllers\Admin\HomeAdminController;
use App\Http\Controllers\Admin\AccountAdminController;
use App\Http\Controllers\Admin\AdContactController;
// category product
use App\Http\Controllers\Admin\CategoryController;
// genre
use App\Http\Controllers\Admin\GenreController;
// product
use App\Http\Controllers\Admin\ProductController;
//publisher
use App\Http\Controllers\Admin\PublisherController;
//Supplier
use App\Http\Controllers\Admin\SupplierController;
//Author
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\CommentController;
//
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\OrderController;
//
use App\Http\Controllers\Pages\CartPageController;
//
use App\Http\Controllers\Pages\CheckoutController;
use App\Http\Controllers\Pages\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Pages
Route::get('/', ([HomePageController::class, 'index']));
Route::get('/trang-chu', ([HomePageController::class, 'index']))->name('index');

//register
Route::get('/show-register', [HomePageController::class, 'show_register'])->name('show-register');
Route::post('/user-register', [HomePageController::class, 'user_register'])->name('user-register');
// login
Route::get('/show-login', [HomePageController::class, 'show_login'])->name('show-login');
Route::post('/user-login', [HomePageController::class, 'user_login'])->name('user-login');
Route::get('/user-logout', [HomePageController::class, 'user_logout'])->name('user-logout');

// search
Route::get('/search', [HomePageController::class, 'search'])->name('search');
// list new product
Route::get('/list-new-product',[HomePageController::class, 'list_new_product'])->name('list-new-product');
// list selling pro
Route::get('/list-selling-product',[HomePageController::class, 'list_selling_product'])->name('list-selling-product');
// list hot pro
Route::get('/list-hot-product',[HomePageController::class, 'list_hot_product'])->name('list-hot-product');
// genre product
Route::get('/list-genre-product/{gen_pro_id}', [HomePageController::class, 'list_genre_product'])->name('list-genre-product');
// product detail
Route::get('/list-product_detail/{product_detail_id}', [HomePageController::class, 'list_product_detail'])->name('list-product-detail');
// comment
Route::post('/list-product_detail/{product_detail_id}', [HomePageController::class, 'detailComment'])->name('list-product-detail');
// add - item - cart
Route::get('/add-cart/{id}', [CartPageController::class, 'add_cart'])->name('add-cart');
//
Route::get('/show-cart', [CartPageController::class, 'show_cart'])->name('show-cart');
// delete cart
Route::get('/delete-item-cart/{id}', [CartPageController::class, 'delete_item_cart'])->name('delete-item-cart');
// delete list cart
Route::get('/delete-list-item-cart/{id}', [CartPageController::class, 'delete_list_item_cart'])->name('delete-list-item-cart');
// update cart
Route::post('/update-list-item-cart', [CartPageController::class, 'updateCart'])->name('update-list-item-cart');
// checkout
Route::get('/show-checkout', [CheckoutController::class, 'showCheckout'])->middleware('CheckUserLogin')->name('show-checkout');
//
Route::post('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
//
Route::get('/thanks', [CheckoutController::class, 'thank'])->name('thanks');
// contact
Route::get('/show-contact', [ContactController::class, 'showContact'])->name('show-contact');
//
Route::post('/contact', [ContactController::class, 'saveContact'])->name('contact');



Route::group(['prefix' => 'admin','namespace' => 'Admin'], function()
{
    // login
    Route::get('/login', [AccountAdminController::class, 'login'])->middleware('CheckAdminlogout')->name('login');
    Route::post('/check-login', [AccountAdminController::class, 'checkLogin'])->name('check-login');
    // logout
    Route::get('/logout', [AccountAdminController::class, 'logout'])->name('logout');
    //home
    Route::get('/home', [HomeAdminController::class, 'index'])->middleware('CheckAdminLogin')->name('home');

// Category :danh mục
    Route::get('/category', [CategoryController::class, 'category'])->middleware('CheckAdminLogin')->name('category');
    Route::get('/create-category', [CategoryController::class, 'create_category'])->middleware('CheckAdminLogin')->name('create-category');
    // add category
    Route::post('/create-category-product', [CategoryController::class, 'create_category_product'])->middleware('CheckAdminLogin')->name('create-category-product');
    // active category-product
    Route::get('/unactive-category-product/{category_product_id}', [CategoryController::class, 'unactive_category_product'])->middleware('CheckAdminLogin')->name('unactive-category-product');
    Route::get('/active-category-product/{category_product_id}', [CategoryController::class, 'active_category_product'])->middleware('CheckAdminLogin')->name('active-category-product');
    // update category product
    Route::get('/edit-category-product/{category_product_id}', [CategoryController::class, 'edit_category_product'])->middleware('CheckAdminLogin')->name('edit-category-product');
    Route::post('/update-category-product/{category_product_id}', [CategoryController::class, 'update_category_product'])->middleware('CheckAdminLogin')->name('update-category-product');
    // delete
    Route::get('/delete-category-product/{category_product_id}', [CategoryController::class, 'delete_category_product'])->middleware('CheckAdminLogin')->name('delete-category-product');

// Genre :Thể loại
    Route::get('/genre', [GenreController::class, 'genre'])->middleware('CheckAdminLogin')->name('genre');
    // create genre
    Route::get('/create-genre', [GenreController::class, 'create_genre'])->middleware('CheckAdminLogin')->name('create-genre');
    Route::post('/add-genre', [GenreController::class, 'add_genre'])->middleware('CheckAdminLogin')->name('add-genre');
    // active genre
    Route::get('/unactive-genre/{genre_id}', [GenreController::class, 'unactive_genre'])->middleware('CheckAdminLogin')->name('unactive-genre');
    Route::get('/active-genre/{genre_id}', [GenreController::class, 'active_genre'])->middleware('CheckAdminLogin')->name('active-genre');
    // update
    Route::get('/update-genre/{genre_id}', [GenreController::class, 'update_genre'])->middleware('CheckAdminLogin')->name('update-genre');
    Route::post('/edit-genre/{genre_id}', [GenreController::class, 'edit_genre'])->middleware('CheckAdminLogin')->name('edit-genre');
    // delete
    Route::get('/delete-genre/{genre_id}', [GenreController::class, 'delete_genre'])->middleware('CheckAdminLogin')->name('delete-genre');

// product
    Route::get('list-product', [ProductController::class, 'list_product'])->middleware('CheckAdminLogin')->name('list-product');
    //create
    Route::get('/create-product', [ProductController::class, 'create_product'])->middleware('CheckAdminLogin')->name('create-product');
    Route::post('/add-product', [ProductController::class, 'add_product'])->middleware('CheckAdminLogin')->name('add-product');
    //active product hot
    Route::get('/unactive-product-hot/{product_id}', [ProductController::class, 'unactive_product_hot'])->middleware('CheckAdminLogin')->name('unactive-product-hot');
    Route::get('/active-product-hot/{product_id}', [ProductController::class, 'active_product_hot'])->middleware('CheckAdminLogin')->name('active-product-hot');
    //active product status
    Route::get('/unactive-product-status/{product_id}', [ProductController::class, 'unactive_product_status'])->middleware('CheckAdminLogin')->name('unactive-product-status');
    Route::get('/active-product-status/{product_id}', [ProductController::class, 'active_product_status'])->middleware('CheckAdminLogin')->name('active-product-status');
    // update
    Route::get('/update-product/{product_id}', [ProductController::class, 'update_product'])->middleware('CheckAdminLogin')->name('update-product');
    Route::post('/edit-product/{product_id}', [ProductController::class, 'edit_product'])->middleware('CheckAdminLogin')->name('edit-product');
    // delete
    Route::get('/delete-product/{prouct_id}', [ProductController::class, 'delete_product'])->middleware('CheckAdminLogin')->name('delete-product');
    //
    Route::get('/product-search', [ProductController::class, 'product_search'])->middleware('CheckAdminLogin')->name('product-search');


// publisher : nhà xuất bản
    Route::get('/list-publisher', [PublisherController::class, 'list_publisher'])->middleware('CheckAdminLogin')->name('list-publisher');
    // create
    Route::get('/create-publisher', [PublisherController::class, 'create_publisher'])->middleware('CheckAdminLogin')->name('create-publisher');
    Route::post('/add-publisher', [PublisherController::class, 'add_publisher'])->middleware('CheckAdminLogin')->name('add-publisher');
    // update
    Route::get('/update-publisher/{publisher_id}', [PublisherController::class, 'update_publisher'])->middleware('CheckAdminLogin')->name('update-publisher');
    Route::post('/edit-publisher/{publisher_id}', [PublisherController::class, 'edit_publisher'])->middleware('CheckAdminLogin')->name('edit-publisher');
    // delete
    Route::get('/delete-publisher/{publisher_id}', [PublisherController::class, 'delete_publisher'])->middleware('CheckAdminLogin')->name('delete-publisher');

// Supplier :nhà cung cấp
    Route::get('/list-supplier', [SupplierController::class, 'list_supplier'])->middleware('CheckAdminLogin')->name('list-supplier');
    //cretae
    Route::get('/create-supplier', [SupplierController::class, 'create_supplier'])->middleware('CheckAdminLogin')->name('create-supplier');
    Route::post('/add-supplier', [SupplierController::class, 'add_supplier'])->middleware('CheckAdminLogin')->name('add-supplier');
    // update
    Route::get('/update-supplier/{supplier_id}', [SupplierController::class, 'update_supplier'])->middleware('CheckAdminLogin')->name('update-supplier');
    Route::post('/edit-supplier/{supplier_id}', [SupplierController::class, 'edit_supplier'])->middleware('CheckAdminLogin')->name('edit-supplier');
    //delete
    Route::get('/delete-supplier/{supplier_id}', [SupplierController::class, 'delete_supplier'])->middleware('CheckAdminLogin')->name('delete-supplier');

// Author :Tác giả
    Route::get('/list-author', [AuthorController::class, 'list_author'])->middleware('CheckAdminLogin')->name('list-author');
    //cretae
    Route::get('/create-author', [AuthorController::class, 'create_author'])->middleware('CheckAdminLogin')->name('create-author');
    Route::post('/add-author', [AuthorController::class, 'add_author'])->name('add-author');
    // update
    Route::get('/update-author/{author_id}', [AuthorController::class, 'update_author'])->middleware('CheckAdminLogin')->name('update-author');
    Route::post('/edit-author/{author_id}', [AuthorController::class, 'edit_author'])->middleware('CheckAdminLogin')->name('edit-author');
    //delete
    Route::get('/delete-author/{author_id}', [AuthorController::class, 'delete_author'])->middleware('CheckAdminLogin')->name('delete-author');

// contact
    Route::get('/list-contact', [AdContactController::class, 'list_contact'])->middleware('CheckAdminLogin')->name('list-contact');
    //
    Route::get('/create-contact', [AdContactController::class, 'create_contact'])->middleware('CheckAdminLogin')->name('create-contact');
    Route::post('/add-contact', [AdContactController::class, 'add_contact'])->middleware('CheckAdminLogin')->name('add-contact');
    //
    Route::get('/update-contact/{id}', [AdContactController::class, 'update_contact'])->middleware('CheckAdminLogin')->name('update-contact');
    Route::post('/edit-contact/{id}', [AdContactController::class, 'edit_contact'])->middleware('CheckAdminLogin')->name('edit-contact');
    //
    Route::get('/die-contact/{id}', [AdContactController::class, 'die_contact'])->middleware('CheckAdminLogin')->name('die-contact');

    Route::get('/page-contact', [AdContactController::class, 'pageContact'])->middleware('CheckAdminLogin')->name('page-contact');
    Route::get('/update-pcontact/{id}',[AdContactController::class, 'updateContact' ])->middleware('CheckAdminLogin')->name('update-pcontact');
    Route::post('/edit-pcontact/{id}',[AdContactController::class, 'editContact' ])->name('edit-pcontact');

    //
    Route::get('/con-search', [AdContactController::class, 'conSearch'])->middleware('CheckAdminLogin')->name('con-search');

// customer
    Route::get('/list-customer', [CustomerController::class, 'list_customer'])->middleware('CheckAdminLogin')->name('list-customer');
    Route::get('/cus-search', [CustomerController::class, 'searchCustomer'])->middleware('CheckAdminLogin')->name('cus-search');
// oder
    Route::get('/list-order', [OrderController::class, 'list_order'])->middleware('CheckAdminLogin')->name('list-order');

    Route::get('/update-order/{id}', [OrderController::class, 'updateOrder'])->middleware('CheckAdminLogin')->name('update-order');
    Route::post('/edit-order/{id}', [OrderController::class, 'editOrder'])->name('edit-order');
    Route::get('/die-order/{die}', [OrderController::class, 'die_order'])->middleware('CheckAdminLogin')->name('die-order');
    Route::get('/order-search', [OrderController::class, 'orderSearch'])->middleware('CheckAdminLogin')->name('order-search');
    // view order
    Route::get('/view-order/{id}', [OrderController::class, 'view_order'])->middleware('CheckAdminLogin')->name('view-order');

// comment
    Route::get('/comment', [CommentController::class, 'comment'])->middleware('CheckAdminLogin')->name('comment');
    Route::get('/delete-com/{id}', [CommentController::class, 'deleteCom'])->middleware('CheckAdminLogin')->name('delete-com');
    Route::get('/comment-search', [CommentController::class, 'commentSearch'])->middleware('CheckAdminLogin')->name('comment-search');
});
