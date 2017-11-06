@extends ('layouts.app')

@section('content')

{{ csrf_field() }}

    <div class='panel panel-default'>
        <div class='panel panel-heading'>
            <div class="panel-title">
                  Program Information Page <a href="#" id="addNewprogram" class="pull-right" data-toggle="modal" data-target="#programModal"> <i class="fa fa-plus" aria-hidden="true" > </i> </a>
            </div>
          <input type="hidden" id="userName" value=" {{ Auth::user()->fullname}} ">
        </div>
        <div class="panel panel-body" id="programs">
            
                <!-- will be used to show any messages -->
                @if (Session::has('message'))
                    <div class="alert alert-info">{{ Session::get('message') }}</div>
                @endif

                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Program Code</td>
                            <td>Program Desc</td>
                            <td>Created By</td>
                            <td>Created Date</td>
                            <td>Updated By</td>
                            <td>Updated Date</td>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($programs as $key => $value)
                        <tr>

                            <td>{{ $value->id }}</td>
                            <td id = "program-code-{{ $value->id }}">{{ $value->program_code }}</td>
                            <td id = "program-desc-{{ $value->id }}">{{ $value->program_desc }}</td>
                            <td>{{ $value->created_by }}</td>
                            <td>{{ $value->created_date }}</td>
                            <td>{{ $value->edited_by }}</td>
                            <td>{{ $value->edited_date}}</td>
                            <td>
                                <a class="btnEdit" data-toggle="modal" data-target="#programEditModal" href="#" data-id = "{{ $value->id }}"><i class="fa fa-pencil" aria-hidden="true">
                                </i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                        
        </div>


    </div>
  
    <div class="modal fade" id="programModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="title">Add New Program</h4>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="row form-group">
                                <div class="col-sm-1">
                                    <h5 > Program Code: </h5>
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" id = "txtprogramcode" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-1">
                                    <h5 > Program Desc: </h5>
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" id ="txtprogramdesc" class="form-control" />
                                </div>
                          
                        </div>

                    </div>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-primary" id="addProgram" data-dismiss="modal">Add Program</button>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="modal fade" id="programEditModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" >Edit Program</h4>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="row form-group">
                                <div class="col-sm-1">
                                    <h5 > Program Code: </h5>
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" id = "txteditprogramcode" class="form-control" value=" {{ $value->program_code }} " />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-1">
                                    <h5 > Program Desc: </h5>
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" id ="txteditprogramdesc" class="form-control" value=" {{ $value->program_desc }} " />
                                </div>
                          
                        </div>

                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id="deleteProgram" data-dismiss="modal" >Delete</button>
                    <button type="button" class="btn btn-success" id="saveProgram" data-dismiss="modal" >Save changes</button>
                </div>
            </div>
        </div>
    </div>
    </div>


@endsection

