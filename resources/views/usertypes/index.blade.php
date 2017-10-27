@extends ('layouts.app')

@section('content')

{{ csrf_field() }}

    <div class='panel panel-default'>
        <div class='panel panel-heading'>
            <div class="panel-title">
                  Usertype Information Page <a href="#" id="addNewusertype" class="pull-right" data-toggle="modal" data-target="#usertypeModal"> <i class="fa fa-plus" aria-hidden="true" > </i> </a>
            </div>
          
        </div>
        <div class="panel panel-body" id="usertype">
            
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
                            <td>{{ $value->usertype_code }}</td>
                            <td>{{ $value->usertype_desc }}</td>
                            <td>{{ $value->created_by }}</td>
                            <td>{{ $value->created_date }}</td>
                            <td>{{ $value->updated_by }}</td>
                            <td>{{ $value->updated_date}}</td>

                            <!-- we will also add show, edit, and delete buttons -->
                            <td>

                                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                                <!-- we will add this later since its a little more complicated than the other two buttons -->

                                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                                <a class="btn btn-small btn-success" style="display: none" href="{{ URL::to('usertype/' . $value->id) }}">Show this usertype</a>    
                                <a class="btnShow " data-toggle="modal" data-target="#usertypeModal" href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>

                                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                                <a class="btnEdit" data-toggle="modal" data-target="#usertypeModal" href="#"><i class="fa fa-pencil" aria-hidden="true">
                                    <input type="hidden" id="usertypeId" value="{{$value->id}}">
                                </i></a>
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
                    <input type="hidden" id="idusertype">
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
                    <button type="button" class="btn btn-danger" id="deleteusertype" data-dismiss="modal" style="display: none">Delete</button>
                    <button type="button" class="btn btn-success" id="saveusertype" data-dismiss="modal"style="display: none" >Save changes</button>
                    <button type="button" class="btn btn-primary" id="addusertype" data-dismiss="modal">Add Usertype</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


@endsection

