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
                        <td>{{$activity->host->firstName}} {{$activity->host->surname}}</td>
                        <td>{{ $activity->type->type }}</td>
                        <td>{{ $activity->minSkillLevel->levelNo }} ({{ $activity->minSkillLevel->levelDescription }}) to {{$activity->maxSkillLevel->levelNo}} ({{ $activity->maxSkillLevel->levelDescription }})</td>
                        <td>{{ $activity->gender->gender }}</td>
                        <td>{{ $activity->venue->name }}</td>
                        <td>{{ $activity->minParticipants }} to {{ $activity->maxParticipants }} People</td>
                        <td>{{ $activity->minAge }} to {{ $activity->maxAge }}</td>
                        <td>{{date('d/m/Y', strtotime($activity->activityDate));}}</td>
                        <td>{{$activity->activityDurationMins}} Minutes ({{$activity->activityDurationMins/60}} Hours)</td>
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