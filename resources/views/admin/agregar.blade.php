@extends('admin.masteradmin')

@section('contenido')
    <div class="row">
        <div class="col">
            <form class="form-horizontal form-bordered" method="post">
            <section class="card">
                <header class="card-header">
                    <div class="card-actions">
                        <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
                        <a href="#" class="card-action card-action-dismiss" data-card-dismiss=""></a>
                    </div>

                    <h2 class="card-title">Form Elements</h2>
                </header>
                <div class="card-body">

                        @csrf
                        <div class="form-group row">
                            <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Nombre</label>
                            <div class="col-lg-6">
                                <input type="text" name="nombre" class="form-control"  value="{{$pagina->nombre}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Nombre Seo</label>
                            <div class="col-lg-6">
                                <input type="text" name="nombreseo" class="form-control"  value="{{$pagina->nombreseo}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 control-label text-lg-right pt-2">Summernote</label>
                            <div class="col-lg-9">
                                <textarea name="contenido" class="summernote" data-plugin-summernote data-plugin-options='{ "height": 180, "codemirror": { "theme": "ambiance" } }'>{{$pagina->contenido}}</textarea>
                            </div>
                        </div>

                </div>
                <footer class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">Submit </button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </footer>
            </section>
            </form>
        </div>
    </div>


@endsection
