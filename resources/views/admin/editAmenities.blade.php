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
                    <li class="active-bre"><a href="#"> Edit Amenities for {{$Home->title}}</a>
                    </li>
                    <li class="page-back"><a target="new" href="{{url('/')}}/admin/homes"><i class="fa fa-backward" aria-hidden="true"></i> All Properties</a>
                    </li>
                </ul>

            </div>
            <div class="sb2-2-add-blog sb2-2-1">
                <h2>Add New Amenities for {{$Home->title}}</h2>
                <p>Properties are listed on the Real Estate Website</p>
                <center>
                    @if(Session::has('message'))
                                  <div class="alert alert-success">{{ Session::get('message') }}</div>
                   @endif

                   @if(Session::has('messageError'))
                                  <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
                   @endif
                </center>
                <form method="POST" action="{{url('/')}}/admin/edit_Amenities/{{$Amenity->id}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{-- Category, SubCategory, Tags --}}
                    <input type="hidden" name="property_id" value="{{$Home->id}}">
                    <div class="row">
                        <div class="input-field col s3" style="border-right:1px solid #666666; text-align:center;">
                            <div class="tab-inn">
                                <!-- Switch -->
                                <div class="switch mar-bot-20">
                                    <label style="left:4.75rem">
                                        Off
                                        <input name="air_conditioning" type="checkbox" {{switcher($Amenity->air_conditioning)}}>
                                        <span class="lever"></span> On
                                    </label>
                                </div>
                            </div>
                            <h5>Air Conditioning</h5>
                        </div>
                        {{--  --}}
                        <div class="input-field col s3" style="border-right:1px solid #666666; text-align:center;">
                            <div class="tab-inn">
                                <!-- Switch -->
                                <div class="switch mar-bot-20">
                                    <label style="left:4.75rem">
                                        Off
                                        <input name="gym" type="checkbox" {{switcher($Amenity->gym)}}>
                                        <span class="lever"></span> On
                                    </label>
                                </div>
                            </div>
                            <h5>GYM</h5>
                        </div>
                        {{--  --}}
                        {{--  --}}
                        <div class="input-field col s3" style="border-right:1px solid #666666; text-align:center;">
                            <div class="tab-inn">
                                <!-- Switch -->
                                <div class="switch mar-bot-20">
                                    <label style="left:4.75rem">
                                        Off
                                        <input name="microwave" type="checkbox" {{switcher($Amenity->microwave)}}>
                                        <span class="lever"></span> On
                                    </label>
                                </div>
                            </div>
                            <h5>Microwave</h5>
                        </div>
                        {{--  --}}
                        {{--  --}}
                        <div class="input-field col s3" style="border-right:1px solid #666666; text-align:center;">
                            <div class="tab-inn">
                                <!-- Switch -->
                                <div class="switch mar-bot-20">
                                    <label style="left:4.75rem">
                                        Off
                                        <input name="swimming_pool" type="checkbox" {{switcher($Amenity->swimming_pool)}}>
                                        <span class="lever"></span> On
                                    </label>
                                </div>
                            </div>
                            <h5>Swimming Pool</h5>
                        </div>
                        {{--  --}}
                    </div>
                    <hr>
                    <div class="row">
                        <div class="input-field col s3" style="border-right:1px solid #666666; text-align:center;">
                            <div class="tab-inn">
                                <!-- Switch -->
                                <div class="switch mar-bot-20">
                                    <label style="left:4.75rem">
                                        Off
                                        <input name="wifi" type="checkbox" {{switcher($Amenity->wifi)}}>
                                        <span class="lever"></span> On
                                    </label>
                                </div>
                            </div>
                            <h5>WIFI</h5>
                        </div>
                        {{--  --}}
                        <div class="input-field col s3" style="border-right:1px solid #666666; text-align:center;">
                            <div class="tab-inn">
                                <!-- Switch -->
                                <div class="switch mar-bot-20">
                                    <label style="left:4.75rem">
                                        Off
                                        <input name="barbeque" type="checkbox" {{switcher($Amenity->barbeque)}}>
                                        <span class="lever"></span> On
                                    </label>
                                </div>
                            </div>
                            <h5>Barbeque</h5>
                        </div>
                        {{--  --}}
                        {{--  --}}
                        <div class="input-field col s3" style="border-right:1px solid #666666; text-align:center;">
                            <div class="tab-inn">
                                <!-- Switch -->
                                <div class="switch mar-bot-20">
                                    <label style="left:4.75rem">
                                        Off
                                        <input name="recreation" type="checkbox" {{switcher($Amenity->recreation)}}>
                                        <span class="lever"></span> On
                                    </label>
                                </div>
                            </div>
                            <h5>Recreation</h5>
                        </div>
                        {{--  --}}
                        {{--  --}}
                        <div class="input-field col s3" style="border-right:1px solid #666666; text-align:center;">
                            <div class="tab-inn">
                                <!-- Switch -->
                                <div class="switch mar-bot-20">
                                    <label style="left:4.75rem">
                                        Off
                                        <input name="basketball_court" type="checkbox" {{switcher($Amenity->basketball_court)}}>
                                        <span class="lever"></span> On
                                    </label>
                                </div>
                            </div>
                            <h5>Basketball Court</h5>
                        </div>
                        {{--  --}}
                    </div>

                    <hr>

                    <div class="row">
                        <div class="input-field col s3" style="border-right:1px solid #666666; text-align:center;">
                            <div class="tab-inn">
                                <!-- Switch -->
                                <div class="switch mar-bot-20">
                                    <label style="left:4.75rem">
                                        Off
                                        <input name="fireplace" type="checkbox" {{switcher($Amenity->fireplace)}}>
                                        <span class="lever"></span> On
                                    </label>
                                </div>
                            </div>
                            <h5>Fireplace</h5>
                        </div>

                        <div class="input-field col s3" style="border-right:1px solid #666666; text-align:center;">
                            <div class="tab-inn">
                                <!-- Switch -->
                                <div class="switch mar-bot-20">
                                    <label style="left:4.75rem">
                                        Off
                                        <input name="refrigerator" type="checkbox" {{switcher($Amenity->refrigerator)}}>
                                        <span class="lever"></span> On
                                    </label>
                                </div>
                            </div>
                            <h5>Refrigerator</h5>
                        </div>

                        <div class="input-field col s3" style="border-right:1px solid #666666; text-align:center;">
                            <div class="tab-inn">
                                <!-- Switch -->
                                <div class="switch mar-bot-20">
                                    <label style="left:4.75rem">
                                        Off
                                        <input name="washer" type="checkbox" {{switcher($Amenity->washer)}}>
                                        <span class="lever"></span> On
                                    </label>
                                </div>
                            </div>
                            <h5>Washer</h5>
                        </div>

                        <div class="input-field col s3" style="border-right:1px solid #666666; text-align:center;">
                            <div class="tab-inn">
                                <!-- Switch -->
                                <div class="switch mar-bot-20">
                                    <label style="left:4.75rem">
                                        Off
                                        <input name="security" type="checkbox" {{switcher($Amenity->security)}}>
                                        <span class="lever"></span> On
                                    </label>
                                </div>
                            </div>
                            <h5>Security</h5>
                        </div>

                    </div>

                    <hr>

                    <div class="row">
                        <div class="input-field col s4" style="border-right:1px solid #666666; text-align:center;">
                            <div class="tab-inn">
                                <!-- Switch -->
                                <div class="switch mar-bot-20">
                                    <label style="left:4.75rem">
                                        Off
                                        <input name="indoor_games" type="checkbox" {{switcher($Amenity->indoor_games)}}>
                                        <span class="lever"></span> On
                                    </label>
                                </div>
                            </div>
                            <h5>Indoor Games</h5>
                        </div>

                        <div class="input-field col s4" style="border-right:1px solid #666666; text-align:center;">
                            <div class="tab-inn">
                                <!-- Switch -->
                                <div class="switch mar-bot-20">
                                    <label style="left:4.75rem">
                                        Off
                                        <input name="window_coverings" type="checkbox" {{switcher($Amenity->window_coverings)}}>
                                        <span class="lever"></span> On
                                    </label>
                                </div>
                            </div>
                            <h5>Window Coverings</h5>
                        </div>

                        <div class="input-field col s4" style="border-right:1px solid #666666; text-align:center;">
                            <div class="tab-inn">
                                <!-- Switch -->
                                <div class="switch mar-bot-20">
                                    <label style="left:4.75rem">
                                        Off
                                        <input name="elevator" type="checkbox" {{switcher($Amenity->elevator)}}>
                                        <span class="lever"></span> On
                                    </label>
                                </div>
                            </div>
                            <h5>Elevator</h5>
                        </div>



                    </div>


                    <hr>



                            <div class="clearfix"></div>
                    <div class="row">
                        <div class="input-field col s3">
                            <button class="waves-effect waves-light btn-large">Save Changes  <i class="fa fa-save" aria-hidden="true"></i></button>
                        </div>
                        {{--  --}}
                        <div class="input-field col s3">
                            <a href="{{url('admin/editHome')}}/{{$Home->id}}" target="new" class="waves-effect waves-light btn-large">Update Property</a>
                        </div>
                        <div class="input-field col s3">
                            <a href="{{url('admin/editFacts')}}/{{$Home->id}}" target="new" class="waves-effect waves-light btn-large">Update Facts</a>
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
