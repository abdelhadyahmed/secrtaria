@extends('layouts.app')
<link href="{{ asset('css/tables.css') }}" rel="stylesheet">
@section('content')

<div class="container">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>الزائريين</h2>
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th colspan="2">إسم الزائر</th>
						<th>سبب الزيارة</th>
						<th>ملاحظات</th>
						<th colspan="2">سماح / رفض</th>
					</tr>
				</thead>
				<tbody>
                    @foreach ($visitors as $visitor )
                        <tr>
                            <td colspan="2">{{$visitor->name}}</td>
                            <td>{{$visitor->reason}}</td>
                            <td>{{$visitor->notes}}</td>
                            <td colspan="2">
                                <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="fa fa-check"></i></a>
                                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    @endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection
