@extends ('layouts.app')

@section('content')

{{ csrf_field() }}

    <div class='panel panel-default'>
        <div class='panel panel-heading'>
            <div class="panel-title">
                  User Information Page <a href="#" id="addNewUser" class="pull-right" data-toggle="modal" data-target="#userModal"> <i class="fa fa-plus" aria-hidden="true" > </i> </a>
            </div>
          
        </div>
        <div class="panel panel-body" id="users">
            
                <!-- will be used to show any messages -->
                @if (Session::has('message'))
                    <div class="alert alert-info">{{ Session::get('message') }}</div>
                @endif

                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Username</td>
                            <td>Fullname</td>
                            <td>Retries</td>
                            <td>Usertype</td>
                            <td>Created By</td>
                            <td>Created Date</td>
                            <td>Updated By</td>
                            <td>Updated Date</td>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $key => $value)
                        <tr>

                            <td>{{ $value->id }}</td>
                            <td>{{ $value->username }}</td>
                            <td>{{ $value->fullname }}</td>
                            <td>{{ $value->retries }}</td>
                            <td>{{ $value->usertype_code }}</td>
                            <td>{{ $value->created_by }}</td>
                            <td>{{ $value->created_date }}</td>
                            <td>{{ $value->edited_by }}</td>
                            <td>{{ $value->edited_date}}</td>

                            <!-- we will also add show, edit, and delete buttons -->
                            <td>

                                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                                <!-- we will add this later since its a little more complicated than the other two buttons -->

                                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                                <a class="btn btn-small btn-success" style="display: none" href="{{ URL::to('users/' . $value->id) }}">Show this User</a>    
                                <a class="btnShow " data-toggle="modal" data-target="#userModal" href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>

                                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                                <a class="btnEdit" data-toggle="modal" data-target="#userEditModal" href="#"><i class="fa fa-pencil" aria-hidden="true">
                                    <input type="hidden" id="userId" value="{{$value->id}}">
                                </i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                        
        </div>


    </div>
  
    <div class="modal fade" id="userModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="title">Add New User</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="idUser">
                    <div class="container">
                        <div class="row">
                            <div class="row form-group">
                                <div class="col-sm-1">
                                    <h5 > Username: </h5>
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" id = "txtusername" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-1">
                                    <h5 > Fullname: </h5>
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" id ="txtfullname" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-1">
                                    <h5 > Password: </h5>
                                </div>
                                <div class="col-sm-5">
                                    <input type="password" id ="txtpassword" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-1">
                                    <h5 > Usertype: </h5>
                                </div>
                                <div class="col-sm-5"> 
                                <select name = "cmbusertype"> 
                                    @foreach($usertypes as $usertype)
                                        <option value="{{ $usertype->id }}">{{ $usertype->usertype_code}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                        </div>
                        

                    </div>

                    

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="addUser" data-dismiss="modal">Add User</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" id="userEditModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="title">Edit User</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="idUser">
                    <div class="container">
                        <div class="row">
                            <div class="row form-group">
                                <div class="col-sm-1">
                                    <h5 > Username: </h5>
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" id = "txtusername" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-1">
                                    <h5 > Fullname: </h5>
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" id ="txtfullname" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-1">
                                    <h5 > Password: </h5>
                                </div>
                                <div class="col-sm-5">
                                    <input type="password" id ="txtpassword" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-1">
                                    <h5 > Usertype: </h5>
                                </div>
                                <div class="col-sm-5"> <select name = "cmbusertype"> 
                                  
                                </select>
                                </div>
                            </div>
                        </div>
                        

                    </div>

                    

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id="deleteUser" data-dismiss="modal" >Delete</button>
                    <button type="button" class="btn btn-success" id="saveUser" data-dismiss="modal">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

@endsection

