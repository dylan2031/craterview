@extends('layouts.dash-window-news')

@section('content')
    @include('user.perks.news.nav')
    <h2 class="newspaper-headline">JONESCORP ISSUES XEROXTRON RECALLS</h2>
    <p><small>Written by Bruce Pinball</small></p>
    <div class="row">
        <div class="col-12 col-lg-6 text-center">
            <img 
                src="{{ asset('images/news/xeroxtron.webp') }}" 
                class="img-fluid w-75 rounded border border-dark shadow-sm newspaper-image"
                alt="Image of Xeroxtron"
            >
            <p class="mt-2 mb-4 small text-muted fst-italic">
                Xeroxtron, the revolutionary photocopier.
            </p>
        </div>
        <div class="col-12 col-lg-6">
            <p>Earlier last month, tech giant JonesCorp rolled out the long-anticipated Xeroxtron. Xeroxtron promised to revolutionise the office photocopier, embodying it 
                into a robot that makes use of natural language processing using bidirectional encoding representations from transformers to process verbal instructions 
                and translate them into hardware executions, capable of automatically manually processing paper, aligning it, and scanning it up to 60% faster than a human 
                being with reduced margin of error.
            </p>
            <p>The release was met with overwhelming success, with over two thousand units sold.</p>
            <p>As a safety feature, the robot was equipped with a built-in fire extinguisher, capable of deploying extinguishing agent to its internal systems and the surrounding environment.</p>
            <p>However, due to a miscommunication between suppliers, every unit was accidentally equipped with an AZ-901 "Dragon's Breath" Flamethrower.</p>
        </div>
    </div>
    <p>The fault was discovered when an IT intern working at a Mars Security Force administration &amp; coordination office was unfortunately involved in a catastrophic thermal event. The 
        intern has been identified as 24-year-old Dennis Plimpton. The Mars Security Force have issued the following statement:
    </p>
    <blockquote class="news-quote">
        <p>This is, without doubt, a tragedy. But thanks to the wonders of science, we are rebuilding him! Thanks to the quick-thinking of office management, 
            the intact brain was cryogenically preserved and sent to our Tereshkova office while a replacement body was constructed. Today, I'm proud to announce 
            that Dennis Plimpton is reborn, new and improved, now known as CAIN.
        </p>
    </blockquote>
    <p>CAIN is an experimental supersoldier built by the Mars Security Force, now essential to homeland security. The brain has been successfully 
        attached to a titanium alloy humanoid chassis equipped with retractable high-frequency blades, purpose-built wrist-mounted laser blasters, and a 
        shoulder-mounted 2-in-1 minigun and anti-air missile launcher. Additionally, the brain itself has been cybernetically augmented, allowing him to 
        hyper-process situation-specific combat tactical data in real-time.
    </p>
    <p>We reached out to CAIN, who is still adapting to his new body in a medical facility.</p>
    <blockquote class="news-quote">
        <p>&quot;I'm still trying to figure out if I've gone to hell or come back. They told me I'm lucky, but this sure doesn't feel like it. I will never 
            feel the wind again against this titanium skin.
        </p>
        <p>They keep calling me CAIN. My name is Dennis. I never wanted this. I never asked for this.&quot;</p>
    </blockquote>
    <p>The Z-901 "Dragon's Breath" Flamethrower is banned on an advisory basis by Earth's Geneva Guidelines, which are formally recognised on most Sol colonies but not legally 
        binding on Mars. As such, legal recourse is unavailable. However, as a gesture of goodwill, JonesCorp is offering financial settlements to some customers 
        on a case-by-case basis and will reach out to those customer's directly.
    </p>
@endsection