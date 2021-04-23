
<table class="table table-bordered border-primary">
    <tr>
        <th>Quiz test</th>
     </tr>

     @foreach($data as $row)

     <tr>
         <td><a href="{{$row->catagory}}"> {{$row->catagory}}</a></td>
        
    </tr>

    @endforeach

 </table>  