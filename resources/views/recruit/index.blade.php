
@extends('master')

@section('title', 'Page Title')

@section('content')

<link rel="stylesheet" href="datatables/dataTables.uikit.min.css" />
<link rel="stylesheet" href="datatables/uikit.min.css" />
<script src="datatables/dataTables.uikit.min.js"></script>
<script src="datatables/jquery-3.5.1.js"></script>
<script src="datatables/jquery.dataTables.min.js"></script>

<style>
    th {
        text-align: center;
    }
    td {
        text-align: center;
    }
</style>

<ul class="uk-breadcrumb uk-text-right">
    <li><a class="uk-breadcrumb">المجندين</a></li>
</ul>

<table id="example" class="uk-table uk-table-hover uk-table-striped" style="width:100%">
    <thead>
        <tr>
            <th style="text-align: center">userid</th>
            <th style="text-align: center">local</th>
            <th style="text-align: center">area</th>
            <th style="text-align: center">qualification</th>
            <th style="text-align: center">specialization</th>
            <th style="text-align: center">qrcode</th>
            <th style="text-align: center">create date</th>
            <th style="text-align: center">actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($recruits as $item)
            <tr>
                <td>
                    {{ $item->user_id }}
                </td>
                <td>
                    {{ $item->local }}
                </td>
                <td>
                    {{ $item->area }}
                </td>
                <td>
                    {{ $item->qualification }}
                </td>
                <td>
                    {{ $item->specialization }}
                </td>
                <td>
                    {{ $item->qrcode }}
                </td>
                <td>
                    {{ $item->created_at }}
                </td>
                <td>
                    <button class="uk-button uk-button-secondary uk-button-small">edit</button>
                <a href="/deleterecruit/{{ $item->id }}"><button class="uk-button uk-button-danger uk-button-small">delete</button></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a href="/addrecruits"><button class="uk-button uk-button-primary ">Add Recruit</button></a>

<script>
$(document).ready(function() {
    $('#example').DataTable({
        "bLengthChange": false
    });
});
</script>

@endsection

