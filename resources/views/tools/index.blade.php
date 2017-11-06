@extends ('layouts.app')

@section('content')

{{ csrf_field() }}

    <div class='panel panel-default'>
        <div class='panel panel-heading'>
            <div class="panel-title">
                  Evaluation Tool Information Page <a href="#" id="addNewtool" class="pull-right" data-toggle="modal" data-target="#toolModal"> <i class="fa fa-plus" aria-hidden="true" > </i> </a>
            </div>
          <input type="hidden" id="userName" value=" {{ Auth::user()->fullname}} ">
        </div>
        <div class="panel panel-body" id="tools">
                @if (Session::has('message'))
                    <div class="alert alert-info">{{ Session::get('message') }}</div>
                @endif

                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Tool Code</td>
                            <td>Desc</td>
                            <td>File</td>
                            <td>Created By</td>
                            <td>Created Date</td>
                            <td>Updated By</td>
                            <td>Updated Date</td>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($tools as $key => $value)
                        <tr>

                            <td>{{ $value->id }}</td>
                            <td id = "tool-code-{{ $value->id }}">{{ $value->tool_code }}</td>
                            <td id = "tool-desc-{{ $value->id }}" >{{ $value->tool_desc }}</td>
                            <td id = "tool-file-{{ $value->id }}">{{ $value->tool_file }}</td>
                            <td>{{ $value->created_by }}</td>
                            <td>{{ $value->created_date }}</td>
                            <td>{{ $value->updated_by }}</td>
                            <td>{{ $value->updated_date}}</td>
                            <td>
                                <a class="btnEdit" data-toggle="modal" data-target="#toolEditModal" href="#" data-id = "{{ $value->id }}" ><i class="fa fa-pencil" aria-hidden="true">
                                </i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                        
        </div>


    </div>
  
    <div class="modal fade" id="toolModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="title">Add New Tool</h4>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="row form-group">
                                <div class="col-sm-1">
                                    <h5 > Tool Code: </h5>
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" id = "txttoolcode" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-1">
                                    <h5 > Tool Desc: </h5>
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" id ="txttooldesc" class="form-control" />
                                </div>
                          
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-1">
                                    <h5 > File: </h5>
                                </div>
                                <div class="col-sm-5">                          
                                    <input type="file" id ="txttoolfile" class="form-control"/>
                                </div>
                            </div>

                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="addTool" data-dismiss="modal">Add Tool</button>
                </div>
            </div>
            
        </div>
    </div>
    </div>

    <div class="modal fade" id="toolEditModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="title">Edit Tool</h4>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="row form-group">
                                <div class="col-sm-1">
                                    <h5 > Tool Code: </h5>
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" id = "txtedittoolcode" class="form-control" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-1">
                                    <h5 > Tool Desc: </h5>
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" id ="txtedittooldesc" class="form-control" />
                                </div>
                          
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-1">
                                    <h5 > File: </h5>
                                </div>
                                <div class="col-sm-5">
                                        <input type="file" id ="txtedittoolfile" class="form-control" />
                                </div>
                            </div>

                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id="deleteschool" data-dismiss="modal" >Delete</button>
                    <button type="button" class="btn btn-success" id="saveschool" data-dismiss="modal">Save changes</button>
                </div>
            </div>

        </div>
    </div>
    </div>

@endsection

