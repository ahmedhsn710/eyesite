<x-app-layout>
    <x-main-card :border="true" id="main-card">
        <style>
            .box {
                width: 50px;
                height: 50px;
                margin: 5px;
                display: inline-block;
                cursor: move;
            }
    
            .sortable-container {
                padding: 10px;
                display: flex;
                justify-content: space-around;
            }
        </style>
        <div class="flex justify-center">
            <h2 style="padding-top: 30px; padding-bottom:40px; font-family:'Fredoka', Courier, monospace; font-weight:bold; font-size:40px;"> <span class="colored-heading">F</span>arns<span class="colored-heading">W</span>orth <span class="colored-heading">T</span>est</h2>
        </div>
        @php
            function generateRandomArray() {
                $numbers = range(1, 10); // Create an array with numbers from 1 to 10
                $randomArray = [];

                while (count($numbers) > 0) {
                    $randomIndex = array_rand($numbers); // Get a random index from the remaining numbers
                    $randomNumber = $numbers[$randomIndex]; // Get the number at the random index
                    $randomArray[] = $randomNumber; // Add the number to the random array
                    unset($numbers[$randomIndex]); // Remove the number from the remaining numbers
                    $numbers = array_values($numbers); // Re-index the remaining numbers
                }

                return $randomArray;
            }
        @endphp

        @for ($k = 0; $k < 3; $k++)
        @php
        $colors = ['purple', 'red', 'blue'];
        $shadeVariation = 10;

        $randomArray = generateRandomArray();
        $contId = 'sortable-container' . $k;

        @endphp
        <div id="{{$contId}}" class="sortable-container">
            @foreach ($randomArray as $i)
                @php
                    $boxId = "box-{$k}-{$i}";
                    $j =  ($i + 5)/4;
                    $shade = $j * $shadeVariation;
                    $hls = 20 + 100*$k;
                    $backgroundColor = "hsl({$hls}, 100%, {$shade}%)";
                @endphp
                <div id="{{ $boxId }}" class="box" draggable="true" ondragstart="dragStart(event)" data-color="{{ $colors[0] }}" ans = "{{ $i }}" style="background-color: {{ $backgroundColor }};">
                </div>
            @endforeach
        </div>
        @endfor
        <div class="row py-4">
            <div class="col">
                <div id="results" class="mx-5" style="display: none;">
                    <p id="resultsText" class="text-lg lh-sm"></p>
                    <form method="post" action="/reports" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="test_type" id="results_test_type" value="">
                        <input type="hidden" name="result" id="results_result" value="">
                        <input type="hidden" name="score" id="results_score" value="">
                        <x-primary-button class="my-2">Save</x-primary-button>
                    </form>
                </div>
            </div>
            <div class="col">
                <x-primary-button class="float-end mx-5" onclick="displayResult()">Finish</x-primary-button>
            </div>
        </div>
        <script defer>
            let draggable;
            let dropareas = document.querySelectorAll('.sortable-container');
            function dragStart(event) {
                draggable = event.target;
                event.dataTransfer.setData("text/plain", "");
            }

            function getDragAfterElement(container, y) {
                const draggableElements = [...container.querySelectorAll('.box:not(.dragging)')];

                return draggableElements.reduce((closest, child) => {
                    const box = child.getBoundingClientRect();
                    const offset = y - box.left - box.width / 2;
                    if (offset < 0 && offset > closest.offset) {
                        return { offset: offset, element: child };
                    } else {
                        return closest;
                    }
                }, { offset: Number.NEGATIVE_INFINITY }).element;
            }

            dropareas.forEach(droparea => {
                droparea.addEventListener('dragover', e => {
                e.preventDefault();
                const draggableBox = document.querySelector('.dragging');
                if (!draggableBox.nextElementSibling) {
                    droparea.appendChild(draggableBox);
                }
            });

            droparea.addEventListener('dragstart', e => {
                e.target.classList.add('dragging');
            });

            droparea.addEventListener('dragend', e => {
                e.target.classList.remove('dragging');
            });

            droparea.addEventListener('drop', e => {
                e.preventDefault();
                const afterElement = getDragAfterElement(droparea, e.clientX);
                const draggableBox = document.querySelector('.dragging');
                if (afterElement == null) {
                    droparea.appendChild(draggableBox);
                } else {
                    droparea.insertBefore(draggableBox, afterElement);
                }
            });
            });

             
            function displayResult() {
                let red, green, blue;
                for (let i = 0; i < 3; i++) {
                    let h = "sortable-container" + i;
                    let cont = document.getElementById(h);
                    const divs = Array.from(cont.children);
                    let count = 0;

                    for (let j =0; j < divs.length; j++) {
                        const div = divs[j];
                        const ans = parseInt(div.getAttribute('ans'));
                        
                        // Check if the div is in the correct position
                        if (j+1 === ans) {
                        count++;
                        }
                        
                        switch(i) {
                            case 0:
                                red = count;
                                break;
                            case 1:
                                green = count;
                                break;
                            default:
                                blue = count;
                                break; 
                        }
                    }
                }

                document.getElementById("results").style.display="block"
                document.getElementById("resultsText").innerHTML = `Red Score : ${red} / 10<br>Green Score : ${green} / 10</br>Blue Score : ${blue} / 10`;
                document.getElementById("results_test_type").value = "farnsworth"
                let testResult = (red + green + blue) / 30
                document.getElementById("results_result").value = 
                    `${(10 - red) * 10}% deficiency in differentiating shades of red
                    ${(10 - green) * 10}% deficiency in differentiating shades of green
                    ${(10 - blue) * 10}% deficiency in differentiating shades of blue`
                document.getElementById("results_score").value = `${Math.floor((red + green + blue) * 10 / 30) + 1}`
            }


        </script>
    </x-main-card>
</x-app-layout>