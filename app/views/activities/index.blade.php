@extends('template.base')

@section('content')
<div class="row-fluid">
    <div class="box span12">
        <div class="box-header">
            <h2><i class="icon-list-alt"></i><span class="break"></span>Activities</h2>
            <div class="box-icon">
            </div>
        </div>
        <div class="box-content">

            <p>{{ link_to_route('activity.create', 'Host new activity',[],['class' => 'btn btn-info']) }}</p>

            @if ($activities->count())
            <table class="table table-striped table-bordered bootstrap-datatable datatable dataTable">
                <thead>
                    <tr>
                        <th>Host</th>
                        <th>Type</th>
                        <th>Skill Level</th>
                        <th>Gender</th>
                        <th>Venue</th>
                        <th>Participants</th>
                        <th>Age</th>
                        <th>Date</th>
                        <th>Duration</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($activities as $activity)
                    <tr>
                        <td>{{$activity->host}}</td>
                        <td>{{ $activity->type }}</td>
                        <td>{{ $activity->minSkillLevel }} - {{$activity->maxSkillLevel}}</td>
                        <td>{{ $activity->gender }}</td>
                        <td>{{ $activity->venue }}</td>
                        <td>{{ $activity->minParticipants }}{{ $activity->maxParticipants }}</td>
                        <td>{{ $activity->minAge }}{{ $activity->maxAge }}</td>
                        <td>{{$activity->activityDate}}</td>
                        <td>{{$activity->activityDurationMins}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            There are no activities
            @endif
        </div>
    </div>
</div>

@stop