@extends('layouts.admin_master')
@section('content')
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        DataTable Example
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>id</th>
                    <th>user_id</th>
                    <th>booking_id</th>
                    <th>method</th>
                    <th>transaction_id</th>
                    <th>account_no</th>
                    <th>amount</th>
                    <th>status</th>
                    <th>created_at</th>
                    <th>updated_at</th>

                </tr>
            </thead>

            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

            </tbody>
        </table>
    </div>
</div>

@endsection
