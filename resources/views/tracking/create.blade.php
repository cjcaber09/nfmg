@extends('layouts.app')
@section('content')
<form class="form-material" action={{ route('tracking.store') }} method="POST">
    @csrf
    <div class="col-lg-12 col-md-12 row">
        <div class="col-lg-12 m-b-10"><button class="btn btn-primary">Save</button></div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tracking Information</h4>                  
                    <div class="form-group">
                        <input type="text" class="form-control form-control-line" placeholder="Tracking Name" name="trackingName" style="cursor: auto;">
                    </div>                                              
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body Trackforms">
                    <h4 class="card-title row d-flex"> <div class="col-lg-10">Tracking Forms</div> <div class="col-lg-2 col-md-2 "><a class="btn btn-secondary justify-content-end addForm"><i class="fa fa-plus"></i> Add Form</a></div></h4>                  
                    
                    <div class="form-group row formInputs">
                            <div class="col-lg-4">
                                <input type="text" class="form-control form-control-line" placeholder="Form Name" name="formName[]" style="cursor: auto;">
                            </div>
                            <div class="col-lg-4">
                                <select type="text" class="form-control form-control-line" placeholder="Form Input" name="formInput[]" style="cursor: auto;">
                                    <option Value="">Form Input</option>
                                    <option value="1">True</option>
                                    <option value="0">False</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <select type="text" class="form-control form-control-line" required name="formReq[]" style="cursor: auto;">
                                    <option Value="">Form Required?</option>
                                    <option value="1">True</option>
                                    <option value="0">False</option>
                                </select>
                            </div>
                            <div class="col-lg-1">
                                <a class="btn btn-secondary remove" id=""><i class="fa fa-trash"></i></a>
                            </div>
                        </div>   
                </div>
            </div>
        </div>
    </div>
</form>


@endsection