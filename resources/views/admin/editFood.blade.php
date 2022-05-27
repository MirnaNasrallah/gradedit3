@extends('layouts.app')


<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Offcanvas Menu End -->
{{ View::make('header') }}

<!-- Breadcrumb Begin -->
<div class="breadcrumb-option ml-3">
    <div class="row">
        <div class="col-lg-12">
            <div class="breadcrumb__links">
                <a href="{{url('admin.foodAdmin')}}"><i class="fa fa-home"></i> Foodie Store</a>
                <span>Edit Product</span>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-10 m-auto">
            <div class="card">
                <div class="card-header text-center font-weight-bold">
                    <h4 class="text-danger"><strong>Edit Your Product</strong></h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('updateFood', $food->id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @csrf
                        @method('put')
                        <div class="row mb-4">
                            <div class="mx-auto my-2 col-lg-5 shadow py-3 rounded-lg mainColor">
                                <label class="font-weight-bold ml-1"> Product name </label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Your Product Name">
                            </div>
                            <div class="mx-auto my-2 col-lg-5 shadow py-3 rounded-lg mainColor">
                                <label class="font-weight-bold ml-1"> Product Description </label>
                                <input type="text" class="form-control" name="description" placeholder="Enter Your Product Description">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="mx-auto my-2 col-lg-5 shadow py-3 rounded-lg mainColor">
                                <label class="font-weight-bold ml-1"> Price </label>
                                <input type="text" class="form-control" name="price" placeholder="Product Price">
                            </div>
                            <div class="mx-auto my-2 col-lg-5 shadow py-3 rounded-lg mainColor">
                                <label class="font-weight-bold ml-1"> Sale percentage <span class="font-weight-normal text-danger">( 0 for no sale )</span> </label>
                                <input type="text" class="form-control" name="sale" maxlength="2" placeholder="Enter your Sale Percentage">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="mx-auto my-2 col-lg-5 shadow py-3 rounded-lg mainColor">
                                <label class="font-weight-bold ml-1"> Category </label>
                                <select name="category" id="category" class="form-control">
                                    <option value="{{$food->category}}" selected>{{$food->category}}</option>
                                    <option value="Snacks">Snacks</option>
                                    <option value="desserts">desserts</option>
                                    <option value="veggies">veggies</option>
                                    <option value="fruits">fruits</option>
                                    <option value="dressings">dressings</option>

                                </select>
                            </div>
                            <div class="mx-auto my-2 col-lg-5 shadow py-3 rounded-lg mainColor">
                                <label class="font-weight-bold ml-1"> Calories </label>
                                <select name="calories" id="calories" class="form-control">
                                    <option value="{{$food->calories}}" selected>{{$food->calories}}</option>
                                    <option value="low">low</option>
                                    <option value="mid">mid</option>
                                    <option value="high">high</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-5 mx-auto my-2 shadow py-3 rounded-lg mainColor">
                                <label class="font-weight-bold ml-1"> Add image </label>
                                <input type="file" id="customFile" class="custom-file-input" name="product_img">
                                <label class="custom-file-label ml-3 mt-5" for="customFile" style="width: 93%;">Choose file</label>
                            </div>
                            <div class="col-lg-5 mx-auto my-2 shadow py-3 rounded-lg mainColor">
                                <label class="font-weight-bold ml-1"> Quantity <span class="font-weight-normal text-danger">( 50 for default )</span> </label>
                                <input type="text" class="form-control" name="quantity" maxlength="2" placeholder="Enter your Sale Percentage">
                            </div>
                        </div>

                        <div class="row">
                            <button type="submit" class="site-btn m-auto" style="width: 50%;">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<script>
    // To make the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>
