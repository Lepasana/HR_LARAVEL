@extends('layouts/layoutMaster')
@section('title', 'Chat - Apps')
@section('vendor-style')
@vite('resources/assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.scss')
@endsection

@section('page-style')
  @vite('resources/assets/vendor/scss/pages/app-chat.scss')
@endsection

@section('vendor-script')
@vite('resources/assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.js')
@endsection
@section('page-script')
@vite('resources/assets/js/app-chat.js')
@endsection
@section('content')
  <div class="">
    <div class="card">
      <div class="card-datatable table-responsive">
        <table class="datatables-projects table border-top">
          <thead>
            <tr>
           <th>Employee Id</th>
              <th>Employee Name</th>
              <th>Project Name</th>
              <th>Hours Worked</th>
              <th>Overtime Hours</th>
              <th>Total Hours</th>
              <th>Notes</th>

            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>

@endsection
