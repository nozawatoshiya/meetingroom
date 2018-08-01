@extends('layouts.app')
@section('content')
<div class="container">
  <div class="font">
    <div class="card">
      @if($message != "")
      <div class="alert alert-danger alert-dismissible" id="alertfadeout">
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        {{$message}}
      </div>
      @endif
      <div class="form-group">
        <div class="input-group">
          <form class="" action="#" method="get">
            <button type="submit" class="btn btn-default" name="submit" value="back">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              {{$dateJ}}
            </button>
            <button type="submit" class="btn btn-default" name="submit" value="next">
              {{$dateJ}}
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>

            </button>
            <input type="hidden" name="date" value="{{$dateJ}}">
          </form>
        </div>
        <h3>{{$dateJ}} の会議室 予約データ</h3>

        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#registUserModal">
          <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
          新規 登録
        </button>
        </h3>
            <!-- モーダル・ダイアログ -->
            <div class="modal fade" id="registUserModal" tabindex="-1">
               <div class="modal-dialog modal-main">
                   <div class="modal-content">
                        <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                              <h4 class="modal-title">新規登録</h4>
                        </div>
                        <div class="modal-body">
                        <form class="form-group" action="#" method="post">
                            {{csrf_field()}}
                            <p>社員番号：※必須<input type="text" class="form-control" name="registAccount" value=""></p>
                            <input type="password" class="form-control" name="dummy2" value="" style="display:none" disabled>
                            <p>氏名：※必須<input type="text" class="form-control" name="registName" value=""></p>
                            <p>パスワード：※必須<input type="password" class="form-control" name="registPassword" value=""></p>
                            <p>権限：入力が無い場合、「一般」での登録となります。
                              {{--
                              <select name="registpermission" class="form-control">
                                @foreach(config('listarchives.permission') as $permissionIndex => $permissionName)
                                  <option value="{{ $permissionIndex }}">{{$permissionName}}</option>
                                @endforeach
                              </select>
                              --}}
                            </p>
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-default" name="submit" value="">
                            登録
                          </button>
                        </form>
                        </div>
                   </div>
               </div>
            </div>

        <div class="card-archiveslist_h">
          <table class="table table-responsive">
            <thead>
              <tr>
                <td width="120">開始</td>
                <td width="120">終了</td>
                <td width="120">利用者</td>
                <td width="120">件名</td>
                {{--<td width="120">メモ</td>--}}
                <td></td>
              </tr>
            </thead>
          </table>
        </div>
        <div class="card-archiveslist_d">
          @if($message=="")
          <table class="table table-striped table-hover table-condensed table-responsive">
            <tbody>
              @php $i=0 @endphp
              @foreach($result as $data)
              <tr>
                <td width="120">@if($data['startTime']!=""){{date('H:i',strtotime($data['startTime']))}}@endif</td>
                <td width="120">@if($data['endTime']!=""){{date('H:i',strtotime($data['endTime']))}}@endif</td>
                <td width="120">{{$data['user']}}</td>
                <td width="120">{{$data['subject']}}</td>
                {{--<td width="120">{{$data['メモ']}}</td>--}}
                <td>
                  <a href="#" data-toggle="modal" data-target="#archivesModal{{$i}}" >
                    <button type="button" class="btn btn-info btn-outline" name="button" ><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></button>
                  </a>
                <!-- モーダル・ダイアログ -->
                {{--
                <div class="modal fade" id="archivesModal{{$i}}" tabindex="-1">
                  <div class="modal-dialog modal-main">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                        <h3 class="modal-title">{{date('Y/m/d',strtotime($data['出勤日']))}}</h3>
                      </div>
                      <div class="modal-body">
                        <form class="form-group" action="#" method="post">
                          {{csrf_field()}}
                          <p>メモ：</p>
                          <textarea class="form-control" name="memo"  rows="8" style="width:100%">
                            @if($data['メモ']!=""){{$data['メモ']}}@endif
                          </textarea>
                          <input type="hidden" name="date" value="{{date('Y/m/d',strtotime($data['出勤日']))}}">
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-default" name="submit" value="">
                          <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
                            更新
                        </button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                --}}
              </td>
            </tr>
            @php $i++ @endphp
            @endforeach
          </tbody>
        </table>
        @endif
      </div>
      <div id="calendar"></div>
    </div>
  </div>
</div>
@endsection

      <script><!--
          function setChars(text){
              var myTextElement = document.getElementsByName("ID").item(0);
              myTextElement.value += text;
          }
//--></script>
     <script><!--
          function delChars(){
              var myTextElement = document.getElementsByName("ID").item(0);
              myTextElement.value = myTextElement.value.slice(0,-1);
          }
//--></script>
