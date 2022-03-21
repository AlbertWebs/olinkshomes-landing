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
                    <li class="active-bre"><a href="#"> Add New Facts for {{$Home->title}}</a>
                    </li>
                    <li class="page-back"><a target="new" href="{{url('/')}}/admin/homes"><i class="fa fa-backward" aria-hidden="true"></i> All Properties</a>
                    </li>
                </ul>

            </div>
            <div class="sb2-2-add-blog sb2-2-1">
                <h2>Add New Facts for {{$Home->title}}</h2>
                <p>Properties are listed on the Real Estate Website</p>
                <center>
                    @if(Session::has('message'))
                                  <div class="alert alert-success">{{ Session::get('message') }}</div>
                   @endif

                   @if(Session::has('messageError'))
                                  <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
                   @endif
                </center>
                <form method="POST" action="{{url('/')}}/admin/edit_Facts/{{$Fact->id}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{-- Category, SubCategory, Tags --}}
                    <input type="hidden" name="property_id" value="{{$Home->id}}">

                    <div class="row">
                        <div class="input-field col s6">
                            <input id="list-title" name="living_room" type="text" value="{{$Fact->living_room}}" placeholder="20 by 35 feet" class="validate">
                            <label for="list-title">Living Room</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="list-title" name="garage" type="text" value="{{$Fact->garage}}" placeholder="20 by 35 feet" class="validate">
                            <label for="list-title">Garage</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <input id="list-title" name="dining_area" type="text" value="{{$Fact->dining_area}}" placeholder="20 by 35 feet" class="validate">
                            <label for="list-title">Dining Area</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="list-title" name="bedroom" type="text" value="{{$Fact->bedroom}}" placeholder="20 by 35 feet" class="validate">
                            <label for="list-title">Bedroom</label>
                        </div>
                    </div>


                    <div class="row">
                        <div class="input-field col s6">
                            <input id="list-title" name="bathroom" type="text" value="{{$Fact->bathroom}}" placeholder="20 by 35 feet" class="validate">
                            <label for="list-title">bathroom</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="list-title" name="gym" type="text" value="{{$Fact->gym}}" placeholder="20 by 35 feet" class="validate">
                            <label for="list-title">GYM</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <input id="list-title" name="garden" type="text" value="{{$Fact->garden}}" placeholder="20 by 35 feet" class="validate">
                            <label for="list-title">Garden</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="list-title" name="parking" type="text" value="{{$Fact->parking}}" placeholder="20 by 35 feet" class="validate">
                            <label for="list-title">Parking</label>
                        </div>
                    </div>



                    <hr>



                    <div class="clearfix"></div>
                            <div class="row">
                                <div class="input-field col s3">
                                    <button class="waves-effect waves-light btn-large">Save Changes  <i class="fa fa-save" aria-hidden="true"></i></button>
                                </div>


                                <div class="input-field col s3">
                                    <a href="{{url('admin/editAmenities')}}/{{$Home->id}}" target="new" class="waves-effect waves-light btn-large">Update Amenities</a>
                                </div>

                                <div class="input-field col s3">
                                    <a href="{{url('admin/editHome')}}/{{$Home->id}}" target="new" class="waves-effect waves-light btn-large">Update Property</a>
                                </div>

                                <div class="input-field col s3">
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
