@extends('layouts.app')

@section('content')
    <div class="container">    
        <form action="{{ route('admin.posts.store')}}" method="post">
            @csrf

            {{-- titolo --}}
            <div class="mb-3">
                <label for="titolo" class="form-label">Titolo</label>
                <input type="text" name="title" class="form-control
                @error('title') is-invalid @enderror" 
                id="titolo" value="{{ old('title') }}">

                {{-- display error --}}
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- categoria --}}
            <div class="mb-3">
                <label for="category" class="form-label">Categoria</label>
                <select name="category_id" class="form-select" id="category">
                    <option value="">--Selezione una categoria--</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}"
                        @if ($category->id == old('category_id'))
                            selected
                        @endif>
                        {{ old('category.name', $category->name) }}
                    </option>
                    @endforeach
                </select>
            </div>


            {{-- descrizione --}}
            <div class="mb-3">
                <label for="desc" class="form-label">Descrizione</label>
                <textarea class="form-control
                @error('title') is-invalid @enderror" 
                name="content" id="desc" cols="30" rows="10">{{old('content')}}</textarea>
                
                {{-- display error --}}
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection