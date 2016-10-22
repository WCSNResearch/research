@extends('layouts.app')

@section('content')
    <!-- New Task Form -->
    <form action="{{ url('task') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}
        <!-- Task Name -->
        <div class="form-group">
            <label for="task-name" class="col-sm-2 control-label">科研基地_id</label>

            <div class="col-sm-4">
                <input type="text" id="fund-id" class="form-control" value="{{ old('fund') }}">
            </div>
        </div>
    </form>

    <!-- Task Name -->
    <div class="form-group">
        <label for="task-name" class="col-sm-2 control-label">年份</label>

        <div class="col-sm-4">
            <input type="text"  年份="fund-年份" class="form-control" value="{{ old('fund') }}">
        </div>
    </div>
    <!-- Task Name -->
    <div class="form-group">
        <label for="task-name" class="col-sm-2 control-label">投入渠道_中央财政</label>

        <div class="col-sm-4">
            <input type="text" 投入渠道_中央财政="fund-投入渠道_中央财政" class="form-control" value="{{ old('fund') }}">
        </div>
    </div>
    <!-- Add Task Button -->
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
            <button type="submit" class="btn btn-default">
                <i class="fa fa-btn fa-plus"></i>增加信息
            </button>
        </div>
    </div>
    </form>
@endsection