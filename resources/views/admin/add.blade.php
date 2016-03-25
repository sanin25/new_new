@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome</div>

                    <div class="panel-body">
                        <form method="post" action="{{route('addpost')}}">
                            <div class="form-group">
                                <div class="input-group col-md-8">
                                    <div class="input-group-addon">Название страницы</div>
                                    <input type="text" class="form-control" name="title">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group col-md-5">
                                    <div class="input-group-addon">fermaeko/</div>
                                    <input type="text" class="form-control" name="slug">
                                    <div class="input-group-addon">.html</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group col-md-5">
                                    <label for="cat">Категория</label>
                                <select class="form-control input-group" name="selectcat">
                                    <option value="2">1</option>
                                    <option value="2">2</option>
                                    <option value="2">3</option>
                                    <option value="2">4</option>
                                    <option value="2">5</option>
                                </select>
                                    </div>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="" name="check" checked>
                                   Опубликовать ?
                                </label>
                            </div>
                            <textarea class="form-control" rows="5" name="descr"></textarea>
                            <br/>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button>Опроваить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
