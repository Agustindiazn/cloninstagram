
    <div class="message-wrapper">
        <ul class="messages" >
            @foreach ($messages as $m)
               
                <li class="message clearfix">
                    <div class="{{ ($m->from == Auth::id()) ? 'sent':'received'}}">
                    
                        <p>{{ $m->message }}</p>
                        <p class="date">{{ \FormatTime::LongTimeFilter($m->created_at)  }}</p>
                    </div>
                </li>
                
            @endforeach
        </ul>
    </div>
    
    <div class="input-text" id='{{ $my_id }}'>
        <input type="text" name="message" class='submit'>
    </div>
     