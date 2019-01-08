@extends('backend.templates.main')

@section('page_content')

    <div class="ui segments">

        <div class="ui segment">
            <table class="ui celled striped table">
                <thead>
                <tr>
                    <th>название</th>
                    <th>title</th>
                    <th>meta_description</th>
                    <th>meta_keywords</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td class="collapsing">
                            <a href="{{ route('categories.edit', $category->id) }}">{{ $category->name }}</a>
                        </td>
                        <td class="collapsing">
                            {{ $category->title }}
                        </td>
                        <td class="collapsing">
                            {{ $category->meta_description }}
                        </td>
                        <td class="collapsing">
                            {{ $category->meta_keywords }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="ui segment">
            <table class="ui celled striped table">
                <thead>
                <tr>
                    <th>название</th>
                    <th>title</th>
                    <th>meta_description</th>
                    <th>meta_keywords</th>
                </tr>
                </thead>
                <tbody>
                @foreach($subcategories as $subcategory)
                    <tr>
                        <td class="collapsing">
                            {{ $subcategory->name }}
                        </td>
                        <td class="collapsing">
                            {{ $subcategory->title }}
                        </td>
                        <td class="collapsing">
                            {{ $subcategory->meta_description }}
                        </td>
                        <td class="collapsing">
                            {{ $subcategory->meta_keywords }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>

@endsection