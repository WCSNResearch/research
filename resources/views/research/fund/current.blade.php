@extends('layouts.app')

@section('content')
    <!-- Current Tasks -->
@if (count($funds) > 0)
    <div class="panel panel-default">
        <div class="panel-heading">
            Current Funds
        </div>

        <div class="panel-body">
            <table class="table table-striped task-table">
                <thead>
                <th>基地_id</th>
                <th>年份</th>
                <th>投入渠道_中央财政</th>
                <th>投入渠道_地方财政</th>
                <th>投入渠道_其他</th>
                <th>投入类别_年度运行费</th>
                <th>投入类别_固定资产投入</th>
                <th>投入类别_科研项目经费</th>
                <th>投入类别_其他</th>
                <th>&nbsp;</th>
                </thead>
                <tbody>
                @foreach ($funds as $fund)
                    <tr>
                        <td class="table-text"><div>{{ $fund->基地_id }}</div></td>
                        <td class="table-text"><div>{{ $fund->年份 }}</div></td>
                        <td class="table-text"><div>{{$fund->投入渠道_中央财政}}</div></td>
                        <td class="table-text"><div>{{$fund->投入渠道_地方财政 }}</div></td>
                        <td class="table-text"><div>{{ $fund->投入渠道_其他}}</div></td>
                        <td class="table-text"><div>{{ $fund->投入类别_年度运行费 }}</div></td>
                        <td class="table-text"><div>{{ $fund->投入类别_固定资产投入}}</div></td>
                        <td class="table-text"><div>{{ $fund->投入类别_科研项目经费}}</div></td>
                        <td class="table-text"><div>{{ $fund->投入类别_其他}}</div></td>
                        <!-- Task Delete Button -->
                        <td>
                            <form action="{{url('fund/' . $fund->基地_id)}}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit" id="delete-task-{{ $fund->基地_id }}" class="btn btn-danger">
                                    <i class="fa fa-btn fa-trash"></i>删除
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif
@endsection