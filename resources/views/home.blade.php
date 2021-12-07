
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Test Bank Mega | Home</title>
    
  @include('template.head')
</head>

@include('template.script')
<body class="hold-transition sidebar-mini">
<div class="wrapper">


  @include('template.navbar')

  @include('template.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">   
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Table</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{Route('create')}}" class="btn btn-block btn-primary">Create</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row" style="margin-bottom: 10px">
        <div class="col-md-4 text-center">
            <div style="margin-top: 8px" id="message">
            </div>
        </div>
        <div class="col-md-1 text-right">
        </div>
      </div>
        <div class="col-12 col-sm-12">
          <div class="card card-primary card-tabs">
            <div class="card-header p-0 pt-1">
              <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="custom-tabs-one-onproses-tab" data-toggle="pill" href="#custom-tabs-one-onproses" role="tab" aria-controls="custom-tabs-one-onproses" aria-selected="true">On Proses</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-tabs-one-approv-tab" data-toggle="pill" href="#custom-tabs-one-approv" role="tab" aria-controls="custom-tabs-one-approv" aria-selected="false">Approv</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-tabs-one-reject-tab" data-toggle="pill" href="#custom-tabs-one-reject" role="tab" aria-controls="custom-tabs-one-reject" aria-selected="false">Reject</a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <div class="tab-content" id="custom-tabs-one-tabContent">
                <div class="tab-pane fade show active" id="custom-tabs-one-onproses" role="tabpanel" aria-labelledby="custom-tabs-one-onproses-tab">
                  <table id="example2-tab1-dt" class="table table-striped table-bordered table-condensed" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Document No</th>
                        <th>Document Subjeck</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody> 
                      @foreach($documents as $row)
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->document_no}}</td>
                        <td>{{$row->document_subject}}</td>
                        <td>{{$row->status}}</td>
                        <td>
                          <a href="/edit/{{ $p->id }}" class="btn btn-block btn-success">approv</a>
                          <a href="/edit/{{ $p->id }}" class="btn btn-block btn-danger">Rejact</a>
                          <a href="/edit/{{ $p->id }}" class="btn btn-block btn-info">detail</a>
                        </td>
                      </tr>
                      @endforeach            
                    </tbody>
                  </table> 
                </div>
                <div class="tab-pane fade" id="custom-tabs-one-approv" role="tabpanel" aria-labelledby="custom-tabs-one-approv-tab">
                  <table id="example2-tab2-dt" class="table table-striped table-bordered table-condensed" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Document No</th>
                        <th>Document Subjeck</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody> 
                      @foreach($documents as $row)
                      <tr>
                        @if ($row->status = 'Approv')
                        <td>{{$no++}}</td>
                        <td>{{$row->document_no}}</td>
                        <td>{{$row->dApprovocument_subject}}</td>
                        <td>{{$row->status}}</td>
                        @endif
                      </tr>
                      @endforeach  
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="custom-tabs-one-reject" role="tabpanel" aria-labelledby="custom-tabs-one-reject-tab">
                  <table id="example2-tab3-dt" class="table table-striped table-bordered table-condensed" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Document No</th>
                        <th>Document Subjeck</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody> 
                      @foreach($documents as $row)
                      <tr>
                        @if ($row->status = 'Rejact')
                        <td>{{$no++}}</td>
                        <td>{{$row->document_no}}</td>
                        <td>{{$row->document_subject}}</td>
                        <td>{{$row->status}}</td>
                        @endif
                      </tr>
                      @endforeach 
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
    </section>
  </div>
  <!-- /.box -->
  @include('template.footer')
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
  <!-- ./wrapper -->

</body>
</html>
