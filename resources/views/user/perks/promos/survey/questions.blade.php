@extends('layouts.dash-window')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-secondary">
                <div class="card-body p-4">

                    <h1 class="mb-3">Pavilion Mall Footwear Survey</h1>

                    <p class="text-secondary">
                        Complete this short survey for a chance to receive exclusive vouchers and promotional offers. 
                        Your responses may be reviewed manually to improve the customer experience and for marketing purposes.
                    </p>


                    <form id="surveyForm" action="/dashboard/promos/ad">

                        {{-- STEP 1 --}}
                        <div class="survey-step">
                            <label class="form-label fw-bold">
                                1) How often do you purchase new footwear?
                            </label>

                            @foreach ([
                                'Once a month',
                                'Once every few months',
                                'Once a year',
                                'Rarely'
                            ] as $option)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q1">
                                    <label class="form-check-label">{{ $option }}</label>
                                </div>
                            @endforeach
                        </div>

                        {{-- STEP 2 --}}
                        <div class="survey-step">
                            <label class="form-label fw-bold">
                                2) What is the most important consideration for you when choosing footwear?
                            </label>

                            @foreach ([
                                'Price',
                                'Comfort',
                                'Durability',
                                'Style',
                                'Brand',
                                'Other'
                            ] as $option)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q2">
                                    <label class="form-check-label">{{ $option }}</label>
                                </div>
                            @endforeach
                        </div>

                        {{-- STEP 3 --}}
                        <div class="survey-step">
                            <label class="form-label fw-bold">
                                3) How much are you willing to spend on footwear?
                            </label>

                            @foreach ([
                                'Ω0 to Ω100',
                                'Ω100 to Ω500',
                                'Ω500 to Ω1000',
                                'Ω1000+'
                            ] as $option)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q3">
                                    <label class="form-check-label">{{ $option }}</label>
                                </div>
                            @endforeach
                        </div>

                        {{-- STEP 4 --}}
                        <div class="survey-step">
                            <label class="form-label fw-bold d-block">
                                4) Have you seen this man?
                            </label>

                            <img src="/images/promos/wanted-man.webp"
                                 class="img-fluid rounded border border-secondary mb-3"
                                 style="max-width: 250px;">

                            @foreach (['Yes','No','Unsure'] as $option)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q4">
                                    <label class="form-check-label">{{ $option }}</label>
                                </div>
                            @endforeach
                        </div>

                        {{-- STEP 5 --}}
                        <div class="survey-step">
                            <label class="form-label fw-bold">
                                5) What type of footwear do you wear most often?
                            </label>

                            @foreach ([
                                'Casual shoes',
                                'Formal shoes',
                                'Heels',
                                'Trainers',
                                'Boots',
                                'Other'
                            ] as $option)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q5">
                                    <label class="form-check-label">{{ $option }}</label>
                                </div>
                            @endforeach
                        </div>

                        {{-- STEP 6 --}}
                        <div class="survey-step">
                            <label class="form-label fw-bold">
                                6) What is your unisex galactic standard shoe size?
                            </label>

                            @foreach ([
                                '4 or smaller',
                                '5',
                                '6',
                                '7',
                                '8',
                                '9',
                                '10',
                                '11',
                                '12 or greater',
                                "I don't know"
                            ] as $option)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q6">
                                    <label class="form-check-label">{{ $option }}</label>
                                </div>
                            @endforeach
                        </div>

                        {{-- STEP 7 --}}
                        <div class="survey-step">
                            <label class="form-label fw-bold">
                                7) Do you wear socks?
                            </label>

                            @foreach ([
                                'Yes',
                                'No',
                                'Sometimes',
                                "I don't know",
                                'Other'
                            ] as $option)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q7">
                                    <label class="form-check-label">{{ $option }}</label>
                                </div>
                            @endforeach
                        </div>

                        {{-- STEP 8 --}}
                        <div class="survey-step">
                            <label class="form-label fw-bold">
                                8) What is your gender?
                            </label>

                            @foreach (['Male','Female','Other'] as $option)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q8">
                                    <label class="form-check-label">{{ $option }}</label>
                                </div>
                            @endforeach
                        </div>

                        {{-- STEP 9 --}}
                        <div class="survey-step">
                            <label class="form-label fw-bold">
                                9) What is your age?
                            </label>

                            @foreach ([
                                'Younger than 18',
                                '18 to 24',
                                '25 to 30',
                                '31-40',
                                '40-50',
                                '50+'
                            ] as $option)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q9">
                                    <label class="form-check-label">{{ $option }}</label>
                                </div>
                            @endforeach
                        </div>

                        {{-- STEP 10 --}}
                        <div class="survey-step">
                            <label class="form-label fw-bold">
                                10) What is your relationship status?
                            </label>

                            @foreach ([
                                'Single',
                                'In a relationship',
                                'Married',
                                'Divorced',
                                "It's complicated",
                                'Other'
                            ] as $option)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q10">
                                    <label class="form-check-label">{{ $option }}</label>
                                </div>
                            @endforeach
                        </div>

                        {{-- STEP 11 --}}
                        <div class="survey-step">
                            <label class="form-label fw-bold">
                                11) What is your annual household income in Galactic Standard Credits?
                            </label>

                            <input type="number" class="form-control border-secondary" name="q11">
                        </div>

                        {{-- STEP 12 --}}
                        <div class="survey-step">
                            <label class="form-label fw-bold">
                                12) What is your planet of residence?
                            </label>

                            @foreach ([
                                'Earth',
                                'Venus',
                                'Mars',
                                'Moon colony or space station',
                                'Outer colonies'
                            ] as $option)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q12">
                                    <label class="form-check-label">{{ $option }}</label>
                                </div>
                            @endforeach
                        </div>

                        {{-- STEP 13 --}}
                        <div class="survey-step">
                            <label class="form-label fw-bold">
                                13) Do you have any cybernetic augmentations?
                            </label>

                            @foreach (['Yes','No'] as $option)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q13">
                                    <label class="form-check-label">{{ $option }}</label>
                                </div>
                            @endforeach
                        </div>

                        {{-- STEP 14 --}}
                        <div class="survey-step">
                            <label class="form-label fw-bold">
                                14) Do you have a criminal record on Earth or any major colony?
                            </label>

                            @foreach (['Yes','No','I prefer not to say'] as $option)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q14">
                                    <label class="form-check-label">{{ $option }}</label>
                                </div>
                            @endforeach
                        </div>

                        {{-- STEP 15 --}}
                        <div class="survey-step">
                            <label class="form-label fw-bold">
                                15) Would you like to receive information about future offers, promotions, and updates by email?
                            </label>

                            @foreach (['Yes','No'] as $option)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q15">
                                    <label class="form-check-label">{{ $option }}</label>
                                </div>
                            @endforeach
                        </div>

                        {{-- STEP 16 --}}
                        <div class="survey-step">
                            <label class="form-label fw-bold">
                                16) Do you consent to sharing your interplanetary geo location data with Pavilion Mall and 136 partners for marketing purposes?
                            </label>

                            @foreach (['Yes','Share only essential data'] as $option)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q16">
                                    <label class="form-check-label">{{ $option }}</label>
                                </div>
                            @endforeach
                        </div>

                        {{-- STEP 17 --}}
                        <div class="survey-step">
                            <label class="form-label fw-bold d-block">
                                17) What do you see?
                            </label>

                            <img src="/images/promos/inkblot1.webp"
                                 class="img-fluid rounded border border-secondary mb-3"
                                 style="max-width: 250px;">

                            @foreach (['An eagle','A crown','A debt collector', 'A shopping bag filled with excellent value purchases'] as $option)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q17">
                                    <label class="form-check-label">{{ $option }}</label>
                                </div>
                            @endforeach
                        </div>

                        {{-- STEP 18 --}}
                        <div class="survey-step">
                            <label class="form-label fw-bold d-block">
                                18) What do you see?
                            </label>

                            <img src="/images/promos/inkblot2.webp"
                                 class="img-fluid rounded border border-secondary mb-3"
                                 style="max-width: 250px;">

                            @foreach (['A butterfly','Tormented souls','My poor credit history','The bargain angel blessing me with a great deal'] as $option)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q18">
                                    <label class="form-check-label">{{ $option }}</label>
                                </div>
                            @endforeach
                        </div>

                        {{-- STEP 19 --}}
                        <div class="survey-step">
                            <label class="form-label fw-bold d-block">
                                19) What do you see?
                            </label>

                            <img src="/images/promos/inkblot3.webp"
                                 class="img-fluid rounded border border-secondary mb-3"
                                 style="max-width: 250px;">

                            @foreach (['A mushroom cloud','A ship lost at sea','My burning desire to shoplift','A 50% off barcode sticker on an item of clothing from my favourite brand'] as $option)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q19">
                                    <label class="form-check-label">{{ $option }}</label>
                                </div>
                            @endforeach
                        </div>

                        {{-- STEP 20 --}}
                        <div class="survey-step">
                            <label class="form-label fw-bold">
                                20) Are you currently affiliated with any extremist or terrorist organisations?
                            </label>

                            @foreach (['Yes','No',"I don't know",'I prefer not to say'] as $option)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q20">
                                    <label class="form-check-label">{{ $option }}</label>
                                </div>
                            @endforeach
                        </div>

                        {{-- STEP 21 --}}
                        <div class="survey-step">
                            <label class="form-label fw-bold">
                                21) Would you consider purchasing footwear as a gift?
                            </label>

                            @foreach (['Yes','No'] as $option)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q21">
                                    <label class="form-check-label">{{ $option }}</label>
                                </div>
                            @endforeach
                        </div>

                        {{-- STEP 22 --}}
                        <div class="survey-step">
                            <label class="form-label fw-bold">
                                22) Who are you most likely to purchase footwear as a gift for?
                            </label>

                            <p>[There was an error connecting to your contacts list]</p>
                        </div>

                        {{-- STEP 23 --}}
                        <div class="survey-step">
                            <label class="form-label fw-bold">
                                23) Did you know that participating stores at Pavilion Mall offer free gift wrapping on all purchases?
                            </label>

                            @foreach (['Yes','No'] as $option)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q23">
                                    <label class="form-check-label">{{ $option }}</label>
                                </div>
                            @endforeach
                        </div>

                        {{-- NAV --}}
                        <div class="d-flex mt-4">
                            <button type="button" class="btn xp-btn-secondary me-auto" id="prevBtn">Back</button>
                            <button type="button" class="btn xp-btn-secondary ms-auto" id="nextBtn">Next</button>
                        </div>

                        {{-- SUBMIT (CREATED ONLY ON FINAL STEP) --}}
                        <div class="d-grid mt-4" id="submitWrapper"></div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<style>
.survey-step { display: none; }
</style>

<script>
let currentStep = 0;
const steps = document.querySelectorAll(".survey-step");

const nextBtn = document.getElementById("nextBtn");
const prevBtn = document.getElementById("prevBtn");
const submitWrapper = document.getElementById("submitWrapper");

function showStep(i) {
    steps.forEach((step, idx) => {
        step.style.display = (idx === i) ? "block" : "none";
    });

    prevBtn.style.display = i === 0 ? "none" : "inline-block";
    nextBtn.style.display = i === steps.length - 1 ? "none" : "inline-block";

    // ONLY CREATE SUBMIT BUTTON AT FINAL STEP
    if (i === steps.length - 1) {
        submitWrapper.innerHTML = `
            <button type="submit" class="btn xp-btn-primary btn-lg">
                Submit Survey
            </button>
        `;
    } else {
        submitWrapper.innerHTML = "";
    }
}

nextBtn.addEventListener("click", () => {
    if (currentStep < steps.length - 1) currentStep++;
    showStep(currentStep);
});

prevBtn.addEventListener("click", () => {
    if (currentStep > 0) currentStep--;
    showStep(currentStep);
});

showStep(currentStep);
</script>

@endsection