<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('assests/css/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assests/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assests/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assests/css/slick.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assests/css/slick-theme.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assests/css/datatables.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assests/css/style.css') }}" />
    <title>Dash-Board</title>
    <style>
        .dashboard{
            direction: ltr;
        }


    </style>
</head>
<body>

    <div class="dashboard">
        <div class="container-fluid">
            <div class="dash-holder">
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-4 custom-col">
                       <div class="side-navbar-cont">

                        <div class="side-navbar-list">

                            <div class="elect_device_collapse">
                                <a class="active" id="list-home-list" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">اجهزة كهربائية</a><i class="fas fa-plug"></i>
                                <div class="collapse" id="collapseExample">
                                    <div class="list-group sub_list" id="list-tab" role="tablist">
                                        <a id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">فئات</a>
                                        <a id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">فئات فرعية</a>
                                        <a id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">منتجات</a>
                                        <a id="list-prod-list" data-toggle="list" href="#list-product" role="tab" aria-controls="product">أضف منتج جديد</a>
                                    </div>
                                </div>
                            </div>

                            <br/>

                            <div class="elect_device_collapse">
                                <a class="active" id="list-market-list" data-toggle="collapse" href="#market_list" role="button" aria-expanded="false" aria-controls="collapseExample">السوق</a><i class="fas fa-store-alt"></i>
                                <div class="collapse" id="market_list">
                                    <div class="list-group sub_list" id="list-tab" role="tablist">
                                        <a id="list-market-list" data-toggle="list" href="#market_cate" role="tab" aria-controls="home">فئات</a>
                                        <a id="list-market-cat-list" data-toggle="list" href="#market_sub_cate" role="tab" aria-controls="profile">فئات فرعية</a>
                                        <a id="list-market-prod-list" data-toggle="list" href="#market_prod" role="tab" aria-controls="messages">منتجات</a>
                                        <a id="list-market-new-prod-list" data-toggle="list" href="#market_new_prod" role="tab" aria-controls="product">أضف منتج جديد</a>
                                    </div>
                                </div>
                            </div>

                            <br />

                            <div class="elect_device_collapse">
                                <a class="active" id="list-market-list" data-toggle="collapse" href="#offer_list" role="button" aria-expanded="false" aria-controls="collapseExample">عروض وخصومات</a><i class="fas fa-tags"></i>
                                <div class="collapse" id="offer_list">
                                    <div class="list-group sub_list" id="list-tab" role="tablist">
                                        <a id="list-market-list" data-toggle="list" href="#offer_tab" role="tab" aria-controls="home">كل العروض </a>
                                        <a id="list-market-list" data-toggle="list" href="#add_offer_tab" role="tab" aria-controls="home">اضف عرض</a>
                                    </div>
                                </div>
                            </div>

                         <br/>
                            <div class="elect_device_collapse">
                                <a class="active" id="list-course-list" data-toggle="collapse" href="#course_list" role="button" aria-expanded="false" aria-controls="collapseExample">كورسات</a><i class="fas fa-chalkboard-teacher"></i>
                                <div class="collapse" id="course_list">
                                    <div class="list-group sub_list" id="list-tab" role="tablist">
                                        <a id="list-course-all-list" data-toggle="list" href="#all_course" role="tab" aria-controls="home">جميع الكورسات </a>
                                        <a id="list-course-add-list" data-toggle="list" href="#add_course" role="tab" aria-controls="home">أضف كورس </a>
                                        <a id="list-course-section-list" data-toggle="list" href="#add_section" role="tab" aria-controls="home">أضف قسم</a>
                                        <a id="list-course-all-section-list" data-toggle="list" href="#all_section" role="tab" aria-controls="home">جميع الأقسام</a>
                                    </div>
                                </div>
                            </div>



                        </div>


                           <div class="close-nav">
                               <span>X</span>
                           </div>

                       </div> <!-- side navbar container-->

                       <div class="open-nav">
                          <i class="fas fa-bars"></i>
                       </div>

                    </div> <!-- column -->

                    <div class="col-lg-10 col-md-9 col-8 main_tabs">
                        <div class="tab-content"  id="nav-tabContent">

                            <!-- جزء الاجهزة الكهربائية -->

                            <div class="tab-pane fade" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                                <div class="container-fluid">
                                    <div class="row">

                                        <div class="col-12">
                                            <div class="add_cate_btn">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                                                    إضف فئة جديدة
                                                </button>

                                                <!-- Modal -->
                                                <form action="{{ route('storeCategory') }}" enctype="multipart/form-data" method="POST" >
                                                    @csrf
                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form>
                                                                <input type="text" name="name" class="form-control" placeholder="أدخل أسم الفئة" />
                                                                <input hidden name="type" value="0">
                                                                <br/>
                                                                <input type="file" name="img_url" class="form-control" id="file" onchange="readURL(this)">

                                                                <div class="pic_preview">

                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-success">Save changes</button>
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                </form>
                                                <!-- Modal -->

                                                <!-- category Table-->

                                                <div class="cate_table_cont table-responsive">
                                                    <table class="table" id="TableSearch">
                                                        <thead>
                                                            <th>#</th>
                                                            <th>أسم الفئة</th>
                                                            <th>صورة الفئة</th>
                                                            <th></th>
                                                            <th></th>
                                                        </thead>

                                                        <tbody>
                                                            @foreach ($categories as $key=> $category )
                                                            <tr>
                                                                @if($category->type == 0)
                                                                <td>{{ $key+1 }}</td>
                                                                <td>
                                                                    <div>{{ $category->name_ar }}</div>
                                                                </td>

                                                                <td>
                                                                    <div><img src="/images/Category/{{ $category->img_url }}" /></div>
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <a href="javascript:void(0)" onclick="editCategory({{ $category->id }})" style="color: #fff;" class="btn btn-warning" data-toggle="modal" data-target="#editModal">
                                                                            تعديل
                                                                        </a>
                                                                </td>

                                                                <td>
                                                                    <div class="delete_btn">
                                                                        <form action="{{ route('deleteCategory',$category->id) }}" method="post">
                                                                            @csrf
                                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                                        </form>
                                                                     </div>
                                                                </td>
                                                                        @endif
                                                                        @endforeach
                                                                          <!-- Modal -->
                                                                          <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                                                            <div class="modal-dialog">
                                                                              <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                  </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <form action="{{ route('updateCategory') }}" enctype="multipart/form-data" id="editForm" method="POST">
                                                                                        @csrf
                                                                                        <input type="hidden" name="type" id="type" value="0" >
                                                                                        <input type="hidden" name="id" id="id">
                                                                                        <input  name="name" id="name" type="text" class="form-control" placeholder="أدخل أسم الفئة" />
                                                                                        <br/>
                                                                                        <input  name="img_url" type="file"  class="form-control" name="files[]" id="file" onchange="readURL2(this)">

                                                                                        <div class="pic_preview2">

                                                                                        </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                  <a href="" class="btn btn-secondary" data-dismiss="modal">Close</a>
                                                                                  <button type="submit" class="btn btn-success">Save changes</button>
                                                                                </form>
                                                                                </div>
                                                                              </div>
                                                                            </div>
                                                                          </div>
                                                                    </div>

                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- category Table-->

                                            </div>
                                        </div> <!-- col-12 -->

                                    </div>
                                </div>
                            </div> <!-- الفئات -->


                            <div class="tab-pane fade " id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                                <div class="container-fluid">
                                    <div class="row">

                                        <div class="col-12">
                                            <div class="add_cate_btn">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#sub_cate_modal">
                                                    إضف فئة فرعية جديدة
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="sub_cate_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('storeSubCategory') }}"  enctype="multipart/form-data" method="POST">
                                                                @csrf
                                                                <input type="text" name="name" class="form-control" placeholder=" أدخل أسم الفئة الفرعية" />
                                                                <input type="hidden" name="type" value="0">
                                                                <input type="hidden" >
                                                                <br/>
                                                                <div class="dropdown">

                                                                    <br/>
                                                                    <select name="cat_id" class="form-control">
                                                                        <option selected disabled>Select Category...</option>
                                                                        @foreach ($categories as $category )
                                                                        @if($category->type == 0)
                                                                        <option value="{{ $category->id }}">{{ $category->name_ar }}</option>
                                                                        @endif
                                                                        @endforeach
                                                                    </select>
                                                                  <br/>
                                                                  </div>
                                                                  <br/>
                                                                <input type="file" class="form-control"  name="img_url" id="file" onchange="readURL(this)">
                                                                <br />

                                                                <div class="pic_preview">

                                                                </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-success">Save changes</button>
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </form>
                                                <!-- Modal -->

                                                <!-- category Table-->
                                                <div class="cate_table_cont table-responsive">
                                                    <table class="table" id="TableSearch">
                                                        <thead>
                                                            <th>#</th>
                                                            <th>أسم الفئة</th>
                                                            <th>صورة الفئة</th>
                                                            <th>نوع الفئة</th>
                                                            <th></th>
                                                            <th></th>
                                                        </thead>

                                                        <tbody>
                                                            @foreach ($subcategories as $index=>$subcategory)
                                                            @if($subcategory->type == 0)
                                                            <tr>
                                                                <td>{{ $index +1}}</td>
                                                                <td>
                                                                    <div>{{ $subcategory->name_ar }}</div>
                                                                </td>

                                                                <td>
                                                                    <div><img src="/images/SubCategory/{{ $subcategory->img_url }}" /></div>
                                                                </td>

                                                                <td>
                                                                    <div class="dropdown">
                                                                        <a class="btn btn-info" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            {{ $subcategory->findCat($subcategory->cat_id) }}
                                                                        </a>
                                                                      </div>
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <a href="javascript:void(0)" onclick="editSubCategory({{ $subcategory->id }})" style="color: #fff;" class="btn btn-warning" data-toggle="modal" data-target="#sub_editModal">
                                                                            تعديل
                                                                          </a>

                                                                          <!-- Modal -->
                                                                          <div class="modal fade" id="sub_editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                                                            <div class="modal-dialog">
                                                                              <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                  </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <form action="{{ route('updateSubCat') }}" enctype="multipart/form-data" method="POST">
                                                                                        @csrf
                                                                                        <input type="hidden" name="id" id="sid">
                                                                                        <input type="hidden" name="type" value="0">
                                                                                        <input  id="names"  name="name"  type="text" class="form-control" placeholder="أدخل أسم الفئة" />
                                                                                        <br>
                                                                                        <select name="cat_id" class="form-control">
                                                                                            <option selected disabled>Select Category...</option>
                                                                                            @foreach ($categories as $category )
                                                                                            @if($category->type == 0)
                                                                                            <option value="{{ $category->id }}">{{ $category->name_ar }}</option>
                                                                                            @endif
                                                                                            @endforeach
                                                                                        </select>
                                                                                        <br>
                                                                                        <input name="img_url" type="file" class="form-control" id="file" onchange="readURL2(this)">

                                                                                        <div class="pic_preview">

                                                                                        </div>

                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                  <button type="submit" class="btn btn-primary">Save changes</button>
                                                                                </div>
                                                                            </form>
                                                                              </div>
                                                                            </div>
                                                                          </div>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="delete_btn">
                                                                        <form action="{{ route('deleteSubCategory',$subcategory->id) }}">
                                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                                        </form>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            @endif
                                                            @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- category Table-->

                                            </div>
                                        </div> <!-- col-12 -->

                                    </div>
                                </div>
                            </div> <!-- الفئات الفرعية-->


                            <div class="tab-pane fade " id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                                <div class="container-fluid">
                                    <div class="row">

                                        <div class="col-12 new_product_container">
                                            <div class="add_cate_btn">
                                                <!-- category Table-->
                                                <div class="prod_table cate_table_cont table-responsive">
                                                    <table class="table" id="TableSearch-prod">
                                                        <thead>
                                                            <th>#</th>
                                                            <th>أسم المنتج</th>
                                                            <th>وصف مختصر</th>
                                                            <th>وصف المنتج تفصيلا</th>
                                                            <th>السعر</th>
                                                            <th>السعر بعد الخصم</th>
                                                            <th> صورة اساسية <span class="req">*</span></th>
                                                            <th>بلد المنشأ</th>
                                                            <th>الكمية</th>
                                                            <th>مدة الصلاحية</th>
                                                            <th>الحجم</th>
                                                            <th>ملاحظات</th>
                                                            <th></th>
                                                            <th></th>
                                                        </thead>

                                                        <tbody>
                                                            @foreach ($products as $index=>$product)
                                                            @if($product->type == 0)
                                                            <tr>
                                                                <td>{{ $index+1 }}</td>
                                                                <td>
                                                                    <div>{{ $product->name }}</div>
                                                                </td>
                                                                <td>
                                                                    <div>{{ $product->short_description }}</div>
                                                                </td>
                                                                <td>
                                                                    <div> {{ $product->description }} </div>
                                                                </td>
                                                                <td>
                                                                    <div>{{ $product->old_point }}</div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        {{ $product->point }}
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div><img src="/images/Product/{{ $product->main_img }}" /></div>
                                                                </td>

                                                                <td>
                                                                    <div>{{ $product->country }}</div>
                                                                </td>


                                                                <td>
                                                                    <div>{{ $product->qnt }}</div>
                                                                </td>

                                                                <td>
                                                                    {{ $product->valdiation }}
                                                                </td>
                                                                <td>
                                                                    <div>{{ $product->size }}</div>
                                                                </td>
                                                                <td>
                                                                    <div>{{ $product->store_conditions }}</div>
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <a href="javascript:void(0)" onclick="editProduct({{ $product->id }})" style="color: #fff;" class="btn btn-warning edit_prod_btn">
                                                                            تعديل
                                                                        </a>

                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <form action="{{ route('deleteProduct',$product->id) }}">
                                                                        @csrf
                                                                    <div class="delete_btn">
                                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                                    </div>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                            @endif
                                                            @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- category Table-->

                                            </div>
                                        </div> <!-- col-12 -->

                                        <div class="col-12 edit-prod-form">
                                            <div class="form">
                                                <form id="product-edit" action="{{ route('updateProduct') }}" enctype="multipart/form-data" method="POST">
                                                    @csrf
                                                <div class="row">

                                                    <input type="hidden" name="type" value="0">
                                                    <input type="hidden"  name="id" id="pid">

                                                    <div class="col-sm-6 col-12">
                                                        <label>إسم المنتج</label>
                                                        <input name="name" id="pname" type="text" class="form-control" required />
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>الكمية</label>
                                                        <input name="qnt" id="pqnt" type="number" class="form-control" required/>
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>سعر المنتج</label>
                                                        <input name="old_point" id="pold_point" type="number" class="form-control" required/>
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label> سعر المنتج بعد الخصم</label>
                                                        <input name="point" id="ppoint" type="number" class="form-control" required/>
                                                    </div>

                                                    <div class="col-12">
                                                        <label>وصف مختصر للمنتج</label>
                                                        <textarea name="short_description" id="pshort_description" class="form-control" required></textarea>
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>أضف صورة اساسية</label>
                                                        <input name="main_img" type="file" class="form-control" required />
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>أضف صور فرعية</label>
                                                        <input name="img1" type="file" class="form-control" multiple />
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>أضف صور فرعية</label>
                                                        <input name="img2" type="file" class="form-control" multiple />
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>أضف صور فرعية</label>
                                                        <input name="img3" type="file" class="form-control" multiple />
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>أختر الفئة الفرعية</label>
                                                        <select name="category" class="form-control">
                                                            <option selected disabled>Select Sub Category...</option>
                                                            @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->name_ar }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>أختر الفئة الفرعية</label>
                                                        <select name="sub_category" class="form-control">
                                                            <option selected disabled>Select Sub Category...</option>
                                                            @foreach ($subcategories as $subcategory)
                                                            <option value="{{ $subcategory->id }}">{{ $subcategory->name_ar }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="col-12">
                                                        <label>وصف تفصيلى للمنتج</label>
                                                        <textarea name="description" id="pdescription" class="form-control" ></textarea>
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>بلد المنشأ</label>
                                                        <input name="country" id="pcountry" type="text" class="form-control" required />
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>فترة الصلاحية <span>بالشهور</span></label>
                                                        <input name="valdiation" id="pvaldiation" type="number" class="form-control" required/>
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>حجم العبوة</label>
                                                        <input name="size" id="psize" type="text" class="form-control" required />
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>ملاحظات</label>
                                                        <textarea name="store_conditions" id="pstore_conditions" class="form-control" ></textarea>
                                                    </div>
                                                    <br/>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="available" value="1">
                                                        <label class="form-check-label mr-3" >
                                                          Available
                                                        </label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="available" value="0">
                                                        <label class="form-check-label mr-3" >
                                                            Not Available
                                                        </label>
                                                      </div>

                                                    <div class="col-12 text-center">
                                                        <button type="submit" style="color: #fff;" class="btn btn-warning edit_btn">تعديل منتج</button>
                                                    </div>


                                                </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div> <!-- المنتجات -->

                            <div class="tab-pane fade " id="list-product" role="tabpanel" aria-labelledby="list-prod-list">
                                <div class="new-product">
                                    <div class="container-fluid">
                                        <div class="form">
                                            <form action="{{ route('storeProduct') }}" enctype="multipart/form-data" method="POST">
                                                @csrf
                                            <div class="row">
                                                <input type="hidden" name="type" value="0">

                                                <div class="col-sm-6 col-12">
                                                    <label>إسم المنتج</label>
                                                    <input name="name" type="text" class="form-control" required />
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label>الكمية</label>
                                                    <input name="qnt" type="number" class="form-control" required/>
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label>سعر المنتج</label>
                                                    <input name="old_point" type="number" class="form-control" required/>
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label> سعر المنتج بعد الخصم</label>
                                                    <input name="point" type="number" class="form-control" required/>
                                                </div>

                                                <div class="col-12">
                                                    <label>وصف مختصر للمنتج</label>
                                                    <textarea name="short_description" class="form-control" required></textarea>
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label>أضف صورة اساسية</label>
                                                    <input name="img_url" type="file" class="form-control" required />
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label>أضف صور فرعية</label>
                                                    <input name="img1" type="file" class="form-control" multiple />
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label>أضف صور فرعية</label>
                                                    <input name="img2" type="file" class="form-control" multiple />
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label>أضف صور فرعية</label>
                                                    <input name="img3" type="file" class="form-control" multiple />
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label>أختر الفئة</label>
                                                    <select name="category" class="form-control">
                                                        <option selected disabled>Select Category...</option>
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->name_ar }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>أختر الفئة الفرعية</label>
                                                        <select name="sub_category" class="form-control">
                                                            <option selected disabled>Select Sub Category...</option>
                                                            @foreach ($subcategories as $subcategory)
                                                            <option value="{{ $subcategory->id }}">{{ $subcategory->name_ar }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                <div class="col-12">
                                                    <label>وصف تفصيلى للمنتج</label>
                                                    <textarea name="description" class="form-control" ></textarea>
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label>بلد المنشأ</label>
                                                    <input name="country" type="text" class="form-control" required />
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label>فترة الصلاحية <span>بالشهور</span></label>
                                                    <input name="valdiation" type="text" class="form-control" required/>
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label>حجم العبوة</label>
                                                    <input name="size" type="text" class="form-control" required />
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label>ملاحظات</label>
                                                    <textarea name="store_conditions" class="form-control" ></textarea>
                                                </div>
                                                <br/>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="available" value="1">
                                                    <label class="form-check-label mr-3" >
                                                      Available
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="available" value="0">
                                                    <label class="form-check-label mr-3" >
                                                        Not Available
                                                    </label>
                                                  </div>
                                                <div class="col-12 text-center">
                                                    <button type="submit" class="btn btn-success add_new_btn">أضف منتج</button>
                                                </div>

                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- اضف منتج جديد -->

                            <!-- market part-->

                            <div class="tab-pane fade " id="market_cate" role="tabpanel" aria-labelledby="list-market-list">
                                <div class="container-fluid">
                                    <div class="row">

                                        <div class="col-12">
                                            <div class="add_cate_btn">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-success" data-toggle="modal" aria-labelledby="myModalLabel" data-target="#market_modal">
                                                 إضف فئة جديدة
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="market_modal" tabindex="-1" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <form action="{{ route('storeCategory') }}" enctype="multipart/form-data" method="POST">
                                                                    @csrf
                                                                    <input name="name" type="text" class="form-control" placeholder="أدخل أسم الفئة" />
                                                                    <input type="hidden" name="type" value="1">
                                                                    <br/>
                                                                    <input name="img_url" type="file" class="form-control" id="file" onchange="readURL(this)">

                                                                    <div class="pic_preview">
                                                                        <img src="#" id="blah" alt="Preview Image" />
                                                                    </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-success">Save changes</button>
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </form>
                                                <!-- Modal -->

                                                <!-- category Table-->
                                                <div class="cate_table_cont table-responsive">
                                                    <table class="table" id="TableSearch">
                                                        <thead>
                                                            <th>#</th>
                                                            <th>أسم الفئة</th>
                                                            <th>صورة الفئة</th>
                                                            <th></th>
                                                            <th></th>
                                                        </thead>

                                                        <tbody>
                                                            @foreach($categories as $index => $category)
                                                            @if($category->type ==1)
                                                            <tr>
                                                                <td>{{ $index+1 }}</td>
                                                                <td>
                                                                    <div>{{ $category->name_ar }}</div>
                                                                </td>

                                                                <td>
                                                                    <div><img src="/images/Category/{{ $category->img_url }}" /></div>
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <a href="javascript:void(0)" onclick="editMarketCategory({{ $category->id }})" style="color: #fff;" class="btn btn-warning" data-toggle="modal" data-target="#market_editModal">
                                                                            تعديل
                                                                          </a>

                                                                          <!-- Modal -->
                                                                          <div class="modal fade" id="market_editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                                                            <div class="modal-dialog">
                                                                              <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                  </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <form action="{{ route('updateCategory') }}" enctype="multipart/form-data" method="POST">
                                                                                        @csrf
                                                                                        <input type="hidden" name="type" value="1">
                                                                                        <input type="hidden" name="id" id="idm">
                                                                                        <input name="name" id="namem" type="text" class="form-control" placeholder="أدخل أسم الفئة" />
                                                                                        <br/>
                                                                                        <input name="img_url" type="file" class="form-control"  id="file" onchange="readURL2(this)">
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                  <button type="submit" class="btn btn-success">Save changes</button>
                                                                                </form>
                                                                                </div>
                                                                              </div>
                                                                            </div>
                                                                          </div>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="delete_btn">
                                                                        <form action="{{ route('deleteCategory',$category->id) }}" method="POST">
                                                                            @csrf
                                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                                        </form>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            @endif
                                                            @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- category Table-->

                                            </div>
                                        </div> <!-- col-12 -->

                                    </div>
                                </div>
                            </div> <!-- الفئات -->

                            <div class="tab-pane fade " id="market_sub_cate" role="tabpanel" aria-labelledby="list-market-cat-list">
                                <div class="container-fluid">
                                    <div class="row">

                                        <div class="col-12">
                                            <div class="add_cate_btn">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#market_sub_cate_modal">
                                                    إضف فئة فرعية جديدة
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="market_sub_cate_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('storeSubCategory') }}" enctype="multipart/form-data" method="POST">
                                                                @csrf
                                                                <input name="name" type="text" class="form-control" placeholder=" أدخل أسم الفئة الفرعية" />
                                                                <input name="type" type="hidden" value="1">
                                                                <br/>

                                                                  <div class="dropdown">
                                                                      <select name="cat_id" class="form-control">
                                                                          <option selected disabled>Select Sub Category...</option>
                                                                          @foreach ($categories as $category)
                                                                            @if($category->type==1)
                                                                                <option value="{{ $category->id }}">{{ $category->name_ar }}</option>
                                                                            @endif
                                                                          @endforeach
                                                                      </select>
                                                                    </div>
                                                                    <br/>
                                                                <input name="img_url" type="file" class="form-control" id="file" onchange="readURL(this)">
                                                                <br />


                                                                <div class="pic_preview">
                                                                    <img src="#" id="blah" alt="Preview Image" />
                                                                </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button  type="submit" class="btn btn-success">Save changes</button>
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </form>
                                                <!-- Modal -->

                                                <!-- category Table-->
                                                <div class="cate_table_cont table-responsive">
                                                    <table class="table" id="TableSearch">
                                                        <thead>
                                                            <th>#</th>
                                                            <th>أسم الفئة</th>
                                                            <th>صورة الفئة</th>
                                                            <th>نوع الفئة</th>
                                                            <th></th>
                                                            <th></th>
                                                        </thead>

                                                        <tbody>
                                                            @foreach ($subcategories as $index => $subcategory )
                                                            @if($subcategory->type == 1)
                                                            <tr>
                                                                <td>{{ $index+1 }}</td>
                                                                <td>
                                                                    <div>{{ $subcategory->name_ar }}</div>
                                                                </td>

                                                                <td>
                                                                    <div><img src="/images/subcategory/{{ $subcategory->img_url }}" /></div>
                                                                </td>

                                                                <td>
                                                                    <div class="dropdown">
                                                                        <a class="btn btn-info " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            {{ $subcategory->findCat($subcategory->cat_id) }}
                                                                        </a>
                                                                      </div>
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <a href="javascript:void(0)" onclick="editMarketSubCategory({{ $subcategory->id }})" style="color: #fff;" class="btn btn-warning" data-toggle="modal" data-target="#market_sub_editModal">
                                                                            تعديل
                                                                          </a>

                                                                          <!-- Modal -->
                                                                          <div class="modal fade" id="market_sub_editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                                                            <div class="modal-dialog">
                                                                              <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                  </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <form action="{{ route('updateSubCat') }}" enctype="multipart/form-data" method="POST">
                                                                                        @csrf
                                                                                        <input type="hidden" name="type" value="1">
                                                                                        <input type="hidden" name="id" id="msid">
                                                                                        <input name="name" id="namems" type="text" class="form-control" placeholder="أدخل أسم الفئة" />
                                                                                        <br/>

                                                                                        <div class="dropdown">
                                                                                            <select name="cat_id" class="form-control">
                                                                                                <option selected disabled>Select Sub Category...</option>
                                                                                                @foreach ($categories as $category)
                                                                                                  @if($category->type==1)
                                                                                                      <option value="{{ $category->id }}">{{ $category->name_ar }}</option>
                                                                                                  @endif
                                                                                                @endforeach
                                                                                            </select>
                                                                                          </div>
                                                                                          <br/>

                                                                                        <input name="img_url" type="file" class="form-control" id="file" onchange="readURL2(this)">
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                  <button type="submit" class="btn btn-success">Save changes</button>
                                                                                </form>
                                                                                </div>
                                                                              </div>
                                                                            </div>
                                                                          </div>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="delete_btn">
                                                                        <form action="{{ route('deleteSubCategory',$subcategory->id) }}">
                                                                            @csrf
                                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                                        </form>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            @endif
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- category Table-->

                                            </div>
                                        </div> <!-- col-12 -->

                                    </div>
                                </div>
                            </div> <!-- الفئات الفرعية-->

                            <div class="tab-pane fade " id="market_prod" role="tabpanel" aria-labelledby="list-market-prod-list">
                                <div class="container-fluid">
                                    <div class="row">

                                        <div class="col-12 new_product_container">
                                            <div class="add_cate_btn">
                                                <!-- category Table-->
                                                <div class="prod_table cate_table_cont table-responsive">
                                                    <table class="table" id="TableSearch-prod">
                                                        <thead>
                                                            <th>#</th>
                                                            <th>أسم المنتج</th>
                                                            <th>وصف مختصر</th>
                                                            <th>وصف المنتج تفصيلا</th>
                                                            <th>السعر</th>
                                                            <th>السعر بعد الخصم</th>
                                                            <th> صورة اساسية <span class="req">*</span></th>
                                                            <th>بلد المنشأ</th>
                                                            <th>الكمية</th>
                                                            <th>مدة الصلاحية</th>
                                                            <th>الحجم</th>
                                                            <th>ملاحظات</th>
                                                            <th></th>
                                                            <th></th>
                                                        </thead>

                                                        <tbody>
                                                            @foreach($products as $index=>$product)
                                                            @if($product->type == 1)
                                                            <tr>
                                                                <td>{{ $index+1 }}</td>
                                                                <td>
                                                                    <div>{{ $product->name }}</div>
                                                                </td>
                                                                <td>
                                                                    <div>{{ $product->short_description }}</div>
                                                                </td>
                                                                <td>
                                                                    <div>{{ $product->description }}</div>
                                                                </td>
                                                                <td>
                                                                    <div>{{ $product->old_point }}</div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        {{ $product->point }}
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div><img src="/images/Product/{{ $product->main_img }}" /></div>
                                                                </td>

                                                                <td>
                                                                    <div>{{ $product->country }}</div>
                                                                </td>


                                                                <td>
                                                                    <div>{{ $product->qnt }}</div>
                                                                </td>

                                                                <td>
                                                                    {{ $product->valdiation }}
                                                                </td>
                                                                <td>
                                                                    <div>{{ $product->size }}</div>
                                                                </td>
                                                                <td>
                                                                    <div>{{ $product->store_conditions }}</div>
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <a href="javascript:void(0)" onclick="editMarketProduct({{ $product->id }})" style="color: #fff;" class="btn btn-warning edit_prod_btn">
                                                                            تعديل
                                                                        </a>

                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <form action="{{ route('deleteProduct',$product->id) }}">
                                                                        @csrf
                                                                    <div class="delete_btn">
                                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                                    </div>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                            @endif
                                                            @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- category Table-->

                                            </div>
                                        </div> <!-- col-12 -->

                                        <div class="col-12 edit-prod-form">
                                            <div class="form">
                                                <form action="{{ route('updateProduct') }}" enctype="multipart/form-data" method="POST">
                                                    @csrf
                                                <div class="row">
                                                    <input type="hidden" name="id" id="pmid">
                                                    <input type="hidden" name="type" value="1">

                                                    <div class="col-sm-6 col-12">
                                                        <label>إسم المنتج</label>
                                                        <input name="name" id="pmname" type="text" class="form-control" required />
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>الكمية</label>
                                                        <input name="qnt" id="pmqnt" type="number" class="form-control" required/>
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>سعر المنتج</label>
                                                        <input name="old_point" id="pmold_point" type="number" class="form-control" required/>
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label> سعر المنتج بعد الخصم</label>
                                                        <input name="point" id="pmpoint" type="number" class="form-control" required/>
                                                    </div>

                                                    <div class="col-12">
                                                        <label>وصف مختصر للمنتج</label>
                                                        <textarea name="short_description" id="pmshort_description" class="form-control" required></textarea>
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>أضف صورة اساسية</label>
                                                        <input  name="main_img" type="file" class="form-control" required />
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>أضف صور فرعية</label>
                                                        <input name="img1" type="file" class="form-control" multiple />
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>أضف صور فرعية</label>
                                                        <input name="img2" type="file" class="form-control" multiple />
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>أضف صور فرعية</label>
                                                        <input name="img3" type="file" class="form-control" multiple />
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>أختر الفئة</label>
                                                        <select  name="category" class="form-control">
                                                            <option selected disabled>Select Category...</option>
                                                            @foreach ($categories as $category)
                                                                <option value="{{ $category->id }}">{{ $category->name_ar }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label> اختار الفئه الفرعيه</label>
                                                        <select  name="sub_category" class="form-control">
                                                            <option selected disabled>Select Category...</option>
                                                            @foreach ($subcategories as $subcategory)
                                                                <option value="{{ $subcategory->id }}">{{ $subcategory->name_ar }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="col-12">
                                                        <label>وصف تفصيلى للمنتج</label>
                                                        <textarea name="description" id="pmdescription" class="form-control" ></textarea>
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>بلد المنشأ</label>
                                                        <input name="country" id="pmcountry" type="text" class="form-control" required />
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>فترة الصلاحية <span>بالشهور</span></label>
                                                        <input name="valdiation" id="pmvaldiation" type="number" class="form-control" required/>
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>حجم العبوة</label>
                                                        <input name="size" id="pmsize" type="text" class="form-control" required />
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>ملاحظات</label>
                                                        <textarea name="store_conditions" id="pmstore_conditions" class="form-control" ></textarea>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="available" value="1">
                                                        <label class="form-check-label mr-3" >
                                                          Available
                                                        </label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="available" value="0">
                                                        <label class="form-check-label mr-3" >
                                                            Not Available
                                                        </label>
                                                      </div>
                                                    <br/>

                                                    <br/>
                                                    <div class="col-12 text-center">
                                                        <button type="submit" style="color: #fff;" class="btn btn-warning edit_btn">تعديل منتج</button>
                                                    </div>

                                                </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div> <!-- المنتجات -->

                            <div class="tab-pane fade " id="market_new_prod" role="tabpanel" aria-labelledby="list-market-new-prod-list">
                                <div class="new-product">
                                    <div class="container-fluid">
                                        <div class="form">
                                            <form action="{{ route('storeProduct') }}" enctype="multipart/form-data" method="POST">
                                                @csrf
                                            <div class="row">
                                                <input type="hidden" name="type" value="1">

                                                <div class="col-sm-6 col-12">
                                                    <label>إسم المنتج</label>
                                                    <input name="name" type="text" class="form-control" required />
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label>الكمية</label>
                                                    <input name="qnt" type="number" class="form-control" required/>
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label>سعر المنتج</label>
                                                    <input name="old_point" type="number" class="form-control" required/>
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label> سعر المنتج بعد الخصم</label>
                                                    <input name="point" type="number" class="form-control" required/>
                                                </div>

                                                <div class="col-12">
                                                    <label>وصف مختصر للمنتج</label>
                                                    <textarea name="short_description" class="form-control" required></textarea>
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label>أضف صورة اساسية</label>
                                                    <input name="img_url" type="file" class="form-control" required />
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label>أضف صور فرعية</label>
                                                    <input name="img1" type="file" class="form-control" multiple />
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label>أضف صور فرعية</label>
                                                    <input name="img2" type="file" class="form-control" multiple />
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label>أضف صور فرعية</label>
                                                    <input name="img3" type="file" class="form-control" multiple />
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label>أختر الفئة</label>
                                                    <select  name="category" class="form-control">
                                                        <option selected disabled>Select Category...</option>
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->name_ar }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label>أختر الفئة الفرعية</label>
                                                    <select name="sub_category" class="form-control">
                                                        <option selected disabled>Select Sub Category...</option>
                                                        @foreach ($subcategories as $subcategory)
                                                            <option value="{{ $subcategory->id }}">{{ $subcategory->name_ar }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="col-12">
                                                    <label>وصف تفصيلى للمنتج</label>
                                                    <textarea name="description" class="form-control" ></textarea>
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label>بلد المنشأ</label>
                                                    <input name="country" type="text" class="form-control" required />
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label>فترة الصلاحية <span>بالشهور</span></label>
                                                    <input name="valdiation" type="number" class="form-control" required/>
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label>حجم العبوة</label>
                                                    <input name="size" type="text" class="form-control" required />
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label>ملاحظات</label>
                                                    <textarea name="store_conditions" class="form-control" ></textarea>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="available" value="1">
                                                    <label class="form-check-label mr-3" >
                                                      Available
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="available" value="0">
                                                    <label class="form-check-label mr-3" >
                                                        Not Available
                                                    </label>
                                                  </div>
                                                <br/>
                                                <div class="col-12 text-center">
                                                    <button type="submit" class="btn btn-success add_new_btn">أضف منتج</button>
                                                </div>

                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- اضف منتج جديد -->

                            <!-- market part-->

                            <!-- offer tabs -->
                            <div class="tab-pane fade " id="offer_tab" role="tabpanel" aria-labelledby="list-market-new-prod-list">
                                <div class="new-offer">
                                    <div class="container-fluid">
                                        <div class="form">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="table-responsive cate_table_cont">
                                                        <table class="table ">
                                                            <thead>
                                                                <th>اسم الصنف</th>
                                                                <th>صورة الصنف</th>
                                                                <th>السعر قبل الخصم</th>
                                                                <th>نسبة الخصم</th>
                                                                <th>السعر بعد الخصم</th>
                                                                <th></th>
                                                            </thead>

                                                            <tbody>
                                                                @foreach ( $offers as $offer )
                                                                <tr>
                                                                    <td>
                                                                        <div>{{ $offer->findProduct($offer->product_id)->name }}</div>
                                                                    </td>
                                                                    <td>
                                                                        <div><img src="images/Product/{{ $offer->findProduct($offer->product_id)->main_img }}"/></div>
                                                                    </td>
                                                                    <td>
                                                                        <div>{{ $offer->findProduct($offer->product_id)->old_point }}</div>
                                                                    </td>
                                                                    <td>{{ $offer->discount }}%</td>
                                                                    <td>{{ $offer->point }}$</td>
                                                                    <td>
                                                                        <div>
                                                                            <!-- Button trigger modal -->
                                                                            <a href="javascript:void(0)" onclick="editOffer({{ $offer->id }})" class="btn btn-warning" style="color:#fff" data-toggle="modal" data-target="#offer_modal">
                                                                                تعديل العرض
                                                                            </a>

                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="offer_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                <div class="modal-dialog">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <form action="{{ route('updateOffer') }}" method="POST">
                                                                                            @csrf
                                                                                            <div class="row">
                                                                                                <input type="hidden" name="id" id="ofid">
                                                                                                <div class="offer-inputs col-sm-6 col-12"><input id="ofname" type="text" class="form-control" placeholder="اسم الصنف" disabled /></div>
                                                                                                <div class="offer-inputs col-sm-6 col-12"><input name="point" id="ofold_point" type="number" class="form-control" placeholder="السعر الحالى" disabled /></div>
                                                                                                <div class="offer-inputs col-sm-6 col-12"><input name="discount" id="ofdiscount" type="number" class="form-control" min="0" placeholder="نسبة الخصم %" ظ /> </div><br/>
                                                                                                <div class="offer-inputs col-sm-6 col-12"><input id="oftotalprice" type="number" class="form-control" placeholder="السعر بعد الخصم" disabled /></div>
                                                                                                <input type="hidden" name="point" id="ofafterdis">
                                                                                            </div>
                                                                                            <button type="submit" class="btn btn-success">Save changes</button>
                                                                                        </form>
                                                                                    </div>
                                                                                    <div class="modal-footer">

                                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                                    </div>
                                                                                </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- Modal -->
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                @endforeach

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div > <!-- كل العروض -->
                            @if(session('success'))
                            <div id = "Message" class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif

                            @if(session('error'))
                            <div id="Message" class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                            @endif
                            <div class="tab-pane fade show active" id="add_offer_tab" role="tabpanel" aria-labelledby="list-market-new-prod-list">
                                <div class="new-offer">
                                    <div class="container-fluid">
                                        <div class="form">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="table-responsive cate_table_cont">
                                                        <table class="table ">
                                                            <thead>
                                                                <th>#</th>
                                                                <th>اسم الصنف</th>
                                                                <th>صورة الصنف</th>
                                                                <th>السعر</th>
                                                                <th></th>
                                                            </thead>

                                                            <tbody>
                                                                @foreach ($products as $index => $product)
                                                                <tr>
                                                                    <td>{{ $index+1 }}</td>
                                                                    <td>
                                                                        <div>{{ $product->name }}</div>
                                                                    </td>
                                                                    <td>
                                                                        <div><img src="images/Product/{{ $product->main_img }}" /></div>
                                                                    </td>
                                                                    <td>
                                                                        <div>{{ $product->old_point }}$</div>
                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <!-- Button trigger modal -->
                                                                            <a href="javascript:void(0)" onclick="productOffer({{ $product->id }})" class="btn btn-warning" style="color:#fff" data-toggle="modal" data-target="#add_offer_modal">
                                                                                اضف العرض
                                                                            </a>

                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="add_offer_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                <div class="modal-dialog">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <form action="{{ route('storeOffer') }}" method="POST">
                                                                                            @csrf
                                                                                            <div class="row">
                                                                                                <input type="hidden" name="id" id="oid">
                                                                                                <div class="offer-inputs col-sm-6 col-12"><input id="oname" type="text" class="form-control" placeholder="اسم الصنف" disabled /></div>
                                                                                                <div class="offer-inputs col-sm-6 col-12"><input id="oold_point" type="number" class="form-control" placeholder="السعر الحالى" disabled /></div>
                                                                                                <div class="offer-inputs col-sm-6 col-12"><input name="discount" id="discount" type="number" class="form-control" min="0" placeholder="نسبة الخصم %" ظ /> </div><br/>
                                                                                                <div class="offer-inputs col-sm-6 col-12"><input id="totalprice" value="" type="number" class="form-control" placeholder="السعر بعد الخصم" disabled /></div>
                                                                                                <input type="hidden" name="point" id="afterdis">
                                                                                            </div>
                                                                                            <div class="modal-footer">
                                                                                                <button type="submit" class="btn btn-success">Save changes</button>
                                                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- Modal -->
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- اضف عرض جديد -->

                            <!-- offer tabs -->

                            <!-- course tabs -->
                            <div class="tab-pane fade " id="all_course" role="tabpanel" aria-labelledby="list-course-all-list">
                                <div class="course-list">
                                    <div class="container-fluid">
                                        <div class="form">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="table-responsive cate_table_cont">
                                                        <table class="table ">
                                                            <thead>
                                                                <th>عنوان الكورس</th>
                                                                <th>صورة الكورس</th>
                                                                <th>اسم الناشر</th>
                                                                <th>السعر قبل الخصم</th>
                                                                <th>السعر بعد الخصم</th>
                                                                <th>وصف مختصر</th>
                                                                <th>وصف تفصيلى</th>
                                                                <th></th>
                                                                <th></th>
                                                            </thead>

                                                            <tbody>
                                                                @foreach ($courses as $course )
                                                                <tr>
                                                                    <td>
                                                                        <div>{{ $course->title }}</div>
                                                                    </td>
                                                                    <td>
                                                                        <div><img src="images/Course/{{ $course->img_url }}" /></div>
                                                                    </td>
                                                                    <td>
                                                                        <div>{{ $course->publisher_name }}</div>
                                                                    </td>
                                                                    <td>
                                                                        <div>{{ $course->old_point }}</div>
                                                                    </td>
                                                                    <td>
                                                                        <div>{{ $course->point }}</div>
                                                                    </td>

                                                                    <td>
                                                                        <div>{{ $course->short_description }}</div>
                                                                    </td>

                                                                    <td>
                                                                        <div>{{ $course->description }}</div>
                                                                    </td>

                                                                    <td>
                                                                        <div>
                                                                            <!-- Button trigger modal -->
                                                                            <a href="javascript:void(0)" onclick="editCourse({{ $course->id }})" class="btn btn-warning" style="color:#fff" data-toggle="modal" data-target="#course_modal">
                                                                                تعديل البيانات
                                                                            </a>

                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="course_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                <div class="modal-dialog">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <form action="{{ route('updateCourse') }}" enctype="multipart/form-data" method="POST">
                                                                                            @csrf
                                                                                            <div class="row">
                                                                                                <input type="hidden" name="id" id="cid">
                                                                                                <div class="offer-inputs col-sm-6 col-12"><input name="title" id="title" type="text" class="form-control" placeholder="عنوان الكورس" /></div>
                                                                                                <div class="offer-inputs col-sm-6 col-12"><input name="img_url" type="file" class="form-control" placeholder="صورة الكورس" /></div>
                                                                                                <div class="offer-inputs col-sm-6 col-12"><input name="publisher" id="publisher" type="text" class="form-control" placeholder="اسم ناشر الكورس" /></div>
                                                                                                <div class="offer-inputs col-sm-6 col-12"><input name="old_point" id="cold_point" type="number" class="form-control" placeholder="السعر الحالى" /></div>
                                                                                                <div class="offer-inputs col-sm-6 col-12"><input name="point" id="cpoint" type="number" class="form-control" placeholder="السعر بعد الخصم" /></div>
                                                                                                <div class="offer-inputs col-sm-6 col-12"><input name="short_description" id="cshort_description" type="text" class="form-control" placeholder="وصف مختصر" /></div>
                                                                                                <div class="offer-inputs col-sm-6 col-12"><input name="description" id="cdescription" type="text" class="form-control" placeholder="وصف تفصيلى" /></div>

                                                                                            </div>
                                                                                            <div class="modal-footer">
                                                                                                <button type="submit" class="btn btn-success">Save changes</button>
                                                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                                            </div>

                                                                                        </form>
                                                                                    </div>

                                                                                </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- Modal -->
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <form action="{{ route('deleteCourse',$course->id) }}" method="POST">
                                                                                @csrf
                                                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                                            </form>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- all courses-->

                            <div class="tab-pane fade " id="add_course" role="tabpanel" aria-labelledby="list-course-add-list">
                                <div class="container-fluid">
                                    <form  action="{{ route('storeCourse') }}" enctype="multipart/form-data" method="POST" class="course_form">
                                        @csrf
                                        <div class="row">

                                            <div class="col-sm-6 col-12">
                                                <label>عنوان الكورس</label>
                                                <input name="title" type="text" class="form-control" required />
                                            </div>

                                            <div class="col-sm-6 col-12">
                                                <label> صوره الكورس</label>
                                                <input name="img_url" type="file" class="form-control" required />
                                            </div>

                                            <div class="col-sm-6 col-12">
                                                <label>اسم الناشر</label>
                                                <input name="publisher" type="text" class="form-control" required/>
                                            </div>

                                            <div class="col-sm-6 col-12">
                                                <label>سعر الكورس الحالى</label>
                                                <input name="old_point" type="number" class="form-control" required/>
                                            </div>

                                            <div class="col-sm-6 col-12">
                                                <label> سعر الكورس بعد الخصم</label>
                                                <input name="point" type="number" class="form-control" required/>
                                            </div>

                                            <div class="col-sm-6 col-12">
                                                <label>وصف مختصر للكورس</label>
                                                <textarea name="short_description" class="form-control" required></textarea>
                                            </div>

                                            <div class="col-12">
                                                <label>وصف تفصيلى للكورس</label>
                                                <textarea name="description" class="form-control" ></textarea>
                                                <br>
                                            </div>

                                            <div class="col-12 text-center">
                                                <button type="submit" class="btn btn-success add_new_btn">أضف كورس</button>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="add_section" role="tabpanel" aria-labelledby="list-course-section-list">
                                <div class="container-fluid">
                                    <div class="row">

                                        <div class="col-12">
                                            <div class="add_cate_btn">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#section_modal">
                                                    إضف قسم
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="section_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('storeSection') }}" method="POST">
                                                                @csrf
                                                                <div class="row">
                                                                   <div class="col-md-6 col-12">
                                                                       <select name="course" class="form-control">
                                                                           <option selected disabled>Select Course</option>
                                                                           @foreach ($courses as $course )
                                                                                <option value="{{ $course->id }}"> {{ $course->title }}</option>
                                                                           @endforeach
                                                                       </select>
                                                                   </div>

                                                                   <div class="col-md-6 col-12">
                                                                       <input name="name" type="text" class="form-control" placeholder="أسم القسم" />
                                                                   </div>
                                                               </div>
                                                               <div class="modal-footer">
                                                                <button type="submit" class="btn btn-success">Add Section</button>
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                            </div>
                                                            </form>
                                                        </div>

                                                    </div>
                                                    </div>
                                                </div>
                                                <!-- Modal -->

                                                <!-- category Table-->
                                                <div class="cate_table_cont table-responsive">
                                                    <table class="table" id="TableSearch">
                                                        <thead>
                                                            <th>#</th>
                                                            <th>أسم الكورس</th>
                                                            <th>اسم القسم</th>
                                                            <th></th>
                                                            <th></th>
                                                        </thead>

                                                        <tbody>
                                                            @foreach ($sections as $index => $section)
                                                            <tr>
                                                                <td><div>{{ $index +1 }}</div></td>
                                                                <td>
                                                                    <div>{{ $section->findCourse($section->course_id)->title }}</div>
                                                                </td>

                                                                <td>
                                                                    <div>{{ $section->name }}</div>
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <a href="javascript:void(0)" onclick="editSection({{ $section->id }})" style="color: #fff;" class="btn btn-warning" data-toggle="modal" data-target="#editsection">
                                                                            تعديل
                                                                          </a>

                                                                          <!-- Modal -->
                                                                          <div class="modal fade" id="editsection" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                                                            <div class="modal-dialog">
                                                                              <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                  </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <form action="{{ route('updateSection') }}" method="POST">
                                                                                        @csrf
                                                                                        <input type="hidden" name="id" id="seid">
                                                                                        <div class="row">
                                                                                            <div class="col-md-6 col-12">
                                                                                                <select name="course" class="form-control">
                                                                                                    <option selected disabled>Select Course</option>
                                                                                                    @foreach ($courses as $course)
                                                                                                        <option value="{{ $course->id }}">{{ $course->title }}</option>
                                                                                                    @endforeach
                                                                                                </select>
                                                                                            </div>

                                                                                            <div class="col-md-6 col-12">
                                                                                                <input name="name" id="sename" type="text" class="form-control" placeholder="Write Section" />
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                            <button type="submit" class="btn btn-success">Save changes</button>
                                                                                        </div>
                                                                                    </form>
                                                                              </div>
                                                                            </div>
                                                                          </div>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="delete_btn">
                                                                        <form action="{{ route('deleteSection',$section->id) }}" method="POST">
                                                                            @csrf
                                                                            <button  type="submit" class="btn btn-danger">Delete</button>
                                                                        </form>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- category Table-->

                                            </div>
                                        </div> <!-- col-12 -->

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade " id="all_section" role="tabpanel" aria-labelledby="list-course-all-section-list">
                                <div class="container-fluid">
                                    <div class="row">

                                        <div class="col-12">
                                            <div class="add_cate_btn video_table">


                                                <!-- category Table-->
                                                <div class="cate_table_cont table-responsive">
                                                    <table class="table" id="TableSearch">
                                                        <thead>
                                                            <th>#</th>
                                                            <th>أسم الكورس</th>
                                                            <th>اسم القسم</th>
                                                            <th></th>
                                                            <th></th>

                                                        </thead>

                                                        <tbody>
                                                            @foreach ($sections as $index => $section )
                                                            <tr>
                                                                <td><div>{{ $index+1 }}</div></td>
                                                                <td>
                                                                    <div>{{ $section->findCourse($section->course_id)->title }}</div>
                                                                </td>

                                                                <td>
                                                                    <div>{{ $section->name }}</div>
                                                                </td>

                                                                <td>
                                                                    <div class="">
                                                                        <a href="javascript:void(0)" onclick="getVideoId({{ $section->id }})" class="btn btn-outline-info" data-toggle="modal" data-target="#upload_video_modal">
                                                                            أَضف فيديو
                                                                          </a>

                                                                          <!-- Modal -->
                                                                          <div class="modal fade" id="upload_video_modal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                                                            <div class="modal-dialog">
                                                                              <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                  </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <form action="{{ route('uploadVideo') }}" method="POST" enctype="multipart/form-data">
                                                                                        @csrf
                                                                                   <div class="up_video_cont">
                                                                                       <input type="hidden" name="video_src" id="video_src" >
                                                                                        <input type="file" name="video[]" class="up_video form-control" multiple/>
                                                                                        <div class="video_preview">

                                                                                        </div>
                                                                                   </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                  <button type="submit" class="btn btn-success">Save changes</button>
                                                                                </div>
                                                                                </form>
                                                                              </div>
                                                                            </div>
                                                                          </div>

                                                                </td>
                                                                <td>
                                                                    <div class="show_video">
                                                                        <a href="{{ route('showVideo',$section->id) }}" class="btn btn-outline-info ">عرض الفديوهات</a>
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- category Table-->

                                            </div>
                                        </div> <!-- col-12 -->

                                    </div>
                                </div>
                            </div>
                        </div><!-- add Course -->

                        </div> <!-- main tab content -->

                    </div>
                </div>

            </div>
        </div>


    




    <script type="text/javascript" src="{{ URL::asset('./assests/js/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('./assests/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('./assests/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('./assests/js/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('./assests/js/datatables.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('./assests/js/datatables-bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('./assests/js/main.js') }}"></script>

    <script>
        setTimeout(function() {
    $('#Message').fadeOut('slow');
        }, 1500);
    </script>

    <script>

        $('table').dataTable({});


        $('.dashboard .dash-holder .side-navbar-cont .close-nav').on('click',function(){
            $('.side-navbar-cont').animate({
                'left':'-550px'
            },350,function () {
                $('.open-nav').css({
                    'display':'block'
                })
            })

        })

        $('.dashboard .dash-holder .open-nav').on('click',function(){
            $('.side-navbar-cont').animate({
                'left':'0px'
            },350)

            $('.open-nav').css({
                    'display':'none'
                })
        })

        function showImage(file){

            if(file.files){
                    img=""
                    var img="<img id='img_src' class='img-thumbnail' src="+"'" +window.URL.createObjectURL(file.files[0])+"'"+">";

                $(".pic_preview").append(img);
            }

        };

        function readURL(file) {
            if (file.files && file.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result).appendTo(".pic_preview");
                };

                reader.readAsDataURL(file.files[0]);
            }
        }
        function readURL2(file) {
            if (file.files && file.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {

                    $('#blah2')
                        .attr('src', e.target.result).appendTo(".pic_preview2");
                };

                reader.readAsDataURL(file.files[0]);
            }
        }

    </script>

<script>

    function getVideoId(id)
    {
        $.get('/sectionId/'+id, function($id){
            $("#video_src").val($id);
        });
    }

    function editSection(id)
    {
        $.get('/editSection/'+id,function($section){
            console.log($section.name);
            $("#seid").val($section.id);
            $("#sename").val($section.name);

        });
    }

    function editCourse(id)
    {

        $.get('/editCourse/'+id,function($course){
            $("#cid").val($course.id);
            $("#title").val($course.title);
            $("#cpoint").val($course.point);
            $("#cold_point").val($course.old_point);
            $("#cshort_description").val($course.short_description);
            $("#cdescription").val($course.description);
            $("#publisher").val($course.publisher_name);
        });
    }

function editOffer(id)
    {

        $.get('/editOffer/'+id,function($product){
            $("#ofid").val($product.id);
            $("#ofname").val($product.name);
            $("#ofold_point").val($product.old_point);
            var price = $product.old_point;
            $("#ofdiscount").on("keyup",function(){
            var discount = (100-$("#ofdiscount").val())/100;
            $("#oftotalprice").val(discount*price);
            $("#ofafterdis").val($("#oftotalprice").val());
        });

        });
    }

    function productOffer(id)
    {
        $.get('/findProduct/'+id,function($offer){
            $("#oid").val($offer.id);
            $("#oname").val($offer.name);
            $("#oold_point").val($offer.old_point);
            var price = $offer.old_point;
            $("#discount").on("keyup",function(){
            var discount = (100-$("#discount").val())/100;
            $("#totalprice").val(discount*price);
            $("#afterdis").val($("#totalprice").val());
        });


    });
    }



    function editMarketProduct(id)
    {
        $.get('editProduct/'+id,function($products){
            console.log($products.id);
            $("#pmid").val($products.id);
            $("#pmname").val($products.name);
            $("#pmshort_description").val($products.short_description );
            $("#pmdescription").val($products.description);
            $("#pmpoint").val($products.point);
            $("#pmold_point").val($products.old_point);
            $("#pmcountry").val($products.country);
            $("#pmqnt").val($products.qnt);
            $("#pmvaldiation").val($products.valdiation);
            $("#pmsize").val($products.size);
            $("#pmstore_conditions").val($products.store_conditions);
            $("#pmcat_id").val($products.cat_id);
            $("#pmsub_cat_id").val($products.sub_cat_id);
            $("#pmavailable").val($products.available);



        });

    }

    function editProduct(id)
    {

        $.get('editProduct/'+id,function($products){
            console.log($products.name);
            $("#pid").val($products.id);
            $("#pname").val($products.name);
            $("#pshort_description").val($products.short_description );
            $("#pdescription").val($products.description);
            $("#ppoint").val($products.point);
            $("#pold_point").val($products.old_point);
            $("#pcountry").val($products.country);
            $("#pqnt").val($products.qnt);
            $("#pvaldiation").val($products.valdiation);
            $("#psize").val($products.size);
            $("#pstore_conditions").val($products.store_conditions);
            $("#pcat_id").val($products.cat_id);
            $("#psub_cat_id").val($products.sub_cat_id);
            $("#pavailable").val($products.available);



        });
    }
    function editSubCategory(id)
    {

        $.get('/editSubCategory/'+id,function($category){
            $("#sid").val($category.id);
            $("#names").val($category.name_ar);
            $("#sub_editModal").modal("toggle");
        });
    }

    function editMarketSubCategory(id)
    {
        $.get('/editSubCategory/'+id,function($category){
            $("#msid").val($category.id);
            $("#namems").val($category.name_ar);
            $("#market_sub_editModal").modal("toggle");

        });
    }

    function editCategory(id)
    {

        $.get('/editCategory/'+id,function($category){
            $("#id").val($category.id);
            $("#name").val($category.name_ar);
            $("#editModal").modal("toggle")
        });
    }



    function editMarketCategory(id)
    {
        $.get('/editCategory/'+id,function($category){
            $("#idm").val($category.id);
            $("#namem").val($category.name_ar);
            $("#market_editModal").modal("toggle")
        });
    }
</script>

</body>
</html>
