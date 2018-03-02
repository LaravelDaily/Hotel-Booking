@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.find-room.title')</h3>
    <div class="panel panel-default">

        {!! Form::open(['method' => 'post', 'route' => ['admin.find_rooms.index']]) !!}
        <div class="row" style="margin-top: 5px;">
            <div class="col-xs-9">
                <div class="col-xs-6 form-group">
                    {!! Form::label('time_from', trans('quickadmin.bookings.fields.time-from').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('time_from', old('time_from'), ['class' => 'form-control datetimepicker', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('time_from'))
                        <p class="help-block">
                            {{ $errors->first('time_from') }}
                        </p>
                    @endif
                </div>
                <div class="col-xs-6 form-group">
                    {!! Form::label('time_to', trans('quickadmin.bookings.fields.time-to').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('time_to', old('time_to'), ['class' => 'form-control datetimepicker', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('time_to'))
                        <p class="help-block">
                            {{ $errors->first('time_to') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="col-xs-2">
                <div class="form-group" style="margin-top: 5px;">
                    <label class="control-label"></label>
                    {!! Form::submit('Search for rooms', ['class' => 'btn btn-danger btn-block']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        @if (isset($rooms) && is_null($rooms))
            <div class="form-group" style="text-align: center">
                <label>@lang('quickadmin.find-room.no_rooms_found')</label>
            </div>
        @endif
        @if (!is_null($rooms))
        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th/></th>
                    <th>@lang('quickadmin.rooms.fields.room-number')</th>
                    <th>@lang('quickadmin.rooms.fields.floor')</th>
                    <th>@lang('quickadmin.rooms.fields.description')</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($rooms as $room)
                        <tr data-entry-id="{{ $room->id }}">
                            <td></td>
                            <td field-key='room_number'>{{ $room->room_number }}</td>
                            <td field-key='floor'>{{ $room->floor }}</td>
                            <td field-key='description'>{!! $room->description !!}</td>
                            <td>
                                @can('booking_create')
                                    <button class="btn btn-danger">
                                        <a style="color: #ffffff;" href="{{ route('admin.bookings.create',
                                        ['room_id' => $room->id,'time_from' => $time_from, 'time_to' => $time_to]) }}">
                                            {!!trans('quickadmin.find-room.book_room')!!}</a>
                                    </button>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
@stop
@section('javascript')
    @parent
    <script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script>
        $('.datetimepicker').datetimepicker({
            format: "YYYY-MM-DD HH:mm"
        });
    </script>
@stop
