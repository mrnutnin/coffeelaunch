<?php

use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UiController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', [EcommerceController::class, 'index'])->name('index');
Route::get('/index-2', [EcommerceController::class, 'index2'])->name('index2');
Route::get('/index-3', [EcommerceController::class, 'index3'])->name('index3');
Route::get('/index-4', [EcommerceController::class, 'index4'])->name('index4');
Route::get('/products', [EcommerceController::class, 'products'])->name('products');
Route::get('/products-with-filter', [EcommerceController::class, 'productsWithFilter'])->name('products-with-filter');
Route::get('/products-sidebar-left', [EcommerceController::class, 'productsSidebarLeft'])->name('products-sidebar-left');
Route::get('/products-sidebar-right', [EcommerceController::class, 'productsSidebarRight'])->name('products-sidebar-right');
Route::get('/product', [EcommerceController::class, 'product'])->name('product');
Route::get('/wishlist', [EcommerceController::class, 'wishlist'])->name('wishlist');
Route::get('/cart', [EcommerceController::class, 'cart'])->name('cart');
Route::get('/checkout', [EcommerceController::class, 'checkout'])->name('checkout');
Route::get('/order-received', [EcommerceController::class, 'orderReceived'])->name('order-received');
Route::get('/order-tracking', [EcommerceController::class, 'orderTracking'])->name('order-tracking');
Route::get('/page', [EcommerceController::class, 'page'])->name('page');
Route::get('/login-register', [EcommerceController::class, 'loginRegister'])->name('login-register');
Route::get('/404', [EcommerceController::class, 'Error404'])->name('Error404');
Route::get('/faqs', [EcommerceController::class, 'faqs'])->name('faqs');
Route::get('/about', [EcommerceController::class, 'about'])->name('about');
Route::get('/contact', [EcommerceController::class, 'contact'])->name('contact');
Route::get('/admin', [HomeController::class, 'root'])->name('root');

##Route to ui template
Route::get('/apps-filemanager', [UiController::class, 'appsfilemanager'])->name('appsfilemanager');
Route::get('/auth-confirm-mail-2', [UiController::class, 'authconfirmmail2'])->name('authconfirmmail2');
Route::get('/auth-confirm-mail', [UiController::class, 'authconfirmmail'])->name('authconfirmmail');
Route::get('/auth-email-verification-2', [UiController::class, 'authemailverification2'])->name('authemailverification2');
Route::get('/auth-email-verification', [UiController::class, 'authemailverification'])->name('authemailverification');
Route::get('/auth-lock-screen-2', [UiController::class, 'authlockscreen2'])->name('authlockscreen2');
Route::get('/auth-lock-screen', [UiController::class, 'authlockscreen'])->name('authlockscreen');
Route::get('/auth-login-2', [UiController::class, 'authlogin2'])->name('authlogin2');
Route::get('/auth-login', [UiController::class, 'authlogin'])->name('authlogin');
Route::get('/auth-recoverpw-2', [UiController::class, 'authrecoverpw2'])->name('authrecoverpw2');
Route::get('/auth-recoverpw', [UiController::class, 'authrecoverpw'])->name('authrecoverpw');
Route::get('/auth-register-2', [UiController::class, 'authregister2'])->name('authregister2');
Route::get('/auth-register', [UiController::class, 'authregister'])->name('authregister');
Route::get('/auth-two-step-verification-2', [UiController::class, 'authtwostepverification2'])->name('authtwostepverification2');
Route::get('/auth-two-step-verification', [UiController::class, 'authtwostepverification'])->name('authtwostepverification');
Route::get('/blog-details', [UiController::class, 'blogdetails'])->name('blogdetails');
Route::get('/blog-grid', [UiController::class, 'bloggrid'])->name('bloggrid');
Route::get('/blog-list', [UiController::class, 'bloglist'])->name('bloglist');
Route::get('/calendar', [UiController::class, 'calendar'])->name('calendar');
Route::get('/charts-apex', [UiController::class, 'chartsapex'])->name('chartsapex');
Route::get('/charts-chartjs', [UiController::class, 'chartschartjs'])->name('chartschartjs');
Route::get('/charts-echart', [UiController::class, 'chartsechart'])->name('chartsechart');
Route::get('/charts-flot', [UiController::class, 'chartsflot'])->name('chartsflot');
Route::get('/charts-knob', [UiController::class, 'chartsknob'])->name('chartsknob');
Route::get('/charts-sparkline', [UiController::class, 'chartssparkline'])->name('chartssparkline');
Route::get('/charts-tui', [UiController::class, 'chartstui'])->name('chartstui');
Route::get('/chat', [UiController::class, 'chat'])->name('chat');
Route::get('/contacts-grid', [UiController::class, 'contactsgrid'])->name('contactsgrid');
Route::get('/contacts-list', [UiController::class, 'contactslist'])->name('contactslist');
Route::get('/contacts-profile', [UiController::class, 'contactsprofile'])->name('contactsprofile');
Route::get('/crypto-buy-sell', [UiController::class, 'cryptobuysell'])->name('cryptobuysell');
Route::get('/crypto-exchange', [UiController::class, 'cryptoexchange'])->name('cryptoexchange');
Route::get('/crypto-ico-landing', [UiController::class, 'cryptoicolanding'])->name('cryptoicolanding');
Route::get('/crypto-kyc-application', [UiController::class, 'cryptokycapplication'])->name('cryptokycapplication');
Route::get('/crypto-lending', [UiController::class, 'cryptolending'])->name('cryptolending');
Route::get('/crypto-orders', [UiController::class, 'cryptoorders'])->name('cryptoorders');
Route::get('/crypto-wallet', [UiController::class, 'cryptowallet'])->name('cryptowallet');
Route::get('/dashboard-blog', [UiController::class, 'dashboardblog'])->name('dashboardblog');
Route::get('/dashboard-crypto', [UiController::class, 'dashboardcrypto'])->name('dashboardcrypto');
Route::get('/dashboard-saas', [UiController::class, 'dashboardsaas'])->name('dashboardsaas');
Route::get('/ecommerce-add-product', [UiController::class, 'ecommerceaddproduct'])->name('ecommerceaddproduct');
Route::get('/ecommerce-cart', [UiController::class, 'ecommercecart'])->name('ecommercecart');
Route::get('/ecommerce-checkout', [UiController::class, 'ecommercecheckout'])->name('ecommercecheckout');
Route::get('/ecommerce-customers', [UiController::class, 'ecommercecustomers'])->name('ecommercecustomers');
Route::get('/ecommerce-orders', [UiController::class, 'ecommerceorders'])->name('ecommerceorders');
Route::get('/ecommerce-product-detail', [UiController::class, 'ecommerceproductdetail'])->name('ecommerceproductdetail');
Route::get('/ecommerce-products', [UiController::class, 'ecommerceproducts'])->name('ecommerceproducts');
Route::get('/ecommerce-shops', [UiController::class, 'ecommerceshops'])->name('ecommerceshops');
Route::get('/email-inbox', [UiController::class, 'emailinbox'])->name('emailinbox');
Route::get('/email-read', [UiController::class, 'emailread'])->name('emailread');
Route::get('/email-template-alert', [UiController::class, 'emailtemplatealert'])->name('emailtemplatealert');
Route::get('/email-template-basic', [UiController::class, 'emailtemplatebasic'])->name('emailtemplatebasic');
Route::get('/email-template-billing', [UiController::class, 'emailtemplatebilling'])->name('emailtemplatebilling');
Route::get('/form-advanced', [UiController::class, 'formadvanced'])->name('formadvanced');
Route::get('/form-editors', [UiController::class, 'formeditors'])->name('formeditors');
Route::get('/form-elements', [UiController::class, 'formelements'])->name('formelements');
Route::get('/form-layouts', [UiController::class, 'formlayouts'])->name('formlayouts');
Route::get('/form-mask', [UiController::class, 'formmask'])->name('formmask');
Route::get('/form-repeater', [UiController::class, 'formrepeater'])->name('formrepeater');
Route::get('/form-uploads', [UiController::class, 'formuploads'])->name('formuploads');
Route::get('/form-validation', [UiController::class, 'formvalidation'])->name('formvalidation');
Route::get('/form-wizard', [UiController::class, 'formwizard'])->name('formwizard');
Route::get('/form-xeditable', [UiController::class, 'formxeditable'])->name('formxeditable');
Route::get('/home', [UiController::class, 'home'])->name('home');
Route::get('/icons-boxicons', [UiController::class, 'iconsboxicons'])->name('iconsboxicons');
Route::get('/icons-dripicons', [UiController::class, 'iconsdripicons'])->name('iconsdripicons');
Route::get('/icons-fontawesome', [UiController::class, 'iconsfontawesome'])->name('iconsfontawesome');
Route::get('/icons-materialdesign', [UiController::class, 'iconsmaterialdesign'])->name('iconsmaterialdesign');
Route::get('/index-admin', [UiController::class, 'index'])->name('indexadmin');
Route::get('/invoices-detail', [UiController::class, 'invoicesdetail'])->name('invoicesdetail');
Route::get('/invoices-list', [UiController::class, 'invoiceslist'])->name('invoiceslist');
Route::get('/layouts-boxed', [UiController::class, 'layoutsboxed'])->name('layoutsboxed');
Route::get('/layouts-light-sidebar', [UiController::class, 'layoutslightsidebar'])->name('layoutslightsidebar');
Route::get('/layouts-icon-sidebar', [UiController::class, 'layoutsiconsidebar'])->name('layoutsiconsidebar');
Route::get('/layouts-colored-sidebar', [UiController::class, 'layoutscoloredsidebar'])->name('layoutscoloredsidebar');
Route::get('/layouts-compact-sidebar', [UiController::class, 'layoutscompactsidebar'])->name('layoutscompactsidebar');
Route::get('/layouts-hori-boxed-width', [UiController::class, 'layoutshoriboxedwidth'])->name('layoutshoriboxedwidth');
Route::get('/layouts-hori-colored-header', [UiController::class, 'layoutshoricoloredheader'])->name('layoutshoricoloredheader');
Route::get('/layouts-hori-preloader', [UiController::class, 'layoutshoripreloader'])->name('layoutshoripreloader');
Route::get('/layouts-preloader', [UiController::class, 'layoutspreloader'])->name('layoutspreloader');
Route::get('/layouts-horizontal', [UiController::class, 'layoutshorizontal'])->name('layoutshorizontal');
Route::get('/layouts-hori-topbar-light', [UiController::class, 'layoutshoritopbarlight'])->name('layoutshoritopbarlight');
Route::get('/layouts-hori-scrollable', [UiController::class, 'layoutshoriscrollable'])->name('layoutshoriscrollable');

Route::get('/layouts-scrollable', [UiController::class, 'layoutsscrollable'])->name('layoutsscrollable');
Route::get('/layouts-vertical', [UiController::class, 'layoutsvertical'])->name('layoutsvertical');
Route::get('/maps-google', [UiController::class, 'mapsgoogle'])->name('mapsgoogle');
Route::get('/maps-leaflet', [UiController::class, 'mapsleaflet'])->name('mapsleaflet');
Route::get('/maps-vector', [UiController::class, 'mapsvector'])->name('mapsvector');
Route::get('/pages-404', [UiController::class, 'pages404'])->name('pages404');
Route::get('/pages-500', [UiController::class, 'pages500'])->name('pages500');
Route::get('/pages-comingsoon', [UiController::class, 'pagescomingsoon'])->name('pagescomingsoon');
Route::get('/pages-faqs', [UiController::class, 'pagesfaqs'])->name('pagesfaqs');
Route::get('/pages-maintenance', [UiController::class, 'pagesmaintenance'])->name('pagesmaintenance');
Route::get('/pages-pricing', [UiController::class, 'pagespricing'])->name('pagespricing');
Route::get('/pages-starter', [UiController::class, 'pagesstarter'])->name('pagesstarter');
Route::get('/pages-timeline', [UiController::class, 'pagestimeline'])->name('pagestimeline');
Route::get('/projects-create', [UiController::class, 'projectscreate'])->name('projectscreate');
Route::get('/projects-grid', [UiController::class, 'projectsgrid'])->name('projectsgrid');
Route::get('/projects-list', [UiController::class, 'projectslist'])->name('projectslist');
Route::get('/projects-overview', [UiController::class, 'projectsoverview'])->name('projectsoverview');
Route::get('/tables-basic', [UiController::class, 'tablesbasic'])->name('tablesbasic');
Route::get('/tables-datatable', [UiController::class, 'tablesdatatable'])->name('tablesdatatable');
Route::get('/tables-editable', [UiController::class, 'tableseditable'])->name('tableseditable');
Route::get('/tables-responsive', [UiController::class, 'tablesresponsive'])->name('tablesresponsive');
Route::get('/tasks-create', [UiController::class, 'taskscreate'])->name('taskscreate');
Route::get('/tasks-kanban', [UiController::class, 'taskskanban'])->name('taskskanban');
Route::get('/tasks-list', [UiController::class, 'taskslist'])->name('taskslist');
Route::get('/ui-alerts', [UiController::class, 'uialerts'])->name('uialerts');
Route::get('/ui-buttons', [UiController::class, 'uibuttons'])->name('uibuttons');
Route::get('/ui-cards', [UiController::class, 'uicards'])->name('uicards');
Route::get('/ui-carousel', [UiController::class, 'uicarousel'])->name('uicarousel');
Route::get('/ui-colors', [UiController::class, 'uicolors'])->name('uicolors');
Route::get('/ui-dropdowns', [UiController::class, 'uidropdowns'])->name('uidropdowns');
Route::get('/ui-general', [UiController::class, 'uigeneral'])->name('uigeneral');
Route::get('/ui-grid', [UiController::class, 'uigrid'])->name('uigrid');
Route::get('/ui-images', [UiController::class, 'uiimages'])->name('uiimages');
Route::get('/ui-lightbox', [UiController::class, 'uilightbox'])->name('uilightbox');
Route::get('/ui-modals', [UiController::class, 'uimodals'])->name('uimodals');
Route::get('/ui-notifications', [UiController::class, 'uinotifications'])->name('uinotifications');
Route::get('/ui-offcanvas', [UiController::class, 'uioffcanvas'])->name('uioffcanvas');
Route::get('/ui-progressbars', [UiController::class, 'uiprogressbars'])->name('uiprogressbars');
Route::get('/ui-rangeslider', [UiController::class, 'uirangeslider'])->name('uirangeslider');
Route::get('/ui-rating', [UiController::class, 'uirating'])->name('uirating');
Route::get('/ui-session-timeout', [UiController::class, 'uisessiontimeout'])->name('uisessiontimeout');
Route::get('/ui-sweet-alert', [UiController::class, 'uisweetalert'])->name('uisweetalert');
Route::get('/ui-tabs-accordions', [UiController::class, 'uitabsaccordions'])->name('uitabsaccordions');
Route::get('/ui-typography', [UiController::class, 'uitypography'])->name('uitypography');
Route::get('/ui-video', [UiController::class, 'uivideo'])->name('uivideo');
Route::get('/welcome', [UiController::class, 'welcome'])->name('welcome');

Route::middleware(['auth'])->group(function () {

});
