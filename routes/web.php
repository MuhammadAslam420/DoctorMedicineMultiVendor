<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleSocialiteController;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\WishlistComponent;
use App\Http\Livewire\DoctorDetailsComponent;
use App\Http\Livewire\ThankyouComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\AppointmentComponent;
use App\Http\Livewire\PerscriptionComponent;
use App\Http\Livewire\DoctorsComponent;
use App\Http\Livewire\BlogDetailComponent;
use App\Http\Livewire\BlogComponent;
use App\Http\Livewire\BestSellingComponet;
use App\Http\Livewire\SpecialistComponent;
use App\Http\Livewire\ShopListViewComponent;
use App\Http\Livewire\ShopGridViewComponent;
use App\Http\Livewire\Dealscomponent;

use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\User\UserOrdersComponent;
use App\Http\Livewire\User\UserOrderDetailsComponent;
use App\Http\Livewire\User\UserReviewComponet;
use App\Http\Livewire\User\UserChangePasswordComponent;
use App\Http\Livewire\User\UserProfileComponent;
use App\Http\Livewire\User\UserEditProfileComponent;
use App\Http\Livewire\User\UserAppointmentComponent;
use App\Http\Livewire\User\UserOnlineMeetingReviewsComponent;
use App\Http\Livewire\User\UserAppointmentDetailsComponent;
use App\Http\Livewire\User\UserCheckupDetailsComponent;

use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminEditProductComponent;
use App\Http\Livewire\Admin\HomeSliderComponent;
use App\Http\Livewire\Admin\AdminAddHomeSliderComponent;
use App\Http\Livewire\Admin\AdminEditHomeSliderComponent;
use App\Http\Livewire\Admin\AdminHomeCategoryComponent;
use App\Http\Livewire\Admin\AdminSaleComponent;
use App\Http\Livewire\Admin\AdminSupplierComponent;
use App\Http\Livewire\Admin\AdminApprovalSupplierProductComponent;
use App\Http\Livewire\Admin\AdminCouponComponent;
use App\Http\Livewire\Admin\AdminAddCouponComponent;
use App\Http\Livewire\Admin\AdminEditCouponComponent;
use App\Http\Livewire\Admin\AdminOrderComponent;
use App\Http\Livewire\Admin\AdminOrderDetailsComponent;
use App\Http\Livewire\Admin\AdminContactComponent;
use App\Http\Livewire\Admin\AdminSettingComponent;
use App\Http\Livewire\Admin\AdmindoctorsComponent;
use App\Http\Livewire\Admin\AdminDoctorProfileDetailComponent;
use App\Http\Livewire\Admin\AdminViewAllSupplierDetailComponent;
use App\Http\Livewire\Admin\AdminViewSupplierProductListComponent;
use App\Http\Livewire\Admin\AdminViewSupplierProductDetailsComponent;
use App\Http\Livewire\Admin\AdminViewCurrentUserDetailComponent;
use App\Http\Livewire\Admin\AdminInventoryComponent;
use App\Http\Livewire\Admin\AdminPerscriptionComponent;
use App\Http\Livewire\Admin\AdminPerscriptionDetailComponent;
use App\Http\Livewire\Admin\AdminPharmacistListComponent;
use App\Http\Livewire\Admin\AdminPharmacistDetailComponent;
use App\Http\Livewire\Admin\AdminPharmacistProductListComponent;
use App\Http\Livewire\Admin\AdminOrderByAreaComponent;
use App\Http\Livewire\Admin\AdminAddProdcutIntoPerscriptionComponent;
use App\Http\Livewire\Admin\AdminTodayOrdersComponent;
use App\Http\Livewire\Admin\AdminPendingOrdersComponent;
use App\Http\Livewire\Admin\AdminPendingStatusComponent;
use App\Http\Livewire\Admin\AdminOnlinePaymentOrdersComponent;
use App\Http\Livewire\Admin\AdminDeliveredOrdersComponent;
use App\Http\Livewire\Admin\AdminAppointmentComponent;
use App\Http\Livewire\Admin\AdminAppointmentDetailComponent;
use App\Http\Livewire\Admin\AdminAllOnlineMEetingComponent;
use App\Http\Livewire\Admin\AdminAllDoctorClinicCheckupComponent;
use App\Http\Livewire\Admin\AdminTodayDoctorClinicCheckupComponent;
use App\Http\Livewire\Admin\AdminPharmacyShopComponent;
use App\Http\Livewire\Admin\AdminCartComponent;
use App\Http\Livewire\Admin\AdminShopSalesComponent;
use App\Http\Livewire\Admin\AdminSubscriptionPackagesComponent;
use App\Http\Livewire\Admin\AddSubscriptionPackageComponent;


use App\Http\Livewire\Doctor\DoctorDashboardComponent;
use App\Http\Livewire\Doctor\DoctorProfileComponent;
use App\Http\Livewire\Doctor\DoctorAddProfileComponent;
use App\Http\Livewire\Doctor\DoctorEditProfileComponent;
use App\Http\Livewire\Pharmacist\PharmacistDashboardComponent;
use App\Http\Livewire\Pharmacist\PharmacistProfileComponent;
use App\Http\Livewire\Pharmacist\PharmacistEditProfileComponent;
use App\Http\Livewire\Pharmacist\PharmacistProductComponent;
use App\Http\Livewire\Pharmacist\PharmacistAddInventoryComponent;
use App\Http\Livewire\Pharmacist\PharmacistShopComponent;
use App\Http\Livewire\Pharmacist\PharamacistCartComponent;
use App\Http\Livewire\Pharmacist\CancelPerscriptionComponent;
use App\Http\Livewire\Pharmacist\AllPerscriptionsComponent;
use App\Http\Livewire\Pharmacist\AllDeliveredPerscriptionsComponent;
use App\Http\Livewire\Pharmacist\TodayPerscriptionsComponent;
use App\Http\Livewire\Pharmacist\PharmacistDetailComponent;
use App\Http\Livewire\Pharmacist\PharmacistOrdersDetailComponent;
use App\Http\Livewire\Pharmacist\PharmacistAllShopSalesComponent;
use App\Http\Livewire\Pharmacist\PharmacistInventoryStockDetailComponent;
use App\Http\Livewire\Doctor\DoctorOnlineAppointmentComponent;
use App\Http\Livewire\Doctor\DoctorOnlineAppointmentDetailComponent;
use App\Http\Livewire\Doctor\DoctorAddTimingComponent;
use App\Http\Livewire\Doctor\DoctorHospitalDetailComponent;
use App\Http\Livewire\Admin\AdminShopOrderComponent;
use App\Http\Livewire\Admin\EditSubscriptionPackageComponent;
use App\Http\Livewire\Supplier\SupplierDashboardComponent;
use App\Http\Livewire\Supplier\SupplierProductsComponent;
use App\Http\Livewire\Supplier\SupplierAddProductComponent;
use App\Http\Livewire\Supplier\SupplierEditProductComponent;
use App\Http\Livewire\Supplier\SupplierProfileComponent;
use App\Http\Livewire\Supplier\SupplierEditProfileComponent;
use App\Http\Livewire\Supplier\SupplierInventoryComponent;

use App\Http\Livewire\Deliveryboy\DeliverBoyDashboardComponent;
use App\Http\Livewire\Deliveryboy\DeliveryBoyProfileComponent;
use App\Http\Livewire\Deliveryboy\DeliveryBoyEditProfileComponent;
use App\Http\Livewire\Deliveryboy\DeliveryBoyViewOrderDetailComponent;
use App\Http\Livewire\Deliverymanager\DeliveryManagerDashboardComponent;
use App\Http\Livewire\Deliverymanager\DeliveryManagerOrderDetailsComponent;
use App\Http\Livewire\Deliverymanager\DeliveryManagerProfileComponent;
use App\Http\Livewire\Deliverymanager\DeliveryManagerEditProfileComponent;
use App\Http\Livewire\Deliverymanager\DeliveryManagerAllOrdersComponet;
use App\Http\Livewire\Deliverymanager\DeliveryManagerAllDeliveredOrdersComponet;
use App\Http\Livewire\Deliverymanager\DeliveryManagerAllProcessOrdersComponet;
use App\Http\Livewire\Deliverymanager\DeliveryManagerAllDispatchOrdersComponet;
use App\Http\Livewire\Deliverymanager\DeliveryManagerAllPendingOrdersComponet;

use App\Http\Livewire\Blog\BloggerDashboardComponent;
use App\Http\Livewire\Blog\BloogerPorfileComponent;
use App\Http\Livewire\Blog\BloggerEditProfileComponent;
use App\Http\Livewire\Blog\BloggerAddBlogComponent;
use App\Http\Livewire\Blog\BloggerEditBlogComponent;
use App\Http\Livewire\Blog\BloggerChangePasswordComponent;
use App\Http\Livewire\TermConditionComponent;
use App\Http\Livewire\CompareComponent;
use App\Http\Livewire\Doctor\BuySubscriptionPackageComponent;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle']);
Route::get('callback/google', [GoogleSocialiteController::class, 'handleCallback']);
Route::get("/",HomeComponent::class);
Route::get("/shop",ShopComponent::class);
Route::get("/cart",CartComponent::class)->name('product.cart');
Route::get("/checkout",CheckoutComponent::class)->name('checkout');
Route::get("/product/{slug}",DetailsComponent::class)->name('product.details');
Route::get("/productcategory/{category_slug}/{scategory_slug?}",CategoryComponent::class)->name('product.category');
Route::get("/doctor/specialist/{slug}",SpecialistComponent::class)->name('specialist');
Route::get("/search",SearchComponent::class)->name('product.search');
Route::get("/wishlist",WishlistComponent::class)->name('product.wishlist');
Route::get("/doctor/detail/{slug}",DoctorDetailsComponent::class)->name('doctor.detail');
Route::get("/thankyou",ThankyouComponent::class)->name('thankyou');
Route::get("/contact-us",ContactComponent::class)->name('contact-us');
Route::get("/about",AboutComponent::class)->name('about');
Route::get('/doctor/appointment/booking',AppointmentComponent::class)->name('doctor.appointment');
Route::get('/perscription/upload',PerscriptionComponent::class)->name('upload.perscription');
Route::get('/doctors',DoctorsComponent::class)->name('doctors');
Route::get('/blog/{blog_id}',BlogDetailComponent::class)->name('blogdetail');
route::get('/blog',BlogComponent::class);
Route::get('/best/selling/product',BestSellingComponet::class)->name('bestselling');
Route::get('/list-view',ShopListViewComponent::class)->name('list');
Route::get('grid-view',ShopGridViewComponent::class)->name('grid');
Route::get('/deals',DealsComponent::class)->name('deals');
Route::get('/terms-condition',TermConditionComponent::class)->name('terms-conditions');
Route::get('/compare',CompareComponent::class)->name('compare');



// USR OR CUSTOMER
Route::middleware(['auth:sanctum', 'verified'])->group( function () {
    Route::get("/user/dashboard",UserDashboardComponent::class)->name("user.dashboard");
    Route::get("/user/Oders",UserOrdersComponent::class)->name('user.orders');
    Route::get("/user/order/{order_id}",UserOrderDetailsComponent::class)->name('user.orderdetails');
    Route::get("/user/review/{order_item_id}",UserReviewComponet::class)->name("user.review");
    Route::get("/user/change/password",UserChangePasswordComponent::class)->name('user.changepassword');
    Route::get("/user/profile",UserProfileComponent::class)->name('user.profile');
    Route::get('user/profile/edit',UserEditProfileComponent::class)->name('user.editprofile');
    Route::get('/user/online/appointment',UserAppointmentComponent::class)->name('user.appointments');
    Route::get('/user/online/reviews/{onlinemeeting_id}',UserOnlineMeetingReviewsComponent::class)->name('user.onlinereviews');
    Route::get('/user/appointment/details/{appointment_id}',UserAppointmentDetailsComponent::class)->name('user.appointmentdetail');
    Route::get('/user/checkup/details/{appointment_id}',UserCheckupDetailsComponent::class)->name('user.checkupdetails');
});

// ADM
Route::middleware(['auth:sanctum', 'verified','authadmin'])->group( function () {
    Route::get("/admin/dashboard",AdminDashboardComponent::class)->name("admin.dashboard");
    Route::get("/admin/category",AdminCategoryComponent::class)->name("admin.category");
    Route::get('admin/category/add',AdminAddCategoryComponent::class)->name('admin.addcategory');
    Route::get('admin/edit/category/{category_slug}/{scategory_slug?}',AdminEditCategoryComponent::class)->name('admin.editcategory');
    Route::get('admin/product',AdminProductComponent::class)->name('admin.product');
    Route::get('admin/aproval',AdminSupplierComponent::class)->name('admin.approvalproduct');
    Route::get('admin/product/edit/supplier/{product_slug}',AdminApprovalSupplierProductComponent::class)->name('admin.editsupplierproduct');
    Route::get('/admin/product/add',AdminAddProductComponent::class)->name('admin.addproduct');
    Route::get('admin/product/edit/{product_slug}',AdminEditProductComponent::class)->name('admin.editproduct');
    Route::get('admin/slider',HomeSliderComponent::class)->name('admin.homeslider');
    Route::get('admin/slider/add',AdminAddHomeSliderComponent::class)->name('admin.addhomeslider');
    Route::get('admin/slider/edit/{slider_id}',AdminEditHomeSliderComponent::class)->name('admin.edithomeslider');
    Route::get('admin/home-categories',AdminHomeCategoryComponent::class)->name('admin.homecategories');
    Route::get('admin/sale',AdminSaleComponent::class)->name('admin.sale');
    Route::get("/admin/coupon",AdminCouponComponent::class)->name("admin.coupon");
    Route::get("/admin/coupon/Add",AdminAddCouponComponent::class)->name("admin.addcoupon");
    Route::get("/admin/coupon/edit{coupon_id}",AdminEditCouponComponent::class)->name("admin.editcoupon");
    Route::get("/admin/orders",AdminOrderComponent::class)->name("admin.orders");
    Route::get('/admin/orders/{order_id}',AdminOrderDetailsComponent::class)->name('admin.orderdetails');
    Route::get("/admin/contact",AdminContactComponent::class)->name('admin.contact');
    Route::get("admin/settings",AdminSettingComponent::class)->name('admin.settings');
    Route::get('/admin/doctors',AdmindoctorsComponent::class)->name('admin.doctorlist');
    Route::get('admin/doctors/detail/{doctor_id}',AdminDoctorProfileDetailComponent::class)->name('admin.doctorprofiledetail');
    Route::get('admin/view/suppliers/list',AdminViewAllSupplierDetailComponent::class)->name('admin.supplierlist');
    Route::get('/admin/view/supplier/product/list/{user_id}',AdminViewSupplierProductListComponent::class)->name('admin.supplierproductlist');
    Route::get('/admin/view/supplier/product/detail/{product_id}',AdminViewSupplierProductDetailsComponent::class)->name('admin.supplierproductdetail');
    Route::get('/admin/user/activity/history',AdminViewCurrentUserDetailComponent::class)->name('admin.useractivity');
    Route::get('/admin/inventory',AdminInventoryComponent::class)->name('admin.inventory');
    Route::get('/admin/perscription',AdminPerscriptionComponent::class)->name('admin.perscription');
    Route::get('/admin/perscription/detail/{perscription_id}',AdminPerscriptionDetailComponent::class)->name('admin.perscriptiondetail');
    Route::post('/admin/perscription/detail/{perscription_id}',AdminPerscriptionDetailComponent::class)->name('admin.perscriptiondetail');
    Route::get('/admin/pharmacist/list',AdminPharmacistListComponent::class)->name('admin.pharmacistlist');
    Route::get('/admin/pharmacist/detail/{pharmacist_id}',AdminPharmacistDetailComponent::class)->name('admin.pharmacistdetail');
    Route::get('/admin/pharmacist/product/list/{pharmacist_id}',AdminPharmacistProductListComponent::class)->name('admin.pharmacistproductlist');
    Route::get('/admin/ordersby/month',AdminOrderByAreaComponent::class)->name('admin.ordersbyarea');
    Route::get('/admin/addperscription/product',AdminAddProdcutIntoPerscriptionComponent::class)->name('admin.addperscriptionproduct');
    Route::get('/admin/today/orders',AdminTodayOrdersComponent::class)->name('admin.todayorders');
    Route::get('/admin/pending/orders',AdminPendingOrdersComponent::class)->name('admin.pendingorders');
    Route::get('/admin/order/status/pending',AdminPendingStatusComponent::class)->name('admin.orderspending');
    Route::get('/admin/all/online/pament/orders',AdminOnlinePaymentOrdersComponent::class)->name('admin.onlinepayment');
    Route::get('/admin/all/delivered/orders',AdminDeliveredOrdersComponent::class)->name('admin.deliveredorders');
    Route::get('/admin/all/doctor/appointment',AdminAppointmentComponent::class)->name('admin.alldoctorappointments');
    Route::get('/admin/appointment/detail/{appointment_id}',AdminAppointmentDetailComponent::class)->name('admin.appointmentdetail');
    Route::get('/admin/all/online/meetings',AdminAllOnlineMEetingComponent::class)->name('admin.onlinemeetings');
    Route::get('/admin/view/all/doctor/clinic/checkup/appointment',AdminAllDoctorClinicCheckupComponent::class)->name('admin.cliniccheckup');
    Route::get('/admin/view/today/doctor/appointments',AdminTodayDoctorClinicCheckupComponent::class)->name('admin.todayappointment');
    Route::get('/admin/pharmacy/shop',AdminPharmacyShopComponent::class)->name('admin.pharmacyshop');
    Route::get('/admin/pharmacy/cart',AdminCartComponent::class)->name('admin.cart');
    Route::get('/admin/pharmacy/Sale',AdminShopSalesComponent::class)->name('admin.pharmacysale');
    Route::get('/admin/pharmacy/order/detail/{order_id}',AdminShopOrderComponent::class)->name('admin.pharmacyorder');
    Route::get('/admin/all/subscription/packages',AdminSubscriptionPackagesComponent::class)->name('admin.subscriptionpackages');
    Route::get('/admin/add/subscription/pacakage',AddSubscriptionPackageComponent::class)->name('admin.addsubscriptionpacakage');
    Route::get('admin/edit/subscription/pacakage/{id}',EditSubscriptionPackageComponent::class)->name('admin.editpacakage');
});
 //DOC
 Route::middleware(['auth:sanctum', 'verified','authdoc'])->group( function () {
    Route::get("/doctor/dashboard",DoctorDashboardComponent::class)->name("doctor.dashboard");
    Route::get("/doctor/profile",DoctorProfileComponent::class)->name("doctor.profile");
    Route::get("/doctor/update/profile",DoctorAddProfileComponent::class)->name("doctor.updateprofile");
    Route::get("/doctor/profile/edit/{user_id}",DoctorEditProfileComponent::class)->name("doctor.editprofile");
    Route::get('doctor/onlineappointment',DoctorOnlineAppointmentComponent::class)->name('doctor.onlineappointment');
    Route::get('doctor/onlineappointment/detail/{appointment_id}',DoctorOnlineAppointmentDetailComponent::class)->name('doctor.onlineappointmentdetail');
    Route::get('/doctor/add/hours',DoctorAddTimingComponent::class)->name('doctor.addtiming');
    Route::get('/doctor/available/in/hospitals',DoctorHospitalDetailComponent::class)->name('doctor.hospitals');
});Route::get('/doctor/buy/package/{id}',BuySubscriptionPackageComponent::class)->name('doctor.buy_package');

//PHR
Route::middleware(['auth:sanctum', 'verified','authphr'])->group( function () {
    Route::get("/pharmacist/dashboard",PharmacistDashboardComponent::class)->name("pharmacist.dashboard");
    Route::get('/pharmacist/profile',PharmacistProfileComponent::class)->name('phramacist.profile');
    Route::get('/pharmacist/edit/profile',PharmacistEditProfileComponent::class)->name('pharmacist.editprofile');
    Route::get('/pharmacist/product/list',PharmacistProductComponent::class)->name('pharmacist.products');
    Route::get('/pharmacist/add/inventory',PharmacistAddInventoryComponent::class)->name('pharmacist.addinventory');
    Route::get('/pharmacist/shop',PharmacistShopComponent::class)->name('pharmacist.shop');
    Route::get('/pharmacist/cart',PharamacistCartComponent::class)->name('pharmacist.cart');
    Route::get('/pharmacist/cancel/perscription',CancelPerscriptionComponent::class)->name('pharmacist.perscriptioncancel');
    Route::get('/pharmacists/all/perscriptions',AllPerscriptionsComponent::class)->name('pharmacist.perscriptions');
    Route::get('/pharmacidt/all/delivered/perscriptions',AllDeliveredPerscriptionsComponent::class)->name('pharmacist.deliveredperscriptions');
    Route::get('/pharmacist/today/perscriptions',TodayPerscriptionsComponent::class)->name('pharmacist.todayperscriptions');
    Route::get('/pharmacist/today/pharmacy/orders',PharmacistDetailComponent::class)->name('pharmacist.todayorders');
    Route::get('/pharmacist/orders/detail/{order_id}',PharmacistOrdersDetailComponent::class)->name('pharmacist.shoporderdetails');
    Route::get('/pharmacist/all/orders',PharmacistAllShopSalesComponent::class)->name('pharmacist.allshoporders');
    Route::get('/pharmacist/stock/detail',PharmacistInventoryStockDetailComponent::class)->name('pharmacist.stock');
});
//DELBOY
Route::middleware(['auth:sanctum', 'verified','authdelboy'])->group( function () {
    Route::get("/deliveryboy/dashboard",DeliverboyDashboardComponent::class)->name("deliveryboy.dashboard");
    Route::get('/deliveryboy/profile',DeliveryBoyProfileComponent::class)->name('deliveryboy.profile');
   Route::get('/deliveryboy/edit/profile',DeliveryBoyEditProfileComponent::class)->name('deliveryboy.editprofile');
   Route::get('/deliveryboy/view/order/detail{order_id}',DeliveryBoyViewOrderDetailComponent::class)->name('deliveryboy.orderdetail');
});
//DELMAN
Route::middleware(['auth:sanctum', 'verified','authdelman'])->group( function () {
    Route::get("/deliverymanger/dashboard",DeliverymanagerDashboardComponent::class)->name("deliverymanager.dashboard");
    Route::get("/deliverymanager/order/detail/{order_id}",DeliveryManagerOrderDetailsComponent::class)->name('deliverymanager.orderdetail');
    Route::get("/deliverymamager/profile",DeliveryManagerProfileComponent::class)->name('deliverymanager.profile');
    Route::get("/deliverymanager/edit/profile",DeliveryManagerEditProfileComponent::class)->name('deliverymanager.editprofile');
    Route::get("/deliverymanager/all/orders",DeliveryManagerAllOrdersComponet::class)->name('deliverymanager.allorders');
    Route::get("/deliverymanager/all/delivered/orders",DeliveryManagerAllDeliveredOrdersComponet::class)->name('deliverymanager.alldeliveredorders');
    Route::get("/deliverymanager/all/process/orders",DeliveryManagerAllProcessOrdersComponet::class)->name('deliverymanager.allprocessorders');
    Route::get("/deliverymanager/all/dispatch/orders",DeliveryManagerAllDispatchOrdersComponet::class)->name('deliverymanager.alldispatchorders');
    Route::get("/deliverymanager/all/pending/orders",DeliveryManagerAllPendingOrdersComponet::class)->name('deliverymanager.allpendingorders');

});
//blogger
Route::middleware(['auth:sanctum', 'verified','authblogger'])->group( function () {
    Route::get("/blogger/dashboard",BloggerDashboardComponent::class)->name("blogger.dashboard");
    Route::get("/blogger/add/blog",BloggerAddBlogComponent::class)->name('blogger.addblog');
    Route::get("/blogger/profile",BloogerPorfileComponent::class)->name('blogger.profile');
    Route::get("/bogger/edit/profile",BloggerEditProfileComponent::class)->name('blogger.editprofile');
    Route::get('/blooger/edit/blog/{id}',BloggerEditBlogComponent::class)->name('blogger.editblog');
    Route::get('/blogger/change/password',BloggerChangePasswordComponent::class)->name('blogger.changepasword');

});
//Supplier
Route::middleware(['auth:sanctum', 'verified','authsup'])->group( function () {
    Route::get("/supplier/dashboard",SupplierDashboardComponent::class)->name("supplier.dashboard");
    Route::get('suplier/products',SupplierProductsComponent::class)->name('supplier.products');
    Route::get('/supplier/product/add',SupplierAddProductComponent::class)->name('supplier.addproduct');
    Route::get('supplier/product/edit/{product_slug}',SupplierEditProductComponent::class)->name('supplier.editproduct');
    Route::get('supplier/profile',SupplierProfileComponent::class)->name('supplier.profile');
    Route::get('supplier/profile/edit',SupplierEditProfileComponent::class)->name('supplier.editprofile');
    Route::get('/supplier/inventory',SupplierInventoryComponent::class)->name('my.inventory');
});
