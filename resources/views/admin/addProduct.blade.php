@extends('admin.master')
@section('content')
<!-- Remember to include jQuery :) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<style>
    .modal a.close-modal{
        top:0px !important;
        right:0px !important;
    }
</style>
<!--== BODY CONTNAINER ==-->
 <div class="container-fluid sb2">
    <div class="row">
        @include('admin.sidebar')

        <!--== BODY INNER CONTAINER ==-->

        <div class="sb2-2">
            <div class="sb2-2-2">
                <ul>
                    <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    </li>
                    <li class="active-bre"><a href="#"> Add New Product</a>
                    </li>
                    <li class="page-back"><a href="{{url('/')}}/admin/products"><i class="fa fa-backward" aria-hidden="true"></i> All Products</a>
                    </li>
                </ul>

            </div>
            <div class="sb2-2-add-blog sb2-2-1">
                <h2>Add New Product</h2>
                <p>Products are listed on the E-commerce Website</p>
                <center>
                    @if(Session::has('message'))
                                  <div class="alert alert-success">{{ Session::get('message') }}</div>
                   @endif

                   @if(Session::has('messageError'))
                                  <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
                   @endif
                </center>
                <form method="POST" action="{{url('/')}}/admin/add_Product" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="list-title" name="title" type="text" value="" class="validate">
                            <label for="list-title">Enter Product Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="list-title" name="price" type="text" value="" class="validate">
                            <label for="list-title">Enter Product Price eg 18500</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="textarea1" name="meta" class="materialize-textarea validate"></textarea>
                            <label for="list-title">Enter Product Meta Infomation</label>
                        </div>
                    </div>
                    {{-- Category, SubCategory, Tags --}}
                    <div class="row">
                        <div class="input-field col s12">
                            <select name="cat" multiple>
                                <option value="" disabled selected>Choose Category</option>
                                <option value="1">Hotels</option>
                                <option value="2">Educations</option>
                                <option value="3">Medical</option>
                                <option value="3">Health</option>
                                <option value="3">Fitness</option>
                                <option value="3">Tution</option>
                                <option value="3">Software</option>
                                <option value="3">Wedding</option>
                                <option value="3">Party</option>
                                <option value="3">Spa/Club</option>
                            </select>
                            <label>Select Category</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <select name="sub_cat">
                                <option value="" disabled selected>Choose Sub Category</option>
                            </select>
                            <label>Select Category</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <select name="tags" multiple>
                                <option value="" disabled selected>Choose Tags</option>
                                <option value="1">Hotels in Kenya</option>
                                <option value="2">Educations</option>
                                <option value="3">Medical</option>
                                <option value="3">Health</option>
                                <option value="3">Fitness</option>
                                <option value="3">Tution</option>
                                <option value="3">Software</option>
                                <option value="3">Wedding</option>
                                <option value="3">Party</option>
                                <option value="3">Spa/Club</option>
                            </select>
                            <label>Select Category</label>
                        </div>
                    </div>
                    {{-- Category, SubCategory, Tags --}}
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea required id="article-ckeditor" name="content" class="materialilze-textarea" placeholder="content"></textarea>
                            {{-- <label for="textarea1">Blog Descriptions:</label> --}}
                        </div>
                    </div><br><br>
                     {{-- Images --}}
                                 {{-- Preview --}}
                            {{-- Style --}}
                            <style>
                                .btn-file {
                                    position: relative;
                                    overflow: hidden;
                                }
                                .btn-file input[type=file] {
                                    position: absolute;
                                    top: 0;
                                    right: 0;
                                    min-width: 100%;
                                    min-height: 100%;
                                    font-size: 100px;
                                    text-align: right;
                                    filter: alpha(opacity=0);
                                    opacity: 0;
                                    outline: none;
                                    background: white;
                                    cursor: inherit;
                                    display: block;
                                }

                                #img-upload{
                                    width: 100%;
                                }
                            </style>
                            {{-- Style --}}
                            <div class="row">
                                <div class="">
                                    <div class="input-field col s12">
                                        <div class="form-group">
                                            <label>Add Category Featured Image</label>
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <span class="btn btn-default btn-file">
                                                        Browse… <input name="image" type="file" id="imgInp">
                                                    </span>
                                                </span>
                                                <input type="text" class="form-control" readonly>
                                            </div>
                                            <img class="image-preview" style="width:auto;" src="" id='img-upload'/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Preview --}}

                            {{-- Images --}}
                            <br><br>
                            <div class="clearfix"></div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="submit" class="waves-effect waves-light btn-large" value="Add Product">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--== BODY INNER CONTAINER ==-->

    </div>
</div>


@endsection
