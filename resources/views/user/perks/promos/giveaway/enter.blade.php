<div id="enter-screen" style="font-family: 'Work Sans', sans-serif;">
    <div class="text-dark my-4 text-start mx-auto text-box95 p-4">
        <p class="fw-bold text-center">Terms and Conditions</p>
        <p>Craterview Casino &amp; Resort offers monthly prize draws for various products and services. This perk may be paused or withdrawn at any time without notice.</p>
        <p>Participation is optional. By participating, you understand and agree that&colon;</p>
        <ul>
            <li>A valid room booking is required for entry.</li>
            <li>One entry per guest.</li>
            <li>One winner will be selected at random.</li>
            <li>The prize is non-transferable and no cash alternative shall be offered.</li>
            <li>If you win&comma; the prize <strong>must</strong> be accepted.</li>
        </ul>
        <div class="d-flex justify-content-center">
            <button id="enter-btn" class="btn xp-btn-primary">I AGREE</button>
        </div>
        <div class="d-flex justify-content-center mt-2">
            <button class="btn xp-btn-secondary" onclick="history.back()">GO BACK</button>
        </div>
    </div>
</div>

<audio id="bgMusic" loop>
    <source src="{{ asset('audio/Spacesynth.mp3') }}" type="audio/mpeg">
</audio>

<style>
.giveaway-wrapper{
    position: relative;
}

#enter-screen{
    position: absolute;
    inset: 0;
    background: white;
    z-index: 999;
}

</style>

<script>
document.addEventListener('DOMContentLoaded', () => {

    const btn = document.getElementById('enter-btn');
    const screen = document.getElementById('enter-screen');
    const music = document.getElementById('bgMusic');

    btn.addEventListener('click', () => {

        // hide overlay
        screen.style.display = 'none';

        // start music
        music.volume = 0.3;

        music.play().catch(err => {
            console.log('Audio blocked:', err);
        });

    });

});
</script>

