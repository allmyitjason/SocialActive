@extends('template.base')

@section('content')
<div class="row-fluid">
    <div class="box span12">
        <div class="box-header">
            <h2><i class="icon-list-alt"></i><span class="break"></span>Trial - {{$trial->psaCode}}</h2>
        </div>
        <div class="box-content" style="padding-bottom: 0;">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>PSA Code</th>
                        <th>Commencement Date</th>
                        <th>Grower</th>
                        <th>Site</th>
                        <th>Region</th>
                        <th>Industry</th>
                        <th>Trial Type</th>
                        <th>Targets</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>{{ $trial->psaCode }}</td>
                        <td>{{ $trial->commencementDate }}</td>
                        <td>{{ $trial->grower }}</td>
                        <td>{{ $trial->site }}</td>
                        <td>{{ $trial->region }}</td>
                        <td>{{ $trial->industry }}</td>
                        <td>{{ $trial->type }}</td>
                        <td>
                        <ul>
                                @foreach($trial->targets as $target)
                                <li>{{$target}}</li>
                                @endforeach
                        </ul>
                        </td>
                        <td>{{ link_to_route('trials.edit', 'Edit', $trial->id,['class' => 'btn btn-primary btn-small']) }}
                        <a class="btn btn-danger btn-small" type="button" data-toggle="modal" data-remote="{{URL::route('trials.delete', $trial->id)}}" data-target="#deleteModal">Delete</a>
                    </tr>
                </tbody>
            </table>
           

        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="box span4">
        <div class="box-header">
            <h2><i class="icon-list-alt"></i><span class="break"></span>Action Days for Trial - {{$trial->psaCode}}</h2>
        </div>
        <div class="box-content">
        <p>{{ link_to_route('trials.actions.create', 'Add Action Point', $trial->id, ['class' => 'btn btn-info']) }}</p>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($trial->actionDays() as $key => $action)
                        <tr onclick="window.location.href = '';">
                        <td>A{{$key+1}}</td>
                        <td>{{ date('d/m/Y', strtotime($action->computedDate))}}</td>
                        <td><span class="label label-success">All Completed</span></td>
                            

                        </tr>
                    @endforeach
                </tbody>
            </table>      

        </div>
    </div>

    <div class="box span3">
        <div class="box-header">
            <h2><i class="icon-list-alt"></i><span class="break"></span>Files for Trial - {{$trial->psaCode}}</h2>
            <div class="box-icon">
               
            </div>
        </div>
        <div class="box-content">
             Choose a file below to attach it to this trial.
            <div class="well fileUpload-box">
        {{Former::inline_open('files')->enctype('multipart/form-data')->class('no-margin')}}
        {{Former::hidden('trial_id')->value($trial->id)}}
        {{Former::file('filename')}}
        {{Former::submit('Upload')->class('btn btn-primary')}}
        {{Former::close()}}
    </div>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Filename</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>

                <tbody>
                @foreach($trial->files as $file)
                <tr>
                    <td>{{ link_to_route('files.show',$file, $file->id) }}</td>
                    <td>
                        <a class="btn btn-small btn-danger" type="button" data-toggle="modal" data-remote="{{URL::route('files.delete', $file->id)}}" data-target="#deleteModal">Delete</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>      

        </div>
    </div>

    <div class="box span5">
        <div class="box-header">
            <h2><i class="icon-list-alt"></i><span class="break"></span>Notes for Trial - {{$trial->psaCode}}</h2>
        </div>
        <div class="box-content">
        <p>{{ link_to_route('trials.actions.create', 'Add Action Point', $trial->id, ['class' => 'btn btn-info']) }}</p>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($trial->actionDays() as $key => $action)
                        <tr onclick="window.location.href = '';">
                        <td>A{{$key+1}}</td>
                        <td>{{ date('d/m/Y', strtotime($action->computedDate))}}</td>
                        <td><span class="label label-success">All Completed</span></td>
                            

                        </tr>
                    @endforeach
                </tbody>
            </table>      

        </div>
    </div>
</div>


    


@stop
