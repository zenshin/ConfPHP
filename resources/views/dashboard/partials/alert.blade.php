@section('alert')
@if(Session::has('message'))
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="fa fa-info-circle"></i>  <strong>
                    {!! Session::get('message') !!}
                </strong>
            </div>
        </div>
    </div>
    @endif
            <!-- /.row -->
    @show
