<div class="box">
    <div class="table">
        <div class="row">
            <div class="col col-3 align-center">
                <a href="/{{$category['slug']}}/{{$insurance->slug}}"><img class="lazy" src="/img/placeholder.png" data-src="/assets/logos/c150x75/{{$insurance->slug}}.comp.jpg" alt="{{$insurance->name}} {{$category['name']}}" width="150" height="75" alt="{{$insurance->name}}" data-srcset="
                    /assets/logos/c150x75/{{$insurance->slug}}.comp.jpg 1x, 
                    /assets/logos/c300x150/{{$insurance->slug}}.comp.jpg 2x,
                    /assets/logos/c450x300/{{$insurance->slug}}.comp.jpg 3x
                "></a>
                <span class="rating">
                    <?php for($i = 1; $i <= 5; $i++) {
                        if($i <= floor($insurance->rating)) {
                            echo '<i class="fa fa-star text-yellow" style="font-size: 14px;"></i>';
                        }
                        
                    }
                    if(floor($insurance->rating) < $insurance->rating) {
                            echo '<i class="fas fa-star-half-alt text-yellow" style="font-size: 14px;"></i>';
                    }
                    for($i = ceil($insurance->rating) + 1; $i <= 5; $i++) {
                        echo '<i class="far fa-star text-yellow" style="font-size: 14px;"></i>';
                    }
                    ?>
                </span>
            </div>

            <div class="col col-4 align-center">      
                <div class="inline-block"> 
                    <ul class="fa-ul">
                        @if(strlen($insurance->benefits) > 0)
                            @foreach(explode(';',$insurance->benefits) as $benefit)
                            <li><span class="fa-li"><i class="fas fa-check-circle text-success"></i></span> {{$benefit}}</li>
                            @endforeach
                        @endif
                        @if(strlen($insurance->drawbacks) > 0)
                            @foreach(explode(';',$insurance->drawbacks) as $drawback)
                            <li><span class="fa-li"><i class="fas fa-times-circle text-danger"></i></span> {{$drawback}}</li>
                            @endforeach
                        @endif
                    </ul>
                    
                </div>
            </div>

            <div class="col col-5 align-left">
                <table>
                    <tr>
                        <td width="50%" style="text-align: right;"><strong>Ers??ttning vid sjukhusvistelse:</strong></td>
                        <td>
                            @if($insurance->hospital_stay_compensation > 0)
                            {{number_format($insurance->hospital_stay_compensation,0,',',' ')}} kr/dag
                            @else 
                            <i class="fa fa-question-circle" title="Vi saknar denna uppgift" style="font-size: 1em; color: #aaa;"></i>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td width="50%" style="text-align: right;"><strong>Ers??ttning vid diagnos:</strong></td>
                        <td>
                            @if($insurance->diagnosis_compensation > 0)
                            {{number_format($insurance->diagnosis_compensation,0,',',' ')}} kr
                            @else 
                            <i class="fa fa-question-circle" title="Vi saknar denna uppgift" style="font-size: 1em; color: #aaa;"></i>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td width="50%" style="text-align: right;"><strong>Ers??ttning vid invaliditet:</strong></td>
                        <td>
                            @if($insurance->invalidity_compensation_amount > 0)
                            Upp till {{number_format($insurance->invalidity_compensation_amount,0,',',' ')}} kr
                            @else 
                            <i class="fa fa-question-circle" title="Vi saknar denna uppgift" style="font-size: 1em; color: #aaa;"></i>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td width="50%" style="text-align: right;"><strong>Ers??ttning vid d??dsfall:</strong></td>
                        <td>
                            @if($insurance->life_insurance_amount > 0)
                            {{number_format($insurance->life_insurance_amount,0,',',' ')}} kr
                            @else 
                            <i class="fa fa-question-circle" title="Vi saknar denna uppgift" style="font-size: 1em; color: #aaa;"></i>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td width="50%" style="text-align: right;"><strong>Utan sj??lvrisk:</strong></td>
                        <td>
                            @if($insurance->without_deductible == 1)
                            <i class="fa fa-check-circle text-success"></i> Ja
                            @else 
                            <i class="fa fa-times-circle text-danger"></i> Nej
                            @endif
                        </td>
                    </tr>
                </table>
            </div>

            
        </div>
                            
        
    </div>
    <div class="table">

        <div class="row actions align-center">
            <div class="col col-12 align-center">

                <a href="/{{$category['slug']}}/{{$insurance->slug}}" class="cta bg-none">L??s recension</a>
                @if(!empty($insurance->tracking_link))
                <a href="/till/{{$category['slug']}}/{{$insurance->slug}}" target="_blank" rel="nofollow noopener" class="cta bg-success">Se ditt pris</a>
                @endif
                
            </div>
        </div>  

    </div>

</div>