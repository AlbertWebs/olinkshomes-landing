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
                    <li class="active-bre"><a href="#"> Edit {{$Home->title}} </a>
                    </li>
                    <li class="page-back"><a href="{{url('/')}}/admin/homes"><i class="fa fa-backward" aria-hidden="true"></i> All Properties </a>
                    </li>
                </ul>

            </div>
            <div class="sb2-2-add-blog sb2-2-1">
                <h2>Edit {{$Home->title}}</h2>
                <p>Properties are listed on the Real Estate Website</p>
                <center>
                    @if(Session::has('message'))
                        <div class="alert alert-success">{{ Session::get('message') }}</div>
                   @endif

                   @if(Session::has('messageError'))
                        <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
                   @endif
                </center>
                <form method="POST" action="{{url('/')}}/admin/edit_Home/{{$Home->id}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{-- Category, SubCategory, Tags --}}
                    <div class="row">
                        <div class="input-field col s12">
                            <select name="cat" id="cat" class="mdb-select">

                                <option value="{{$Home->cat}}"  selected><?php $Cats = DB::table('categories')->where('id',$Home->cat)->get(); ?>@foreach ($Cats as $cts){{$cts->title}}@endforeach</option>

                                <?php $Category = DB::table('categories')->where('identifier','home')->get(); ?>
                                @foreach ($Category as $cat)
                                <option value="{{$cat->id}}">{{$cat->title}}</option>
                                @endforeach
                            </select>
                            <label>Select Category</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12" >
                            <select name="sub_cat" id="sub_cat" class="sub_cat mdb-select">
                                <option value="{{$Home->sub_cat}}"  selected><?php $Cats = DB::table('sub_category')->where('identifier','home')->where('id',$Home->sub_cat)->get(); ?>@foreach ($Cats as $cts){{$cts->name}}@endforeach</option>

                            </select>
                            <label>Select Sub Category</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <select name="tags" multiple class="mdb-select">
                                <option value="{{$Home->tag}}"  selected><?php $Cats = DB::table('tags')->where('id',$Home->tag)->get(); ?>@foreach ($Cats as $cts){{$cts->title}}@endforeach</option>
                                <?php $Tag = DB::table('tags')->get(); ?>
                                @foreach ($Tag as $tag)
                                <option value="{{$tag->id}}">{{$tag->title}}</option>
                                @endforeach
                            </select>
                            <label>Select Tag</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <select name="google_Product_category" class="mdb-select">
                                <option value="" disabled selected>Google Product Category</option>
                                <?php $Tag = DB::table('g_p_c_s')->get(); ?>
                                @foreach ($Tag as $tag)
                                <option value="{{$tag->code}}">{{$tag->category}}</option>
                                @endforeach
                            </select>
                            <label>Select Tag</label>
                        </div>
                    </div>
                    {{-- Category, SubCategory, Tags --}}
                    <?php $Random = rand(100,500); ?>
                    <div class="row">
                        <div class="input-field col s12">
                            <input readonly id="list-title" name="code" type="text" value="OLINKS-HOMES-{{date('Y')}}-{{date('d')}}{{date('m')}}-{{generateRandomString(5)}}" class="validate">
                            <label for="list-title">Enter Property Code</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="list-title" name="title" type="text" value="{{$Home->title}}" class="validate">
                            <label for="list-title">Enter Property Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="list-title" name="location" type="text" value="{{$Home->location}}" class="validate">
                            <label for="list-title">Enter Property Location</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="list-title" name="price" type="text" value="{{$Home->price}}" class="validate">
                            <label for="list-title">Enter Property Price eg 18500</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="textarea1" name="map" class="materialize-textarea validate">{{$Home->map}}</textarea>
                            <label for="list-title">map iframe</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="textarea1" name="meta" class="materialize-textarea validate">{{$Home->meta}}</textarea>
                            <label for="list-title">Enter Property Meta Infomation</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <?php
                                $Stock = $Home->sold;
                                if($Stock == 'In Stock'){
                                    $stockValue = 'checked';
                                }else{
                                    $stockValue = 'Out of Stock';
                                }
                            ?>
                            <div class="tab-inn">
                                <!-- Switch -->
                                <div class="switch mar-bot-20">
                                    <label>
                                        SOLD
                                        <input name="stock" type="checkbox" {{$stockValue}}>
                                        <span class="lever"></span> Available
                                    </label>
                                </div>

                            </div>
                        </div>
                    </div>
                    {{--  --}}

                    <div class="row">
                        <div class="input-field col s12">
                            <textarea required id="article-ckeditor" name="content" class="materialilze-textarea" placeholder="content">{{$Home->content}}</textarea>
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
                                                        Browse… <input name="fb_pixels" type="file" id="imgInp">
                                                    </span>
                                                </span>
                                                <input type="text" class="form-control" readonly>
                                            </div>
                                            <img class="image-preview" style="width:auto;" src="{{url('/')}}/uploads/homes/{{$Home->fb_pixels}}" id='img-upload'/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Preview --}}

                            {{-- Images --}}
                            <br><br>
                            <div class="clearfix"></div>
                            <input type="hidden" name="fb_pixels_cheat" value="{{$Home->fb_pixels}}">
                    <div class="row">
                        <div class="input-field col s12">
                            <button class="waves-effect waves-light btn-large">Save Changes  <i class="fa fa-save" aria-hidden="true"></i></button>
                        </div>
                        <hr>

                        <div class="input-field col s4">
                            <a href="{{url('admin/editAmenities')}}/{{$Home->id}}" target="new" class="waves-effect waves-light btn-large">Update Amenities</a>
                        </div>

                        <div class="input-field col s4">
                            <a href="{{url('admin/editFacts')}}/{{$Home->id}}" target="new" class="waves-effect waves-light btn-large">Update Facts</a>
                        </div>

                        <div class="input-field col s4">
                            <a href="{{url('admin/editGallery')}}/{{$Home->id}}" target="new" class="waves-effect waves-light btn-large">Update Gallery</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--== BODY INNER CONTAINER ==-->

    </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
    $(document).ready(function (e) {
        $('#cat').on('change', e => {
            var val = $('#cat').val();
            $('#sub_cat').empty()
            $.ajax({
                url: `/admin/gets-subcategories/${val}`,
                success: function(data){
                    // $('.sub_cat').material_select();
                        var toAppend = '';
                        $.each(data,function(i,o){
                        toAppend += '<option value="'+o.id+'">'+o.name+'</option>';
                    });
                    $('.sub_cat').on('contentChanged', function() {
                     $(this).material_select();
                    });

                    $("#sub_cat").append(toAppend);
                    $("#sub_cat").trigger('contentChanged');
                    //
                }
            })
        })
    })
</script>

<script>
$( document ).ready(function() {
    ('.mdb-select').materialSelect();

    $('.mdb-select').click(function( event ) {
        event.stopPropagation();
    });  // fixes first click
});
</script>

@endsection
