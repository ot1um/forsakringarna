@extends('app')
@section('content')

    <section class="top">

        <div class="content">


            @include('modules.breadcrumbs')
            
            <div class="listing">


                <div class="row">
                    <div class="panel add-gap">
                        
                        <h1>{{$insurance->name}} {{mb_strtolower($category['name'])}}</h1>
                        
                        @include('modules.presentation-benefits')
                        
                    </div>
                </div>


                <div class="row">
                    
                    <div class="panel">

                        <table>
                            <tr>
                                <td width="50%" style="text-align: right;"><strong>Ersättning lösöre:</strong></td>
                                <td>
                                    @if($insurance->goods_compensation_minimum > 0 && $insurance->goods_compensation > 0)
                                        {{number_format($insurance->goods_compensation_minimum,0,',',' ')}} / {{number_format($insurance->goods_compensation,0,',',' ')}} kr
                                    @elseif($insurance->goods_compensation_minimum > 0)
                                        {{number_format($insurance->goods_compensation_minimum,0,',',' ')}} kr eller högre
                                    @elseif($insurance->goods_compensation > 1)
                                        Upp till {{number_format($insurance->goods_compensation,0,',',' ')}} kr
                                    @elseif($insurance->goods_compensation === 1)
                                        Valfritt belopp
                                    @else
                                        <i class="fa fa-question-circle" title="Vi saknar denna uppgift" style="font-size: 1em; color: #aaa;"></i>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td width="50%" style="text-align: right;"><strong>Allrisk (drulle):</strong></td>
                                <td>
                                    @if($insurance->comprehensive_compensation > 0)
                                    Upp till {{number_format($insurance->comprehensive_compensation,0,',',' ')}} kr
                                    @else 
                                    <i class="fa fa-question-circle" title="Vi saknar denna uppgift" style="font-size: 1em; color: #aaa;"></i>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td width="50%" style="text-align: right;"><strong>Stöld utanför bostaden:</strong></td>
                                <td>
                                    @if($insurance->theft_away_compensation > 0)
                                    Upp till {{number_format($insurance->theft_away_compensation,0,',',' ')}} kr
                                    @else 
                                    <i class="fa fa-question-circle" title="Vi saknar denna uppgift" style="font-size: 1em; color: #aaa;"></i>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td width="50%" style="text-align: right;"><strong>Rättshjälp:</strong></td>
                                <td>
                                    @if($insurance->legal_aid_compensation > 0)
                                    Upp till {{number_format($insurance->legal_aid_compensation,0,',',' ')}} kr
                                    @else 
                                    <i class="fa fa-question-circle" title="Vi saknar denna uppgift" style="font-size: 1em; color: #aaa;"></i>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td width="50%" style="text-align: right;"><strong>Ansvarsförsäkring:</strong></td>
                                <td>
                                    @if($insurance->liability_compensation > 0)
                                    Upp till {{number_format($insurance->liability_compensation,0,',',' ')}} kr
                                    @else 
                                    <i class="fa fa-question-circle" title="Vi saknar denna uppgift" style="font-size: 1em; color: #aaa;"></i>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td width="50%" style="text-align: right;"><strong>Ersättning för cykel:</strong></td>
                                <td>
                                    @if($insurance->bike_compensation > 0)
                                    Upp till {{number_format($insurance->bike_compensation,0,',',' ')}} kr
                                    @else 
                                    <i class="fa fa-question-circle" title="Vi saknar denna uppgift" style="font-size: 1em; color: #aaa;"></i>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td width="50%" style="text-align: right;"><strong>Ersättning vid överfall:</strong></td>
                                <td>
                                    @if($insurance->assault_compensation > 0)
                                    Upp till {{number_format($insurance->assault_compensation,0,',',' ')}} kr
                                    @else 
                                    <i class="fa fa-question-circle" title="Vi saknar denna uppgift" style="font-size: 1em; color: #aaa;"></i>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td width="50%" style="text-align: right;"><strong>Reseskydd:</strong></td>
                                <td>
                                    @if($insurance->travel_days > 0)
                                    {{number_format($insurance->travel_days,0,',',' ')}} dagar
                                    @else 
                                    <i class="fa fa-question-circle" title="Vi saknar denna uppgift" style="font-size: 1em; color: #aaa;"></i>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td width="50%" style="text-align: right;"><strong>Ersättning vid ID-stöld:</strong></td>
                                <td>
                                    @if($insurance->id_theft_compensation > 0)
                                    Upp till {{number_format($insurance->id_theft_compensation,0,',',' ')}} kr
                                    @else 
                                    <i class="fa fa-question-circle" title="Vi saknar denna uppgift" style="font-size: 1em; color: #aaa;"></i>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td width="50%" style="text-align: right;"><strong>Grundsjälvrisk:</strong></td>
                                <td>
                                    @if($insurance->deductible_default > 0)
                                    {{number_format($insurance->deductible_default,0,',',' ')}} kr
                                    @else 
                                    <i class="fa fa-question-circle" title="Vi saknar denna uppgift" style="font-size: 1em; color: #aaa;"></i>
                                    @endif
                                </td>
                            </tr>
                        </table>
                        

                    </div>
                    <div class="panel">

                            <img class="lazy" src="/img/placeholder.png" data-src="/assets/logos/c150x75/{{$insurance->slug}}.comp.jpg" alt="{{$insurance->name}} {{$category['name']}}" width="150" height="75" alt="{{$insurance->name}}" data-srcset="
                            /assets/logos/c150x75/{{$insurance->slug}}.comp.jpg 1x, 
                            /assets/logos/c300x150/{{$insurance->slug}}.comp.jpg 2x,
                            /assets/logos/c450x300/{{$insurance->slug}}.comp.jpg 3x
                        ">

                        

                        
                        <span class="rating">
                            <?php for($i = 1; $i <= 5; $i++) {
                                if($i <= floor($insurance->rating)) {
                                    echo '<i class="fa fa-star text-yellow"></i>';
                                }
                                
                            }
                            if(floor($insurance->rating) < $insurance->rating) {
                                    echo '<i class="fas fa-star-half-alt text-yellow"></i>';
                            }
                            for($i = ceil($insurance->rating) + 1; $i <= 5; $i++) {
                                echo '<i class="far fa-star text-yellow"></i>';
                            }
                            ?>
                        </span>

                        
                    
                        <p>
                            <br>
                            @if(!empty($insurance->tracking_link))
                                <a href="/till/{{$category['slug']}}/{{$insurance->slug}}" target="_blank" rel="nofollow noopener" class="cta bg-success">Teckna försäkring</a>
                            @else 
                                <div style="display: inline-block; background: #fafafa; font-size: 0.8em; font-weight: 700; padding: 10px 15px;">Vi samarbetar inte med {{$insurance->name}}.</div>
                            @endif
                        </p>

                    </div>

                </div>

                <br>

            </div>

            <p style="font-size: 12px; line-height: 1.25; color: #fff; margin: 0 auto; max-width: 70%; min-width: 280px; margin-top: 25px;">
                Informationen om försäkringen hämtas automatiskt från försäkringsbolagets hemsida. Senaste uppdateringen gjordes {{$insurance->updated_at}}. Om villkoren avviker från de villkor som försäkringsbolaget presenterar är det försäkringbolagets villkor som gäller.   
            </p>

        </div>

    </section>

    

    <section class="article">

        <div class="content info-article">

            @if(view()->exists('content.insurances.'.$category['slug'].'.'.$insurance->slug))
                <h2>{{$category['name']}} hos {{$insurance->name}}</h2>
                
                @include('content.insurances.'.$category['slug'].'.'.$insurance->slug)

                <br>
                <br>


            @else
                <center style="padding: 50px 0;">
                    Vi uppdaterar snart med en recension av {{$category['name']}} hos {{$insurance->name}}.
                </center>
            @endif


            <center>
                @if(!empty($insurance->tracking_link))
                    <a href="/till/{{$category['slug']}}/{{$insurance->slug}}" target="_blank" rel="nofollow noopener" class="cta bg-success">Se ditt pris</a>
                @endif
                <br>
                <br>
            </center>

        </div>

    </section>


    @include('modules.comments')

    @include('modules.contact')

    @include('modules.same')

    <script type="application/ld+json">
    {
        "@context": "http://schema.org/",
        "@type": "Review",
        "itemReviewed": {
        "@type": "Thing",
        "name": "{{$insurance->name}}"
        },
        "author": {
        "@type": "Organization",
        "name": "Försäkringarna.se",
        "url": "https://www.försäkringarna.se"
        },
        "reviewRating": {
        "@type": "Rating",
        "ratingValue": "{{$insurance->rating}}",
        "bestRating": "5",
        "worstRating": "1"
        }
    }
    </script>


@endsection