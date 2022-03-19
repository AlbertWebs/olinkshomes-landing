@extends('admin.master')
@section('content')
@foreach ($Home as $home)
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
                    <li class="active-bre"><a href="#"> Add New Images for {{$home->title}}</a>
                    </li>
                    <li class="page-back"><a target="new" href="{{url('/')}}/admin/homes"><i class="fa fa-backward" aria-hidden="true"></i> All Properties</a>
                    </li>
                </ul>

            </div>
            <div class="sb2-2-add-blog sb2-2-1">
                <h2>Add New Images for {{$home->title}}</h2>
                <p>Properties are listed on the Real Estate Website</p>
                <center>
                    @if(Session::has('message'))
                                  <div class="alert alert-success">{{ Session::get('message') }}</div>
                   @endif

                   @if(Session::has('messageError'))
                                  <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
                   @endif
                </center>
                {{--  --}}
                <iframe src="{{url('/')}}/admin/dropzones/{{$home->id}}" style="min-height:500px" height="100%" width="100%"></iframe>
                {{--  --}}
                <div class="row">
                    <div class="input-field col s12">
                        <center><a href="{{url('/admin')}}/homes/destroy" class="waves-effect waves-light btn-large">Done</a></center>
                    </div>
                </div>
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
@endforeach
@endsection
