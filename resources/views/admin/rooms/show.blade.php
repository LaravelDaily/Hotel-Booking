@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.rooms.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.rooms.fields.room-number')</th>
                            <td field-key='room_number'>{{ $room->room_number }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.rooms.fields.floor')</th>
                            <td field-key='floor'>{{ $room->floor }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.rooms.fields.description')</th>
                            <td field-key='description'>{!! $room->description !!}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">

                <li role="presentation" class="active"><a href="#bookings" aria-controls="bookings" role="tab"
                                                          data-toggle="tab">Bookings</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div role="tabpanel" class="tab-pane active" id="bookings">
                    <table class="table table-bordered table-striped {{ count($bookings) > 0 ? 'datatable' : '' }}">
                        <thead>
                        <tr>
                            <th>@lang('quickadmin.bookings.fields.customer')</th>
                            <th>@lang('quickadmin.bookings.fields.room')</th>
                            <th>@lang('quickadmin.bookings.fields.time-from')</th>
                            <th>@lang('quickadmin.bookings.fields.time-to')</th>
                            <th>@lang('quickadmin.bookings.fields.additional-information')</th>
                            @if( request('show_deleted') == 1 )
                                <th>&nbsp;</th>
                            @else
                                <th>&nbsp;</th>
                            @endif
                        </tr>
                        </thead>

                        <tbody>
                        @if (count($bookings) > 0)
                            @foreach ($bookings as $booking)
                                <tr data-entry-id="{{ $booking->id }}">
                                    <td field-key='customer'>{{ $booking->customer->first_name or '' }}</td>
                                    <td field-key='room'>{{ $booking->room->room_number or '' }}</td>
                                    <td field-key='time_from'>{{ $booking->time_from }}</td>
                                    <td field-key='time_to'>{{ $booking->time_to }}</td>
                                    <td field-key='additional_information'>{!! $booking->additional_information !!}</td>
                                    @if( request('show_deleted') == 1 )
                                        <td>
                                            @can('booking_delete')
                                                {!! Form::open(array(
                'style' => 'display: inline-block;',
                'method' => 'POST',
                'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                'route' => ['admin.bookings.restore', $booking->id])) !!}
                                                {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                                {!! Form::close() !!}
                                            @endcan
                                            @can('booking_delete')
                                                {!! Form::open(array(
                'style' => 'display: inline-block;',
                'method' => 'DELETE',
                'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                'route' => ['admin.bookings.perma_del', $booking->id])) !!}
                                                {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                                {!! Form::close() !!}
                                            @endcan
                                        </td>
                                    @else
                                        <td>
                                            @can('booking_view')
                                                <a href="{{ route('admin.bookings.show',[$booking->id]) }}"
                                                   class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                            @endcan
                                            @can('booking_edit')
                                                <a href="{{ route('admin.bookings.edit',[$booking->id]) }}"
                                                   class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                            @endcan
                                            @can('booking_delete')
                                                {!! Form::open(array(
                                                                                        'style' => 'display: inline-block;',
                                                                                        'method' => 'DELETE',
                                                                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                                                                        'route' => ['admin.bookings.destroy', $booking->id])) !!}
                                                {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                                {!! Form::close() !!}
                                            @endcan
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="10">@lang('quickadmin.qa_no_entries_in_table')</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.rooms.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
