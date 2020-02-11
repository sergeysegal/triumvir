<?php
    $titles = ['Our Mission', 'Our Culture', 'Employee Benefits'];
    $descriptions = ["We aim to provide a crop disease treatment solution to the agricultural industry to enhance crop yields while simultaneously decreasing toxic environmental runoff.",
                    '',
                    ''
                    ];

//$mydata = 'hello';
?>

@extends('layouts.default')

@section('pageTitle', 'Welcome')

@section('content')
{{--    <career-page-selector :test='@json($mydata)' test2="lala"></career-page-selector>--}}
    <div class="sergey-jobs-index-page">
        <div class="heading">
            <h1>Start on your journey with Triumvir Technologies...</h1>
        </div>
        <tab-value-selector :titles='@json($titles)' :descriptions='@json($descriptions)'></tab-value-selector>
        <div class="culture culture-hidden">
            <div class="description">
                <article>
                    <h4>Mission-driven</h4>
                    <p>We care deeply about building products that benefit humanity.</p>
                    <h4>Growth mindset</h4>
                    <p>We care deeply about building products that benefit humanity.</p>
                </article>
                <article>
                    <h4>Collaborative</h4>
                    <p>We believe in team synergy</p>
                    <h4>Iterative</h4>
                    <p>We care deeply about building products that benefit humanity.</p>
                </article>
            </div>
        </div>
        <div class="benefits benefits-hidden">
            <div class="items">
                <ul>
                    <li>- Generous paid time off</li>
                    <li>- Flexible work hours</li>
                    <li>- Free healthy food</li>
                    <li>- Subsidized gym membership</li>
                    <li>- Work from home days</li>
                    <li>- Equity</li>
                </ul>
            </div>
        </div>
        <section class="job-openings">

        </section>
    </div>
@endsection

@section('scripts')
    <script>
        function updateDescription() {
            let description = document.getElementsByClassName('description')[0];
            let titleText = document.getElementsByClassName('title')[0].innerHTML;
            let cultureHtml = document.getElementsByClassName('culture')[0];
            let benefitsHtml = document.getElementsByClassName('benefits')[0];
            console.log(titleText);
            if(titleText.trim() == 'Our Mission'){
                description.classList.add('mission');
                benefitsHtml.classList.add('benefits-hidden');
                cultureHtml.classList.add('culture-hidden')
            }
            if(titleText.trim() == 'Employee Benefits'){
                benefitsHtml.classList.remove('benefits-hidden');
                description.classList.remove('mission');
                cultureHtml.classList.add('culture-hidden')
            }
            if(titleText.trim() == 'Our Culture'){
                cultureHtml.classList.remove('culture-hidden');
                description.classList.remove('mission');
                benefitsHtml.classList.add('benefits-hidden');
            }
        }

        $("#tab-value-selector").click(updateDescription);

        $(document).ready(function() {
            updateDescription();
        });

    </script>
@endsection
