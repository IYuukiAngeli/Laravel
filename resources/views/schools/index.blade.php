@extends ('layouts.app')

@section('content')

{{ csrf_field() }}

    <div class='panel panel-default'>
        <div class='panel panel-heading'>
            <div class="panel-title">
                  School Information Page <a href="#" id="addNewschool" class="pull-right" data-toggle="modal" data-target="#schoolModal"> <i class="fa fa-plus" aria-hidden="true" > </i> </a>
            </div>
          <input type="hidden" id="userName" value=" {{ Auth::user()->fullname}} ">
        </div>
        <div class="panel panel-body" id="schools">
            
                <!-- will be used to show any messages -->
                @if (Session::has('message'))
                    <div class="alert alert-info">{{ Session::get('message') }}</div>
                @endif

                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>School Code</td>
                            <td>School Desc</td>
                            <td>Created By</td>
                            <td>Created Date</td>
                            <td>Updated By</td>
                            <td>Updated Date</td>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($schools as $key => $value)
                        <tr>

                            <td>{{ $value->id }}</td>
                            <td id = "school-code-{{ $value->id }}">{{ $value->school_code }}</td>
                            <td id = "school-desc-{{ $value->id }}">{{ $value->school_desc }}</td>
                            <td>{{ $value->created_by }}</td>
                            <td>{{ $value->created_date }}</td>
                            <td>{{ $value->edited_by }}</td>
                            <td>{{ $value->edited_date}}</td>
                            <td>
                                <a class="btnEdit" data-toggle="modal" data-target="#schoolEditModal" href="#" data-id = "{{ $value->id }}"> <i class="fa fa-pencil" aria-hidden="true">
                                </i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                        
        </div>


    </div>
  
    <div class="modal fade" id="schoolModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="title">Add New School</h4>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="row form-group">
                                <div class="col-sm-1">
                                    <h5 > School Code: </h5>
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" id = "txtschoolcode" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-1">
                                    <h5 > School Desc: </h5>
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" id ="txtschooldesc" class="form-control" />
                                </div>
                          
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="addSchool" data-dismiss="modal">Add School</button>
                </div>
                    
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="modal fade" id="schoolEditModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="title">Edit School</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="userName" value=" {{ Auth::user()->fullname }} ">
                    <div class="container">
                        <div class="row">
                            <div class="row form-group">
                                <div class="col-sm-1">
                                    <h5 > School Code: </h5>
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" id = "txteditschoolcode" class="form-control" value="{{ $value->school_code }}"/>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-1">
                                    <h5 > School Desc: </h5>
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" id ="txteditschooldesc" class="form-control"  value="{{ $value->school_desc }}"/>
                                </div>
                          
                        </div>

                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id="deleteSchool" data-dismiss="modal">Delete</button>
                    <button type="button" class="btn btn-success" id="saveSchool" data-dismiss="modal" >Save changes</button>

                </div>
            </div>
        </div>
    </div>
    </div>


@endsection

