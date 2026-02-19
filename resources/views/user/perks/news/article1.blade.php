@extends('layouts.dash-window-news')

@section('content')
    @include('user.perks.news.nav')
    <h2 class="newspaper-headline">BREAKING NEWS: NEW GOLIATHON EVIDENCE FOUND</h2>
    <p><small>Written by Megamus Prime</small></p>
    <p>The urban legend of Goliathon, the giant man-eating pigeon, is almost as old as Mars itself. Despite being often dismissed as nothing but a myth, 
        Goliathon's origin and existence are perhaps far closer to reality than most Martian residents dare to entertain.
    </p>
    <p>We all know that the harmless residual radiation from the 2077 United Nations Space Commission Nuclear Power Plant accident had a hand in causing 
        the pigeon population of Mars to evolve into the birds we know today: identical to those on Earth to the untrained eye, only stronger and smarter. The 
        legend states that one specific pigeon was subject to higher levels of radiation. It mutated, and Goliathon was born.
    </p>
    <p>Goliathon's existence has been the subject of debate for hundreds of years, and, after a recent discovery, this debate may soon be over, concluding something 
        far more foreboding than we ever imagined. Newly found evidence may turn the existence of Goliathon from a questionable campfire story to an undeniable, 
        well-documented fact. A footprint that resembled that of a pigeon was found 8km west of Armstrong Winery by a groundskeeper who took a wrong turn during a 
        dust storm. This, however, was no ordinary pigeon footprint. Measuring nearly seven metres in length, it was much, much larger than anything previously 
        recorded.
    </p>
    <div class="row">
        <div class="col-12 col-lg-6 text-center">
            <img 
                src="{{ asset('images/news/footprint.webp') }}" 
                class="img-fluid w-75 rounded border border-dark shadow-sm newspaper-image"
                alt="Picture of a giant pigeon footprint"
            >
            <p class="mt-2 mb-4 small text-muted fst-italic">
                The unusually large pigeon footprint discovered west of Armstrong Winery.
            </p>
        </div>
        <div class="col-12 col-lg-6">
        <p>We reached out to the groundskeeper &lpar;who wishes to remain anonymous&rpar; for comment, who stated:</p>
        <blockquote class="news-quote">
            <p>&quot;Aye, no word of a lie, there I was, I stumbled across the footprint when it was still fresh. I couldn't see no bird through the dust storm, nay, 
                but I did hear him squarking. By the Gods, I've never heard anything like it. Like a war siren, it was. Deafening. My ears were bleeding, they were, 
                I swear it. I nay fear God nor man, nor woman for that matter, though the missus'll tell ye otherwise, but then and there, I feared for my 
                life, I did. I ran, and didn't look back.&quot;</p>
        </blockquote>
            <p>The footprint was examined by a team of ornithologists, who confirmed that the footprint is indeed pigeon in nature. Forensic DNA analysis of the scene backed this up.</p>
            <p>Other footprints were found at the scene, though they had largely shifted during the dust storm, and any trail had gone cold. The current whereabouts of this pigeon are unknown.</p>
        </div>
    </div>
    <p>&quot;This is more undeniable proof of Goliathon's existence.&quot; says Russ Hobbs, 48, of Pioneer Village. Russ has dedicated his life to finding Goliathon 
        after the man-eating bird ate his father when Russ was only six years old.</p>
    <p>Lee Hobbs, father to Russ Hobbs, left home one morning to purchase a pack of cigarettes and never returned, seemingly devoured by the bird.</p>
    <blockquote class="news-quote">
        <p>&quot;I've been searching for Goliathon my entire adult life, and I've never found anything as big as this. We need to work together to ensure 
            that what happened to my Dad doesn't happen to anyone else. This is a huge step forwards. I just hope that it is taken seriously this time.&quot;</p>
    </blockquote>        
    <p>As the closest thing to an expert on Goliathon, Mr Hobbs is working closely with the Mars Security Force as an advisor. In a statement earlier today, 
        the Commissioner stated that a task force is being assembled, but there are no further updates on this at this time.
    </p>
    <p>Unfortunately, Lee Hobbs is not Goliathon's only victim.</p>
    <p>On 1st March 2997, photographer Robert Walker arrived on Mars from Earth to capture a grand meteor shower that promised to light up the Mars sky. Mr Walker 
        rented a remote, isolated cottage in the New Yorkshire region as it was a short walk from an excellent vantage point for his photography. He had informed his 
        friends and family that he would likely drop out of contact for the duration of his trip as there was no dial-up connection to Earth at the cottage, but he 
        would be back in a week.
    </p>
    <p>But a week later, nobody had heard from him. </p>
    <p>His family on Earth contacted the Mars Security Force. When they arrived at the cottage, Mr Walker was nowhere to be 
        found. The scene was odd: the door to the cottage was open but there was no sign of a struggle. His suitcase hadn't even been unpacked yet, and a cup of tea 
        he had seemingly made had gone cold. His camera was found outside the cottage intact, but he had not captured the meteor shower. The camera contained several 
        blurred images that were impossible to discern, but some images revealed an unidentifiable creature, far larger than any known bird.
    </p>
    <div class="row">
        <div class="col-12 col-lg-6 text-center">
            <img 
                src="{{ asset('images/news/goliathon.webp') }}" 
                class="img-fluid w-75 rounded border border-dark shadow-sm newspaper-image"
                alt="Picture of Goliathon the pigeon"
            >
            <p class="mt-2 mb-4 small text-muted fst-italic">
                Original photograph.
            </p>
        </div>

        <div class="col-12 col-lg-6 text-center">
            <img 
                src="{{ asset('images/news/goliathon-nv.webp') }}" 
                class="img-fluid w-75 rounded border border-dark shadow-sm newspaper-image"
                alt="Picture of Goliathon the pigeon, digitally enhanced"
            >
            <p class="mt-2 mb-4 small text-muted fst-italic">
                The same photograph after night vision enhancement.
            </p>
        </div>
    </div>
    <p>Mr Walker was reported missing, but it would be a whole year before anything was found. Exactly one year later, a group of hikers stumbled 
        across what appeared to be human bones. DNA analysis confirmed that the bones were the remains of Mr Walker, but the cause of death was deemed 
        inconclusive. The forensic investigators noted that, bizarrely, his bones were coated in traces of dried pigeon saliva.
    </p>
    <p>Ben Smith, 32, of Hilltop South, claims to have encountered Goliathon first-hand and survived.</p>
    <div class="row">
        <div class="col-12 col-lg-6 text-center">
            <img 
                src="{{ asset('images/news/artist-render.webp') }}" 
                class="img-fluid w-75 rounded border border-dark shadow-sm newspaper-image"
                alt="Artist's render of Goliathon the pigeon"
            >
            <p class="mt-2 mb-4 small text-muted fst-italic">
                Composite sketch of Goliathon based on Ben Smith's encounter.
            </p>
        </div>
        <div class="col-12 col-lg-6">
            <blockquote class="news-quote">
                <p>&quot;Right, so where do I even start? It was New Year's Eve, 2997 going into '98. Me and a few mates went up to the hills to set off some fireworks and 
                    have a few drinks and that. I'm gonna be honest, I probably had a bit too much, not like blackout or whatever, but you know. Anyway, something went 
                    wrong with one of the fireworks, and it went like, up, but off to the side if you know what I mean, and I think it hit the bird, or scared it, I'm not sure. 
                    It was hard to see. We saw something, but it was dark, we couldn't make it out, but something was there. It let out this... screech, it's hard to describe. 
                    It was like high-pitched and deep at the same time, loud, like loud enough to get in your head. It hurt my ears. All my mates legged it when we heard 
                    it, but I was frozen, I don't know, I was drunk and scared, I didn't know what to do. Then it moved. And believe me, that f**ker was fast.</p>
                <p>It landed right in front of me, and I fell back. I'm not going to lie, I was terrified. I just lay there frozen, I could feel my heart going, but 
                    I was too scared to move. I couldn't do it, I couldn't move, I was like numb. That's not the right word but that's the only way I can describe it. I was 
                    panicking, looking at it, and it looked back me. I swear down, it looked me right in the eyes, and for I don't know how long, we were just there, staring 
                    at each other. Looking back, I don't know if I'm remembering right because of the shock, and this might sound absolutely nuts, but when it was staring at 
                    me, I swear it was intelligent. Like it looked at me and knew what I was, it knew I was inferior. Like, I don't know. It wasn't an animal, it wasn't a 
                    normal pigeon, this was something else. Something more.</p>
                <p>Then it just left. Flew off. And that's it really.&quot;</p>
            </blockquote>
        </div>
    </div>
    <p>We reached out to renowned scientist Doctor Mobium for scientific input, and even he acknowledged that Goliathon has some credibility. Doctor Mobium 
        previously dismissed Goliathon as an "unimaginative bedtime story that has no place in serious scientific discussion", but has since changed his stance.
    </p>        
    <blockquote class="news-quote">
        <p>&quot;The evidence speaks for itself. It is not a question of <i>if</i> Goliathon exists&semi; it is highly probable that it does. We 
        should be more concerned with the implications of this, and the nature of the beast. But at the moment, there simply is not enough data.
    </p>
    <p>While all of this may be troubling, it is worth remembering that Goliathon is the exception, not the rule. The pigeon population of Mars does not 
        pose a threat to anyone.&quot;
    </p>
    </blockquote>
    <div class="row">
        <div class="col-12 col-lg-6">
            <p>
                It is still unknown how pigeons came to be on Mars, though it is speculated that it started as a very small number of accidental stowaways. 
                Mars's tourism infrastructure created ideal conditions for pigeons. The absence of natural predators and the introduction of climate control removed 
                environmental and seasonal survival pressures, leading to a population boom in the late 2970s. Additionally, outdoor dining areas, non-pigeon proof food waste disposal 
                systems, and an endless supply of tourists dropping crumbs provided the pigeons with a consistent and abundant food supply.
            </p>
            <p>Due to Martian pigeons having increased strength and intelligence, any attempts at pest control have been unsuccessful, and efforts have shifted 
                to management. Guests and residents are reminded that, while technically the same species, these are not the same familiar birds we know from Earth. 
                While nobody has ever been harmed by a Martian pigeon, they are notably territorial in areas of high crumb traffic, so guests are advised to proceed with  
                caution.
            </p>
        </div>
        <div class="col-12 col-lg-6 text-center">
            <img 
                src="{{ asset('images/news/piegon.webp') }}" 
                class="img-fluid w-75 rounded border border-dark shadow-sm newspaper-image"
                alt="Photograph of a pigeon"
            >
            <p class="mt-2 mb-4 small text-muted fst-italic">
                Typical Martian pigeon.
            </p>
        </div>
    </div>
    <p>While skeptics continue to dismiss Goliathon as an urban legend, the growing body of physical evidence tells a much more real and troubling story. 
        We already had DNA traces, unexplained disappearances, and multiple eyewitness accounts. When combined with the recent footprint evidence, there 
        is only one logical conclusion: something is out there.</p>
        <p>Until further notice, the Mars Security Force has issued the following guidance:</p>
        <ul>
            <li>Do not travel alone under any circumstances.</li>
            <li>Avoid remote/isolated regions.</li>
            <li>Remain indoors at night.</li>
        </ul>
    <p>Anyone with information on Goliathon is encouraged to contact the Mars Security Force.</p>
@endsection