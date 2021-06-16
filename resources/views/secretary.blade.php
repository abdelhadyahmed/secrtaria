@extends('layouts.app')
<link href="{{ asset('css/tables.css') }}" rel="stylesheet">
@section('content')

<div id="secretary" class="container">
  <div class="card">
      <div class="card-header" style="background-color: #435D7D; color:white; font-size: 15px">
          <h3>  معلومات عن <b>الزائر</b></h3>
      </div>
      <div class="card-body">
          <form v-on:submit.prevent="submitForm()" >
            @csrf
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row mb-4">
                <div class="col">
                  <div class="form-outline">
                      <label class="form-label" for="form3Example1">إسم الزائر</label>
                    <input  type="text" v-model="name" name="name" id="form3Example1" class="form-control" />
                  </div>
                </div>
                <div class="col">
                  <div class="form-outline">
                      <label class="form-label" for="form3Example2">سبب الزيارة</label>
                    <input type="text" v-model="reason" name="reason" id="form3Example2" class="form-control" />
                  </div>
                </div>
              </div>


              <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">ملاحظات</label>
                <input type="text" v-model="notes" name="notes" id="form3Example3" class="form-control" />
              </div>


              <div class="card-footer text-center">
                  <button type="submit" class="btn btn-primary mb-4" >إرسال إلى القائد</button>
              </div>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header" style="background-color: #435D7D; color:white; font-size: 15px">
          <h1>أوامر الدخول</h1>
        </div>
        <div class="card-body">
          <table class="table table-striped table-hover">
              <thead>
                  <tr>
                      <th colspan="2">إسم الزائر</th>
                      <th colspan="2">الأمر</th>
                      <th colspan="2">مسح طلب الدخول</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td colspan="2">أحمد محمد</td>
                      <td colspan="2">سماح أو رفض</td>
                      <td colspan="2"><a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fa fa-times"></i></a></td>
                  </tr>
              </tbody>
          </table>
        </div>
    </div>
</div>

@endsection

