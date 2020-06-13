@extends('layouts.etudiant')

@section('content')
<div class="col-md-6 portlets">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2><strong>Calendar</strong></h2>
        <div class="panel-actions">
          <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
          <a href="#" class="wclose"><i class="fa fa-times"></i></a>
        </div>

      </div><br><br><br>
      <div class="panel-body">
        <!-- Widget content -->

        <!-- Below line produces calendar. I am using FullCalendar plugin. -->
        <div id="calendar"></div>

      </div>
    </div>

  </div>
  @endsection