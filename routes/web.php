<?php





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


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/offers', function () {
    return view('offers');
}) -> name('offer');
Route::get('/platform', function () {
    return view('platform');
})->name('platform');
Route::get('/preview', function () {
    return view('preview');
});



Route::get('/dashboard', 'CpanelController@index')->name('cpanel-index')->middleware('adminRole');

/*User Routes */

Route::get('/login','Controllers\UserController@index')->name('login.index')->middleware('guest');
Route::post('/register' , 'Controllers\UserController@store')->name('register');
Route::post('/login','Controllers\UserController@login')->name('login.user');

/***********************************************************************************************************/


/*electric device Routes */

Route::get('/ElecDevice','Controllers\ElecDeviceController@index')->name('ElecDevice');

/***********************************************************************************************************/

/**Market Routes */

Route::get('/market','Controllers\MarketController@index')->name('market')->middleware('auth');

/***********************************************************************************************************/

/**Category Routes */
Route::get('/Categories', 'Controllers\CategoryController@index')->name('categories');
Route::get('AddCategory/{type}', 'CategoryController@AddCategory') -> name('AddCategory');
Route::post('storeCategory', 'Controllers\CategoryController@storeCategory') -> name('storeCategory');
Route::get('editCategory/{id}', 'Controllers\CategoryController@editCategory')->name('editCategory');
Route::post('/updateCat', 'Controllers\CategoryController@updateCategory')->name('updateCategory');
Route::post('deleteCategory/{offer_id}', 'Controllers\CategoryController@deleteCategory')->name('deleteCategory');

 /************************************************************************************************************/

/**SubCategory Routes */
Route::get('/subCategory/{type}', 'SubCategoryController@index')->name('subCats');
Route::get('AddSubCategory/{type}', 'SubCategoryController@AddCategory') -> name('AddSubCategory');
Route::post('storeSubCategory', 'Controllers\SubCategoryController@storeCategory') -> name('storeSubCategory');
Route::get('editSubCategory/{id}', 'Controllers\SubCategoryController@editCategory')->name('editSubCategory');
Route::post('/updateSubCat', 'Controllers\SubCategoryController@updateCategory')->name('updateSubCat');
Route::get('deleteSubCategory/{offer_id}', 'Controllers\SubCategoryController@deleteCategory')->name('deleteSubCategory');

 /************************************************************************************************************/

 /**Product Routes */
Route::get('/products/{type}', 'ProductController@index')->name('products');
Route::get('AddProduct/{type}', 'ProductController@AddProduct') -> name('AddProduct');
Route::post('storeProduct', 'Controllers\ProductController@storeProduct') -> name('storeProduct');
Route::get('editProduct/{id}', 'Controllers\ProductController@editProduct')->name('editProduct');
Route::post('/updateProduct', 'Controllers\ProductController@updateProduct')->name('updateProduct');
Route::get('deleteProduct/{offer_id}', 'Controllers\ProductController@deleteProduct')->name('deleteProduct');
Route::get('showProduct/{id}', 'Controllers\ProductController@showProduct')->name('showProduct');

 /************************************************************************************************************/

  /**offers Routes */
Route::get('/offers', 'OfferController@index')->name('offers');
Route::get('AddOffer', 'OfferController@AddOffer') -> name('AddOffer');
Route::post('storeOffer', 'Controllers\OfferController@storeOffer') -> name('storeOffer');
Route::get('editOffer/{id}', 'Controllers\OfferController@editOffer')->name('editOffer');
Route::post('/updateOffer', 'Controllers\OfferController@updateOffer')->name('updateOffer');
Route::get('deleteOffer/{offer_id}', 'OfferController@deleteOffer')->name('deleteOffer');
Route::get('findProduct/{id}', 'Controllers\OfferController@findProduct')->name('findProduct');

 /************************************************************************************************************/

   /**Courses Routes */
Route::get('/courses', 'Controllers\CourseController@index') -> name('courses');
Route::post('/AddCourse', 'Controllers\CourseController@storeCourse') -> name('storeCourse');
Route::get('editCourse/{id}', 'Controllers\CourseController@editCourse')->name('editCourse');
Route::post('/updateOffer', 'Controllers\CourseController@updateCourse')->name('updateCourse');
Route::post('deleteOffer/{id}', 'Controllers\CourseController@deleteCourse')->name('deleteCourse');
Route::get('/course/details/{id}','Controllers\CourseController@courseDetails')->name('courseDetails');


 /************************************************************************************************************/

   /**Section Routes */
Route::post('/AddSection', 'Controllers\SectionController@storeSection') -> name('storeSection');
Route::get('editSection/{id}', 'Controllers\SectionController@editSection')->name('editSection');
Route::post('/updateSection', 'Controllers\SectionController@updateSection')->name('updateSection');
Route::post('deleteSection/{id}', 'Controllers\SectionController@deleteSection')->name('deleteSection');
Route::post('/uploadVideo','Controllers\SectionController@uploadVideo')->name('uploadVideo');
Route::get('/sectionId/{id}','Controllers\SectionController@sectionId');
Route::get('/showVideo/{id}','Controllers\SectionController@showVideo')->name('showVideo');
Route::get('/getVideo/{id}','Controllers\SectionController@getVideo')->name('getVideo');



 /************************************************************************************************************/

  /**Client Routes */
 Route::get('/clientProfile', 'Controllers\UserController@clientProfile') ;



  /************************************************************************************************************/

   /**Associate Routes */
 Route::get('/assocProfile/{id}', 'Controllers\UserController@assocProfile')->name('assocProfile');
 Route::get('/registerClient','Controllers\UserController@registerClient')->name('registerClient');
 Route::post('/addAssocClient','Controllers\UserController@addAssocClient')->name('addAssocClient');
 Route::get('/getInfo/{id}','Controllers\UserController@getInfo')->name('getInfo');
 Route::post('/addPoints', 'Controllers\UserController@addPoints')->name('addPoints');

  /************************************************************************************************************/

  /**Company Routes */
 Route::get('/companyProfile', 'Controllers\UserController@companyProfile');


 /************************************************************************************************************/

   /**Admin Routes */
   Route::get('/adminProfile', 'Controllers\UserController@adminProfile')->name('adminProfile')->middleware('adminRole');
   Route::POST('/addCompany', 'Controllers\AdminController@addCompany')->name('addCompany');
   Route::POST('/addAssociation', 'Controllers\AdminController@addAssoc')->name('addAssoc');
   Route::POST('/addClient', 'Controllers\AdminController@addClient')->name('addClient');

   /************************************************************************************************************/
