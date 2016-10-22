@extends('layouts.app')

@section('content')
        <!-- Task Name -->
        <div class="form-group">
            <label for="task-name" class="col-sm-2 control-label">科研基地_id</label>

            <div class="col-sm-4">
                <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
            </div>
        </div>

    </form>

    <!-- Task Name -->
    <div class="form-group">
        <label for="task-name" class="col-sm-2 control-label">通信地址</label>

        <div class="col-sm-4">
            <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
        </div>
    </div>
    <!-- Task Name -->
    <div class="form-group">
        <label for="task-name" class="col-sm-2 control-label">基地类别</label>

        <div class="col-sm-4">
            <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
        </div>
    </div>
@endsection
