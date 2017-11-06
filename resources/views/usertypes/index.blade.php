@extends ('layouts.app')

@section('content')

{{ csrf_field() }}


    <div class='panel panel-default'>
        <div class='panel panel-heading'>
            <div class="panel-title">
                  Usertype Information Page <a href="#" id="addNewusertype" class="pull-right" data-toggle="modal" data-target="#usertypeModal"> <i class="fa fa-plus" aria-hidden="true" > </i> </a>
            </div>
          <input type="hidden" id="userName" value=" {{ Auth::user()->fullname}} ">
        </div>
        <div class="panel panel-body" id="usertypes">
            
                <!-- will be used to show any messages -->
                @if (Session::has('message'))
                    <div class="alert alert-info">{{ Session::get('message') }}</div>
                @endif

                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Usertype Code</td>
                            <td>Usertype Desc</td>
                            <td>Created By</td>
                            <td>Created Date</td>
                            <td>Updated By</td>
                            <td>Updated Date</td>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($usertypes as $key => $value)
                        <tr>

                            <td>{{ $value->id }}</td>
                            <td id = "usertype-code-{{ $value->id }}">{{ $value->usertype_code }}</td>
                            <td id = "usertype-desc-{{ $value->id }}">{{ $value->usertype_desc }}</td>
                            <td>{{ $value->created_by }}</td>
                            <td>{{ $value->created_date }}</td>
                            <td>{{ $value->edited_by }}</td>
                            <td>{{ $value->edited_date}}</td>
                            <td>
                                <a class="btnEdit" data-toggle="modal" data-target="#usertypeEditModal" href="#"
                                data-id = "{{ $value->id }}">
                                <i class="fa fa-pencil" aria-hidden="true">
                                </i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                        
        </div>


    </div>
  
    <div class="modal fade" id="usertypeModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="title">Add New Usertype</h4>
                </div>
                <div class="modal-body">
                    
                    <div class="container">
                        <div class="row">
                            <div class="row form-group">
                                <div class="col-sm-1">
                                    <h5 > Usertype Code: </h5>
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" id = "txtusertypecode" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-1">
                                    <h5 > Usertype Desc: </h5>
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" id ="txtusertypedesc" class="form-control" />
                                </div>
                          
                        </div>

                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="addUsertype" data-dismiss="modal">Add Usertype</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
    

    <div class="modal fade" id="usertypeEditModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="title">Edit Usertype</h4>
                </div>
                <div class="modal-body">

                    <div class="container">
                        <div class="row">
                            <div class="row form-group">
                                <div class="col-sm-1">
                                    <h5 > Usertype Code: </h5>
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" id = "txteditusertypecode" class="form-control" value="{{ $value->usertype_code }}"/>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-1">
                                    <h5 > Usertype Desc: </h5>
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" id ="txteditusertypedesc" class="form-control" value= "{{ $value->usertype_desc }}"/>
                                </div>
                          
                        </div>

                    </div>

                </div>

                <div class="modal-footer">
                    
                    <button type="button" class="btn btn-danger" id="deleteUsertype" data-dismiss="modal" >Delete</button>
                    <button type="button" class="btn btn-success" id="saveUsertype" data-dismiss="modal" >Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>

@endsection

