@extends('layouts.app')

@section('content')
                    <!-- New Task Form -->
                    <form action="{{ url('fund') }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="fund-id" class="col-sm-2 control-label">基地_id</label>
                            <div class="col-sm-4">
                                <input type="number" name="基地_id" id="fund-id" class="form-control" value="{{ old('fund') }}">
                            </div>
                        </div>
                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="fund-id" class="col-sm-2 control-label">年份</label>
                            <div class="col-sm-4">
                                <input type="date" name="年份" id="fund-年份" class="form-control" value="{{ old('fund') }}">
                            </div>
                        </div>
                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="fund-投入渠道_中央财政" class="col-sm-2 control-label">投入渠道_中央财政</label>

                            <div class="col-sm-4">
                                <input type="number" name="投入渠道_中央财政" id="fund-投入渠道_中央财政" class="form-control" value="{{ old('fund') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fund-投入渠道_地方财政" class="col-sm-2 control-label">投入渠道_地方财政</label>

                            <div class="col-sm-4">
                                <input type="number" name="投入渠道_地方财政" id="fund-投入渠道_地方财政" class="form-control" value="{{ old('fund') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fund-投入渠道_其他" class="col-sm-2 control-label">投入渠道_其他</label>

                            <div class="col-sm-4">
                                <input type="number" name="投入渠道_其他" id="fund-投入渠道_其他" class="form-control" value="{{ old('fund') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fund-投入类别_年度运行费" class="col-sm-2 control-label">投入类别_年度运行费</label>

                            <div class="col-sm-4">
                                <input type="number" name="投入类别_年度运行费" id="fund-投入类别_年度运行费" class="form-control" value="{{ old('fund') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fund-投入类别_固定资产投入" class="col-sm-2 control-label">投入类别_固定资产投入</label>

                            <div class="col-sm-4">
                                <input type="number" name="投入类别_固定资产投入" id="fund-投入类别_固定资产投入" class="form-control" value="{{ old('fund') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fund-投入类别_科研项目经费" class="col-sm-2 control-label">投入类别_科研项目经费</label>

                            <div class="col-sm-4">
                                <input type="number" name="投入类别_科研项目经费" id="fund-投入类别_科研项目经费" class="form-control" value="{{ old('fund') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fund-投入类别_其他" class="col-sm-2 control-label">投入类别_其他</label>

                            <div class="col-sm-4">
                                <input type="number" name="投入类别_其他" id="fund-投入类别_其他" class="form-control" value="{{ old('fund') }}">
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
