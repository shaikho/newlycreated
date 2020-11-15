
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
            <th style="text-align: center">إجراءات</th>
            <th style="text-align: center">معرف المجند</th>
            <th style="text-align: center">معرف المنسق</th>
            <th style="text-align: center">معرف المشرف</th>
            <th style="text-align: center">إسم المؤسسة</th>
            <th style="text-align: center">معرف المندوب</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($representitives as $item)
            <tr>
                <td>
                    <a href="/deleterecruit/{{ $item->id }}"><button class="uk-button uk-button-danger uk-button-small">مسح</button></a>
                    <a><button class="uk-button uk-button-secondary uk-button-small">تعديل</button></a>
                </td>
                <td>
                    {{ $item->user_id }}
                </td>
                <td>
                    {{ $item->organize_name }}
                </td>
                <td>
                    {{ $item->admin_id }}
                </td>
                <td>
                    {{ $item->coordinator_id }}
                </td>
                <td>
                    {{ $item->recruit_id }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a href="/addrepresentitive"><button class="uk-button uk-button-primary ">إضافة مندوب</button></a>

<script>
$(document).ready(function() {
    $('#example').DataTable({
        "bLengthChange": false
    });
});
</script>

@endsection

