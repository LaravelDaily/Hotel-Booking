@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.countries.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.countries.fields.shortcode')</th>
                            <td field-key='shortcode'>{{ $country->shortcode }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.countries.fields.title')</th>
                            <td field-key='title'>{{ $country->title }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.countries.fields.name')</th>
                            <td field-key='name'>{{ $country->name }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#customers" aria-controls="customers" role="tab" data-toggle="tab">Customers</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="customers">
<table class="table table-bordered table-striped {{ count($customers) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.customers.fields.first-name')</th>
                        <th>@lang('quickadmin.customers.fields.last-name')</th>
                        <th>@lang('quickadmin.customers.fields.address')</th>
                        <th>@lang('quickadmin.customers.fields.phone')</th>
                        <th>@lang('quickadmin.customers.fields.email')</th>
                        <th>@lang('quickadmin.customers.fields.country')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($customers) > 0)
            @foreach ($customers as $customer)
                <tr data-entry-id="{{ $customer->id }}">
                    <td field-key='first_name'>{{ $customer->first_name }}</td>
                                <td field-key='last_name'>{{ $customer->last_name }}</td>
                                <td field-key='address'>{{ $customer->address }}</td>
                                <td field-key='phone'>{{ $customer->phone }}</td>
                                <td field-key='email'>{{ $customer->email }}</td>
                                <td field-key='country'>{{ $customer->country->shortcode or '' }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('customer_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.customers.restore', $customer->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('customer_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.customers.perma_del', $customer->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('customer_view')
                                    <a href="{{ route('admin.customers.show',[$customer->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('customer_edit')
                                    <a href="{{ route('admin.customers.edit',[$customer->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('customer_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.customers.destroy', $customer->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="11">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.countries.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
