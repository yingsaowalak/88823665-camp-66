@extends('layout.default')

@section('content')
<form>

</form>
<table class="table">
    <thead>

    </thead>
    <tbody>

    </tbody>
</table>
@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        var count =;
        $('#btn-add-product').on('click',function(){
            $("#add-product").append(`
            <div class = "mt-3 col-6">
            <label class="form-label">${count++}. Product Name
            <button type="button" class="btn btn-danger" id="btn-delete-product">ลบ</button>
            </label>
            
            `)
        }
    })
@endsection