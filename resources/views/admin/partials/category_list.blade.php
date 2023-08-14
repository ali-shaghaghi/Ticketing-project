@foreach($categories as $sub_category)
    <tr>
        <tr>
            {{-- ID category --}}
            <td class="text-center">{{$sub_category->id}}</td>
            {{-- NAME category --}}
            <td>{{str_repeat('-----', $level)}} {{$sub_category->name}}</td>
            {{-- EDIT category --}}
            <td class="text-center">
                <a class="btn btn-warning" href="{{route('categories.edit', $sub_category->id)}}">ویرایش</a>
                <div style="display:inline-block" >
                    <form method="post" action="/administrator/categories/{{$sub_category->id}}">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">حذف</button>
                    </form>
                </div>
            </td>
        </tr>
    </tr>
    @if(count($sub_category->childrenRecursive) > 0)
        @include('admin.partials.category_list', ['categories' => $sub_category->childrenRecursive, 'level' => $level+1])
    @endif
@endforeach
