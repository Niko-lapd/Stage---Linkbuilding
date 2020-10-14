@extends('layouts.sidebar2')
@section('content')

<h1> Campagne aanmaken</h1>

<div class="EditCampaignForm">
    Zet een marketingcampagne op voor je merk om influencers en publishers je product of dienst te laten promoten onder hun doelgroep. Bij aanmaken van deze  campagne is die terug te vinden  bij concepten. Hulp nodig? Bekijk dan Deze tutorial.
</div>
<div>
    <h1>Lorem ipsum</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
       Accusantium voluptate numquam vitae dignissimos ut tempore adipisci atque, at voluptatum maxime iste,
       tempora doloremque eveniet laboriosam consequuntur? Accusamus modi quia reiciendis?
       orem ipsum dolor sit amet, consectetur adipisicing elit<span id="dots">...</span><span id="more">
       Accusantium voluptate numquam vitae dignissimos ut tempore adipisci atque, at voluptatum maxime iste,
       tempora doloremque eveniet laboriosam consequuntur? Accusamus modi quia reiciendis?
       orem ipsum dolor sit amet, consectetur adipisicing elit.
       Accusantium voluptate numquam vitae dignissimos ut tempore adipisci atque, at voluptatum maxime iste,
       tempora doloremque eveniet laboriosam consequuntur? Accusamus modi quia reiciendis?
       orem ipsum dolor sit amet, consectetur adipisicing elit.
       Accusantium voluptate numquam vitae dignissimos ut tempore adipisci atque, at voluptatum maxime iste,
       tempora doloremque eveniet laboriosam consequuntur? Accusamus modi quia reiciendis?
       orem ipsum dolor sit amet, consectetur adipisicing elit.
       Accusantium voluptate numquam vitae dignissimos ut tempore adipisci atque, at voluptatum maxime iste,
       tempora doloremque eveniet laboriosam consequuntur? Accusamus modi quia reiciendis?</span>
    </p>
    <button type="button" id="read" onclick="read()">Read more</button>
<script type="text/javascript">
    var i=0;
    function read(){
        if(!i){
            document.getElementById("more").style.
            display="inline";
            document.getElementById("dots").style.
            display="none";
            document.getElementById("read").innerHTML="Read Less";
            i=1;
        } else {
            document.getElementById("more").style.
            display="none";
            document.getElementById("dots").style.
            display="inline";
            document.getElementById("read").innerHTML="Read More";
            i=0;
        }
    }
</script>
</div>
@endsection
<link rel="stylesheet" type="text/css" href="{{ asset('css/Campaign.css')}}">
