@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Form Frequently Ask Question
                    </div>

                    <div class="card-body">
                        <form>
                            <div>
                                <form action="">
                                    <div class="form-group">
                                      <label for="title"></label>
                                      <input type="text" name="title" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                      <small id="helpId" class="text-muted">Help text</small>
                                    </div>
                                    <div class="form-group">
                                      <label for=""></label>
                                      <textarea class="form-control" name="" id="" rows="10"></textarea>
                                      <small id="helpId" class="text-muted">Help text</small>
                                    </div>
                                    <button type="button" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection