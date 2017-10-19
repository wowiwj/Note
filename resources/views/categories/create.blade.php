@extends('layouts.app')

@section('content')

    <div class="columns">

        <div class="column is-9">

            <div class="card">
                <div class="card-header">
                    <div class="card-header-title">
                        添加分类
                    </div>

                </div>

                <div class="card-content">

                    <form  method="POST" action="{{ route('categories.store') }}" accept-charset="UTF-8">

                        {{ csrf_field()  }}

                        <div class="field">
                            <label class="label">分类名</label>
                            <div class="control">
                                <input class="input {{ $errors->has('name') ? 'is-danger' : '' }}" name="name" type="text" placeholder="请输入分类名" value="{{old('name')}}">
                            </div>
                            <p class="help {{ $errors->has('name') ? 'is-danger' : '' }}"> {{ $errors->first('name') ?: '所填写标签的名称' }}</p>
                        </div>

                        <div class="field">
                            <label class="label">索引</label>
                            <div class="control">
                                <input class="input" name="slug" type="text" value="{{ old('slug') }}" placeholder="请输入分类名" value="{{old('name')}}">
                            </div>
                            <p class="help">在文章链接通过索引匹配文章</p>
                        </div>

                        <div class="control">
                            <button class="button is-primary">添加</button>
                        </div>

                        {{--<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">--}}
                            {{--<label for="" class="col-sm-2 control-label">分类名</label>--}}
                            {{--<div class="col-sm-6">--}}
                                {{--<input class="form-control" name="name" type="text" value="{{old('name')}}">--}}
                                {{--@if ($errors->has('name'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-4 help-block">--}}
                                {{--所填写标签的名称--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">--}}
                            {{--<label for="" class="col-sm-2 control-label">索引</label>--}}
                            {{--<div class="col-sm-6">--}}
                                {{--<input class="form-control" name="slug" type="text" value="{{ old('slug') }}">--}}
                                {{--@if ($errors->has('slug'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('slug') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-4 help-block">--}}
                                {{--在文章链接通过索引匹配文章--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-sm-offset-2 col-sm-6">--}}
                                {{--<input class="btn btn-primary" id="user-edit-submit" type="submit" value="添加">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}

                </div>


            </div>



        </div>

        <div class="column is-3">
            <div class="card">

                <div class="card-header">
                    <div class="card-header-title">
                        提示信息
                    </div>
                </div>

                <div class="card-content">
                    这是奥克兰发还发爱古法卡法咖啡馆花费
                </div>

            </div>
        </div>


    </div>


@endsection