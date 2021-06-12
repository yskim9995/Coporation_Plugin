@section('page_title')
@endsection

<div id="operation-list" class="row" style="max-width: 1200px;">
    <div class="col-sm-12">
        <div class="panel-group">
            <div class="panel">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h3 class="panel-title">공사중 에드온</h3>
                        <table class="table table-striped">
                            <tbody>
                            <tr align="center">
                                <th>버전</th>
                                <td>0.3a(2021-06-10)</td>
                            </tr>
                            </tbody>
                            <tbody>
                            <tr align="center">
                                <th>작성자</th>
                                <td>김윤서(kimyunseo5225@gmail.com)</td>
                            </tr>
                            </tbody>
                            <tr align="center">
                                <th>라이선스</th>
                                <td>Eclipse Public License(EPL)</td>
                            </tr>
                            </tbody>
                            <tr align="center">
                                <th>설명</th>
                                <td>지정된 회원 이외에는 공사중 표시를 보게합니다.</td>
                            </tr>
                            </tbody>
                        </table>
                        <h1></h1>
                    </div>
                </div>

                <form method="post" action="{{ route('corporation_plugin::settings.config.store') }}">
{{--                    <input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                    {{ csrf_field() }}

                    <div class="panel-collapse collapse in">
                        <div class="panel-body">
                            <ul class="list row">
                                <li class="col-sm-12">
                                    <div class="form-group">
                                        <div class="clearfix">
                                            <label class="operation-title">공사중 메시지</label>
                                        </div>

                                        <select class="form-control" name="w">
                                            <option value="true">사용</option>
                                            <option value="false">사용 안함</option>
                                        </select>
                                    </div>

                                    <div class="alert alert-warning" role="alert">
                                        <div>
                                            <b>공사중 메시지를 입력해주세요. 따로 설정 안할 시 기본 값으로 보여집니다.</b>
                                        </div>
                                    </div>
                                </li>

                                <li class="col-sm-12">
                                    <div class="form-group">
                                        <div class="clearfix">
                                            <label class="operation-title">공사중 표시 예외 User-Agent</label>
                                        </div>

                                        <select class="form-control" name="w2">
                                            <option value="true">사용</option>
                                            <option value="false">사용 안함</option>
                                        </select>
                                    </div>

                                    <div class="alert alert-warning" role="alert">
                                        <div>
                                            <b></b>
                                        </div>
                                    </div>
                                </li>

                                <li class="col-sm-12">
                                    <div class="form-group">
                                        <div class="clearfix">
                                            <label class="operation-title">섹션 3</label>
                                        </div>

                                        <select class="form-control" name="w3">
                                            <option value="true">사용</option>
                                            <option value="false">사용 안함</option>
                                        </select>
                                    </div>

                                    <div class="alert alert-warning" role="alert">
                                        <div>
                                            <b>섹션 3 설명</b>
                                        </div>
                                    </div>
                                </li>

                                <li class="col-sm-12">
                                    <div class="form-group">
                                        <div class="clearfix">
                                            <label class="operation-title">섹션 4</label>
                                        </div>

                                        <input type="text" class="form-control" placeholder="섹션 4 설명" name="w4">
                                    </div>

                                    <div class="alert alert-warning" role="alert">
                                        <div>
                                            <b>섹션 4 설명</b>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="panel-footer">
                            <div class="pull-right">
                                <button type="submit" class="btn btn-primary">
                                    <i class="xi-download"></i> {{ xe_trans('xe::save') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    #operation-list ul {
        padding: 0;
    }
    #operation-list li {
        list-style: none;
    }
    .table {
        table-layout:auto;
    }
</style>
