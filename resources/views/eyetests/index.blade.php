<x-app-layout>
    <x-main-card :border="true">
        <h2 style="padding-top: 30px; padding-bottom:30px; font-family:'Fredoka', Courier, monospace; font-weight:bold; font-size:50px; text-align:center"> <span class="colored-heading">E</span>ye <span class="colored-heading">H</span>ealth <span class="colored-heading">T</span>ests</h2>
        <div class="d-flex flex-column flex-md-row justify-content-center align-items-center scale-100 p-6 bg-white rounded-lg" style="min-height:75vh">
            <div class="order-md-first">
                <img src="{{ asset('images/eyesighttest.png') }}" alt="Image" class="img-fluid">
            </div>
            <div class="col-6 order-md-last mb-3 mb-md-0 md:py-10" style="margin-left: 20px !important">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <h2 style="padding-top: 30px; padding-bottom:30px; font-family:'Fredoka', Courier, monospace; font-weight:bold; font-size:40px;"> <span class="colored-heading">E</span>ye-<span class="colored-heading">S</span>ight <span class="colored-heading">T</span>est</h2>
                        <p style="padding-top: 10px; padding-bottom:20px; font-family:'Fredoka', Courier, monospace;">Eyesight weakness refers to the condition where an individual experiences difficulties in seeing clearly. It is a common issue that affects millions of people worldwide, varying in severity from mild blurriness to complete blindness. Eyesight weakness can result from various factors, including refractive errors, age-related conditions like presbyopia, eye diseases, and certain systemic health conditions.</p>
                        <x-primary-button onclick="window.location.href='{{ route('eyesighttest') }}'">
                            {{__('Take test')}}
                        </x-primary-button>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column flex-md-row justify-content-center align-items-center scale-100 p-6 bg-white rounded-lg" style="min-height:75vh">
            <div class="order-md-last">
                <img src="{{ asset('images/colorblindnesstest.png') }}" alt="Image" class="img-fluid">
            </div>
            <div class="col-6 order-md-first mb-3 mb-md-0 md:py-10" style="margin-left: 20px !important">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <h2 style="padding-top: 30px; padding-bottom:30px; font-family:'Fredoka', Courier, monospace; font-weight:bold; font-size:40px;"> <span class="colored-heading">C</span>olor-<span class="colored-heading">B</span>lindness <span class="colored-heading">T</span>est</h2>
                        <p style="padding-top: 10px; padding-bottom:20px; font-family:'Fredoka', Courier, monospace;">Colorblindness, also known as color vision deficiency, is a condition characterized by the inability to perceive colors in the same way as most people. While individuals with normal color vision can distinguish and identify a wide range of colors, those with colorblindness have difficulty distinguishing certain colors or may perceive them differently. This condition is typically caused by an inherited genetic mutation. </p>
                        <x-primary-button onclick="window.location.href='{{ route('colorblindnesstest') }}'">
                            {{__('Take test')}}
                        </x-primary-button>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column flex-md-row justify-content-center align-items-center scale-100 p-6 bg-white rounded-lg" style="min-height:75vh">
            <div class="order-md-first">
                <img src="{{ asset('images/farnsworthtest.jpg') }}" alt="Image" class="img-fluid">
            </div>
            <div class="col-6 order-md-last mb-3 mb-md-0 md:py-10" style="margin-left: 20px !important">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <h2 style="padding-top: 30px; padding-bottom:30px; font-family:'Fredoka', Courier, monospace; font-weight:bold; font-size:40px;"> <span class="colored-heading">F</span>arns<span class="colored-heading">W</span>orth <span class="colored-heading">T</span>est</h2>
                        <p style="padding-top: 10px; padding-bottom:20px; font-family:'Fredoka', Courier, monospace;">Eyesight weakness refers to the condition where an individual experiences difficulties in seeing clearly. It is a common issue that affects millions of people worldwide, varying in severity from mild blurriness to complete blindness. Eyesight weakness can result from various factors, including refractive errors, age-related conditions like presbyopia, eye diseases, and certain systemic health conditions.</p>
                        <x-primary-button onclick="window.location.href='{{ route('farnsworthtest') }}'">
                            {{__('Take test')}}
                        </x-primary-button>
                    </div>
                </div>
            </div>
        </div>
    </x-main-card>
</x-app-layout>
