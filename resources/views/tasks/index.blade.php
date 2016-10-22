@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    增添信息
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New Task Form -->
                    <form action="{{ url('task') }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">国家级科研基地名称</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
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
                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>搜索信息
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

            <!-- Current Tasks -->
            @if (count($tasks) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Current Tasks
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>Task</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td class="table-text"><div>{{ $task->name }}</div></td>

                                        <!-- Task Delete Button -->
                                        <td>
                                            <form action="{{url('task/' . $task->id)}}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" id="delete-task-{{ $task->id }}" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>删除
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                <div class="col-sm-6">
                                    <label for="task-name" class="col-sm-6 control-label"><li><a href="{{ url('/research/base') }}">基地基本情况表</a></li></label>
                                    <label for="task-name" class="col-sm-6 control-label"><li><a href="{{ url('/research/fund/index') }}">科研基地经费表</a></li></label>
                                    <label for="task-name" class="col-sm-6 control-label"><li><a href="{{ url('/research/equipment') }}">设施与仪器设备</a></li></label>
                                    <label for="task-name" class="col-sm-6 control-label"><li><a href="{{ url('/research/field') }}">基地所属领域表</a></li></label>
                                    <label for="task-name" class="col-sm-6 control-label"><li><a href="{{ url('/research/worker') }}">科研人员情况表</a></li></label>
                                    <label for="task-name" class="col-sm-6 control-label"><li><a href="{{ url('/research/detail') }}">基地调查情况表</a></li></label>
                                    <label for="task-name" class="col-sm-6 control-label"><li><a href="{{ url('/research/rely') }}">基地依托单位表</a></li></label>
                                </div>
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
