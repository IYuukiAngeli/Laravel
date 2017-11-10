@extends ('layouts.app')

@section('content')

{{ csrf_field() }}

    <div class='panel panel-default'>
        <div class='panel panel-heading'>
            <div class="panel-title">
                  Evaluation Tool Information Page <a href="#" id="addNewHei" class="pull-right" data-toggle="modal" data-target="#heiModal"> <i class="fa fa-plus" aria-hidden="true" > </i> </a>
            </div>
          <input type="hidden" id="userName" value=" {{ Auth::user()->fullname}} ">
        </div>
        <div class="panel panel-body" id="heis">
                @if (Session::has('message'))
                    <div class="alert alert-info">{{ Session::get('message') }}</div>
                @endif
                      <div class="panel-group" id="accordion">

                        @foreach ($heis as $hei)


                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="#hei-id-{{ $hei->school->id }}"> {{ $hei->school->school_desc }} </a>
                                </h4>
                              </div>

                              <div id="hei-id-{{ $hei->school->id }}" class="panel-collapse collapse">
                                   <div class="panel-body"> 
                                        <ul class="list-group">

                                          @foreach ($heis as $program)
                                              <li class="list-group-item"> {{ $programs->program->program_desc }}</li>
                                          @endforeach
                                            
                                        </ul>
                                    </div>
                              </div>
                            </div>
                            
                        @endforeach
                           
                        </div> 

      
               {{--  <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <td>School</td>
                            <td>Created By</td>
                            <td>Updated By</td>

                        </tr>
                    </thead>
                    <tbody>
                    @foreach($hes as $key => $value)
                        <tr>
                            <td id = "school-code-{{ $value->id }}">{{ $value->school_code }}</td>
                    
                            <td>{{ $value->created_by }}</td>
                            <td>{{ $value->updated_by }}</td>
                            <td>
                                <a class="btnEdit" data-toggle="modal" data-target="#toolEditModal" href="#" data-id = "{{ $value->id }}" ><i class="fa fa-pencil" aria-hidden="true">
                                </i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                         --}}
        </div>


    </div>
  
 {{--  <form action="{{ route('tool.store') }}" method="POST" enctype="MULTIPART/FORM-DATA" id="toolForm">

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
                                        <input type="file"  id ="toolfile" name ="toolfile" class="form-control" />
                                    </div>
                                </div>

                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal" id="addTool">Add Tool</button>
                    </div>
                </div>

                 </div>        
    </div>
    </div>
  </form>
    

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
                    <button type="button" class="btn btn-danger" id="deleteTool" data-dismiss="modal" >Delete</button>
                    <button type="button" class="btn btn-success" id="saveTool" data-dismiss="modal">Save changes</button>
                </div>
            </div>

        </div>
    </div>
    </div>
 --}}
@endsection

