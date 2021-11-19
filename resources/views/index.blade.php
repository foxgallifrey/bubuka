<html>
<body>

<div>
    <form method="get" url="{ '/logout' }" action="/logout">
        <input type="hidden" value='logout' name="logout">
        <button type="submit">Выход</button>
    </form>

    <form method="get" url="{ '/' }" action="/">
        <input type="hidden" value='sort_city' name="sort">
        <button type="submit">Сортировать по городам</button>
    </form>

    <form method="get" url="{ '/' }" action="/">
        <input type="hidden" value='population_sort' name="sort">
        <button type="submit">Сортировать по населению</button>
    </form>

    <form method="get" url="{ '/' }" action="/">
        <input type="hidden" value='default' name="sort">
        <button type="submit">Выводить по умолчанию</button>
    </form>
</div>


@foreach ($parts_of_the_world as $items_part_world)

<table border="1" style="margin-bottom: 20px">
    <caption>{{ $items_part_world->title }}</caption>
    <tr style="background-color: black; color: white">
        <th>М</th>
        <th>Город/Агломерация</th>
        <th>Страна</th>
        <th>Население агломирации (т.ч.)</th>
    </tr>
    @php(
        $index = 1
    )
    @foreach ($cities as $items_city)
        @if($items_city->country->parts_of_the_world_id == $items_part_world->id)
            <tr>
                <td>{{$index}}.</td>
                <td>{{ $items_city->title}}</td>
                <td>{{ $items_city->country->title}}</td>
                <td>{{$items_city->population}}</td>
            </tr>
            @php(
               $index++
            )
        @endif
    @endforeach
</table>

@endforeach

</body>
</html>